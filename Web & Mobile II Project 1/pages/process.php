<?php
 $visitor  = $_POST['visitor'];
 $groupNum = $_POST['groupNum'];
 $date    = $_POST['date'];
 $fplace    = $_POST['fplace'];
 $fplace2   = $_POST['fplace2'];
 $fplace3   = $_POST['fplace3'];
 $fplace4   = $_POST['fplace4'];
 $fplace5   = $_POST['fplace5'];
 $rating   = $_POST['rating'];


 $destination_email = "RITISTProfessor@gmail.com,ggm7921@rit.edu";
$email_subject = "Old Ellicott City, MD  - Visitor $visitor";
$email_body = "Visitor name:  $visitor \n";
$email_body .= "Group Size: $groupNum \n";
$email_body .= "Date Visited: $date \n";
$email_body .= "Favorite Place: $fplace \n";
$email_body .= "Places You Also Went To: $fplace2 \n $fplace3 \n $fplace4 \n $fplace5 \n";
if (isset($_POST['SOMEPLACE'])) {
    $email_body .= $_POST['SOMEPLACE'] .  "\n";
}
$email_body .= "\nRating -> $rating\n";

$email_body .= "\n Updated October 2022 \n";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n";

?>

<!DOCTYPE html>
<html lang="en">
<!-- Garrett Maury, ISTE-240-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8" />
	<title>Feedback Form Completed! Old Ellicott City!</title>
    
	<!-- JS -->
	<script src="https://people.rit.edu/ggm7921/ISTE240/project1/slideshow.js"></script>
	<script src="mouseover.js"></script>
   <link rel="stylesheet" type="text/css" href="https://people.rit.edu/ggm7921/ISTE240/project1/assets/styles.css?v=1">
   <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

</head>

   <body>

	<!-- Content -->
    <div class="content">
			<!-- Header showing the icon to the left and having a menu in the center, button on the right -->
			<header>
				<a href = "https://people.rit.edu/ggm7921/ISTE240/project1/index.html"> 
					<img class="logo" src="https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/city_logo.png" width="350" height="125" alt="A logo from Old Ellicott City." /></a>

				<nav>
					<!-- Nav Bar -->
					<ul class="links" id="links">
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/index.html">Home</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/explore.html">Explore</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/history.html">History</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/flooding.html">Flooding</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/events.html">Events</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/food.html">Food</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/me.html">My Experience</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/feedback_form.html">Feedback</a></li>
						<li><a href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/sources.html">Sources</a></li>
					</ul>
					<!--Toggle Bar for Mobile Menu-->
					<a href="#" class="toggle" onclick="showMenu()">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</a>
				</nav>
					<!-- Special Button For the Rubric Page -->
					<a class="button" id="button" href="https://people.rit.edu/ggm7921/ISTE240/project1/pages/rubric.html">Rubric</a>
			</header>

			<div class="main-content">
				<h1>Click below!</h1>
				<a href="https://people.rit.edu/ggm7921/ISTE240/project1/">
				<img class="header" src="https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/home_blue.png" width="400" height="175" id="home" alt="Home" title="Home"
					onmouseover="change('home', 'https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/home_red.png')"
					onmouseout="change('home', 'https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/home_blue.png')" />
				</a>

				<!-- Footer for Validators -->
				<footer>
					
					<h3>
						<b>-- Individual Midterm Project 1 --</b>
					</h3>
					<h3>
						<b>Course: ISTE240.03 - Web and Mobile II</b>
					</h3>
					<h3>
						<b>Created by Garrett Maury © 2022</b>
					</h3>

					<!--Validators-->
					<br >
					<a href="http://validator.w3.org/check?uri=https://people.rit.edu/ggm7921/ISTE240/project1/">
					<img src="https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/html_5_logo_transparent.png" width="45" height="59" alt="HTML5" title="HTML5"></a>&nbsp; &nbsp;

					<a href="http://validator.w3.org/check?uri=https://people.rit.edu/ggm7921/ISTE240/project1/assets/styles.css">
					<img src="https://people.rit.edu/ggm7921/ISTE240/project1/assets/imgs/css3logo.png" width="45" height="59" alt="CSS3" title="CSS3"></a>&nbsp; &nbsp;

				</footer> <!-- end of footer  -->
			</div>
		</div> <!-- Content div -->

   </body>
</html>