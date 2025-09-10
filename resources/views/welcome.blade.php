@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-red-500 to-blue-700 text-white">
        <div class="max-w-6xl mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to Sabali Solutions</h1>
                <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto leading-relaxed">
                    Driving innovation, financial inclusion, and wellness in Malawi. 
                    We provide trusted IT solutions, financial services, 
                    and health & wellness products under one unified brand.
                </p>
                <a href="/services" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                    Explore Our Services
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Sabali?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We're committed to delivering reliable, innovative solutions that drive real results for our clients.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-sm border">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We integrate technology, finance, and wellness solutions to deliver modern, 
                        scalable, and practical services that meet today's business challenges.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-sm border">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Trust</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Registered in Malawi and fully compliant with MRA standards. 
                        You can rely on our commitment to transparency and integrity in all operations.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-sm border">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Community Impact</h3>
                    <p class="text-gray-600 leading-relaxed">
                        "Every Transaction Matters." We empower individuals, families, 
                        and businesses across Malawi to achieve sustainable growth and success.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Overview -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Comprehensive solutions designed to support your digital, financial, and wellness needs
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-gray-900">IT Solutions</h3>
                    <p class="text-gray-600 text-sm">
                        Professional IT support, repairs, and custom system development for businesses of all sizes.
                    </p>
                </div>
                
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-gray-900">Financial Services</h3>
                    <p class="text-gray-600 text-sm">
                        Microloans, investment opportunities, and mobile money services to support financial growth.
                    </p>
                </div>
                
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-gray-900">Health & Wellness</h3>
                    <p class="text-gray-600 text-sm">
                        Quality medicines, healthcare products, and cosmetics for comprehensive wellness and beauty.
                    </p>
                </div>
                
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="w-16 h-16 bg-orange-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-gray-900">Business Growth</h3>
                    <p class="text-gray-600 text-sm">
                        Strategic support for agriculture and small enterprises with proven expansion methodologies.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-12 bg-black-600">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-blue-100 mb-6 max-w-2xl mx-auto">
                Contact us today to learn how Sabali Solutions can help transform your business 
                with our integrated technology, financial, and wellness services.
            </p>
            <div class="space-x-4">
                <a href="/contact" class="inline-block bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                    Contact Us
                </a>
                <a href="/about" class="inline-block border border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    Learn More
                </a>
            </div>
        </div>
    </div>
@endsection