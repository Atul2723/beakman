<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require './Phpmailer/Exception.php';
require './Phpmailer/PHPMailer.php';
require './Phpmailer/SMTP.php';

// Initialize response variables
$response = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    // Sanitize user inputs
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Validate inputs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = '<div class="alert alert-danger">Invalid email address.</div>';
    } elseif (empty($name) || empty($subject) || empty($message)) {
        $response = '<div class="alert alert-danger">All fields are required.</div>';
    } else {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                              // Use SMTP
            $mail->Host = 'smtp.gmail.com';              // SMTP server (replace with your SMTP host)
            $mail->SMTPAuth = true;                      // Enable SMTP authentication
            $mail->Username = 'atulcokaco@gmail.com';    // SMTP username
            $mail->Password = 'ktyf eltv swst zdcq';     // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption
            $mail->Port = 465;                           // TCP port to connect to (e.g., 465 for SSL)

            // Sender and recipient settings
            $mail->setFrom($email, $name);               // Sender email and name
            $mail->addAddress('atulcokaco@gmail');   // Recipient email (replace with your address)
            $mail->addReplyTo($email, $name);           // Reply-to address

            // Email content
            $mail->isHTML(true);                         // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "<p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Message:</strong><br>$message</p>";

            // Send email
            if ($mail->send()) {
                $response = '<div class="alert alert-success">Your message has been sent successfully.</div>';
            } else {
                $response = '<div class="alert alert-danger">Failed to send your message. Please try again later.</div>';
            }
        } catch (Exception $e) {
            $response = '<div class="alert alert-danger">Mailer Error: ' . $mail->ErrorInfo . '</div>';
        }
    }
}

// Display the response
echo $response;
?>
