<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is installed via Composer

function sendConfirmationEmail($toEmail, $toName, $amount) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sindambiwefiston@gmail.com'; // Your Gmail address
        $mail->Password   = 'paja nadb mpmv lkax';   // App password from Google
        $mail->SMTPSecure = 'tls'; // or PHPMailer::ENCRYPTION_SMTPS
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('sindambiwefiston.com', 'YegoLink');
        $mail->addAddress($toEmail, $toName); // Send to donor

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Donation Confirmation';
        $mail->Body    = "
            <h2>Thank you for your donation!</h2>
            <p>Hello <strong>$toName</strong>,</p>
            <p>We received your donation of <strong>\$$amount</strong> to YegoLink.</p>
            <p>Your support means a lot to us.</p>
            <p>Warm regards,<br>YegoLink Team</p>
        ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
