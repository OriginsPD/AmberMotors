@extends('layout.employee')

@section('page_title','Dashboard')

@section('content')


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="mb-6 text-4xl font-bold leading-tight text-yellow-600 md:text-4xl lg:text-5xl">Amber<span
                        class=" text-blue-900 ">Motors</span></h1>

                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, consequuntur eos omnis quasi repellat temporibus voluptates. Beatae cum debitis deserunt enim illo ipsa maiores molestiae natus nesciunt, optio, tempora, tenetur!.</p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <i class="far fa-motorcycle text-6xl -ml-8 text-yellow-600 w-12 h-12 mb-3 inline-block" ></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            {{ \App\Models\Bike\Bike_Detail::where('employee_id',Auth::id())->count() }}</h2>
                        <p class="leading-relaxed">Bikes</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 hover:shadow-2xl cursor-pointer px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="text-yellow-600 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
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
                        <i class="fal fa-key text-6xl  text-yellow-600 w-12 h-12 mb-3 inline-block" ></i>
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
                        <i class="far fa-piggy-bank text-6xl text-yellow-600 w-12 h-12 mb-3 -ml-8 inline-block"></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">
                            {{ \App\Models\AmberPay_log::where('employee_id',Auth::id())->count() }}
                        </h2>
                        <p class="leading-relaxed">Total Sales Made</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
