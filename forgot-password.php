<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Forgot Password - YegoLink</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="css/dark-mode.css">
  <script src="js/dark-mode.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9fafb;
      margin: 0;
      padding: 0;
      color: #333;
    }

    nav {
      background-color: #4D9AA0;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    nav .logo {
      font-weight: 700;
      font-size: 1.5rem;
      text-decoration: none;
      color: white;
    }

    nav .nav-links a, nav .nav-links button {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 600;
      background: none;
      border: 2px solid white;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }

    nav .nav-links a:hover, nav .nav-links button:hover {
      color: #ffdd57;
      border-color: #ffdd57;
    }

    .container {
      max-width: 420px;
      margin: 100px auto;
      background: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #4D9AA0;
    }

    input[type="email"] {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      transition: border-color 0.3s ease;
    }

    input[type="email"]:focus {
      border-color: #007bff;
      outline: none;
    }

    button[type="submit"], .back-link {
      width: 100%;
      padding: 14px;
      font-size: 1.05rem;
      background-color: #4D9AA0;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: 700;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease;
      display: block;
      text-align: center;
      text-decoration: none;
    }

    button:hover, .back-link:hover {
      background-color: #005f73;
    }

    .message {
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 6px;
      font-weight: 600;
      text-align: center;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      color: #777;
      margin-top: 60px;
    }

    /* WhatsApp Floating Button */
    #whatsapp-chat {
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
      transition: background-color 0.3s ease;
    }

    #whatsapp-chat:hover {
      background-color: #128c4a;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <a href="index.php" class="logo"><i class="fa fa-graduation-cap"></i> YegoLink</a>
  <div class="nav-links">
    <a href="index.php"><i class="fa fa-home"></i> Home</a>
    <a href="register.php"><i class="fa fa-user-plus"></i> Register</a>
  </div>
</nav>

<!-- Container -->
<div class="container">
  <h1>Forgot Password</h1>

  <?php if (!empty($_SESSION['reset_msg'])): ?>
    <div class="message success"><?php echo $_SESSION['reset_msg']; unset($_SESSION['reset_msg']); ?></div>
  <?php endif; ?>

  <?php if (!empty($_SESSION['reset_error'])): ?>
    <div class="message error"><?php echo $_SESSION['reset_error']; unset($_SESSION['reset_error']); ?></div>
  <?php endif; ?>

  <form method="post" action="send-reset.php">
    <input type="email" name="email" placeholder="Enter your email" required />
    <button type="submit"><i class="fa fa-paper-plane"></i> Send Reset Link</button>
  </form>

  <a href="course-login.php" class="back-link"><i class="fa fa-arrow-left"></i> Back to Login</a>
</div>

<footer>
  &copy; <?php echo date("Y"); ?> YegoLink. All rights reserved.
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/250788203056" target="_blank" id="whatsapp-chat" aria-label="Chat with us on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>
