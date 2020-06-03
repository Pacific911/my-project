<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('job_link');
if(!isset($_SESSION['log'])){
header("location:logout.php");
}
$gh=$_SESSION['log'];
$q=mysql_query("select * from applicants where id='$gh'");
$v=mysql_fetch_assoc($q);
$e=$v['id'];
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Job Search</title>

    <!-- Favicon -->
   <link rel="shortcut icon" href="assets/images/logo_home.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="index.php"><img src="assets/images/logo_home.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="custom-navbar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="main-menu main-menu-light">
                            <ul>
                                <li class="active"><a href="index.php">home</a></li>
                                <li><a href="about.php">about us</a></li>
                                <li><a href="job-category.php">category</a></li>
                                <li><a href="contact-us.php">contact</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-search.php">Job Search</a></li>


                                    </ul>
                                </li>
                                <li class="menu-btn">
                                    <a href="login-page.php" class="login">log in</a>
                                    <a href="registr-form.php" class="template-btn">sign up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header Area End -->



    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>Assistant Executive - Production/ Quality Control</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> MASAKA, KIGALI</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2020</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="assets/images/job1.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn1">full time</a>
                            <a href="applying-emp.php" class="third-btn">apply</a>
                        </div>
                    </div>
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>Asst. Manager, Production (Woven Dyeing)</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="assets/images/job2.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn2">full time</a>
                            <a href="applying-emp.php" class="third-btn">apply</a>
                        </div>
                    </div>
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>Deputy Manager/ Assistant Manager - Footwear</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="assets/images/job3.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn3">full time</a>
                            <a href="applying-emp.php" class="third-btn">apply</a>
                        </div>
                    </div>
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>R&D Manager (Technical Lab Department)</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="assets/images/job4.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn4">full time</a>
                            <a href="applying-emp.php" class="third-btn">apply</a>
                        </div>
                    </div>
                    <div class="single-job d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>Manager/ Asst. Manager (Quality Assurance)</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="assets/images/job5.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn2">full time</a>
                            <a href="applying-emp.php" class="third-btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                <a href="#" class="template-btn">more job post</a>
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->


    <!-- Footer Area Starts -->
 <footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">top products</h3>
                                <ul>

                                    <li class="mb-2"><a href="#">power tools</a></li>
                                    <li><a href="#">marketing service</a></li>
                                </ul>
                            </div>
                        </div>

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |is made by NDUWUMWE Pacific

</span>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
