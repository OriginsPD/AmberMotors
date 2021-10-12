@extends('layout.app')

@section('page_title','Home page')

@section('content')


    <div class="container px-6 py-10 mx-auto md:py-16">
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="w-full md:w-1/2">
                <div class="max-w-lg">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                        Find your premium new bike exported from Germany
                    </h1>
                    <p class="mt-2 text-gray-600">
                        We work with the best remunated bike dealers in Germany to find
                        your new bike.
                    </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Premium selection</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Insurance</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>All legal documents</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>From German bike dealers</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Payment Security</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fast shipping (+ Express)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img src="https://www.pixel4k.com/wp-content/uploads/2018/09/bmw-k100-motorcycle-bike-side-view-4k_1536018804.jpg"
                     alt="bike photo" class="w-full h-full max-w-2xl rounded" />
            </div>
        </div>
    </div>
    <div class="container px-6 py-10 mx-auto">
        <h3 class="text-gray-800">1st Chooes your delivery option</h3>
        <div class="flex items-center mt-5 space-x-6">
            <button
                class="flex items-center px-6 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                Standard
            </button>
            <button
                class="flex items-center px-6 py-2 font-medium tracking-wide text-white capitalize bg-gray-600 rounded-full hover:bg-gray-500 focus:outline-none focus:bg-gray-500">
                Express delivery
            </button>
        </div>
        <div class="grid gap-8 mt-6 sm:grid-cols-2 md:grid-cols-4">
            <select
                class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Eqypt</option>
                <option>Germany</option>
                <option>US</option>
            </select>
            <select
                class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>I20</option>
                <option>GXR</option>
                <option>BMW</option>
            </select>
            <select
                class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>GTX2020</option>
                <option>GRE2019</option>
            </select>
            <button
                class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                Search
            </button>
        </div>
    </div>
    <div class="container px-6 py-10 mx-auto md:py-16">
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="flex items-center justify-center w-full md:w-1/2">
                <img src="https://media.istockphoto.com/photos/different-assortment-iron-bikes-selling-in-the-market-picture-id865659682?k=20&m=865659682&s=612x612&w=0&h=785pH8PSj2gEjaNQJ6seCmbvmDm5K18J-ZblrhK6DT8="
                     alt="bike photo" class="w-full h-full max-w-2xl rounded" />
            </div>
            <div class="w-full md:w-1/2">
                <div class="max-w-md mx-auto">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                        Why us?
                    </h1>
                    <p class="mt-5 leading-7 text-gray-600">
                        With us you will quickly get the bike you want. With our partner
                        network of all known premium bike manufacturers, it is possible
                        for us to respond to your special requests. <br />
                        Our logistics partners enable a fast delivery. We also offer the
                        option that the bike is delivered to you by air.
                    </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fast Shipping</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Secure process</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Exclusive selection</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Premium service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="max-w-3xl px-6 py-10 mx-auto">
        <h1 class="text-2xl font-medium tracking-wide text-center text-gray-800 md:text-4xl">
            Contact with us
        </h1>
        <p class="mt-2 text-center text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="flex flex-col mt-6 space-y-5 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-5">
            <input type="text" placeholder="Name"
                   class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
            <input type="email" placeholder="E-Mail"
                   class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
        </div>
        <textarea name="message" id="message" placeholder="Message"
                  class="w-full h-56 mt-5 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  spellcheck="false"></textarea>
        <div class="flex items-center justify-center mt-6">
            <button
                class="px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                Get in touch
            </button>
        </div>

@endsection
