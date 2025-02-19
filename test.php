<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RarexTeam - Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">RarexTeam Blog</h1>
            
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Navigation Links (Desktop) -->
            <nav class="hidden md:flex space-x-6">
        
            <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white text-center mt-2">
         <a href="index.php" class="hover:underline">Home</a>
                <a href="tutorials.php" class="hover:underline">Tutorials</a>
                <a href="ourteam.php" class="hover:underline">Our Team</a>
                <a href="giveideas.php" class="hover:underline">Give ideas</a>
        </div>
    </header>

    <!-- Blog Posts Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">These videos are from our team</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          


            <!-- Blog Post 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/If-5bMWjK30?si=xa5oiTJ_TUJkRRtm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="p-4">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
  <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
</svg> <h3 class="text-xl font-bold text-gray-800">nadi.programming</h3>
                    <p class="text-gray-600 mt-2">Tutorial qysh me instalu esign!</p>
                </div>
            </div>





            <!-- Blog Post 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe class="w-full h-56" src="https://www.youtube.com/watch?v=xUG1M_LH6oU" allowfullscreen></iframe>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Color Grading Like a Pro</h3>
                    <p class="text-gray-600 mt-2">Master color correction techniques to enhance your video quality.</p>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe class="w-full h-56" src="https://www.youtube.com/embed/5qap5aO4i9A" allowfullscreen></iframe>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Cinematic Transitions Guide</h3>
                    <p class="text-gray-600 mt-2">Take your editing skills to the next level with stunning transitions.</p>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe class="w-full h-56" src="https://www.youtube.com/embed/4YQ4svkETS0" allowfullscreen></iframe>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Sound Design for Editors</h3>
                    <p class="text-gray-600 mt-2">Learn how to improve audio quality and add immersive sound effects.</p>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe class="w-full h-56" src="https://www.youtube.com/embed/IQZZtd5u8XU" allowfullscreen></iframe>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Editing with Adobe Premiere Pro</h3>
                    <p class="text-gray-600 mt-2">Step-by-step guide to using Premiere Pro for professional editing.</p>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe class="w-full h-56" src="https://www.youtube.com/embed/OZJHdbRNs68" allowfullscreen></iframe>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Advanced Editing Techniques</h3>
                    <p class="text-gray-600 mt-2">Discover advanced tricks and tools to speed up your workflow.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
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
