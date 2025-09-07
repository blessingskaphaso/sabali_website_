@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="text-center py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-lg shadow-lg">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Welcome to Sabali Solutions</h1>
        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            Driving innovation, financial inclusion, and wellness in Malawi. 
            We provide trusted IT solutions, financial services, mobile money, 
            and health & wellness products under one brand.
        </p>
        <a href="/services" class="bg-white text-blue-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
            🚀 Explore Our Services
        </a>
    </div>

    <!-- Why Choose Us -->
    <div class="mt-16">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Why Choose Sabali?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold mb-3">💡 Innovation</h3>
                <p class="text-gray-600">We integrate technology, finance, and wellness solutions to deliver modern, scalable, and practical services.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold mb-3">🤝 Trust</h3>
                <p class="text-gray-600">Registered in Malawi and compliant with MRA standards you can rely on our transparency and integrity.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold mb-3">🌍 Community Impact</h3>
                <p class="text-gray-600">“Every Transaction Matters.” We empower individuals, families, and businesses to grow and thrive.</p>
            </div>
        </div>
    </div>

    <!-- Quick Service Highlights -->
    <div class="mt-20">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">What We Do</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                💻
                <h3 class="text-xl font-semibold mt-3">IT Solutions</h3>
                <p class="text-gray-600">Smart IT support, repairs, and system development for individuals and businesses.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                💰
                <h3 class="text-xl font-semibold mt-3">Financial Services</h3>
                <p class="text-gray-600">Microloans, investments, and mobile money services to support financial growth.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                💊
                <h3 class="text-xl font-semibold mt-3">Medicine & Cosmetics</h3>
                <p class="text-gray-600">Affordable medicines, healthcare products, and cosmetics for wellness and beauty.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                🌱
                <h3 class="text-xl font-semibold mt-3">Business Growth</h3>
                <p class="text-gray-600">Support for agriculture and small enterprises with phased expansion strategies.</p>
            </div>
        </div>
    </div>
@endsection
