<?php
session_start();

// === DATABASE CONNECTION ===
$host = "localhost";
$dbname = "yegolink_db";
$username = "root"; // Default username
$password = "";     // No password

$conn = new mysqli($host, $username, $password, $dbname);

// === CONNECTION ERROR CHECK ===
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// === FORM PROCESSING ===
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['subscriber_email']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subscribeMessage = "<div class='alert alert-danger'>Invalid email format.</div>";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM subscribers WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $subscribeMessage = "<div class='alert alert-info'>You're already subscribed!</div>";
        } else {
            $stmt->close();
            
            // Insert new subscriber
            $stmt = $conn->prepare("INSERT INTO subscribers (email, subscribed_at) VALUES (?, NOW())");
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                // ✅ Send appreciation email
                $to = $email;
                $subject = "Thanks for Subscribing to YegoLink!";
                $message = "
                    <html>
                    <head>
                        <title>Thank You for Subscribing</title>
                    </head>
                    <body style='font-family: Arial, sans-serif;'>
                        <h2 style='color:#2d89ef;'>YegoLink Newsletter</h2>
                        <p>Hello there,</p>
                        <p>Thank you for subscribing to <strong>YegoLink</strong>! 🎉</p>
                        <p>We're excited to have you on board. You'll now receive updates, news, and valuable digital learning tips.</p>
                        <p style='color: #555;'>Stay inspired,<br><strong>The YegoLink Team</strong></p>
                    </body>
                    </html>
                ";
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                $headers .= "From: no-reply@yegolink.com\r\n"; // Replace with your actual email if needed

                mail($to, $subject, $message, $headers);

                $subscribeMessage = "<div class='alert alert-success'>Thanks for subscribing! You will receiving a Weekly News.</div>";
            } else {
                $subscribeMessage = "<div class='alert alert-danger'>An error occurred while subscribing. Please try again later.</div>";
            }
        }
        $stmt->close();
    }

    // Store the message and redirect to blog page
    $_SESSION['subscribeMessage'] = $subscribeMessage;
    header("Location: blog.php"); // Adjust if your form is on another page
    exit;
}
?>
