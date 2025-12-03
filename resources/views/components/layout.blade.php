<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Website' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">

    <nav class="bg-gray-800 text-white p-4 flex gap-4">
        <a href="/posts" class="hover:text-gray-300">POST</a>
        <a href="/about" class="hover:text-gray-300">ABOUT</a>
        <a href="/categories" class="hover:text-gray-300">CATEGORIES</a>
        <a href="/blog" class="hover:text-gray-300">BLOG</a>
        <a href="/contact" class="hover:text-gray-300">CONTACT</a>
    </nav>

  
    <main class="flex-1 p-6">
 
    </main>

    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} Ramon. All rights reserved.</p>
    </footer>

</body>
</html>
