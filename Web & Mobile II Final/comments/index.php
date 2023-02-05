<?php
    $page='comments';
    $path='./../';
    $title = "Comments";
    require($path.'assets/inc/header.php'); 
?>

    <!-- CSS Import -->
    <link rel="stylesheet" type="text/css" href='../assets/styles.css')>
</head> <!-- Close Head -->

<?php
    require $path.'../../repos/dbConnect.inc'; 

    if($mysqli) {
        if (!empty($_POST['name']) && !empty($_POST['comment'])) {
            $stmt = $mysqli->prepare("INSERT INTO commentsDB (name, comment) VALUES (?, ?)");
            $stmt->bind_param("ss", $_POST['name'], $_POST['comment']);
            $stmt->execute();
            $stmt->close();
        }

        $sql = 'SELECT name, comment FROM commentsDB';
        $res = $mysqli->query($sql);
        if($res) {
            while($rowholder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $records[] = $rowholder;
            }
        }
    }

?>
    <div style="color: white;">
        <h3>Comments</h3>
        <div id="list">
            <ul>
                <?php 
                    foreach($records as $this_row){echo '<li>'.$this_row['name'] . " : " . $this_row['comment'].'</li>';}
                ?>
            </ul>
        </div>
    </div>
    
    <form style="color: white;" action="index.php" method="POST" onsubmit="return validateForm();" >
    Name: <br> 
    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <p>&nbsp;</p>
    Comment: <br> <textarea id="comment" name="comment" cols="90" rows="15" placeholder="Enter your comment..."></textarea>
    <p>&nbsp;</p>
            <div>
                <button class="button-submit" type= "submit">Submit</button>
            </div>
    </form>
</div>



<?php
    $site = "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/comments/comments.php";
    require($path.'assets/inc/footer.php');
?>
