@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Get in touch with our team. We're here to help with your IT, financial, and wellness needs.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contact Information -->
        <div class="lg:col-span-1">
            <div class="bg-blue-600 text-white rounded-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Get In Touch</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Email</h3>
                            <p class="text-blue-100">sabalisolutions@hotmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Phone</h3>
                            <p class="text-blue-100">0995485733</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Address</h3>
                            <p class="text-blue-100">Private Bag 50<br>Zomba, Malawi</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Business Hours</h3>
                            <p class="text-blue-100">Monday - Saturday<br>8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links or Additional Info -->
                <div class="mt-8 pt-6 border-t border-blue-500">
                    <p class="text-blue-100 text-sm">
                        We typically respond to inquiries within 24 hours during business days.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-2">
            <div class="bg-white border rounded-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                        </div>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                        <select id="service" name="service" 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                            <option value="">Select a service</option>
                            <option value="it-solutions">IT Solutions</option>
                            <option value="financial-services">Financial Services</option>
                            <option value="health-wellness">Health & Wellness</option>
                            <option value="business-growth">Business Growth</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"></textarea>
                    </div>
                    
                    <button type="submit" 
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="mt-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Find Us</h2>
            <p class="text-gray-600">Visit our office in Zomba, Malawi</p>
        </div>
        
        <div class="bg-white border rounded-lg p-4">
            <iframe class="w-full h-96 rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.152136342165!2d35.3188!3d-15.3875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d84c7e1e0e5555%3A0x123456789abcdef!2sZomba%2C%20Malawi!5e0!3m2!1sen!2smw!4v1610000000000"
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="mt-16 bg-gray-50 rounded-lg p-8 text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Ready to Work Together?</h3>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
            Whether you need IT support, financial services, or wellness products, 
            our team is ready to provide personalized solutions for your needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0995485733" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                Call Us Now
            </a>
            <a href="mailto:blesskapha@outlook.com" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                Send Email
            </a>
        </div>
    </div>
</div>
@endsection