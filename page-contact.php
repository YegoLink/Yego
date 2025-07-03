<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>YegoLink</title>

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>

<link rel="stylesheet" href="css/dark-mode.css">
<script src="js/dark-mode.js"></script>
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
<link rel="stylesheet" type="text/css" href="css/A.carousel.css.pagespeed.cf.VktteGiLwl.css">
<link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>

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
<p><i class="fa fa-graduation-cap"></i>  YegoLink </p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
 <li>
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
  </li><?php if (isset($_SESSION['user'])): ?>
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

      <?php if ($_SESSION['user'] === 'admin'): ?>
        <li style="transition: background-color 0.3s;">
          <a href="admin_feedback.php" style="
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
            <i class="fa fa-inbox" style="color: #f39c12; margin-right: 8px;"></i> Admin Page
          </a>
        </li>
      <?php endif; ?>

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
<a class="navbar-brand" href="index-2.html"><img src="images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
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
<li><a href="index.php">Home </a></li>


</ul>
</div>
</div>
<div class="col-md-6">
<div class="box">
      <ul>
<li><a href="#">Business Tech</a></li>
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

<li><a href="login.php">Login & Register</a></li>
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
<li><a href="page-pricing.html">Pricing Tables</a></li>

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

</ul>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
<!--<li><a href="forums.html">Community</a></li> -->
<li><a href="blog.php">Blog</a></li>
<li><a class="active" href="page-contact.html">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a class="btn btn-primary" href="login.php"><i class="fa fa-sign-in"></i> Register Now</a></li>
</ul>
</div>
</div>
</div>
</div>
</header>


<section class="white section">
<div class="container">
<div class="row contact-wrapper">
<div class="col-md-9 col-sm-9 col-xs-12 content-widget">

<div class="widget-title">
<h4>Contact Form</h4>
<hr>
<div id="form-message" style="margin-bottom: 20px;"></div>
</div>
<div id="contact_form" class="contact_form row">
<div id="message"></div>
<form id="contactform" action="contact_process.php" method="post">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
<input type="text" name="email" id="email" class="form-control" placeholder="Email *">

</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<textarea class="form-control" name="comments" id="comments" rows="6" placeholder=""></textarea>
<button type="submit" value="SEND" id="submit" class="btn btn-primary btn-block">Send Message</button>
</div>
</form>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 content-widget">
<div class="widget-title">
<h4>Contact Details</h4>
<hr>
</div>
<div class="contact-list">
<ul class="contact-details">
<li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
<li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
<li><i class="fa fa-phone"></i> +250 788203056</li>
<li><i class="fa fa-fax"></i> +250 786844255</li>
<li><i class="fa fa-home"></i>  Kigali. Kn. 257. St</li>
</ul>
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

<script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script><script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel.js%2bcustom.js%2bcontact.js%2bmap.js.pagespeed.jc.PhbsLlMzIs.js"></script><script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>eval(mod_pagespeed_CCCJJdU9$y);</script>
<script>eval(mod_pagespeed_WcwWTYPZDc);</script>
<script>
document.getElementById("contactform").addEventListener("submit", function(e) {
  e.preventDefault(); // Stop form from submitting normally

  var form = this;
  var formData = new FormData(form);

  fetch("contact_process.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById("form-message").innerHTML = data;
    form.reset(); // Clear the form fields
  })
  .catch(error => {
    document.getElementById("form-message").innerHTML = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
    console.error("Error:", error);
  });
});
</script>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/250788203056" target="_blank" id="whatsapp-chat" aria-label="Chat with us on WhatsApp" 
   style="
     position: fixed;
     bottom: 20px;
     right: 20px;
     background-color: #25D366;
     color: white;
     border-radius: 50%;
     width: 56px;
     height: 56px;
     display: flex;
     justify-content: center;
     align-items: center;
     font-size: 28px;
     box-shadow: 0 4px 12px rgba(0,0,0,0.3);
     cursor: pointer;
     z-index: 9999;
     text-decoration: none;
     transition: background-color 0.3s ease;">
  <i class="fa fa-whatsapp"></i>
</a>

<script>
  // Optional hover effect
  const whatsappBtn = document.getElementById('whatsapp-chat');
  whatsappBtn.addEventListener('mouseenter', () => {
    whatsappBtn.style.backgroundColor = '#128c4a';
  });
  whatsappBtn.addEventListener('mouseleave', () => {
    whatsappBtn.style.backgroundColor = '#25D366';
  });
</script>
<script>
document.getElementById("contactform").addEventListener("submit", function(e) {
  e.preventDefault(); // Prevent normal form submission

  var form = this;
  var formData = new FormData(form);

  fetch("contact_process.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    // Insert the PHP response (HTML message) inside #message
    document.getElementById("form-message").innerHTML = data;

    // Clear form if success message shown
    if (data.includes("alert-success")) {
      form.reset();
    }
  })
  .catch(error => {
    document.getElementById("form-message").innerHTML = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
    console.error("Error:", error);
  });
});
</script>

</body>

<!-- page-contact40:34 GMT -->
</html>