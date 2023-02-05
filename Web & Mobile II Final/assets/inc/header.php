<!-- HEADER.PHP -->
<!-- FoxFax Group 4 - Team Project 2 -->
<!-- Jim Habermas - Web & Mobile 2 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/styles.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="<?php echo $path; ?>assets/images/favicon.ico">

    <script src="<?php echo $path; ?>assets/js/script.js"></script>

    <!-- PHP injection for the title -->
    <title><?php echo $title; ?></title>
</head>

<!-- Body -->
<body>
    <header>
        <div class="row-center">
            <div id="header-animation">
                <a href="<?php echo $path; ?>index.php" style="text-decoration: none;">
                    <img src="<?php echo $path; ?>assets/images/foxfax.png" class="logo" alt="Logo" />
                    <h1 class="site-title">Fox Fax </h1>
                </a>
            </div> 
        </div>
        <nav>
            <div id="nav-options">
                <a href="<?php echo $path; ?>unix/unix.php">What is Unix?</a>

                <!-- Various dropdowns for the website for each page -->
                <div class="dropdown">
                    <a href="<?php echo $path; ?>lvl1/level1.php"> Level 1 </a>
                    <div class="dropdown-content">
                        <a href="level1.php#unix-overview"> Unix Overview </a>
                        <a href="level1.php#file-system"> File System </a>
                        <a href="level1.php#navigation"> Navigation </a>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="<?php echo $path; ?>lvl2/level2.php"> Level 2 </a>
                    <div class="dropdown-content">
                        <a href="level2.php#secure-shell"> Secure Shell </a>
                        <a href="level2.php#root-users"> Root Users </a>
                        <a href="level2.php#text-editors"> Text Editors </a>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="<?php echo $path; ?>lvl3/level3.php"> Level 3 </a>
                    <div class="dropdown-content">
                        <a href="level3.php#security"> Security </a>
                        <a href="level3.php#distribution"> Distribution </a>
                        <a href="level3.php#file-system-security"> File System Security </a>
                    </div>
                </div>


                <!-- Extra Buttons in nav for other pages -->

                <a href="<?php echo $path; ?>quiz/get_quiz.php?examID=1">Quiz</a>

                <a href="http://solace.ist.rit.edu/~iste240t39/foxfax_mod/resources/resources.php">Resources</a>

                <a href="comments">Comment</a>

            </div> <!-- end of nav-options -->

            <a href="javascript:void(0);" class="icon" id="nav-toggle" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav> <!-- end of nav -->

    </header> <!-- end of header -->

    <!-- Nav script -->
    <script>
        let navOpen = true;

        window.addEventListener('load', function(event) {
            if (this.window.innerWidth < 600) {
                hideNav();
            }
        }, true);

        window.addEventListener('resize', function(event) {
            if (this.window.innerWidth < 600) {
                hideNav();
            } else {
                showNav();
            }
        }, true);


        function hideNav() {
            let nav = document.getElementById("nav-options");
            nav.style.display = "none";
            navOpen = false;
        }

        function showNav() {
            let nav = document.getElementById("nav-options");
            nav.style.display = "flex";
            navOpen = true;
        }

        function toggleNav() {
            if (navOpen) {
                hideNav();
            } else {
                showNav();
            }
        }
    </script> <!-- end of nav script -->

    <!-- Start DIV page-content -->
    <div class="page-content">