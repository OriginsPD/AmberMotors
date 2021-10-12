@extends('layout.employee')

@section('page_title','Selected Clients Information')

@section('content')
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-8 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $customer[0]['users']['name'] }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">
                        {{ $customer[0]['bike_details']['bike_brands']['brand_nm'] }}
                    </h1>

                    <h1 class="text-gray-900 text-2xl title-font font-medium mb-4">
                        {{ $customer[0]['bike_details']['bike_category']['category_nm'] }}
                    </h1>
                    <h1 class="text-gray-900 text-4xl text-center underline title-font font-bold mb-4">
                        {{ $customer[0]['bike_details']['bike_model'] }}
                    </h1>
                    <div class="flex mb-4">
                        <button id="desc" class="flex-grow active cursor-pointer hover:border-indigo-500 border-b-2 border-gray-300 py-2 text-lg px-1">Description</button>
                        <button id="details" class="flex-grow cursor-pointer hover:border-indigo-500 border-b-2 border-gray-300 py-2 text-lg px-1">Details</button>
                    </div>
                   <x-detail :customer="$customer" />
                    <x-description :customer="$customer" />
                </div>



                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ $customer[0]['bike_details']['image_path'] }}">
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function (){
           $('#details').on('click',function (){
               $('#desc-section').slideToggle();
               $('#details').addClass('active');
               $('#desc').removeClass('active');
           })
            $('#desc').on('click',function (){
                $('#desc-section').slideUp();
                $('#details').removeClass('active');
                $('#desc').addClass('active');
            });
        });
    </script>
@endsection
