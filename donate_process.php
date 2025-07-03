<?php
// =========================
// FILE: donate_process.php
// =========================
session_start();

// Get and sanitize POST data
$donor_name = !empty($_POST['donor_name']) ? trim($_POST['donor_name']) : "Anonymous";
$email = isset($_POST['email']) ? trim($_POST['email']) : "";
$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
$payment_method = "Flutterwave"; // Fixed for this integration

// Validate basic inputs
if ($amount <= 0 || empty($email)) {
    $_SESSION['donate_error'] = "Please provide a valid email and amount.";
    header("Location: donate.php");
    exit();
}

// Generate transaction ID
$transaction_id = uniqid("TXN_");

// Set Flutterwave Public Key (test key for now)
$FLW_PUBLIC_KEY = 'FLWPUBK_TEST-15e619a098b2fd19924b93b7416e7945-X';

// Set callback URL
$callback_url = "http://localhost/LearnYegoLinkwebsite/Fiston%20Project/flutterwave_callback.php";

// Output auto-submit form
?><form id='flutterwave_form' method='POST' action='https://checkout.flutterwave.com/v3/hosted/pay'>
  <input type='hidden' name='public_key' value='<?php echo $FLW_PUBLIC_KEY; ?>' />
  <input type='hidden' name='customer[email]' value='test@example.com' /> <!-- Test email -->
  <input type='hidden' name='customer[name]' value='Test Donor' />
  <input type='hidden' name='tx_ref' value='TXN_<?php echo uniqid(); ?>' />
  <input type='hidden' name='amount' value='20' /> <!-- Test amount -->
  <input type='hidden' name='currency' value='RWF' />
  <input type='hidden' name='redirect_url' value='<?php echo $callback_url; ?>' />
</form>
<script>document.getElementById('flutterwave_form').submit();</script>

<?php
// ============================
// FILE: flutterwave_callback.php
// ============================
session_start();

// Database settings
$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "yegolink_db";

$conn = new mysqli($host, $dbUser, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}

// Include PHPMailer
require 'PHPMailer-6.10.0/PHPMailer-6.10.0/src/Exception.php';
require 'PHPMailer-6.10.0/PHPMailer-6.10.0/src/PHPMailer.php';
require 'PHPMailer-6.10.0/PHPMailer-6.10.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get payment reference from redirect
if (!isset($_GET['tx_ref']) || !isset($_GET['status'])) {
    $_SESSION['donate_error'] = "Payment not completed.";
    header("Location: donate.php");
    exit();
}

$tx_ref = $_GET['tx_ref'];
$status = $_GET['status'];

// Optional: verify transaction via Flutterwave API (secure)

if ($status == 'successful') {
    // Dummy values for demo (in production, store these temporarily before payment)
    $donor_name = "Donor";
    $email = "unknown@example.com";
    $amount = 0;

    // Save into DB
    $stmt = $conn->prepare("INSERT INTO donations (donor_name, email, amount, payment_method, transaction_id, payment_status, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $payment_method = "Flutterwave";
    $payment_status = "success";
    $stmt->bind_param("ssdsss", $donor_name, $email, $amount, $payment_method, $tx_ref, $payment_status);

    if ($stmt->execute()) {
        // Send confirmation email
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sindambiwefiston@gmail.com';
            $mail->Password   = 'your-app-password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('sindambiwefiston@gmail.com', 'YegoLink');
            $mail->addAddress($email, $donor_name);
            $mail->isHTML(true);
            $mail->Subject = 'Thank You for Your Donation!';
            $mail->Body    = "<h2>Thank you!</h2><p>Transaction ID: <strong>$tx_ref</strong></p>";
            $mail->send();
        } catch (Exception $e) {
            // Log or ignore
        }
        $_SESSION['donate_success'] = "Donation successful!";
    } else {
        $_SESSION['donate_error'] = "Failed to log donation.";
    }
    $stmt->close();
} else {
    $_SESSION['donate_error'] = "Payment was not successful.";
}
$conn->close();
header("Location: donate.php");
exit();