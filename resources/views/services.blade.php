@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold mb-10 text-center text-blue-700">Our Services</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- IT Solutions -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💻
            <h2 class="text-xl font-semibold mt-4 mb-2">IT Solutions</h2>
            <p>Software development, website design, troubleshooting, and IT support for businesses and individuals.</p>
        </div>

        <!-- Loans -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💰
            <h2 class="text-xl font-semibold mt-4 mb-2">Loans</h2>
            <p>We offer flexible loans with transparent repayment terms to support your personal and business goals.</p>
        </div>

        <!-- Mobile Money -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
            📱
            <h2 class="text-xl font-semibold mt-4 mb-2">Mobile Money</h2>
            <p>Reliable mobile money services including withdrawals, deposits, and money swaps with leading providers.</p>
        </div>

        <!-- Medicine & Cosmetics -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
            💊
            <h2 class="text-xl font-semibold mt-4 mb-2">Medicine & Cosmetics</h2>
            <p>Affordable medicines, essential healthcare products, and high-quality cosmetics for wellness and beauty.</p>
        </div>
    </div>
@endsection
