<link rel="shortcut icon" type="text/css" sizes="100px" href="images/logo2.png">
<?php
header("Content-Type: application/json");
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "message_db";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["message" => "Database connection failed: " . $conn->connect_error]));
}

// Get data from request
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if ($name && $email && $message) {
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        echo json_encode(["message" => "Message saved successfully!"]);
    } else {
        echo json_encode(["message" => "Error saving message."]);
    }
    
    $stmt->close();
} else {
    echo json_encode(["message" => "All fields are required!"]);
}

$conn->close();
?>
