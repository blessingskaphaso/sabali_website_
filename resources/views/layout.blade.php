<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabali Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-blue-700 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sabali</h1>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-gray-300">Home</a></li>
                <li><a href="/about" class="hover:text-gray-300">About</a></li>
                <li><a href="/services" class="hover:text-gray-300">Services</a></li>
                <li><a href="/contact" class="hover:text-gray-300">Contact</a></li>
                <li><a href="/dashboard" class="hover:text-gray-300">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white text-center p-4 mt-6">
        &copy; {{ date('Y') }} Sabali Solutions. All Rights Reserved.
    </footer>
</body>
</html>
