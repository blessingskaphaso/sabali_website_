@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-6">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-5xl font-extrabold text-blue-700 mb-4">About Sabali Solutions</h1>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
            A diversified, forward-thinking company in Malawi, driving innovation in IT, finance, and health & wellness.
        </p>
    </div>

    <!-- Mission & Vision -->
    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg">
            <h2 class="text-2xl font-semibold mb-3">🌍 Our Mission</h2>
            <p>To provide innovative IT, financial, and health & wellness solutions that improve lives, foster business growth, and promote sustainable development in Malawi.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg">
            <h2 class="text-2xl font-semibold mb-3">🚀 Our Vision</h2>
            <p>To be Malawi’s leading integrated service provider, recognized for innovation, quality, and holistic solutions that meet technology, financial, and personal care needs.</p>
        </div>
    </div>

    <!-- Values -->
    <div class="bg-blue-50 p-8 rounded-lg shadow-inner mb-12">
        <h2 class="text-3xl font-bold text-blue-700 mb-6">💎 Our Core Values</h2>
        <ul class="grid md:grid-cols-2 gap-4 text-gray-800">
            <li><strong>Innovation:</strong> Developing creative and practical solutions across multiple sectors.</li>
            <li><strong>Reliability:</strong> Consistently delivering high-quality products and services.</li>
            <li><strong>Sustainability:</strong> Investing in growth strategies that benefit clients, communities, and the business.</li>
            <li><strong>Integrity:</strong> Maintaining transparency, ethical practices, and client trust.</li>
        </ul>
    </div>

    <!-- Target Market -->
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-blue-700 mb-4">📌 Target Market</h2>
        <p class="text-gray-700 leading-relaxed">
            Our services are designed for individuals, small to medium businesses, institutions, and health-conscious consumers across Malawi. Whether you need IT solutions, financial support, or wellness products, Sabali Solutions is here to serve.
        </p>
    </div>

    <!-- Competitive Edge -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-lg">
        <h2 class="text-3xl font-bold text-blue-700 mb-4">🏆 Competitive Edge</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li>Integrated IT, financial, and health & wellness solutions under one trusted brand.</li>
            <li>Strategic investment planning and phased growth for business sustainability.</li>
            <li>Personalized, hands-on support tailored to client needs.</li>
            <li>Strong local expertise and understanding of Malawi’s market landscape.</li>
        </ul>
    </div>
</div>
@endsection
