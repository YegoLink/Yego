<?php
$host = "localhost";
$user = "root"; // change if needed
$password = ""; // add your password if you have one
$dbname = "yegolink_db";

// Create database connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
