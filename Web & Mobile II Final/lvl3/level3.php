<?php
    $page = 'lvl3.php';
    $path = './../';
    $title = "Level 3";
    require($path . 'assets/inc/header.php');
    require($path . '../../repos/dbConnect.inc');

    $sql = "SELECT title,content FROM foxfax_mod where page='$page'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        //output the data for each row
        while ($row = $result->FETCH_ASSOC()) {
            echo '<h2 class="page-title">' . $row['title'] . '</h2>';
            echo $row['content'];
        }
    } else {
        echo "0 results, did something wrong!";
    }
    mysqli_close($mysqli);

?>


<?php
    $site = "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/level3.php";
    require($path . 'assets/inc/footer.php');
?>