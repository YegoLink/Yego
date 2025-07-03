<?php
session_start();
require 'db_connection.php'; // include your DB connection

// Get form data
$firstName = trim($_POST['first_name']);
$lastName = trim($_POST['last_name']);
$username = trim($_POST['reg_username']);
$email = trim($_POST['reg_email']);
$password = $_POST['reg_password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Validation
if (empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($password)) {
    $_SESSION['register_error'] = "Please fill in all required fields.";
    header("Location: index.php");
    exit;
}

// Check if username or email already exists
$query = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$query->bind_param("ss", $username, $email);
$query->execute();
$query->store_result();

if ($query->num_rows > 0) {
    $_SESSION['register_error'] = "Username or email already exists.";
    header("Location: index.php"); 
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Insert user
$insert = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, password, dob, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
$insert->bind_param("sssssss", $firstName, $lastName, $username, $email, $hashedPassword, $dob, $gender);

if ($insert->execute()) {
    // Auto-login by setting session:
    $_SESSION['user'] = $username;
    $_SESSION['user_id'] = $conn->insert_id;

    // Redirect to index:
    header("Location: index.php");
    exit;
} else {
    $_SESSION['register_error'] = "Something went wrong. Please try again.";
    header("Location: index.php");
    exit;
}
