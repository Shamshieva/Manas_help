@extends('user.layouts.app')

@section('content')

    <div style="color: white; " class="container mx-auto my-8 p-8 bg-white dark:bg-gray-800 rounded-lg shadow">
        <div style="margin-left: 150px; margin-right: 150px">
            <section>
                <h1 style="margin-left: 300px" class="text-3xl font-semibold mb-4">About Us</h1>
                <img style="font-size: 100px; height: 150px" src="{{ asset('user_files/img/download.jpeg') }}" class="float-end" alt="...">
                <p class="text-gray-700 dark:text-gray-300">
                    Welcome to our website! We are a dedicated team passionate about [your website's focus or niche].
                </p>
            </section>


            <section class="mt-8">
                <h2 style="margin-left: 300px" class="text-2xl font-semibold mb-4">Our Team</h2>
                <p class="text-gray-700 dark:text-gray-300">
                    Meet the dedicated individuals behind [Your Website Name]. Our team is composed of experts in
                    [relevant
                    fields], working together to bring you the best [content/services] possible.
                </p>
                <!-- You can also include individual team member profiles or a group photo here -->
            </section>

        </div>
    </div>

@endsection
