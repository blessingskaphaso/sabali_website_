@extends('layout')

@section('content')
<div class="min-h-screen bg-slate-950 text-slate-100 font-sans selection:bg-blue-500/30">

    <!-- Hero Section -->
    <section class="relative pt-20 pb-20 lg:pt-32 lg:pb-32 overflow-hidden">
        <!-- Background Decorative Gradients -->
        <div class="pointer-events-none absolute inset-0 flex justify-center">
            <div class="relative w-full max-w-6xl">
                <div class="absolute -top-32 -left-32 w-1/2 aspect-square bg-blue-600/15 blur-3xl rounded-full"></div>
                <div class="absolute -bottom-32 -right-32 w-1/2 aspect-square bg-indigo-600/15 blur-3xl rounded-full"></div>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 mb-6 rounded-full border border-blue-500/25 bg-blue-500/10 px-4 py-1.5 text-sm font-medium text-blue-300">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Innovating Future Partnerships
            </span>

            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight text-blue-400 mb-6 leading-snug">
                Elevate Your Enterprise with <br>
                <span class="bg-gradient-to-r from-blue-400 via-sky-400 to-indigo-400 bg-clip-text text-transparent">
                    Sabali Solutions
                </span>
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-slate-400 mb-10 leading-relaxed max-w-2xl mx-auto">
                We provide world-class technical and strategic solutions across IT, Finance, and Healthcare in Malawi –
                empowering organizations through secure, modern, and scalable architectures.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/services"
                   class="inline-flex items-center justify-center rounded-full bg-blue-600 px-8 py-3.5 text-base sm:text-lg font-semibold text-white shadow-lg shadow-blue-900/30 transition-all hover:bg-blue-500 hover:shadow-blue-700/40 hover:-translate-y-0.5">
                    Explore Services
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="/contact"
                   class="inline-flex items-center justify-center rounded-full border border-slate-700 bg-slate-900/60 px-8 py-3.5 text-base sm:text-lg font-semibold text-slate-100 transition-all hover:bg-slate-800 hover:border-slate-500">
                    Book a Consultation
                </a>
            </div>
        </div>

        <!-- Glassmorphism Preview Card -->
        <div class="container mx-auto px-6 mt-16 lg:mt-24">
            <div class="relative mx-auto max-w-5xl">
                <div class="absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-blue-500 via-sky-500 to-indigo-500 blur opacity-25"></div>

                <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900/60 backdrop-blur-xl shadow-2xl">
                    <div class="flex items-center gap-2 border-b border-white/5 bg-white/5 px-4 py-3">
                        <div class="flex gap-1.5">
                            <span class="h-3 w-3 rounded-full bg-red-500/70"></span>
                            <span class="h-3 w-3 rounded-full bg-amber-400/70"></span>
                            <span class="h-3 w-3 rounded-full bg-emerald-400/70"></span>
                        </div>
                        <div class="mx-auto text-xs font-mono text-slate-400">
                            sabali-solutions
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6 lg:p-10">
                        <!-- IT Solutions Card -->
                        <div class="group h-28 sm:h-32 rounded-xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20 p-4 hover:border-blue-400/40 transition-all duration-300 hover:scale-105">
                            <div class="flex flex-col h-full justify-between">
                                <div class="flex items-center justify-between">
                                    <i class="fas fa-laptop-code text-xl sm:text-2xl text-blue-400"></i>
                                    <span class="text-[0.65rem] sm:text-xs font-mono text-emerald-400">Active</span>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-xs sm:text-sm mb-0.5">IT Solutions</h4>
                                    <p class="text-slate-400 text-[0.65rem] sm:text-xs">Hardware & Software</p>
                                </div>
                            </div>
                        </div>

                        <!-- Financial Services Card -->
                        <div class="group h-28 sm:h-32 rounded-xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20 p-4 hover:border-emerald-400/40 transition-all duration-300 hover:scale-105">
                            <div class="flex flex-col h-full justify-between">
                                <div class="flex items-center justify-between">
                                    <i class="fas fa-hand-holding-usd text-xl sm:text-2xl text-emerald-400"></i>
                                    <span class="text-[0.65rem] sm:text-xs font-mono text-emerald-400">Active</span>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-xs sm:text-sm mb-0.5">Financial Services</h4>
                                    <p class="text-slate-400 text-[0.65rem] sm:text-xs">Microloans & Support</p>
                                </div>
                            </div>
                        </div>

                        <!-- Health & Wellness Card -->
                        <div class="group h-28 sm:h-32 rounded-xl bg-gradient-to-br from-purple-500/10 to-pink-500/10 border border-purple-500/20 p-4 hover:border-purple-400/40 transition-all duration-300 hover:scale-105">
                            <div class="flex flex-col h-full justify-between">
                                <div class="flex items-center justify-between">
                                    <i class="fas fa-heartbeat text-xl sm:text-2xl text-purple-400"></i>
                                    <span class="text-[0.65rem] sm:text-xs font-mono text-emerald-400">Active</span>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-xs sm:text-sm mb-0.5">Health & Wellness</h4>
                                    <p class="text-slate-400 text-[0.65rem] sm:text-xs">Premium Products</p>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-3 rounded-xl bg-gradient-to-br from-slate-800/60 to-slate-900/60 border border-white/5 overflow-hidden">
                            <div class="p-4 sm:p-6 lg:p-8">
                                <div class="flex flex-col sm:flex-row items-center justify-between mb-4 sm:mb-6 gap-3">
                                    <div class="text-center sm:text-left">
                                        <h3 class="text-white font-semibold text-base sm:text-lg mb-1">Platform Overview</h3>
                                        <p class="text-slate-400 text-xs sm:text-sm">Real-time business metrics</p>
                                    </div>
                                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-mono">
                                        <i class="fas fa-circle text-[6px] mr-1"></i>
                                        Live
                                    </span>
                                </div>

                                <!-- Stats Grid -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
                                    <div class="bg-slate-800/40 rounded-lg p-3 sm:p-4 border border-white/5">
                                        <div class="text-slate-400 text-[0.65rem] sm:text-xs mb-1">Active Clients</div>
                                        <div class="text-white text-xl sm:text-2xl font-bold">25+</div>
                                        <div class="text-emerald-400 text-[0.65rem] sm:text-xs mt-1">
                                            <i class="fas fa-arrow-up text-[6px]"></i> 12% growth
                                        </div>
                                    </div>

                                    <div class="bg-slate-800/40 rounded-lg p-3 sm:p-4 border border-white/5">
                                        <div class="text-slate-400 text-[0.65rem] sm:text-xs mb-1">Services</div>
                                        <div class="text-white text-xl sm:text-2xl font-bold">5+</div>
                                        <div class="text-blue-400 text-[0.65rem] sm:text-xs mt-1">
                                            <i class="fas fa-check text-[6px]"></i> Available
                                        </div>
                                    </div>

                                    <div class="bg-slate-800/40 rounded-lg p-3 sm:p-4 border border-white/5">
                                        <div class="text-slate-400 text-[0.65rem] sm:text-xs mb-1">Location</div>
                                        <div class="text-white text-lg sm:text-2xl font-bold">Zomba</div>
                                        <div class="text-purple-400 text-[0.65rem] sm:text-xs mt-1">
                                            <i class="fas fa-map-marker-alt text-[6px]"></i> Malawi
                                        </div>
                                    </div>

                                    <div class="bg-slate-800/40 rounded-lg p-3 sm:p-4 border border-white/5">
                                        <div class="text-slate-400 text-[0.65rem] sm:text-xs mb-1">Support</div>
                                        <div class="text-white text-xl sm:text-2xl font-bold">24/7</div>
                                        <div class="text-emerald-400 text-[0.65rem] sm:text-xs mt-1">
                                            <i class="fas fa-clock text-[6px]"></i> Available
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 lg:py-24 bg-slate-900/40 border-t border-slate-800/60">
        <div class="container mx-auto px-6">
            <div class="text-center mb-14 lg:mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-deep-blue-400 mb-3">
                    Why Partners Choose Us
                </h2>
                <div class="mx-auto mb-6 h-1.5 w-20 rounded-full bg-gradient-to-r from-blue-500 via-sky-400 to-indigo-500"></div>
                <p class="mx-auto max-w-2xl text-slate-400">
                    Registered in Malawi and fully compliant, we combine deep technical expertise,
                    financial insight, and a commitment to integrity to deliver measurable impact.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Card 1 -->
                <div class="group rounded-2xl border border-slate-800 bg-slate-950/40 p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-500/60 hover:shadow-blue-900/40">
                    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-blue-900/25 text-blue-400 transition-transform group-hover:scale-110">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-deep-blue-400 transition-colors group-hover:text-blue-400">
                        Innovation
                    </h3>
                    <p class="text-sm sm:text-base leading-relaxed text-slate-400">
                        We architect modern, scalable solutions that integrate technology, finance, and wellness
                        to address today’s most complex operational challenges.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group rounded-2xl border border-slate-800 bg-slate-950/40 p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-500/60 hover:shadow-blue-900/40">
                    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-blue-900/25 text-blue-400 transition-transform group-hover:scale-110">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-deep-blue-400 transition-colors group-hover:text-blue-400">
                        Trusted Compliance
                    </h3>
                    <p class="text-sm sm:text-base leading-relaxed text-slate-400">
                        Fully registered and MRA compliant, we operate with transparency, robust governance,
                        and documented processes in every engagement.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="group rounded-2xl border border-slate-800 bg-slate-950/40 p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-500/60 hover:shadow-blue-900/40">
                    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-blue-900/25 text-blue-400 transition-transform group-hover:scale-110">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-deep-blue-400 transition-colors group-hover:text-blue-400">
                        Impact
                    </h3>
                    <p class="text-sm sm:text-base leading-relaxed text-slate-400">
                        We focus on real outcomes – empowering individuals and small businesses in Malawi
                        to achieve sustainable, long-term growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 lg:py-24">
        <div class="container mx-auto px-6">
            <div class="mb-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-deep-blue-400 mb-3">
                    Our Core Pillars
                </h2>
                <p class="mx-auto max-w-2xl text-slate-400 text-sm sm:text-base">
                    Integrated solutions across technology, finance, health, and enterprise support –
                    all aligned to drive measurable value for your organization.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- IT -->
                <div class="group rounded-2xl bg-slate-950/50 border border-slate-800/80 border-t-4 border-t-blue-500 p-8 transition-all hover:bg-slate-900/80 hover:border-blue-400/80 hover:-translate-y-0.5">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-2">
                        IT Solutions
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-400 mb-5">
                        Professional repairs, secure system development, and 24/7 business IT support tailored
                        to resilient, modern infrastructure.
                    </p>
                    <a href="/services" class="inline-flex items-center text-sm font-semibold text-blue-400 hover:text-blue-300">
                        View Details
                        <span class="ml-1">&rarr;</span>
                    </a>
                </div>

                <!-- Finance -->
                <div class="group rounded-2xl bg-slate-950/50 border border-slate-800/80 border-t-4 border-t-emerald-500 p-8 transition-all hover:bg-slate-900/80 hover:border-emerald-400/80 hover:-translate-y-0.5">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-2">
                        Financial Services
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-400 mb-5">
                        Empowering growth through responsible microloans, structured lending, and
                        strategic investment opportunities.
                    </p>
                    <a href="/services" class="inline-flex items-center text-sm font-semibold text-emerald-400 hover:text-emerald-300">
                        View Details
                        <span class="ml-1">&rarr;</span>
                    </a>
                </div>

                <!-- Health -->
                <div class="group rounded-2xl bg-slate-950/50 border border-slate-800/80 border-t-4 border-t-rose-500 p-8 transition-all hover:bg-slate-900/80 hover:border-rose-400/80 hover:-translate-y-0.5">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-2">
                        Health &amp; Wellness
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-400 mb-5">
                        Supplying quality pharmaceuticals, supplements, and cosmetics to support
                        holistic wellness and beauty.
                    </p>
                    <a href="/services" class="inline-flex items-center text-sm font-semibold text-rose-400 hover:text-rose-300">
                        View Details
                        <span class="ml-1">&rarr;</span>
                    </a>
                </div>

                <!-- Growth -->
                <div class="group rounded-2xl bg-slate-950/50 border border-slate-800/80 border-t-4 border-t-amber-500 p-8 transition-all hover:bg-slate-900/80 hover:border-amber-400/80 hover:-translate-y-0.5">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-2">
                        Business Growth
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-400 mb-5">
                        Strategic advisory and on-the-ground support for agriculture and small enterprises,
                        helping teams scale effectively and sustainably.
                    </p>
                    <a href="/services" class="inline-flex items-center text-sm font-semibold text-amber-400 hover:text-amber-300">
                        View Details
                        <span class="ml-1">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-24 px-6">
        <div class="container mx-auto max-w-5xl">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-blue-600 via-sky-500 to-indigo-600 px-6 sm:px-8 md:px-10 lg:px-14 py-14 md:py-16 text-center shadow-2xl shadow-blue-900/50">
                <div class="pointer-events-none absolute -left-24 -top-24 h-48 w-48 rounded-full bg-white/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -right-24 -bottom-24 h-56 w-56 rounded-full bg-sky-300/20 blur-3xl"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Ready to scale your business?
                    </h2>
                    <p class="mx-auto mb-10 max-w-2xl text-base md:text-lg text-black/90">
                        Contact us today to learn how Sabali Solutions can transform your operations
                        with integrated technology, financial services, and wellness-focused support.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="/contact"
                           class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3.5 text-sm md:text-base font-bold text-blue-700 shadow-xl shadow-slate-900/30 transition-all hover:bg-slate-100 hover:-translate-y-0.5">
                            Contact Us Today
                        </a>
                        <a href="/about"
                           class="inline-flex items-center justify-center rounded-full border border-blue-200/70 bg-white/5 px-8 py-3.5 text-sm md:text-base font-bold text-white transition-all hover:bg-blue-500/20 hover:border-white/80">
                            About Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection