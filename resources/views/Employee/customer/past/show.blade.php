@extends('layout.employee')

@section('page_title','Selected Customer Information')

@section('content')
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-8 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div id="" class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $customer[0]['users']['name'] }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">
                        {{ $customer[0]['bike_details']['bike_brands']['brand_nm'] }}
                    </h1>

                    <h1 class="text-gray-900 text-2xl title-font font-medium mb-4">
                        {{ $customer[0]['bike_details']['bike_category']['category_nm'] }}
                    </h1>
                    <div class="flex mb-4">
                        <a class="flex-grow cursor-pointer  text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
                        <a class="flex-grow cursor-pointer hover:border-indigo-500 border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                        <a class="flex-grow cursor-pointer hover:border-indigo-500 border-b-2 border-gray-300 py-2 text-lg px-1">Details</a>
                    </div>
                    <p class="leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequuntur deserunt eius fugiat id magnam non nostrum qui quisquam tempora.</p>
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-500">Payment Status:</span>
                        <span class="ml-auto text-gray-900">{{ ($customer[0]['payment_status']) ? 'Paid' : 'Not Paid' }}</span>
                    </div>
{{--                    <div class="flex border-t border-gray-200 py-2">--}}
{{--                        <span class="text-gray-500">Address: </span>--}}
{{--                        <span class="ml-auto text-gray-900">{{ $customer[0]['bike_details']['bike_category']['category_nm'] }}</span>--}}
{{--                    </div>--}}
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-500">Start Date:</span>
                        <span class="ml-auto text-gray-900">{{ $customer[0]['rental_start_date'] }}</span>
                    </div>
                    <div class="flex border-t border-gray-200 py-2">
                        <span class="text-gray-500">End Date: </span>
                        <span class="ml-auto text-gray-900">{{ $customer[0]['rental_end_date'] }}</span>
                    </div>
                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                        <span class="text-gray-500">Return Date: </span>
                        <span class="ml-auto text-gray-900">{{ $customer[0]['return_date'] }}</span>
                    </div>
                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">
                            Rent Fee: ${{ $customer[0]['bike_details']['rent_fee'] }}
                        </span>
                    </div>
                </div>
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
            </div>
        </div>
    </section>
@endsection
