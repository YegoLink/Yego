<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Donate - YegoLink</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    /* Your CSS styles here - same as before */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9fafb;
      margin: 0;
      padding: 0;
      color: #333;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    body.dark-mode { background-color: #121212; color: #ddd; }
    nav { background-color:  #4D9AA0; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; color: white; }
    nav .logo { font-weight: 700; font-size: 1.5rem; text-decoration: none; color: white; }
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
    nav .nav-links a:hover, nav .nav-links button:hover { color: #ffdd57; border-color: #ffdd57; }
    .container {
      max-width: 480px;
      margin: 40px auto;
      background: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    body.dark-mode .container { background-color: #1e1e1e; color: #ddd; }
    h1 { text-align: center; margin-bottom: 25px; color:  #4D9AA0; }
    body.dark-mode h1 { color: #66aaff; }
    label {
      display: block;
      font-weight: 600;
      margin-bottom: 10px;
      margin-top: 20px;
      color: #555;
    }
    body.dark-mode label { color: #bbb; }
    input[type="text"], input[type="email"], input[type="number"], select {
      width: 100%;
      padding: 12px 15px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      transition: border-color 0.3s ease;
    }
    input[type="text"]:focus, input[type="email"]:focus, input[type="number"]:focus, select:focus {
      border-color: #007bff;
      outline: none;
    }
    button[type="submit"] {
      margin-top: 30px;
      width: 100%;
      padding: 15px;
      font-size: 1.1rem;
      background-color: #4D9AA0;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button[type="submit"]:hover { background-color: #0056b3; }
    .message {
      padding: 15px;
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
    #manualInstructions {
      display: none;
      margin-top: 20px;
      background-color: #fff3cd;
      padding: 15px;
      border-radius: 6px;
      border: 1px solid #ffeeba;
      font-size: 0.95rem;
      color: #856404;
    }
    footer {
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      color: #777;
      margin-top: 60px;
    }
    body.dark-mode footer { color: #bbb; }

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

<nav>
  <a href="index.php" class="logo"><i class="fa fa-graduation-cap"></i> YegoLink</a>
  <div class="nav-links">
    <a href="index.php"><i class="fa fa-home"></i> Home</a>
    <button id="modeToggle"><i class="fa fa-moon"></i> Dark Mode</button>
  </div>
</nav>

<div class="container">
  <h1>Make a Donation</h1>

  <?php
  if (isset($_SESSION['donate_success'])) {
      echo '<div class="message success">' . htmlspecialchars($_SESSION['donate_success']) . '</div>';
      unset($_SESSION['donate_success']);
  }
  if (isset($_SESSION['donate_error'])) {
      echo '<div class="message error">' . htmlspecialchars($_SESSION['donate_error']) . '</div>';
      unset($_SESSION['donate_error']);
  }
  ?>

  <form id="donationForm" method="POST" action="donate_process.php" novalidate>
    <label for="donor_name">Your Name (Optional):</label>
    <input type="text" id="donor_name" name="donor_name" placeholder="Sindambiwe Fiston">

    <label for="email">Your Email (to receive confirmation):</label>
    <input type="email" id="email" name="email" required placeholder="sindambiwefiston@gmail.com">

    <label for="amount">Donation Amount (USD):</label>
    <input type="number" id="amount" name="amount" min="1" step="0.01" placeholder="Enter amount (e.g. 1.00)" required>

    <label for="payment_method">Choose Payment Method:</label>
    <select id="payment_method" name="payment_method" required>
      <option value="">-- Choose --</option>
      <option value="flutterwave">💳 Card / Mobile Money (via Flutterwave)</option>
      <option value="mtn">📱 MTN Mobile Money (Manual)</option>
      <option value="bank">🏦 Bank Transfer</option>
    </select>

    <div id="manualInstructions">
      <p><strong>Send your donation to:</strong></p>
      <p style="font-size: 1.1rem;" id="mobileMoneyNumber">MTN MoMo Number: 0788203056</p>
      <p>After sending, please confirm via email or contact us.</p>
    </div>

    <button type="submit"><i class="fa fa-heart" style="color: red;"></i> Donate</button>
  </form>
</div>

<footer>
  &copy; <?php echo date("Y"); ?> YegoLink. All rights reserved.
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/250788203056" target="_blank" id="whatsapp-chat" aria-label="Chat with us on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
  // Persistent dark mode
  document.addEventListener('DOMContentLoaded', () => {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    if (isDarkMode) {
      document.body.classList.add('dark-mode');
    }
    updateModeToggleText();
  });

  function updateModeToggleText() {
    const isDark = document.body.classList.contains('dark-mode');
    const toggleBtn = document.getElementById('modeToggle');
    toggleBtn.innerHTML = isDark ? 
      '<i class="fa fa-sun"></i> Light Mode' : 
      '<i class="fa fa-moon"></i> Dark Mode';
  }

  document.getElementById('modeToggle').addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const isDark = document.body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDark);
    updateModeToggleText();
  });

  // Original form handling
  const form = document.getElementById("donationForm");
  const methodSelect = document.getElementById("payment_method");
  const instructions = document.getElementById("manualInstructions");

  methodSelect.addEventListener("change", function () {
    if (this.value === "mtn") {
      instructions.style.display = "block";
    } else {
      instructions.style.display = "none";
    }
  });

  form.addEventListener("submit", function(e) {
    const method = methodSelect.value;
    const amount = document.getElementById("amount").value;
    const email = document.getElementById("email").value;
    const name = document.getElementById("donor_name").value || "Anonymous";

    if (method === "flutterwave") {
      e.preventDefault();

      FlutterwaveCheckout({
        public_key: "FLWPUBK-xxxxxxxxxxxxxxxxxxxxx-X", // *** REPLACE with your Flutterwave public key ***
        tx_ref: "YEGOLINK_" + Date.now(),
        amount: amount,
        currency: "USD",
        payment_options: "card,mobilemoneyrwanda", // Mobile Money Rwanda included
        customer: {
          email: email,
          phonenumber: "0788203056", // Optional - can be dynamic if you want
          name: name
        },
        callback: function(data) {
          // On success, redirect to server with transaction ref to verify & save
          window.location.href = "donate_process.php?tx_ref=" + data.tx_ref + "&status=" + data.status + "&amount=" + amount + "&email=" + encodeURIComponent(email) + "&name=" + encodeURIComponent(name);
        },
        onclose: function() {
          alert("You closed the payment window.");
        },
        customizations: {
          title: "YegoLink Donation",
          description: "Support education for all",
          logo: "https://yourwebsite.com/logo.png"
        }
      });
    }
  });
</script>

</body>
</html>
