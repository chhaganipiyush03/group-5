<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS (with Vite integration) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
    <nav class="bg-blue-600 p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="text-white text-2xl font-bold">My Blog</div>
            <div class="space-x-4">
                <a href="/" class="text-white hover:text-gray-300">Home</a>
                <a href="/about" class="text-white hover:text-gray-300">About</a>
                <a href="/contact" class="text-white hover:text-gray-300">Contact</a>
                <a href="/login" class="text-white hover:text-gray-300">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white text-center py-20">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-semibold mb-4">Welcome to My Blog</h1>
            <p class="text-lg">A place to share ideas, thoughts, and stories.</p>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-8">Latest Posts</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/600x400" alt="Post 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">Post Title 1</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis purus...</p>
                        <a href="/post/1" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/600x400" alt="Post 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">Post Title 2</h3>
                        <p class="text-gray-600 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium...</p>
                        <a href="/post/2" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/600x400" alt="Post 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2">Post Title 3</h3>
                        <p class="text-gray-600 mb-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae...</p>
                        <a href="/post/3" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div>&copy; 2024 My Blog. All rights reserved.</div>
            <div class="space-x-4">
                <a href="/privacy" class="text-white hover:text-gray-400">Privacy</a>
                <a href="/terms" class="text-white hover:text-gray-400">Terms</a>
                <a href="/contact" class="text-white hover:text-gray-400">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>