
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>YegoLink</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="css/dark-mode.css">
<script src="js/dark-mode.js"></script>

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png"/>
<link rel="stylesheet" type="text/css" href="rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/> 
<link rel="stylesheet" type="text/css" href="css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
<link rel="stylesheet" type="text/css" href="css/A.carousel.css%2bbxslider.css%2cMcc.jgeTii-u52.css.pagespeed.cf.STKSIMl7GF.css"/>
<link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>


</head>
<?php
// Show any messages from session
if (isset($_SESSION['message'])) {
    echo '<div style="background-color:#e0f7fa;color:#006064;padding:10px;text-align:center;font-weight:bold;">' . htmlspecialchars($_SESSION['message']) . '</div>';
    unset($_SESSION['message']);
}
if (isset($_SESSION['error'])) {
    echo '<div style="background-color:#ffebee;color:#c62828;padding:10px;text-align:center;font-weight:bold;">' . htmlspecialchars($_SESSION['error']) . '</div>';
    unset($_SESSION['error']);
}
?>

<div id="loader">
<div class="loader-container">
<img src="images/site.gif" alt="" class="loader-site">
</div>
</div>
<div id="wrapper">
<div class="topbar">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p><i class="fa fa-graduation-cap"></i> YegoLink</p>
</div>
<div class="col-md-6 text-right">
  <ul class="list-inline">
    
      <li><a class="social" href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a class="social" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
  <li><a class="social" href="mailto:yegolinkltd@gmail.com" target="__blank"><i class="fa fa-envelope"></i></a></li>
  <li><a class="social" href="https://instagram.com/yegolink/" target="_blank"><i class="fa fa-instagram"></i></a>
<li>
  <a href="donate.php" class="btn btn-primary" style="padding: 6px 15px; font-weight: bold;">
    <i class="fa fa-heart"></i> Donate
  </a>
</li>
<li>
    <a href="#" id="modeToggleBtn" title="Toggle Dark Mode" style="padding: 10px; font-size: 18px;">
      <i class="fa fa-adjust"></i>
    </a>
  </li>
<?php if (isset($_SESSION['user'])): ?>
  <li class="dropdown" style="position: relative;">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color: #ffffff; font-weight: 600; display: inline-block; padding: 10px 15px;">
      <i class="fa fa-user"></i> <?php echo htmlspecialchars($_SESSION['user']); ?>
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu" style="
      background-color: #2c3e50;
      border: none;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      padding: 0;
      min-width: 200px;
      border-radius: 6px;
      overflow: hidden;
    ">
      <li style="transition: background-color 0.3s;">
        <a href="course-account.html" style="
          color: #ecf0f1;
          font-weight: 600;
          font-size: 15px;
          padding: 12px 20px;
          display: block;
          text-decoration: none;
          transition: background-color 0.3s, padding-left 0.3s;
        "
        onmouseover="this.style.backgroundColor='#34495e'; this.style.paddingLeft='25px';"
        onmouseout="this.style.backgroundColor='transparent'; this.style.paddingLeft='20px';"
        >
          <i class="fa fa-user" style="color: #3498db; margin-right: 8px;"></i> View My Profile
        </a>
      </li>
      <li style="transition: background-color 0.3s;">
        <a href="logout.php" style="
          color: #ecf0f1;
          font-weight: 600;
          font-size: 15px;
          padding: 12px 20px;
          display: block;
          text-decoration: none;
          transition: background-color 0.3s, padding-left 0.3s;
        "
        onmouseover="this.style.backgroundColor='#34495e'; this.style.paddingLeft='25px';"
        onmouseout="this.style.backgroundColor='transparent'; this.style.paddingLeft='20px';"
        >
          <i class="fa fa-sign-out" style="color: #e74c3c; margin-right: 8px;"></i> Log Out
        </a>
      </li>
    </ul>
  </li>
<?php endif; ?>


      <li class="dropdown">
        <a class="dropdown-toggle" href="login.php" data-toggle="dropdown"><i class="fa fa-lock"></i> Login & Register</a>
        <div class="dropdown-menu">
          <form action="login.php" method="post">
            <div class="form-title">
              <h4>Login Area</h4>
              <hr>
            </div>
            <input class="form-control" type="text" name="username" placeholder="User Name" required>
            <div class="formpassword">
              <input class="form-control" type="password" name="password" placeholder="******" required>
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-block btn-primary">Login</button>
            <hr>
            <h4><a href="login.php">Create an Account</a></h4>
          </form>
        </div>
      </li>
  
  </ul>
</div>
</div>
</div>
</div>
<header class="header">
<div class="container">
<div class="hovermenu ttmenu">
<div class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="logo">
<a class="navbar-brand" href="index.php">
      <img src="images/xlogo.png.pagespeed.ic.vap6Ukaf0.png" alt=""></a>
</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home
<b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu menu-bg wbg">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="#">Vision & Mission</a></li>
<li><a href="#">Business Tech </a></li>

</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">

</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<li><a href="page-about.html">About</a></li>
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="course-list.html">Courses List</a></li>
<li><a href="course-grid.html">Courses Grid</a></li>
<li><a href="course-filterable.html">Courses Filterable</a></li>


</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="course-instructors.html">Course Instructors</a></li>

<li><a href="login.php ">Login & Register</a></li>
<li><a href="course-account.html">Edit Your Account
</a></li>
</ul>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt="">
</div>
<div class="col-md-3 col-sm-6 nopadding">
<img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt="">
</div>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown ttmenu-half">
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="fa fa-angle-down">
</b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-services.html">Our Services</a></li>
<li><a href="page-contact.php">Contact Us</a></li>
<li><a href="page-pricing.html">Pricing Tables</a></li>
<li><a href="page-shortcodes.html">Shortcodes</a></li>
<li><a href="page-typography.html">Typography</a></li>

</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-shop.html">Shop Layout</a></li>
<li><a href="page-shop-single.html">Shop Single</a></li>
<li><a href="page-shop-single-alt.html">Shop Single Alt</a></li>
<li><a href="page-shop-cart.html">Shopping Cart</a></li>
<li><a href="blog.php ">Blog & News</a></li>

</ul>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>

<li><a href="blog.php">Blog</a></li>
<li><a href="page-contact.php">Contact</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">


<li><a class="btn btn-primary" href="login.php">
  <i class="fa fa-sign-in"></i> Register Now</a></li>


</ul>

</div>
</div>
</div>
</div>
</header>
<section class="slider-section">
<div class="tp-banner-container">
<div class="tp-banner">
<ul>

<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_new_01.jpg" data-saveperformance="off" data-title="Learning Slide">
  <img src="upload/xslider_new_01.jpg.pagespeed.ic.RgCY2ieSzC.jpeg" alt="Education Background" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
  <div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color: gray;">
    <i class="fa fa-graduation-cap"></i> Unlock Your Potential <strong>Through</strong> Quality Education
  </div>
  <div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="320" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color: #ffffff;">
    Master new skills with our comprehensive learning platform<br> Featuring interactive courses and expert-led instruction!
  </div>
  <div class="tp-caption text-center lft tp-resizeme" data-x="center" data-y="390" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <a href="#courses" class="btn btn-primary">Start Learning</a> <a href="#about" class="btn btn-default">Discover More</a>
  </div>
</li>

<!-- Slide 2: Brand Focus -->
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_new_03.jpg" data-saveperformance="off" data-title="Brand Slide">
  <img src="upload/xslider_new_03.jpg.pagespeed.ic.0dDeZb1yS7.jpg" alt="Brand Background" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
  <div class="tp-caption slider_layer_05 text-center lft tp-resizeme" data-x="center" data-y="140" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-graduation-cap"></i>
  </div>
  <div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="250" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color: gray;">
    EduConnect - Excellence in Learning!
  </div>
  <div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="360" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color: white;">
    Premium educational platform designed for students and professionals<br> Transform your career with cutting-edge learning resources!
  </div>
  <div class="tp-caption text-center lft tp-resizeme" data-x="center" data-y="440" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <a target="_blank" href="#pricing" class="btn btn-primary">Get Started Today</a> <a target="_blank" href="#features" class="btn btn-default">Explore Features</a>
  </div>
</li>

<!-- Slide 3: Technology Focus -->
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_new_02.jpg" data-saveperformance="off" data-title="Technology Slide">
  <img src="upload/xslider_new_02.jpg.pagespeed.ic.QHr4wT-HDB.jpg" alt="Technology Background" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
  <div class="tp-caption slider_layer_04 text-center lft tp-resizeme" data-x="center" data-y="200" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 20; max-width: auto; max-height: auto; white-space: nowrap; color: #fff;">
    <strong>Learn Anywhere, On Any Device</strong>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="300" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-html5"></i>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="400" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-tablet"></i>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="500" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-laptop"></i>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="620" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-mobile"></i>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="800" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-css3"></i>
  </div>
  <div class="tp-caption slider_layer_03 text-center lft tp-resizeme" data-x="700" data-y="240" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <i class="fa fa-pencil"></i>
  </div>
  <div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="340" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color: black;">
    Responsive design that adapts to your learning style<br> Access premium content across all platforms seamlessly
  </div>
  <div class="tp-caption text-center lft tp-resizeme" data-x="center" data-y="410" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
    <a target="_blank" href="#demo" class="btn btn-primary">Try Demo</a>
     <a target="_blank" href="#mobile" class="btn btn-default">Mobile App</a>
  </div>
</li>
</li>
</ul>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Our Premium Features</h4>
<p>Experience the Most Advanced HTML5 Learning Management System Available</p>
</div>
</div>
</div>
</div>
<div class="row service-center">
<div class="col-md-4 col-sm-6">
<div class="feature-list border-radius">
<i class="fa fa-graduation-cap"></i>
<p><strong>Comprehensive Course Structure</strong></p>
<p>Build multi-level learning paths with progressive difficulty. Create engaging content with video lectures, interactive assignments, and hands-on projects that adapt to each student's pace.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list border-radius">
<i class="fa fa-shopping-cart"></i>
<p><strong>Sell Online Courses</strong></p>
<p><strong>Integrated E-Commerce</strong></p>
<p>Monetize your expertise with built-in payment processing, subscription management, and automated course delivery. Support multiple currencies and payment methods worldwide.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list border-radius">
<i class="fa fa-question"></i>
<p><strong>Smart Assessment Tools</strong></p>
<p>Create dynamic quizzes with instant feedback, randomized questions, and detailed analytics. Track student progress with comprehensive reporting and performance insights.</p>
</div>
</div>
</div>
<hr class="invis">
<div class="callout row">
<div class="col-md-9">
<h4><i class="fa fa-graduation-cap fa-3x alignleft"></i>Interactive Community <a href="#">Visit Us</a><br> Foster collaboration through discussion forums, peer-to-peer learning, and group projects. Build a thriving educational community around your content
.</h4>
</div>
<div class="col-md-3">
<a href="#" class="btn btn-primary btn-block">Get In Touch</a>
</div>
</div>
</div>

</section>
<section class="grey section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Popular Courses</h4>
<p>Listed Below Our Most Popular Courses</p>
</div>
</div>
</div>
<div id="owl-featured" class="owl-custom">
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Learn Web Design & Development</a></h4>
<div class="shopmeta">
<span class="pull-left">12 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_02.png.pagespeed.ic.PL7Wu2UcSB.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Graphic Design & Logo Mockups Course</a></h4>
<div class="shopmeta">
<span class="pull-left">21 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_03.png.pagespeed.ic.8e1MyY5M7i.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
<div class="shopmeta">
<span class="pull-left">98 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
<div class="owl-featured">
<div class="shop-item-list entry">
<div class="">
<img src="upload/xcourse_04.png.pagespeed.ic.2rIKmUwjA7.png" alt="">
<div class="magnifier">
</div>
</div>
<div class="shop-item-title clearfix">
<h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
<div class="shopmeta">
<span class="pull-left">98 Student</span>
<div class="rating pull-right">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
<div class="visible-buttons">
<a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
<a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
</div>
</div>
</div>
</div>
</div>
</section> 
<section class="section darkskin fullscreen paralbackground parallax" style="background-image:url(upload/xparallax_01.jpg.pagespeed.ic.JPVsQrTu6o.jpg)" data-img-width="1627" data-img-height="868" data-diff="100">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>The Working Process</h4>
<p>We Shared Awesome Articles for Your Next Sites</p>
</div>
</div>
</div>
<div class="row service-center">
<div class="col-md-4 col-sm-6">
<div class="feature-list">
<i class="fa fa-graduation-cap"></i>
<p><strong>Multi-Tier Courses</strong></p>
<p>Organize your curriculum into structured levels or modules, allowing learners to progress step by step from beginner to advanced content.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list">
<i class="fa fa-shopping-cart"></i>
<p><strong>Sell Online Courses</strong></p>
<p>Easily monetize your content with integrated e-commerce features, secure payments, and promotional tools to grow your audience.</p>
</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="feature-list">
<i class="fa fa-question"></i>
<p><strong>Advanced Quizzing</strong></p>
<p>Engage learners and assess understanding with customizable quizzes, timed tests, automatic grading, and detailed feedback reports.</p>
</div>
</div>
</div>
<div class="row button-wrapper">
<div class="col-md-12">
<div class="text-center">
<a href="#" class="btn btn-default">Start New Project</a>
</div>
</div>
</div>
</div>

</section>
<section class="section fullscreen paralbackground parallax" style="background-image:url(upload/xparallax_02.jpg.pagespeed.ic.Sx1_qXOliB.jpg)" data-img-width="1627" data-img-height="868" data-diff="100">
  <div class="overlay green-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title text-center">
          <h4>Proven Success</h4>
          <p>Join Thousands Who've Transformed Their Skills</p>
        </div>
      </div>
    </div>
    <div class="row service-center funfactors">
      <div class="col-md-4 col-sm-6">
        <div class="feature-list">
          <i class="stat-count">3312</i>
          <p><strong>Empowered Learners</strong></p>
          <p>Students who've launched new careers and upskilled through our interactive programs</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="feature-list">
          <i class="stat-count">450</i>
          <p><strong>Industry-Ready Courses</strong></p>
          <p>Cutting-edge curriculum developed with top employers to teach in-demand skills</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="feature-list">
          <i class="stat-count">8443</i>
          <p><strong>Skills Validated</strong></p>
          <p>Certifications earned through our rigorous assessments and practical projects</p>
        </div>
      </div>
    </div>
  </div>
</section> <!--
<section class="grey section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>From The Blog</h4>
<p>We Shared Awesome Articles for Your Next Sites</p>
</div>
</div>
</div>
<div class="row blog-widget">
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<a class="category_title" href="#" title="">Digital Marketing</a>
<h2><a href="single.html" title="">Best Learning Management System for Ever</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">John</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Marketing</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">19 Comments</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_01.jpg.pagespeed.ic.2jVY1j1OMe.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<a class="category_title" href="#" title="">SEO Marketing</a>
<h2><a href="single.html" title="">Best SEO Google System and Algoritmas</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Jenny</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">SEO</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">44 Comments</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_02.jpg.pagespeed.ic.VhhhBexs2E.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-title">
<a class="category_title" href="#" title="">Commerce Marketing</a>
<h2><a href="single.html" title="">Never Forget! WooCommerce is an Amazing Plugin</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Bob Doe</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Commerce</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">0 Comment</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_03.jpg.pagespeed.ic.ZGQLz9XvWC.jpg" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="single.html" class="btn btn-default btn-block">Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Happy Students</h4>
<p>What Our Students Say About LearnPLUS</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" alt="">
<p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
<div class="testimonial-meta">
<h4>John DOE <small><a href="#">.com</a></small></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png" alt="">
<p>Lorem Ipsum is simply dummy text of the most popular items.</p>
<div class="testimonial-meta">
<h4>Jenny Anderson <small><a href="#">photodune.com</a></small></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="testimonial">
<img class="alignleft img-circle" src="upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.png" alt="">
<p>Lorem Ipsum is simply dummy text of the printing.</p>
<div class="testimonial-meta">
<h4>Mark BOBS <small><a href="#">tutsplus.com</a></small></h4>
</div>
</div>
</div>
</div>
<div class="button-wrapper text-center">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<a href="#" class="btn btn-default border-radius"><i class="fa fa-sign-in"></i> Join Us Today</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a>
</div>
</div>
</section> -->
<!--
<section class="grey section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h4>Our Clients</h4>
<p>What University's Love Work With Us and With Our Teachers</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2">
<img src="upload/xclient_01.png.pagespeed.ic.m5NnlxSzhM.png" alt="" class="img-responsive img-thumbnail">
</div>
<div class="col-md-2">
<img src="upload/xclient_02.png.pagespeed.ic.BsH9V4BqCi.png" alt="" class="img-responsive img-thumbnail">
</div>
<div class="col-md-2">
<img src="upload/xclient_03.png.pagespeed.ic.mxzQrepbL_.png" alt="" class="img-responsive img-thumbnail">
</div>
<div class="col-md-2">
<img src="upload/xclient_04.png.pagespeed.ic.Fx2ObIy0Eb.png" alt="" class="img-responsive img-thumbnail">
</div>
<div class="col-md-2">
<img src="upload/xclient_05.png.pagespeed.ic.GBNy2ra72B.png" alt="" class="img-responsive img-thumbnail">
</div>
<div class="col-md-2">
<img src="upload/xclient_06.png.pagespeed.ic.a_uqmnbFy0.png" alt="" class="img-responsive img-thumbnail">
</div>
</div>
</div>
</section> -->

<footer class="footer text-white pt-5 pb-4" style="background-color: #1e1e2f;">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">YegoLink</h5>
        <p>Empowering learners with access to quality digital education and skills development.</p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
        <p><a href="index.php" class="text-white text-decoration-none">Home</a></p>
        <p><a href="page-about.html" class="text-white text-decoration-none">About</a></p>
        <p><a href="course-list.html" class="text-white text-decoration-none">Courses</a></p>
        <p><a href="page-contact.php" class="text-white text-decoration-none">Contact</a></p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
      
        <p><a href="#" class="text-white text-decoration-none">Help Center</a></p>
        <p><a href="#" class="text-white text-decoration-none">Privacy Policy</a></p>
        <p><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
       <p><i class="fa fa-map-marker" style="margin-right: 10px;"></i><span> St kigali||Rwanda</span></p>
<p><i class="fa fa-envelope" style="margin-right: 10px;"></i><span>info@yegolink.com</span></p>
<p><i class="fa fa-phone" style="margin-right: 10px;"></i><span>+250 123 456 789</span></p>
<p><i class="fa fa-print" style="margin-right: 10px;"></i><span>+250 987 654 321</span></p>


      </div>
    </div>

    <hr class="mb-4" style="border-color: rgba(255,255,255,0.2);">

    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-2">
        <p>© 2025 YegoLink. All Rights Reserved.</p>
      </div>
      <div class="col-md-12 text-center">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="#" class="text-white" style="font-size:20px;"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="text-white" style="font-size:20px;"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="text-white" style="font-size:20px;"><i class="fa fa-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="text-white" style="font-size:20px;"><i class="fa fa-youtube"></i></a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</footer>


<script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
<script src="rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script>jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview3",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});</script>
<script src="js/bxslider.js.pagespeed.jm.X-sF7YFq4Y.js">
  
</script>
<script type="text/javascript">(function($){"use strict";$('.bxslider').bxSlider({mode:'vertical',minSlides:1,maxSlides:1,slideMargin:0,pager:false,nextText:'<i class="fa fa-arrow-down"></i>',prevText:'<i class="fa fa-arrow-up"></i>',speed:1000,auto:true});})(jQuery);
</script>




<!-- Chatbox container -->
<div id="chatbox-container" style="
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 350px;
  max-height: 450px;
  background: white;
  border: 1px solid #ccc;
  border-radius: 10px 10px 0 0;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  display: flex;
  flex-direction: column;
  font-family: Arial, sans-serif;
  z-index: 10000;
  transition: transform 0.3s ease;
  transform: translateY(0);
">
  <!-- Chat header -->
  <div id="chat-header" style="
    background-color: #4D9AA0;
    color: white;
    padding: 12px 15px;
    font-weight: bold;
    border-radius: 10px 10px 0 0;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  ">
    Chat with YegoLink AI
    <span id="chat-close" style="cursor: pointer; font-size: 20px; user-select: none;">&#x2715;</span>
  </div>

  <!-- Chat messages -->
  <div id="chat-messages" style="
    flex-grow: 1;
    padding: 10px;
    overflow-y: auto;
    border-bottom: 1px solid #ccc;
    max-height: 320px;
  ">
    <!-- Messages will appear here -->
  </div>

  <!-- Input field -->
  <form id="chat-form" style="display: flex; border-top: 1px solid #ccc;">
    <input type="text" id="chat-input" placeholder="Type your message..." autocomplete="off" required style="
      flex-grow: 1;
      padding: 10px;
      border: none;
      border-bottom-left-radius: 10px;
      outline: none;
      font-size: 14px;
    ">
    <button type="submit" style="
      background-color: #4D9AA0;
      border: none;
      color: white;
      padding: 0 15px;
      cursor: pointer;
      border-bottom-right-radius: 10px;
      font-weight: bold;
      font-size: 14px;
    ">Send</button>
  </form>
</div>

<!-- Minimized icon -->
<div id="chat-minimized" style="
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  background-color: #4D9AA0;
  border-radius: 50%;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  display: none;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  z-index: 10000;
">
  <svg style="fill:white" xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 24 24" width="28">
    <path d="M20 2H4c-1.1 0-2 .9-2 2v16l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
  </svg>
</div>

<!-- Chat script -->
<script>
  const chatContainer = document.getElementById('chatbox-container');
  const chatMinimized = document.getElementById('chat-minimized');
  const chatHeader = document.getElementById('chat-header');
  const chatClose = document.getElementById('chat-close');
  const chatForm = document.getElementById('chat-form');
  const chatInput = document.getElementById('chat-input');
  const chatMessages = document.getElementById('chat-messages');

  // Minimize chat function
  function minimizeChat() {
    chatContainer.style.display = 'none';
    chatMinimized.style.display = 'flex';
  }

  // Open chat function
  function openChat() {
    chatContainer.style.display = 'flex';
    chatMinimized.style.display = 'none';
    chatInput.focus();
  }

  // Start minimized
  minimizeChat();

  // Toggle chat
  chatMinimized.addEventListener('click', openChat);
  chatClose.addEventListener('click', (e) => {
    e.stopPropagation();
    minimizeChat();
  });
  chatHeader.addEventListener('click', () => {
    if (chatContainer.style.display === 'none') openChat();
  });

  // Add message to chat window
  function addMessage(text, sender = 'user') {
    const msgDiv = document.createElement('div');
    msgDiv.style.marginBottom = '10px';
    msgDiv.style.padding = '8px 12px';
    msgDiv.style.borderRadius = '12px';
    msgDiv.style.maxWidth = '80%';
    msgDiv.style.clear = 'both';
    msgDiv.style.fontSize = '14px';
    msgDiv.style.float = sender === 'user' ? 'right' : 'left';
    msgDiv.style.backgroundColor = sender === 'user' ? '#4D9AA0' : '#eee';
    msgDiv.style.color = sender === 'user' ? 'white' : '#333';
    msgDiv.textContent = text;
    chatMessages.appendChild(msgDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }// Handle message send with real backend call
chatForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const userMsg = chatInput.value.trim();
  if (!userMsg) return;

  addMessage(userMsg, 'user');
  chatInput.value = '';
  chatInput.disabled = true;

  try {
    const res = await fetch('chatbot.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ message: userMsg }),
    });
    const data = await res.json();
    addMessage(data.reply, 'bot');
  } catch (error) {
    addMessage("Oops! Something went wrong.", 'bot');
  } finally {
    chatInput.disabled = false;
    chatInput.focus();
  }
});
</script>



</body>


</html>