<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- blog00  -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>YegoLink</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>

<link rel="stylesheet" href="css/dark-mode.css">
<script src="js/dark-mode.js"></script>
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
<link rel="stylesheet" type="text/css" href="css/A.carousel.css.pagespeed.cf.VktteGiLwl.css">
<link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

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
  <li><a class="social" href="mailto:yegolinkltd@gmail.com" target="_bk"><i class="fa fa-envelope"></i></a></li>
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
<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login & Register</a>
<div class="dropdown-menu">
<form method="post">
<div class="form-title">
<h4>Login Area</h4>
<hr>
</div>
<input class="form-control" type="text" name="username" placeholder="User Name">
<div class="formpassword">
<input class="form-control" type="password" name="password" placeholder="******">
</div>
<div class="clearfix"></div>
<button type="submit" class="btn btn-block btn-primary">Login</button>
<hr>
<h4><a href="#">Create an Account</a></h4>
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
<a class="navbar-brand" href="index.php"><img src="images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu menu-bg wbg">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="index.php">Home</a></li>

</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="#">Business Tech</a></li>

</ul>
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

<li><a href="course-single.html">Single Course</a></li>
<li><a href="course-quiz.html">Take a Quiz</a></li>

</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="course-instructors.html">Course Instructors</a></li>

<li><a href="course-login.php">Login & Register</a></li>
<li><a href="course-account.html">Edit Your Account</a></li>

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
<li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="fa fa-angle-down"></b></a>
<ul class="dropdown-menu">
<li>
<div class="ttmenu-content">
<div class="row">
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-services.html">Our Services</a></li>
<li><a href="page-contact.html">Contact Us</a></li>




</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
<ul>
<li><a href="page-shop.html">Shop Layout</a></li>
<li><a href="page-shop-single.html">Shop Single</a></li>

<li><a href="page-shop-cart.html">Shopping Cart</a></li>

</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<!--<li><a href="forums.html">Community</a></li>-->
<li><a class="active" href="blog.html">Blog</a></li>
<li><a href="page-contact.html">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a class="btn btn-primary" href="course-login.php"><i class="fa fa-sign-in"></i> Register Now</a></li>
</ul>
</div>
</div>
</div>
</div>
</header>
<section class="grey section">
<div class="container">
<div class="row">
<div id="content" class="col-md-8 col-sm-8 col-xs-12">
<div class="blog-wrapper">
<div class="row second-bread">
<div class="col-md-6 text-left">
<h1>Blog & News</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li class="active">Blog</li>
</ol>
</div>
</div>
</div>
</div>
<div class="blog-wrapper">
<div class="blog-title">
<a class="category_title" href="#" title="">Digital Marketing</a>
<h2><a href="single.html" title="">Top Strategies for Successful Digital Marketing</a></h2>

<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Fiston Sindambiwe</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Galleries</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">45 Comments</a>
</span>
<span>
<i class="fa fa-eye"></i>
<a href="#">30000 Views</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_01.jpg.pagespeed.ic.2jVY1j1OMe1.png" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<div class="post-date">
<span class="day">30</span>
<span class="month">May</span>
</div>
<p>Discover the latest trends and best practices in digital marketing that help businesses grow online. From SEO to social media campaigns, learn how to attract, engage, and convert your audience effectively.</p>
<a href="#" class="readmore">Read More</a>
</div>
</div>
<div class="blog-wrapper">
<div class="blog-title">
  <a class="category_title" href="#" title="">Graphic Design</a>
  <h2><a href="single.html" title="">Creative Design Trends That Inspire Modern Brands</a></h2>
  
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Eric Nduwayezu</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Galleries</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">21 Comments</a>
</span>
<span>
<i class="fa fa-eye"></i>
<a href="#">123 Views</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_02.jpg.pagespeed.ic.VhhhBexs2E1.png" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<div class="post-date">
<span class="day">15</span>
<span class="month">June</span>
</div>
<p>Graphic design goes beyond aesthetics—it communicates ideas visually. Learn how color theory, typography, and visual hierarchy can help you create stunning content that connects with your audience and enhances brand identity.</p>
<a href="#" class="readmore">Read More</a>
</div>
</div>
<div class="blog-wrapper">
<div class="blog-title">
<a class="category_title" href="#" title="">Web Development</a>
<h2><a href="single.html" title="">How to Build Fast and Responsive Websites in 2025</a></h2>

<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Hirwa Julius </a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Galleries</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">21 Comments</a>
</span>
<span>
<i class="fa fa-eye"></i>
<a href="#">123 Views</a>
</span>
</div>
</div>
<div class="blog-image">
<a href="single.html" title=""><img src="upload/xblog_03.jpg.pagespeed.ic.ZGQLz9XvWC1.png" alt="" class="img-responsive"></a>
</div>
<div class="blog-desc">
<div class="post-date">
<span class="day">2</span>
<span class="month">August</span>
</div>
<p>Want to create a high-performing website that loads fast and works on all devices? Discover essential practices in HTML5, CSS3, and JavaScript, and how responsive design and performance optimization can boost your site’s success.</p>

<a href="#" class="readmore">Read More</a>
</div>
</div>
<hr class="invis">
<nav class="text-center">
<ul class="pagination">
<li>
<a href="#" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li>
<a href="#" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>
</ul>
</nav>
</div>
<div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
<div class="widget">
<div class="searchform">
<form>
<input type="text" class="form-control" placeholder="What you are looking for?">
</form>
</div>
</div>
<div class="widget">
<div class="widget-title">
<h4>Subscribe Us</h4>
<hr>
</div>
<div class="newsletter">
<p>Subscribe to our weekly Newsletter and stay tuned and get more freebies.</p>
<form action="subscribe.php" method="post">
  <input type="email" name="subscriber_email" class="form-control" placeholder="Enter your email here..." required>
  <input type="submit" value="Subscribe Now!" class="btn btn-primary btn-block"/>
</form>

<?php
if (!empty($_SESSION['subscribeMessage'])) {
    echo $_SESSION['subscribeMessage'];
    unset($_SESSION['subscribeMessage']);
}
?>




</div>
</div>
<div class="widget">
<div class="widget-title">
<h4>Popular Courses</h4>
<hr>
</div>
<ul class="popular-courses">
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_05.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_06.png.pagespeed.ic.o2Uniwq-y5.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_07.png.pagespeed.ic.H-fRTeeP8u.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_08.png.pagespeed.ic.76ek5JLaEY.png" alt=""></a>
</li>
<li>
<a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_09.png.pagespeed.ic.FJcG938KC-.png" alt=""></a>
</li>
</ul>
</div>
<div class="widget">
<div class="widget-title"><h4>Latest Updates</h4>
<hr>
</div>
<div class="twitter-widget">
  <ul class="latest-tweets">
    <li>
      <p><a href="#" title="">@EricNduwayezu</a> Just launched our new portfolio site! 🚀 Check it out and let us know your thoughts. #WebDesign #HTML5</p>
      <span>1 hour ago</span>
    </li>
    <li>
      <p><a href="#" title="">@JuliusKwihangana</a> Color gradients are making a huge comeback in UI. What’s your favorite combo? 🎨 #UIDesign #Trends2025</p>
      <span>2 hours ago</span>
    </li>
  </ul>
</div>

</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

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
        <p><a href="page-contact.html" class="text-white text-decoration-none">Contact</a></p>
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
<p><i class="fa fa-envelope" style="margin-right: 10px;"></i><span>yegolinkltd@gmail.com</span></p>
<p><i class="fa fa-phone" style="margin-right: 10px;"></i><span>+250 788 203 056</span></p>
<p><i class="fa fa-print" style="margin-right: 10px;"></i><span>+250 786 844 255</span></p>


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

</div>
<script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel.js%2bcustom.js%2bjquery.fitvids.js.pagespeed.jc.ghpaVHFgk4.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
<script>eval(mod_pagespeed_ehrgEOlD2f);</script>
<script>$(document).ready(function(){$(".blog-image").fitVids();});</script>
</body>

<!-- blog00  -->
</html>