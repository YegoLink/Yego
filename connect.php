<?php
$servername = "localhost";
$username = "root"; // adjust if different
$password = "";     // adjust if different
$dbname = "yegolink_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
