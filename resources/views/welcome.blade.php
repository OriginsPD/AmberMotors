@extends('layout.app')

@section('page_title','Home page')

@section('content')


    <section class="text-blueGray-700 bg-gradient-to-tr from-blue-200 to-blue-800">
        <div class="container relative flex flex-col px-5 py-16 mx-auto lg:items-center md:flex-row lg:px-28">
        <div class="container w-10/12 z-0 mb-9 border-8 border-b-8 inset-24 border-white h-screen -ml-96 -my-20 rotate-6 transform" style="clip-path: polygon(20% 0%, 80% 0%, 100% 0, 100% 94%, 55% 100%, 0 100%, 0% 80%, 0 0);">
            <img class="object-cover object-center z-10 rounded h-full w-screen" alt="hero" height="100%" loading="lazy" src="https://cdn.pixabay.com/photo/2015/09/09/20/11/motorcycle-933022_960_720.jpg">
        </div>
            <div class="flex flex-col absolute right-0 -mt-24 items-start text-left lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16">
                <h1 class="mb-8 text-2xl font-bold tracking-tighter text-left text-white lg:text-6xl title-font">
                    <span class="text-white p-1 mr-4 bg-yellow-600 rounded-l-full">
                        <i class="far p-1 text-center ml-4 fa-biking text-6xl"></i>
                    </span>
                    <span class="text-white">Amber</span>Motors </h1>
                <p class="mb-8 text-white leading-relaxed text-left text-2xl italic font-bold text-blueGray-700 ">Have Freedom Your Way On The Road.</p>
            </div>
        </div>
    </section>
    <section class="text-gray-600 bg-white -mt-24 z-50 body-font">
        <div class="container px-5 py-24 z-50 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Raw Denim Heirloom Man Braid
                <br class="hidden sm:block">Selfies Wayfarers
            </h1>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Quality Bikes</h2>
                        <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor harum in perspiciatis quam. Asperiores cupiditate, hic id labore non numquam voluptate? Amet aut enim expedita imp.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Popular Brands</h2>
                        <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. voluptatibus. Aliquam aspernatur dicta, id neque obcaecati omnis, optio placeat porro provident tempora temporibus.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Family Friendly</h2>
                        <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, delectus mollitia perspiciatis sint ullam! At deleniti, dolor, incidunt iste libero maiores modi nobis numquam.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
