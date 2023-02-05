<?php
    $page='unix.php';
	$path='./../';
	$title = "What is UNIX?";
	require ($path.'/assets/inc/header.php');
?>

<?php

		require $path.'../../repos/dbConnect.inc';           
		$sql = "SELECT content FROM foxfax_mod where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
?>

<?php
	$site = "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/unix/unix.php";
	require($path.'assets/inc/footer.php');
    mysqli_close($mysqli);

?>
