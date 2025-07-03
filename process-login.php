<?php
session_start();
require 'db_connection.php'; // include your DB connection

$username = trim($_POST['username']);
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    $_SESSION['login_error'] = "Please fill in both fields.";
    header("Location: index.php"); // ✅ Corrected
    exit;
}

$query = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user'] = $user['username'];  // <-- Added here
        header("Location: index.php"); // ✅ Go to homepage or dashboard
        exit;
    } else {
        $_SESSION['login_error'] = "Invalid password.";
        header("Location: index.php"); // ✅ Corrected
        exit;
    }
} else {
    $_SESSION['login_error'] = "No account found with that username.";
    header("Location: index.php"); // ✅ Corrected
    exit;
}
