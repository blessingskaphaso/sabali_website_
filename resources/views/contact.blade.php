@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto py-12">
        <h1 class="text-4xl font-bold text-blue-700 mb-6">Contact Us</h1>

        <p class="mb-2"><strong>Email:</strong> blesskapha@outlook.com</p>
        <p class="mb-2"><strong>Phone:</strong> 0995485733</p>
        <p class="mb-2"><strong>Address:</strong> Private Bag 50, Zomba, Malawi</p>
        <p class="mb-6"><strong>Business Hours:</strong> Mon - Sat (8:00am - 5:00pm)</p>

        <form class="bg-white p-6 rounded-lg shadow-md">
            <input type="text" placeholder="Your Name" class="w-full mb-4 p-3 border rounded">
            <input type="email" placeholder="Your Email" class="w-full mb-4 p-3 border rounded">
            <textarea placeholder="Your Message" class="w-full mb-4 p-3 border rounded"></textarea>
            <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-600">Send Message</button>
        </form>

        <!-- Map -->
        <div class="mt-8">
            <iframe class="w-full h-64 rounded-lg shadow-md"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.152136342165!2d34.298!3d-13.782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z!5e0!3m2!1sen!2smw!4v1610000000000"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection
