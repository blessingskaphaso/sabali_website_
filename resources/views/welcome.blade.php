@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="text-center py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-lg shadow-lg">
        <h1 class="text-5xl font-extrabold mb-4">Welcome to Sabali Solutions</h1>
        <p class="text-lg mb-6">Your trusted partner in IT Solutions, Loans, Mobile Money, and Medicine & Cosmetics.</p>
        <a href="/services" class="bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">Explore Our Services</a>
    </div>

    <!-- Why Choose Us -->
    <div class="mt-12">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-8">Why Choose Sabali?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-2">💡 Innovation</h3>
                <p>We integrate technology and financial services to bring modern, reliable, and scalable solutions.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-2">🤝 Trust</h3>
                <p>Registered under Malawian law and compliant with MRA standards — you can count on us for transparency.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-2">🌍 Community Impact</h3>
                <p>Every transaction matters. We exist to empower individuals, families, and businesses to thrive.</p>
            </div>
        </div>
    </div>
@endsection
