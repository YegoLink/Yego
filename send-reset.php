<?php
session_start();
require 'connect.php';
require __DIR__.'/vendor/autoload.php';

use Twilio\Rest\Client;
use AfricasTalking\SDK\AfricasTalking;

function sendWhatsApp($phone, $link) {
    $client = new Client(TWILIO_SID, TWILIO_TOKEN);
    $client->messages->create(
        "whatsapp:".$phone,
        [
            "from" => TWILIO_WHATSAPP_FROM,
            "body" => "YegoLink password reset: $link"
        ]
    );
}

function sendSms($phone, $link) {
    $AT = new AfricasTalking(AT_USERNAME, AT_API_KEY);
    $sms = $AT->sms();
    $sms->send([
        "to" => [$phone],
        "message" => "YegoLink password reset: $link"
    ]);
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $answer = trim($_POST['security_answer'] ?? '');

    // 1. If phone provided → WhatsApp or SMS
    if ($phone !== '') {
        $stmt = $conn->prepare("SELECT * FROM users WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        if ($user) {
            $token = bin2hex(random_bytes(32));
            $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));
            $conn->prepare("UPDATE users SET reset_token=?, token_expiry=? WHERE phone=?")
                 ->bind_param("sss", $token, $expiry, $phone)->execute();
            $link = "http://yourdomain.com/reset-password.php?token=$token";

            // Choose WhatsApp if a valid number, else SMS
            if (substr($phone,0,3)=='+25') {
                sendWhatsApp($phone, $link);
                $_SESSION['reset_msg'] = "Reset link sent via WhatsApp.";
            } else {
                sendSms($phone, $link);
                $_SESSION['reset_msg'] = "Reset link sent via SMS.";
            }
        } else {
            $_SESSION['reset_error'] = "Phone number not found.";
        }
    }
    // 2. Else, if email provided
    elseif ($email !== '') {
        // Similar email flow using PHPMailer (not shown here)
    }
    // 3. Else use security question
    elseif ($answer !== '') {
        $stmt = $conn->prepare("SELECT security_answer, email FROM users WHERE email = ?");
        $stmt->bind_param("s", $_POST['email']);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        if (password_verify($answer, $row['security_answer'])) {
            // Generate token and send via email
        } else {
            $_SESSION['reset_error'] = "Wrong answer.";
        }
    } else {
        $_SESSION['reset_error'] = "Please provide phone, email, or security answer.";
    }

    header("Location: forgot-password.php");
    exit();
}
