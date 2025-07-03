<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - YegoLink</title>
  <!-- Font Awesome 5.15.4 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9fafb;
      margin: 0;
      padding: 0;
      color: #333;
      overflow-x: hidden;
    }

    nav {
      background-color: #4D9AA0;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      z-index: 1000;
      flex-wrap: wrap;
    }

    nav .logo {
      font-weight: 700;
      font-size: 1.4rem;
      text-decoration: none;
      color: white;
    }

    nav .nav-links {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 10px;
    }

    nav .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      background: none;
      border: 2px solid white;
      padding: 6px 12px;
      border-radius: 5px;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    nav .nav-links a:hover {
      color: #ffdd57;
      border-color: #ffdd57;
    }

    .main-wrapper {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      margin-top: 120px;
      padding: 0 20px;
      gap: 40px;
      flex-wrap: wrap;
    }

    .info-section {
      flex: 1;
      min-width: 280px;
      max-width: 500px;
      user-select: none;
    }

    .info-section h2 {
      font-size: 2rem;
      color: #4D9AA0;
      margin-bottom: 10px;
      min-height: 56px;
      transition: opacity 0.8s ease;
      opacity: 1;
    }

    .info-section p {
      font-size: 1.05rem;
      line-height: 1.6;
    }

    /* LOGIN FORM CONTAINER */
    #loginForm {
      max-width: 400px;
      background: white;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      flex: 1;
      min-width: 300px;
      position: relative;
      transition: opacity 0.5s ease, transform 0.4s ease;
    }

    /* REGISTER FORM CONTAINER */
    #registerForm {
      max-width: 450px;
      background: #fff;
      border-radius: 10px;
      padding: 30px 35px;
      box-shadow: 0 6px 25px rgba(77, 154, 160, 0.15);
      flex: 1;
      min-width: 300px;
      position: relative;
      transition: opacity 0.5s ease, transform 0.4s ease;
    }

    /* Smooth fade/slide effect */
    #registerForm:not(.hidden) {
      opacity: 1;
      transform: translateY(0);
      pointer-events: auto;
      position: relative;
    }

    #registerForm.hidden {
      opacity: 0;
      transform: translateY(-30px);
      pointer-events: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

    #loginForm.hidden {
      opacity: 0;
      transform: translateY(-30px);
      pointer-events: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #4D9AA0;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 0.95rem;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="date"],
    select {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 15px;
      font-size: 1rem;
      border-radius: 7px;
      border: 1.8px solid #ccc;
      transition: border-color 0.3s ease, box-shadow 0.25s ease;
      font-family: inherit;
    }

    input::placeholder {
      color: #a5a5a5;
      font-style: italic;
      opacity: 0.7;
      transition: opacity 0.3s ease;
    }

    input:focus,
    select:focus {
      border-color: #4D9AA0;
      box-shadow: 0 0 6px rgba(77, 154, 160, 0.4);
      outline: none;
    }

    .checkbox-group {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 0.95rem;
      margin-bottom: 12px;
    }

    .checkbox-group input {
      margin-right: 6px;
      width: 16px;
      height: 16px;
      cursor: pointer;
    }

    button {
      width: 100%;
      padding: 14px;
      font-size: 1.1rem;
      background-color: #4D9AA0;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      cursor: pointer;
      margin-top: 8px;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 12px rgba(77, 154, 160, 0.35);
      position: relative;
    }

    button:hover:not(:disabled) {
      background-color: #17696a;
      box-shadow: 0 6px 18px rgba(23, 105, 106, 0.6);
    }

    button:disabled {
      background-color: #999;
      cursor: not-allowed;
      box-shadow: none;
    }

    .email-button {
      background-color: #6c757d;
    }

    .email-button:hover {
      background-color: #495057;
    }

    .link {
      text-align: center;
      font-size: 0.9rem;
      margin-top: 10px;
    }

    .link a {
      color: #4D9AA0;
      text-decoration: none;
      font-weight: 600;
      cursor: pointer;
    }

    .link a:hover {
      text-decoration: underline;
      color: #005f73;
    }

    .error-message {
      background-color: #fcebea;
      color: #cc1f1a;
      border: 1px solid #f5c6cb;
      font-weight: 600;
      border-radius: 6px;
      padding: 12px;
      margin-bottom: 20px;
      text-align: center;
    }

    .password-toggle {
      position: relative;
    }

    .password-toggle .toggle-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #777;
      font-size: 1.1rem;
      transition: color 0.3s ease;
    }

    .password-toggle .toggle-icon:hover {
      color: #4D9AA0;
    }

    /* Horizontal form rows */
    .form-row {
      display: flex;
      gap: 24px;
      margin-bottom: 20px;
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Password strength meter */
    .strength-meter {
      height: 7px;
      border-radius: 6px;
      background-color: #eee;
      margin-top: 6px;
      margin-bottom: 8px;
      overflow: hidden;
    }

    .strength-meter > div {
      height: 100%;
      width: 0;
      border-radius: 6px;
      transition: width 0.4s ease;
    }

    .strength-weak {
      background-color: #dc3545;
    }

    .strength-medium {
      background-color: #ffc107;
    }

    .strength-strong {
      background-color: #28a745;
    }

    /* Responsive fallback */
    @media (max-width: 600px) {
      .main-wrapper {
        margin-top: 140px;
        flex-direction: column;
        align-items: center;
      }
      #loginForm, #registerForm {
        max-width: 100%;
        padding: 20px 20px;
        position: relative;
        opacity: 1 !important;
        transform: translateY(0) !important;
        pointer-events: auto !important;
      }
      .form-row {
        flex-direction: column;
        gap: 15px;
      }
      nav .nav-links {
        margin-top: 0;
      }
    }

    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      font-size: 0.85rem;
      color: #888;
    }
  </style>
</head>
<body>

<nav>
  <a href="index.php" class="logo"><i class="fa fa-graduation-cap"></i> YegoLink</a>
  <div class="nav-links">
    <a href="index.php"><i class="fa fa-home"></i> Home</a>
  <a href="page-contact.php"><i class="fa fa-info-circle"></i> About</a>
<a href="page-about.html" onclick="toggleForms()"><i class="fa fa-envelope"></i> Contact Us</a>
<a href="donate.php"><i class="fa fa-hand-holding-heart"></i> Donate</a>

  </div>
</nav>

<div class="main-wrapper">
  <div class="info-section">
    <h2 id="welcome-msg" style="opacity:1; transition: opacity 0.8s ease;">Welcome back to YegoLink</h2>
    <p>YegoLink connects learners with practical tech skills and digital tools to shape a better future. Whether you're a student or a teacher, join our growing platform and empower your learning journey.</p>
  </div>

  <!-- LOGIN FORM -->
  <form method="post" action="process-login.php" id="loginForm">
    <h1>Login</h1>
    <?php if (!empty($_SESSION['login_error'])): ?>
      <div class="error-message"><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?></div>
    <?php endif; ?>

    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter your username" required>

    <label for="password">Password</label>
    <div class="password-toggle">
      <input type="password" name="password" id="password" placeholder="Enter your password" required>
      <i class="fas fa-eye toggle-icon" id="togglePassword"></i>
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="remember" name="remember">
      <label for="remember">Remember Me</label>
    </div>

    <button type="submit"><i class="fa fa-sign-in-alt"></i> Login</button>

    <div class="link">Don’t have an account? <a href="#" onclick="toggleForms()">Register here</a></div>
    <div class="link"><a href="forgot-password.php">Forgot Password?</a></div>
  </form>

  <!-- REGISTER FORM -->
  <form method="post" action="process-register.php" id="registerForm" class="hidden">
    <h1>Register</h1>
    <?php if (!empty($_SESSION['register_error'])): ?>
      <div class="error-message"><?php echo $_SESSION['register_error']; unset($_SESSION['register_error']); ?></div>
    <?php endif; ?>

    <div class="form-row">
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="reg_username">Username</label>
        <input type="text" name="reg_username" id="reg_username" placeholder="Choose a username" required>
      </div>
      <div class="form-group">
        <label for="reg_email">Email</label>
        <input type="email" name="reg_email" id="reg_email" placeholder="Enter your email" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" required>
          <option value="" disabled selected>Select gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Other</option>
          <option value="prefer_not_to_say">Prefer not to say</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="reg_password">Password</label>
        <div class="password-toggle">
          <input type="password" name="reg_password" id="reg_password" placeholder="Create a password" required>
          <i class="fas fa-eye toggle-icon" id="toggleRegPassword"></i>
        </div>
        <div class="strength-meter"><div id="passwordStrengthBar"></div></div>
        <div style="font-size:0.85rem; margin-bottom:10px;">Password strength: <span id="passwordStrengthText">-</span></div>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <div class="password-toggle">
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
          <i class="fas fa-eye toggle-icon" id="toggleConfirmPassword"></i>
        </div>
        <div id="confirmError" style="color: #cc1f1a; font-size: 0.85rem; display:none; margin-top:-12px; margin-bottom:12px;">
          Passwords do not match.
        </div>
      </div>
    </div>

    <button type="submit"><i class="fa fa-user-plus"></i> Register</button>
    <div class="link">Already have an account? <a href="#" onclick="toggleForms()">Login here</a></div>
  </form>
</div>

<footer>
  &copy; <?php echo date("Y"); ?> YegoLink. All rights reserved.
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/250788203056" target="_blank" id="whatsapp-chat" 
   aria-label="Chat with us on WhatsApp"
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
  <i class="fab fa-whatsapp"></i>
</a>

<script>
  // Hover effect for WhatsApp button
  const whatsappBtn = document.getElementById('whatsapp-chat');
  whatsappBtn.addEventListener('mouseenter', () => {
    whatsappBtn.style.backgroundColor = '#128c4a';
  });
  whatsappBtn.addEventListener('mouseleave', () => {
    whatsappBtn.style.backgroundColor = '#25D366';
  });
</script>

<script>
  // Toggle between login and register forms
  function toggleForms() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const welcomeMsg = document.getElementById('welcome-msg');

    loginForm.classList.toggle('hidden');
    registerForm.classList.toggle('hidden');

    // Reset welcome message opacity and stop cycling when toggled
    welcomeMsg.style.opacity = 1;

    if (loginForm.classList.contains('hidden')) {
      welcomeMsg.textContent = "Join the YegoLink Community";
    } else {
      welcomeMsg.textContent = "Welcome back to YegoLink";
    }
  }

  // Password toggle for login
  document.getElementById('togglePassword').onclick = function () {
    const pw = document.getElementById('password');
    pw.type = pw.type === 'password' ? 'text' : 'password';
    this.classList.toggle('fa-eye-slash');
  };

  // Password toggle for register
  document.getElementById('toggleRegPassword').onclick = function () {
    const pw = document.getElementById('reg_password');
    pw.type = pw.type === 'password' ? 'text' : 'password';
    this.classList.toggle('fa-eye-slash');
  };

  // Password toggle for confirm password
  document.getElementById('toggleConfirmPassword').onclick = function () {
    const pw = document.getElementById('confirm_password');
    pw.type = pw.type === 'password' ? 'text' : 'password';
    this.classList.toggle('fa-eye-slash');
  };

  // Password strength checker
  const regPassword = document.getElementById('reg_password');
  const bar = document.getElementById('passwordStrengthBar');
  const text = document.getElementById('passwordStrengthText');

  regPassword.addEventListener('input', () => {
    const val = regPassword.value;
    let score = 0;
    if (val.length >= 8) score++;
    if (/[a-z]/.test(val)) score++;
    if (/[A-Z]/.test(val)) score++;
    if (/\d/.test(val)) score++;
    if (/[\W_]/.test(val)) score++;

    bar.style.width = (score * 20) + '%';
    bar.className = '';
    if (score <= 2) {
      bar.classList.add('strength-weak');
      text.textContent = 'Weak';
    } else if (score <= 4) {
      bar.classList.add('strength-medium');
      text.textContent = 'Medium';
    } else {
      bar.classList.add('strength-strong');
      text.textContent = 'Strong';
    }
  });

  // Confirm password validation before form submission
  const registerForm = document.getElementById('registerForm');
  const regPasswordInput = document.getElementById('reg_password');
  const confirmPasswordInput = document.getElementById('confirm_password');
  const confirmError = document.getElementById('confirmError');

  registerForm.addEventListener('submit', (e) => {
    if (regPasswordInput.value !== confirmPasswordInput.value) {
      e.preventDefault();
      confirmError.style.display = 'block';
      confirmPasswordInput.focus();
    } else {
      confirmError.style.display = 'none';
    }
  });

  // Rotating welcome messages
  const welcomeMsgs = [
    "Welcome back to YegoLink",
    "Empowering Your Digital Future",
    "Learn, Grow, Succeed with YegoLink",
    "Connecting Learners Everywhere",
    "Unlock Your Potential Today"
  ];

  let currentIndex = 0;
  const welcomeElement = document.getElementById('welcome-msg');

  function cycleWelcomeMessages() {
    // Only cycle if login form is visible (optional)
    if (!document.getElementById('loginForm').classList.contains('hidden')) {
      welcomeElement.style.opacity = 0;

      setTimeout(() => {
        currentIndex = (currentIndex + 1) % welcomeMsgs.length;
        welcomeElement.textContent = welcomeMsgs[currentIndex];
        welcomeElement.style.opacity = 1;
      }, 800);
    }
  }

  setInterval(cycleWelcomeMessages, 3000);
</script>

</body>
</html>
