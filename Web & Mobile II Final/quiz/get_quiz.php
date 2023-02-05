<?php
// Created to provide many exams
    $page='quiz';
    $title = "FoxFax Unix - Quiz";
    $path='./../';
    require($path.'assets/inc/header.php'); 
    session_name("ffq");
    session_start();
	$path = "./";
	$examID = $_GET['examID'];
    $calledURL = basename($_SERVER['REQUEST_URI']);
	require $path.'../../../repos/dbConnect.inc'; 
	
	$sql="SELECT * FROM quiz WHERE examID = '$examID';";


       if (isset($_POST["submitted"]))  {
         // Come back and want to grade quiz
         $grade = true;
         echo '<h4 style="color:green;background:#FFFFBF">' . 'Showing Answers'.'</h4>'; 
     }
     else {
        $grade = false;
     
     }//end of if
   
?>

     <!-- CSS Import -->
     <link rel="stylesheet" type="text/css" href='../assets/styles.css')>
</head> <!-- Close Head -->


<form action = "<?php echo $calledURL; ?>"   method = "POST">  

<?php
    
	$result = mysqli_query($mysqli, $sql);

	$quiz_id = 0;

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			$quizName = $row['heading'];           
            echo '<h2>'.$quizName.'</h2>';
            $_SESSION['quiz']= $quizName;
            //  echo '<h1>' . $_SESSION['quiz'] . '</h1>';
		} //end of while
        
        
        $sqlQ ="SELECT * FROM questions WHERE examID = '$examID';";

        $resultQ = mysqli_query($mysqli, $sqlQ);
        
        $count = 1;

        if (mysqli_num_rows($resultQ) > 0) {
            while($rowQ = mysqli_fetch_array($resultQ)) {
                $question = $rowQ['question'];
                $questionID = $rowQ['questionID'];
                
                echo $count. '. <p style="display: inline-block;">'.$question.'</p><br/>';
                
                
                $count++;
                
                $sqlOptions ="SELECT * FROM multipleChoiceOptions WHERE questionID = '$questionID';";

                $resultOptions = mysqli_query($mysqli, $sqlOptions);


                if (mysqli_num_rows($resultOptions) > 0) {
                    $optionCount = 1;
                    while($rowOptions = mysqli_fetch_array($resultOptions)) {
                        $option = $rowOptions['mcOption'];
                        $c  = $rowOptions['isCorrect'];

                        
                        echo '<input name="'.$questionID.'Option"id="'.$option.'Option"value="'.$c.'"type="radio" /><label for="'.$option.'Option"';

                        // if correct option is selected
                        if($grade && $c == 1){
                            if($_POST[$questionID.'Option'] == 1) {
                                echo 'style="font-weight:bold;color:green;background:#FFFFBF;"';
                            }
                            if($_POST[$questionID.'Option'] == 0) {
                                echo 'style="font-weight:bold;color:red;background:#FFFFBF;"';
                            }
                            
                        }


                        echo '>'.$optionCount.') '.$option.
                        '</label> <br/>';
                        $optionCount++;

                    } //end of while
                    
                } // end of getting options
                
            } //end of while
            
        }// end of getting question
		
	} // end of getting quiz
    
    ?>

    <div id="button">
        <button class="button-verify" onclick="return checkform()" type="button">Verify</button>
        <br>
        <button class="button-submit" style="vertical-align:middle;" id="subbutton" name="submitted" disabled><span>Submit</span></button>
        <br>
        <button class="button-reset" style="vertical-align:middle" type="submit"><span>Reset</span></button>
    </div>

</form>

<script>
    function checkform() {
        var form = document.forms[0];
        var elements = form.elements;
        var doc = document.getElementById("subbutton");
        var count = 0;
        for (var i = 0, l = elements.length; i < l; i++) {
            if (elements[i].type == 'radio') {
                if (elements[i].checked) {
                    count++;
                }
            }
        }
        if (count == 0) {
            alert('Please select an answer for each question.');
            return false;
        }
        // if disabled attribute is set, remove it
        if (doc.hasAttribute("disabled")) {
            doc.removeAttribute("disabled");
        }
        return true;
    }


</script>

<?php
    $site = "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/quiz/get_quiz.php";
    require($path.'../assets/inc/footer.php');
?>

