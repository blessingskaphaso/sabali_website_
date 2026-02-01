<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sabali Solutions - IT, Finance & Wellness Services in Malawi')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Leading provider of IT solutions, financial services, and health & wellness products in Malawi. Driving innovation and community growth.')">
    <meta name="keywords" content="IT solutions Malawi, financial services, microloans, health products, business support, Zomba">
    <meta name="author" content="Sabali Solutions">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Sabali Solutions - Every Transaction Matters')">
    <meta property="og:description" content="@yield('og_description', 'Comprehensive IT, financial, and wellness solutions in Malawi')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        /* System theme detection */
        :root {
            --bg-primary: #F9FAFB;
            --bg-secondary: #FFFFFF;
            --text-primary: #111827;
            --text-secondary: #6B7280;
            --card-bg: #FFFFFF;
            --border-color: #E5E7EB;
        }
        
        @media (prefers-color-scheme: dark) {
            :root {
                --bg-primary: #111827;
                --bg-secondary: #1F2937;
                --text-primary: #F9FAFB;
                --text-secondary: #9CA3AF;
                --card-bg: #1F2937;
                --border-color: #374151;
            }
            
            body {
                background-color: var(--bg-primary);
                color: var(--text-primary);
            }
            
            .bg-gray-50 {
                background-color: var(--bg-primary) !important;
            }
            
            .bg-white {
                background-color: var(--card-bg) !important;
            }
            
            .text-gray-900 {
                color: var(--text-primary) !important;
            }
            
            .text-gray-600,
            .text-gray-700,
            .text-gray-800 {
                color: var(--text-secondary) !important;
            }
            
            .border-gray-200,
            .border-gray-300 {
                border-color: var(--border-color) !important;
            }
            
            .shadow-lg,
            .shadow-md,
            .shadow {
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5), 0 4px 6px -2px rgba(0, 0, 0, 0.3) !important;
            }
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom focus styles for accessibility */
        .focus-ring:focus {
            outline: 2px solid #3B82F6;
            outline-offset: 2px;
        }
        
        /* Mobile menu animation */
        .mobile-menu {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Custom gradient */
        .gradient-blue {
            background: linear-gradient(135deg, #1E40AF 0%, #1D4ED8 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    <!-- Navbar -->
    <nav class="gradient-blue text-white shadow-lg sticky top-0 z-40" role="navigation" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                
                <!-- Logo + Slogan -->
                <div class="flex items-center space-x-3">
                    <a href="/" class="flex items-center space-x-3 focus-ring rounded-lg p-1" aria-label="Sabali Solutions Home">
                        <img src="{{ asset('images/logo.png') }}" alt="Sabali Solutions Logo" class="h-12 w-12 rounded-full shadow-lg border-2 border-white/20">
                        <div class="flex flex-col">
                            <h1 class="text-xl md:text-2xl font-bold">Sabali Solutions</h1>
                            <span class="text-xs md:text-sm italic text-blue-100">Every Transaction Matters</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:block">
                    <ul class="flex space-x-8 font-medium">
                        <li><a href="/" class="hover:text-blue-200 transition-colors focus-ring rounded px-2 py-1 {{ request()->is('/') ? 'text-blue-200 font-semibold' : '' }}">Home</a></li>
                        <li><a href="/about" class="hover:text-blue-200 transition-colors focus-ring rounded px-2 py-1 {{ request()->is('about') ? 'text-blue-200 font-semibold' : '' }}">About</a></li>
                        <li><a href="/services" class="hover:text-blue-200 transition-colors focus-ring rounded px-2 py-1 {{ request()->is('services') ? 'text-blue-200 font-semibold' : '' }}">Services</a></li>
                        <li><a href="/contact" class="hover:text-blue-200 transition-colors focus-ring rounded px-2 py-1 {{ request()->is('contact') ? 'text-blue-200 font-semibold' : '' }}">Contact</a></li>
                        <li><a href="/dashboard" class="bg-white/10 hover:bg-white/20 transition-colors px-4 py-2 rounded-lg focus-ring {{ request()->is('dashboard') ? 'bg-white/20' : '' }}">Dashboard</a></li>
                    </ul>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden focus-ring rounded p-2" id="mobile-menu-button" aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="mobile-menu fixed inset-y-0 left-0 w-64 bg-blue-800 z-50 md:hidden" id="mobile-menu">
                <div class="flex items-center justify-between p-4 border-b border-blue-700">
                    <span class="text-lg font-semibold">Menu</span>
                    <button class="focus-ring rounded p-2" id="close-mobile-menu" aria-label="Close mobile menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="p-4">
                    <ul class="space-y-4">
                        <li><a href="/" class="block py-2 px-4 rounded hover:bg-blue-700 transition-colors {{ request()->is('/') ? 'bg-blue-700' : '' }}">Home</a></li>
                        <li><a href="/about" class="block py-2 px-4 rounded hover:bg-blue-700 transition-colors {{ request()->is('about') ? 'bg-blue-700' : '' }}">About</a></li>
                        <li><a href="/services" class="block py-2 px-4 rounded hover:bg-blue-700 transition-colors {{ request()->is('services') ? 'bg-blue-700' : '' }}">Services</a></li>
                        <li><a href="/contact" class="block py-2 px-4 rounded hover:bg-blue-700 transition-colors {{ request()->is('contact') ? 'bg-blue-700' : '' }}">Contact</a></li>
                        <li><a href="/dashboard" class="block py-2 px-4 rounded bg-blue-700 hover:bg-blue-600 transition-colors {{ request()->is('dashboard') ? 'bg-blue-600' : '' }}">Dashboard</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Mobile menu overlay -->
        <div class="mobile-menu-overlay fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden hidden" id="mobile-menu-overlay"></div>
    </nav>

    <!-- Main Content -->
    <main id="main-content" class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="gradient-blue text-white mt-12" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 py-8 md:py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                
                <!-- Company Info -->
                <div class="text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start space-x-3 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Sabali Solutions Logo" class="h-10 w-10 md:h-12 md:w-12 rounded-full shadow-lg border-2 border-white/20">
                        <div>
                            <h3 class="text-lg md:text-xl font-bold">Sabali Solutions</h3>
                            <p class="text-blue-100 text-xs md:text-sm italic">Every Transaction Matters</p>
                        </div>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed px-4 md:px-0">
                        Leading provider of IT solutions, financial services, and wellness products in Malawi.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="text-center">
                    <h4 class="text-base md:text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-blue-100 text-sm">
                        <li><a href="/" class="hover:text-white transition-colors focus-ring rounded px-1">Home</a></li>
                        <li><a href="/about" class="hover:text-white transition-colors focus-ring rounded px-1">About Us</a></li>
                        <li><a href="/services" class="hover:text-white transition-colors focus-ring rounded px-1">Our Services</a></li>
                        <li><a href="/contact" class="hover:text-white transition-colors focus-ring rounded px-1">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="text-center md:text-right">
                    <h4 class="text-base md:text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="space-y-2 text-blue-100 text-sm mb-4">
                        <p class="flex items-center justify-center md:justify-end space-x-2">
                            <i class="fas fa-envelope w-4 flex-shrink-0"></i>
                            <a href="mailto:blesskapha@outlook.com" class="hover:text-white transition-colors focus-ring rounded px-1 break-all">blesskapha@outlook.com</a>
                        </p>
                        <p class="flex items-center justify-center md:justify-end space-x-2">
                            <i class="fas fa-phone w-4 flex-shrink-0"></i>
                            <a href="tel:0995485733" class="hover:text-white transition-colors focus-ring rounded px-1">0995485733</a>
                        </p>
                        <p class="flex items-center justify-center md:justify-end space-x-2">
                            <i class="fas fa-map-marker-alt w-4 flex-shrink-0"></i>
                            <span>Zomba, Malawi</span>
                        </p>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="flex justify-center md:justify-end space-x-3 md:space-x-4">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 md:w-10 md:h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors focus-ring flex-shrink-0" aria-label="Facebook">
                            <i class="fab fa-facebook text-base md:text-lg"></i>
                        </a>
                        <a href="https://wa.me/265995485733" target="_blank" rel="noopener noreferrer" class="w-9 h-9 md:w-10 md:h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors focus-ring flex-shrink-0" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp text-base md:text-lg"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 md:w-10 md:h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors focus-ring flex-shrink-0" aria-label="Instagram">
                            <i class="fab fa-instagram text-base md:text-lg"></i>
                        </a>
                        <a href="mailto:blesskapha@outlook.com" class="w-9 h-9 md:w-10 md:h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors focus-ring flex-shrink-0" aria-label="Email">
                            <i class="fas fa-envelope text-base md:text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-blue-600 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center text-blue-100 text-xs md:text-sm space-y-2 md:space-y-0">
                    <p class="text-center md:text-left">&copy; {{ date('Y') }} Sabali Solutions. All Rights Reserved.</p>
                    <div class="flex flex-wrap justify-center space-x-4">
                        <a href="#" class="hover:text-white transition-colors focus-ring rounded px-1">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors focus-ring rounded px-1">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMobileMenu = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.remove('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'true');
            document.body.classList.add('overflow-hidden');
        }

        function closeMobileMenuFunc() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('overflow-hidden');
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
        mobileMenuOverlay.addEventListener('click', closeMobileMenuFunc);

        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMobileMenuFunc();
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>