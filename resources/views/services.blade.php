@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold mb-10 text-center text-blue-700">Our Services</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- IT Solutions -->
        <div class="bg-white p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💻
            <h2 class="text-2xl font-semibold mt-4 mb-2">Information Technology Solutions</h2>
            <ul class="list-disc pl-6">
                <li>Computer installation, repair, and maintenance</li>
                <li>Software installation and troubleshooting</li>
                <li>Hard drive recovery and hardware servicing</li>
                <li>Web and mobile application development</li>
                <li>Secure management systems for institutions</li>
            </ul>
        </div>

        <!-- Financial Services -->
        <div class="bg-white p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💰
            <h2 class="text-2xl font-semibold mt-4 mb-2">Financial Services</h2>
            <ul class="list-disc pl-6">
                <li>Microloans and small-scale lending</li>
                <li>Mobile money facilitation and financial solutions</li>
                <li>Investment planning and phased growth strategies</li>
            </ul>
        </div>

        <!-- Health & Wellness -->
        <div class="bg-white p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💊
            <h2 class="text-2xl font-semibold mt-4 mb-2">Health & Wellness – Sabali Medicine & Cosmetics</h2>
            <ul class="list-disc pl-6">
                <li>Affordable, high-quality medicines and supplements</li>
                <li>Safe and effective cosmetics and personal care products</li>
                <li>Distribution and retail for health & beauty products</li>
            </ul>
        </div>

        <!-- Business Growth & Enterprise Support -->
        <div class="bg-white p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:shadow-lg">
            🌱
            <h2 class="text-2xl font-semibold mt-4 mb-2">Business Growth & Enterprise Support</h2>
            <ul class="list-disc pl-6">
                <li>Agricultural and small enterprise support (e.g., poultry projects)</li>
                <li>Profit reinvestment strategies for expansion</li>
                <li>Risk management and feasibility projections</li>
            </ul>
        </div>
    </div>
@endsection
