<?php
session_start();
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $token = $_POST['token'] ?? '';
  $password = $_POST['new_password'] ?? '';
  $confirm = $_POST['confirm_password'] ?? '';

  if ($password !== $confirm) {
    $_SESSION['reset_error'] = "Passwords do not match.";
    header("Location: reset-password.php?token=$token");
    exit();
  }

  $stmt = $conn->prepare("SELECT * FROM users WHERE reset_token = ? AND token_expiry > NOW()");
  $stmt->bind_param("s", $token);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $update = $conn->prepare("UPDATE users SET password=?, reset_token=NULL, token_expiry=NULL WHERE reset_token=?");
    $update->bind_param("ss", $hashed, $token);
    $update->execute();

    $_SESSION['reset_success'] = "✅ Password reset successfully. You can now login.";
    header("Location: course-login.php");
    exit();
  } else {
    $_SESSION['reset_error'] = "Invalid or expired token.";
    header("Location: reset-password.php?token=$token");
    exit();
  }
}
