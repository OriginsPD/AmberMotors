@extends('layout.employee')

@section('page_title','Dashboard')

@section('content')

    {{--    <section class="text-gray-600 body-font">--}}
    {{--        <div class="container px-5 py-24 mx-auto flex flex-wrap">--}}
    {{--            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">--}}
    {{--                <div class="w-full sm:p-4 px-4 mb-6">--}}
    {{--                    <h1 class="mb-6 text-4xl font-bold leading-tight text-blue-900 md:text-4xl lg:text-5xl">Welcome To <span class=" text-yellow-600">AmberMotors</span>.</h1>--}}
    {{--                    <div class="leading-relaxed">Pour-over craft beer pug drinking vinegar live-edge gastropub, keytar neutra sustainable fingerstache kickstarter.</div>--}}
    {{--                </div>--}}
    {{--                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">--}}
    {{--                    <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>--}}
    {{--                    <p class="leading-relaxed">Users</p>--}}
    {{--                </div>--}}
    {{--                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">--}}
    {{--                    <h2 class="title-font font-medium text-3xl text-gray-900">1.8K</h2>--}}
    {{--                    <p class="leading-relaxed">Subscribes</p>--}}
    {{--                </div>--}}
    {{--                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">--}}
    {{--                    <h2 class="title-font font-medium text-3xl text-gray-900">35</h2>--}}
    {{--                    <p class="leading-relaxed">Downloads</p>--}}
    {{--                </div>--}}
    {{--                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">--}}
    {{--                    <h2 class="title-font font-medium text-3xl text-gray-900">4</h2>--}}
    {{--                    <p class="leading-relaxed">Products</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">--}}
    {{--                <img class="object-cover object-center w-full h-full" src="https://www.pixel4k.com/wp-content/uploads/2018/09/bmw-k100-motorcycle-bike-side-view-4k_1536018804.jpg" alt="stats">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="mb-6 text-4xl font-bold leading-tight text-yellow-600 md:text-4xl lg:text-5xl">Amber<span
                        class=" text-blue-900 ">Motors</span></h1>

                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                    man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <i class="far fa-motorcycle text-6xl -ml-8 text-indigo-500 w-12 h-12 mb-3 inline-block" ></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            {{ \App\Models\Bike\Bike_Detail::where('employee_id',Auth::id())->count() }}</h2>
                        <p class="leading-relaxed">Bikes</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            {{ \App\Models\Payment\Rental::with('employees', 'users', 'bike_details')
                                                        ->where('employee_id', Auth::id())->count() }}</h2>
                        <p class="leading-relaxed">Total Clients</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <i class="fal fa-key text-6xl  text-indigo-500 w-12 h-12 mb-3 inline-block" ></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            {{ \App\Models\Payment\Rental::with('employees','users','bike_details')
                                                        ->where('employee_id',Auth::id())
                                                        ->where('rent_status',1)->count() }}
                        </h2>
                        <p class="leading-relaxed">Current Rentals </p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                        <p class="leading-relaxed">Places</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
