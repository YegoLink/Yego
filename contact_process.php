<?php
session_start();

// Database connection details
$host = "localhost";
$dbname = "yegolink_db";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("<div class='alert alert-danger'>Database connection failed.</div>");
}

// Get form inputs safely
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$comments = trim($_POST['comments']);

// Skip empty fields silently
if (empty($name) || empty($email) || empty($comments)) {
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit;
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $comments);

if ($stmt->execute()) {
    echo "<div class='alert alert-success'>🎉 Thank you! Your message has been received. We'll get back to you soon!</div>";
} else {
    echo "<div class='alert alert-danger'>Oops! Something went wrong. Please try again later.</div>";
}

$stmt->close();
$conn->close();
?>
