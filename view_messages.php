<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "message_db";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch messages
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Received</title>
    <link rel="shortcut icon" type="text/css" sizes="100px" href="images/logo2.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Messages Received</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-700"><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p class="text-sm text-gray-500"><?php echo htmlspecialchars($row['email']); ?></p>
                    <p class="mt-2 text-gray-600"><?php echo nl2br(htmlspecialchars($row['message'])); ?></p>
                    <span class="text-xs text-gray-400 mt-3 block"><?php echo $row['created_at']; ?></span>
                </div>
            <?php endwhile; ?>
        </div>

    </div>

</body>
</html>

<?php
$conn->close();
?>
