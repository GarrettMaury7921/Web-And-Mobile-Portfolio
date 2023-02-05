<?php
	$page = 'index.php';
	$path = './';
	$title = "Home";
	require($path . 'assets/inc/header.php');
	require($path . '../../repos/dbConnect.inc');

	$sql = "SELECT title,content FROM foxfax_mod where page='$page'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		//output the data for each row
		while ($row = $result->FETCH_ASSOC()) {
			echo '<h2 class="page-title">' . $row['title'] . '</h2>';
			echo '<div style="color:white">' . $row['content'] . '</div>';
		}
	} else {
		echo "0 results, did something wrong!";
	}
?>

<?php
	mysqli_close($mysqli);
?>

<?php
	$site = "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/index.php";
	require($path . 'assets/inc/footer.php');
?>