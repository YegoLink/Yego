<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- course-login40:16  -->
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

<style>
  body {
    background: linear-gradient(135deg, #475255 0%, #3a4a4e 100%);
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', system-ui, sans-serif;
  }
</style>
</head>
<body class="login">

<div id="loader">
  <div class="loader-container">
    <img src="images/site.gif" alt="" class="loader-site">
  </div>
</div>

<div id="wrapper">
  <div class="container">
    <div class="row login-wrapper">
      <div class="col-md-6 col-md-offset-3">
        <div class="logo logo-center">
          <a href="index.php"><img src="images/he.png" alt=""></a>
        </div>
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <?php if (!empty($_SESSION['login_error'])): ?>
                    <div class="form-group">
                      <div style="color:red; text-align:center;">
                        <?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
                      </div>
                    </div>
                  <?php endif; ?>

                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> &nbsp; Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" class="form-control btn btn-default">Login Account</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="forgot-password.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="register.php" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="reg_username" id="reg_username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="reg_email" id="reg_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="reg_password" id="reg_password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="reg_confirm" id="reg_confirm" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <?php if (!empty($_SESSION['register_error'])): ?>
                    <div class="form-group">
                      <div style="color:red; text-align:center;">
                        <?php echo $_SESSION['register_error']; unset($_SESSION['register_error']); ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" class="form-control btn btn-default btn-block">Register an Account</button>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
<script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script>
<script>eval(mod_pagespeed_gFRwwUbyVc);</script>
<script>eval(mod_pagespeed_rQwXk4AOUN);</script>
<script>eval(mod_pagespeed_U0OPgGhapl);</script>
<script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script>
<script>eval(mod_pagespeed_6Ja02QZq$f);</script>
<script>eval(mod_pagespeed_KxQMf5X6rF);</script>

<script>
  $(document).ready(function () {
    $('#login-form-link').click(function (e) {
      $("#login-form").delay(100).fadeIn(100);
      $("#register-form").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

    $('#register-form-link').click(function (e) {
      $("#register-form").delay(100).fadeIn(100);
      $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

    <?php if (!empty($_SESSION['register_error'])): ?>
      $("#register-form").show();
      $("#login-form").hide();
      $('#register-form-link').addClass('active');
      $('#login-form-link').removeClass('active');
    <?php endif; ?>
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

</body>
<!-- course-login40:17  -->
</html>
