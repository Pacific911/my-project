<?php
    mysql_connect('localhost','root','');
    mysql_select_db('job_link');
    session_start();

if(isset($_SESSION['log'])){
switch ($_SESSION['type']) {

    case 'employee':
  header("location:job-search.php");
    break;

    case 'admin':
  header("location:job-category.php");
    break;
}
}
else{
if(isset($_POST['login'])){
$a=mysql_real_escape_string($_POST['email']);
$b=mysql_real_escape_string($_POST['password']);
$sql1="select * from applicants where email='$a' and password='$b' where category='employee' ";
$sql2="select * from admin where email='$a' and password='$b' where category='admin' ";
$result=mysql_query($sql1);
  if(mysql_num_rows($result)>0){
    $v=mysql_fetch_array($result);
    $id=$v['id'];
    $_SESSION['log']=$id;
    $_SESSION['type']="employee";
    header("location:job-search.php");
  }
  else{
    $result=mysql_query($sql2);
    if(mysql_num_rows($result)>0){
      $v=mysql_fetch_array($result);
    $id=$v['id'];
    $_SESSION['log']=$id;
    $_SESSION['type']="admin";
    header("location:job-category.php");
  }

  else{
  echo"<script type='TEXT/javascript'>alert('incorrect email or password or non confirmed account or blocked account');</script>";
  }
  }
}
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>job link</title>

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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
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
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.php">home</a></li>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="job-category.php">category</a></li>

                            <li><a href="contact-us.php">contact</a></li>

                            <li class="menu-btn">
                                <a href="login-page.php" class="login">log in</a>
                                <a href="registr-form.php" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                       <form action>
  <h2>LOGIN FORM</h2>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn" name="login">LOGIN</button>
   <p>Don't have an account? <a href="registr-form.php">Sign up now</a>.</p>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                            <span>
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
