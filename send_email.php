<link rel="shortcut icon" type="text/css" sizes="100px" href="images/logo2.png">
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // If using Composer
// require 'PHPMailer/PHPMailer.php'; // If manually downloaded

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"));

if (!$data->name || !$data->email || !$data->message) {
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

$mail = new PHPMailer(true);
try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'unknownkosovo1@gmail.com'; // Your email
    $mail->Password = 'your-app-password'; // 🔹 Replace with your generated App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email content
    $mail->setFrom($data->email, $data->name);
    $mail->addAddress('unknownkosovo1@gmail.com'); // Your email to receive messages

    $mail->Subject = "New Message from " . $data->name;
    $mail->Body = "Name: " . $data->name . "\nEmail: " . $data->email . "\n\nMessage:\n" . $data->message;

    $mail->send();
    echo json_encode(["status" => "success", "message" => "Email sent successfully"]);
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Error sending email: {$mail->ErrorInfo}"]);
}
?>
