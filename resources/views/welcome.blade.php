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

    <!-- Login Page Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-3xl font-semibold text-center mb-4">Login</h2>
                <form action="/login" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="/forgot-password" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Login
                        </button>
                    </div>
                </form>
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
