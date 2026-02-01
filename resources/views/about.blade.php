@extends('layout')

@section('content')
<div class="min-h-screen bg-slate-950 text-slate-100 font-sans selection:bg-blue-500/30">
    
    <!-- Header Section -->
    <div class="relative pt-20 pb-16 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-6xl pointer-events-none">
            <div class="absolute top-[-10%] right-[-5%] w-[40%] h-[40%] bg-blue-600/10 blur-[100px] rounded-full"></div>
        </div>
        
        <div class="container mx-auto px-6 text-center relative z-10">
            <span class="inline-block mb-4 bg-blue-500/10 text-blue-400 border border-blue-500/20 px-4 py-1 text-xs uppercase tracking-widest rounded-full font-bold">
                Our Story
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-blue-400 mb-6">
                About <span class="text-blue-500">Sabali Solutions</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
                A diversified, forward-thinking company in Malawi, driving innovation in IT, finance, and health & wellness to create lasting value for our clients and communities.
            </p>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="container mx-auto px-6 mb-24">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-slate-900 border border-slate-800 p-10 rounded-3xl hover:border-blue-500/30 transition-all group">
                <div class="w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center mb-6 text-blue-400 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold mb-4 text-blue">Our Mission</h2>
                <p class="text-slate-400 leading-relaxed">
                    To provide innovative IT, financial, and health & wellness solutions that improve lives, foster business growth, and promote sustainable development across Malawi.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-10 rounded-3xl hover:border-indigo-500/30 transition-all group text-right flex flex-col items-end">
                <div class="w-14 h-14 bg-indigo-600/20 rounded-2xl flex items-center justify-center mb-6 text-indigo-400 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold mb-4 text-blue">Our Vision</h2>
                <p class="text-slate-400 leading-relaxed">
                    To be Malawi's leading integrated service provider, recognized for innovation, quality, and comprehensive solutions that meet technology, financial, and personal care needs.
                </p>
            </div>
        </div>
    </div>

    <!-- Core Values -->
    <div class="bg-slate-900/50 py-24 border-y border-slate-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-blue mb-4">Our Core Values</h2>
            <p class="text-slate-500 mb-16">The principles that guide our every transaction</p>
            
            <div class="grid md:grid-cols-4 gap-6">
                <!-- Innovation -->
                <div class="text-left p-6">
                    <div class="text-blue-500 font-mono text-xs mb-2 uppercase font-bold tracking-widest">01 / Innovation</div>
                    <p class="text-slate-300 text-sm">Developing creative and practical solutions across multiple sectors to meet evolving client needs.</p>
                </div>
                <!-- Reliability -->
                <div class="text-left p-6">
                    <div class="text-emerald-500 font-mono text-xs mb-2 uppercase font-bold tracking-widest">02 / Reliability</div>
                    <p class="text-slate-300 text-sm">Consistently delivering high-quality products and services that our clients can depend on.</p>
                </div>
                <!-- Sustainability -->
                <div class="text-left p-6">
                    <div class="text-purple-500 font-mono text-xs mb-2 uppercase font-bold tracking-widest">03 / Sustainability</div>
                    <p class="text-slate-300 text-sm">Investing in growth strategies that create long-term benefits for Malawi's future.</p>
                </div>
                <!-- Integrity -->
                <div class="text-left p-6">
                    <div class="text-rose-500 font-mono text-xs mb-2 uppercase font-bold tracking-widest">04 / Integrity</div>
                    <p class="text-slate-300 text-sm">Maintaining transparency, ethical practices, and building lasting trust with all stakeholders.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container mx-auto px-6 py-24">
        <h2 class="text-3xl font-bold text-center text-blue mb-16">The Minds Behind Sabali</h2>
        <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <!-- Peter -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-opacity"></div>
                <div class="relative bg-slate-900 p-8 rounded-3xl border border-slate-800 text-center">
                    <img src="{{ asset('images/founder1.jpg') }}" alt="Peter Blessings Kaphaso" class="mx-auto w-32 h-32 rounded-2xl object-cover shadow-2xl mb-6 border-2 border-slate-800 group-hover:border-blue-500/50 transition-colors">
                    <h3 class="text-xl font-bold text-white mb-1">Peter Blessings Kaphaso</h3>
                    <p class="text-blue-500 text-sm font-semibold mb-4">Co-Founder</p>
                    <blockquote class="italic text-slate-500 text-sm leading-relaxed">
                        “You do not understand now what I am doing, but later you will understand.”
                    </blockquote>
                </div>
            </div>

            <!-- Yankho -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition-opacity"></div>
                <div class="relative bg-slate-900 p-8 rounded-3xl border border-slate-800 text-center">
                    <img src="{{ asset('images/founder2.jpeg') }}" alt="Yankho Maseko" class="mx-auto w-32 h-32 rounded-2xl object-cover shadow-2xl mb-6 border-2 border-slate-800 group-hover:border-indigo-500/50 transition-colors">
                    <h3 class="text-xl font-bold text-white mb-1">Yankho Maseko</h3>
                    <p class="text-blue-500 text-sm font-semibold mb-4">Co-Founder</p>
                    <blockquote class="italic text-slate-500 text-sm leading-relaxed">
                        “Opportunities do not happen, you create them.”
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <!-- Competitive Advantage / Who We Serve -->
    <div class="container mx-auto px-6 pb-32">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-[3rem] p-12 lg:p-20 overflow-hidden relative shadow-2xl shadow-blue-900/40">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-[80px] rounded-full"></div>
            <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Our Competitive Edge</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-blue-50">
                            <svg class="w-5 h-5 text-blue-200" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Integrated IT, Finance, and Wellness solutions
                        </li>
                        <li class="flex items-center gap-3 text-blue-50">
                            <svg class="w-5 h-5 text-blue-200" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Strategic planning for business sustainability
                        </li>
                        <li class="flex items-center gap-3 text-blue-50">
                            <svg class="w-5 h-5 text-blue-200" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Deep local expertise in Malawi's landscape
                        </li>
                    </ul>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl shadow-xl">
                    <h3 class="text-xl font-bold text-white mb-4">Who We Serve</h3>
                    <p class="text-blue-50 text-sm leading-relaxed">
                        Comprehensive services designed for individuals, small to medium businesses, institutions, and health-conscious consumers across Malawi. Whether you need IT repairs, financial microloans, or wellness products, we provide tailored services to meet your specific requirements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection