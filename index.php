<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RarexTeam - Editing Course</title>
    <link rel="shortcut icon" type="text/css" sizes="100px" href="images/logo2.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">RarexTeam</h1>
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
<div class="flex-1 flex justify-center items-center">
    <img src="images/logo2.png" alt="RarexTeam Logo" class="h-24">
</div>

            <nav class="hidden md:flex space-x-6">
                <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
            </nav>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white text-center">
       <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-900 text-white text-center py-20">
        <h2 class="text-4xl font-bold">Master the Art of Editing</h2>
        <p class="mt-4 text-lg">Join RarexTeam and take your editing skills to the next level!</p>
        <a href="tutorials.php" class="mt-6 inline-block bg-blue-500 px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition">
            Get Started
        </a>
    </section>

    <!-- About Section -->
    <section class="container mx-auto text-center py-16 px-6">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Us?</h2>
        <p class="text-gray-600 mt-4">We offer high-quality tutorials, hands-on training, and expert guidance to help you become a pro editor.</p>
    </section>

    <!-- Features Section -->
    <section class="bg-blue-100 py-16">
        <div class="container mx-auto grid md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-xl font-bold text-blue-600">Professional Lessons</h3>
                <p class="mt-2 text-gray-600">Learn from industry experts with real-world experience.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-xl font-bold text-blue-600">Hands-on Practice</h3>
                <p class="mt-2 text-gray-600">Work on real projects and build your portfolio.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-xl font-bold text-blue-600">Community Support</h3>
                <p class="mt-2 text-gray-600">Join a network of passionate editors and collaborate.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mx-auto text-center py-16">
        <h2 class="text-3xl font-bold text-gray-800">What Our Students Say</h2>
        <div class="mt-8 grid md:grid-cols-2 gap-8">
            <div class="p-6 bg-white rounded-lg shadow">
                <p class="text-gray-600">"This course transformed my editing skills! The lessons are clear, and the community is amazing!"</p>
                <h4 class="mt-4 font-bold text-blue-600">- Albion</h4>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <p class="text-gray-600">"I went from a beginner to a confident editor in just a few weeks. Highly recommend RarexTeam!"</p>
                <h4 class="mt-4 font-bold text-blue-600">- Enis</h4>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-gray-800 text-white text-center p-4 mt-10">
        <p>&copy; 2025 RarexTeam. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Mobile Menu -->
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>

</body>
</html>
