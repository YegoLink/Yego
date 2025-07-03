<?php
session_start();
$token = $_GET['token'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reset Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #475255 0%, #3a4a4e 100%);
      color: #333;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 8px;
      width: 320px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      text-align: center;
    }
    h2 {
      margin-bottom: 20px;
      color: #475255;
    }
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 1.5px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }
    input[type="password"]:focus {
      border-color: #3a4a4e;
      outline: none;
    }
    button {
      width: 100%;
      background-color: #3a4a4e;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #2d3a3d;
    }
    .message {
      margin-top: 15px;
      font-weight: bold;
    }
    .message.success {
      color: green;
    }
    .message.error {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Reset Password</h2>
    <form method="post" action="process-reset.php">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
      <input type="password" name="new_password" placeholder="New Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <button type="submit">Reset</button>
    </form>

    <?php
    if (!empty($_SESSION['reset_error'])) {
      echo '<p class="message error">' . $_SESSION['reset_error'] . '</p>';
      unset($_SESSION['reset_error']);
    }
    if (!empty($_SESSION['reset_success'])) {
      echo '<p class="message success">' . $_SESSION['reset_success'] . '</p>';
      unset($_SESSION['reset_success']);
    }
    ?>
  </div>
</body>
</html>
