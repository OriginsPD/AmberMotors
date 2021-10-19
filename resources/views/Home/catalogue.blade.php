@extends('layout.app')

@section('page_title','Catalogue')

@section('content')
    <x-head class="text-center font-bold mt-2 py-4 w-full sticky top-20 z-30 bg-white">
        View Our Extensive Catalogue</x-head>

    <section class="text-gray-600 bg-gradient-to-br from-blue-200 to-blue-800 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @forelse($catalogues as $catalogue)
                <div class="lg:w-1/4 md:w-1/2 p-4 cursor-pointer hover:scale-105 transform duration-150 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                             src="{{ $catalogue['image_path'] }}">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-black text-md font-bold tracking-widest title-font mb-1">
                            {{ $catalogue['bike_category']['category_nm'] }}
                        </h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">
                           Model: {{ $catalogue['bike_model'] }}</h2>
                        <p class="mt-1 text-black italic font-semibold ">
                            Rental Fee: $ {{ $catalogue['rent_fee'] }}</p>
                    </div>
                </div>
                @empty
                    <div> No Bike Available</div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
