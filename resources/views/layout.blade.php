<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabali Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-700 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            
            <!-- Logo + Slogan -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="Sabali Logo" class="h-12 w-12 rounded-full shadow-md">
                <div class="flex flex-col">
                    <h1 class="text-2xl font-bold">Sabali Solutions</h1>
                    <span class="text-sm italic text-gray-200">Every Transaction Matters</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <ul class="flex space-x-6 font-medium">
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
    <footer class="bg-blue-700 text-white text-center p-6 mt-6">
        <div class="flex flex-col items-center space-y-3">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Sabali Logo" class="h-12 w-12 rounded-full shadow-md">
        
        <!-- Company Info -->
        <p class="font-semibold text-lg">Sabali Solutions</p>
        <p class="italic text-gray-200">Every Transaction Matters</p>

        <!-- Social Media Icons -->
        <div class="flex space-x-6 mt-3">
        <a href="https://facebook.com" target="_blank" class="hover:text-gray-300 text-xl">
        <i class="fab fa-facebook"></i>
        </a>
        <a href="https://wa.me/265995485733" target="_blank" class="hover:text-gray-300 text-xl">
        <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="hover:text-gray-300 text-xl">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="mailto:blesskapha@outlook.com" target="_blank" class="hover:text-gray-300 text-xl">
        <i class="fas fa-envelope"></i>
        </a>
        </div>

        <!-- Copyright -->
        <p class="text-sm mt-4">&copy; {{ date('Y') }} Sabali Solutions. All Rights Reserved.</p>
        </div>
        </footer>


</body>
</html>
