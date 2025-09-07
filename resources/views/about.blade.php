@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">About Sabali Solutions</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
            A diversified, forward-thinking company in Malawi, driving innovation in IT, finance, and health & wellness 
            to create lasting value for our clients and communities.
        </p>
    </div>

    <!-- Mission & Vision -->
    <div class="grid md:grid-cols-2 gap-8 mb-16">
        <div class="bg-white border rounded-lg p-8">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-semibold mb-4 text-gray-900">Our Mission</h2>
            <p class="text-gray-600 leading-relaxed">
                To provide innovative IT, financial, and health & wellness solutions that improve lives, 
                foster business growth, and promote sustainable development across Malawi.
            </p>
        </div>
        <div class="bg-white border rounded-lg p-8">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-semibold mb-4 text-gray-900">Our Vision</h2>
            <p class="text-gray-600 leading-relaxed">
                To be Malawi's leading integrated service provider, recognized for innovation, quality, 
                and comprehensive solutions that meet technology, financial, and personal care needs.
            </p>
        </div>
    </div>

    <!-- Core Values -->
    <div class="bg-gray-50 rounded-lg p-8 mb-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h2>
            <p class="text-gray-600">The principles that guide everything we do</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Innovation</h3>
                    <p class="text-gray-600 text-sm">Developing creative and practical solutions across multiple sectors to meet evolving client needs.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Reliability</h3>
                    <p class="text-gray-600 text-sm">Consistently delivering high-quality products and services that our clients can depend on.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Sustainability</h3>
                    <p class="text-gray-600 text-sm">Investing in growth strategies that create long-term benefits for clients, communities, and our business.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Integrity</h3>
                    <p class="text-gray-600 text-sm">Maintaining transparency, ethical practices, and building lasting trust with all our stakeholders.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Target Market -->
    <div class="mb-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Who We Serve</h2>
            <p class="text-gray-600">Our diverse client base across Malawi</p>
        </div>
        <div class="bg-white border rounded-lg p-8">
            <p class="text-gray-700 leading-relaxed text-center max-w-4xl mx-auto">
                Our comprehensive services are designed for individuals, small to medium businesses, institutions, 
                and health-conscious consumers across Malawi. Whether you need IT solutions, financial support, 
                or wellness products, Sabali Solutions provides tailored services to meet your specific requirements.
            </p>
        </div>
    </div>

    <!-- Competitive Edge -->
    <div class="bg-blue-600 rounded-lg p-8 text-white">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold mb-4">Our Competitive Advantage</h2>
            <p class="text-blue-100">What sets us apart in the Malawian market</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-blue-50">Integrated IT, financial, and health & wellness solutions under one trusted brand</p>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-blue-50">Strategic investment planning and phased growth for business sustainability</p>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-blue-50">Personalized, hands-on support tailored to individual client needs</p>
            </div>
            <div class="flex items-start space-x-3">
                <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-blue-50">Deep local expertise and understanding of Malawi's unique market landscape</p>
            </div>
        </div>
    </div>
</div>
@endsection