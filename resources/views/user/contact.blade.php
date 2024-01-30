@extends('user.layouts.app')

@section('content')

    <div style="color: white" class="container mx-auto my-8 p-8 bg-white dark:bg-gray-800 rounded-lg shadow">

        <section>
            <h1 class="text-3xl font-semibold mb-4">Contact Us</h1>
            <p class="text-gray-700 dark:text-gray-300">
                Do you have any questions, suggestions, or feedback? We'd love to hear from you! Please use the contact form below or reach out to us via the provided contact details.
            </p>
        </section>

        <section class="mt-8">
            <form action="#" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 dark:text-gray-300">Your Name</label>
                    <input type="text" id="name" name="name" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300">Your Email</label>
                    <input type="email" id="email" name="email" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 dark:text-gray-300">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="form-input mt-1 block w-full" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </section>

        <section class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Contact Details</h2>
            <p class="text-gray-700 dark:text-gray-300">
                You can also contact us using the following details:
            </p>
            <ul class="list-disc pl-4 mt-2">
                <li>Email: <a href="mailto:info@example.com" class="text-blue-500">info@example.com</a></li>
                <li>Phone: <span class="text-blue-500">+1 (123) 456-7890</span></li>
                <!-- Add any additional contact details here -->
            </ul>
        </section>

    </div>

@endsection
