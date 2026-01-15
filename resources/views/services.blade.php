@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-center mb-12 sm:mb-16">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Services</h1>
        <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto">
            Comprehensive solutions designed to meet your technology, financial, and wellness needs
        </p>
    </header>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
        <!-- IT Solutions -->
        <article class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-blue-200 transition-all duration-300">
            <div class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-900">Information Technology Solutions</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Professional IT support and development services to keep your technology running smoothly and efficiently.
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Computer installation, repair, and maintenance</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Software installation and troubleshooting</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Hard drive recovery and hardware servicing</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Web and mobile application development</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Secure management systems for institutions</span>
                </li>
            </ul>
        </article>

        <!-- Financial Services -->
        <article class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-green-200 transition-all duration-300">
            <div class="w-14 h-14 sm:w-16 sm:h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-900">Financial Services</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Accessible financial solutions designed to support your growth and help you achieve your financial goals.
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Microloans and small-scale lending</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Mobile money facilitation and financial solutions</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Investment planning and phased growth strategies</span>
                </li>
            </ul>
        </article>

        <!-- Health & Wellness -->
        <article class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-purple-200 transition-all duration-300">
            <div class="w-14 h-14 sm:w-16 sm:h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-900">Health & Wellness</h2>
            <p class="text-purple-700 mb-2 font-semibold text-sm">Sabali Medicine & Cosmetics</p>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Quality healthcare products and cosmetics to support your wellness and beauty needs.
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-purple-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Affordable, high-quality medicines and supplements</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-purple-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Safe and effective cosmetics and personal care products</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-purple-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Distribution and retail for health & beauty products</span>
                </li>
            </ul>
        </article>

        <!-- Business Growth & Enterprise Support -->
        <article class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-orange-200 transition-all duration-300">
            <div class="w-14 h-14 sm:w-16 sm:h-16 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-semibold mb-3 text-gray-900">Business Growth & Enterprise Support</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Strategic business support services to help enterprises expand sustainably and manage growth effectively.
            </p>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-orange-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Agricultural and small enterprise support (e.g., poultry projects)</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-orange-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Profit reinvestment strategies for expansion</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-orange-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Risk management and feasibility projections</span>
                </li>
            </ul>
        </article>
    </div>

    <!-- Contact CTA -->
    <section class="mt-12 sm:mt-16 text-center bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl p-8 sm:p-10 border border-gray-100">
        <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Ready to Get Started?</h3>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Contact us today to discuss how our services can help you achieve your goals. 
            We're here to provide personalized solutions for your unique needs.
        </p>
        <a href="/contact" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200 shadow-sm hover:shadow-md">
            Contact Us Today
        </a>
    </section>
</div>
@endsection