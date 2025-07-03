<?php
$host = 'localhost';
$db = 'yegolink_db';
$user = 'root';
$pass = ''; // use your real DB password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
