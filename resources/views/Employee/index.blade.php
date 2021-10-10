@extends('layout.employee')

@section('page_title','Dashboard')

@section('content')

    <section class="grid grid-cols-1 h-screen gap-0 bg-blue-100 bg-opacity-25 md:grid-cols-2">
        <div class="flex flex-col items-start justify-center px-4 py-24 lg:px-20">
            <h1 class="mb-6 text-4xl font-bold leading-tight text-blue-900 md:text-4xl lg:text-5xl">Welcome To <span class=" text-yellow-600">AmberMotors</span>.</h1>
            <form class="w-full mb-6">
                <label class="sr-only">Your Email</label>
            </form>
            <p class="pr-0 mb-4 text-sm text-blue-800 tracking-relaxed lg:pr-16">Get the #1 Business Messenger and start delivering personalized experiences at every stage of the customer journey.</p>
        </div>
        <div>
            <img
                src="https://www.pixel4k.com/wp-content/uploads/2018/09/bmw-k100-motorcycle-bike-side-view-4k_1536018804.jpg"
                alt="3 women looking at a laptop"
                class="object-cover w-full h-64 bg-gray-100 md:h-full"
                loading="lazy"
            />
        </div>
    </section>

@endsection
