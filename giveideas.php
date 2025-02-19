<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give ideas!</title>
    <link rel="shortcut icon" type="text/css" sizes="100px" href="images/logo2.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">RarexTeam</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
            </nav>
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden bg-blue-600 text-white p-4 md:hidden">
        <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
    </nav>

    <!-- Contact Form Section -->
    <section class="flex justify-center items-center min-h-screen px-6">
        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Send a Message</h2>
            <form id="messageForm">
                <input type="text" id="name" placeholder="Your Name" class="w-full p-2 border rounded mb-3" required>
                <input type="email" id="email" placeholder="Your Email" class="w-full p-2 border rounded mb-3" required>
                <textarea id="message" placeholder="Your Message" class="w-full p-2 border rounded mb-3" required></textarea>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Send</button>
            </form>
            <p id="responseMessage" class="text-center text-gray-600 mt-4"></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2025 RarexTeam. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById("menu-btn").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });

        // Form Submission
        document.getElementById("messageForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            const formData = new FormData();
            formData.append("name", document.getElementById("name").value);
            formData.append("email", document.getElementById("email").value);
            formData.append("message", document.getElementById("message").value);

            fetch("save_message.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById("responseMessage").textContent = data.message;
                document.getElementById("messageForm").reset();
            })
            .catch(error => console.error("Error:", error));
        });
    </script>

</body>
</html>
