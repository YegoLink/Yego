<?php
session_start();
include 'db_connect.php';

$loggedInName = '';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $stmt = $conn->prepare("SELECT full_name FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($full_name);
    if ($stmt->fetch()) {
        $loggedInName = $full_name;
    }
    $stmt->close();
}
?>
