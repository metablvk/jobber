<?php
define('MAIN_CSS', 'assets/css/main.css');
define('MAIN_JS', 'assets/js/main.js');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobber | Home</title>
    <link rel="stylesheet" href="<?php echo MAIN_CSS ?>">
</head>

<body>
    <div class="content">
        <header class="header_nav">
            <nav class="navbar">
                <div class="hamburger"></div>
                <div class="navbar_brand">
                    <a href="index.php"><span>Job</span>ber</a>
                </div>
                <ul class="sidenav">
                    <li><a href="index.php">home</a></li>
                    <li class="dropdown">
                        <div class="dropdown_btn">
                            <span>find talent</span> <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <ul class="dropdown_menu">
                            <li><a href="/post-job.php">post job</a></li>
                            <li><a href="/view-talent.php">view talent</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="dropdown_btn">
                            <span>find work</span> <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <ul class="dropdown_menu">
                            <li><a href="/find-job.php">find job</a></li>
                            <li><a href="/advertise-skills">advertise skills</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="register.php">register</a>
                    </li>
                    <li>
                        <a href="login.php">login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="container">