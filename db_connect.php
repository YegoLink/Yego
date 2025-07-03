<?php
$host = 'localhost';        // Or 127.0.0.1
$db   = 'yegolink_db';      // Database name
$user = 'root';             // Your DB username
$pass = '';                 // Your DB password ('' for XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
