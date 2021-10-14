@extends('layout.app')

@section('page_title','Team')

@section('content')

    <x-head class="text-center font-bold mt-2 py-4 w-full sticky top-20 z-30 bg-white">
        Our Bike Loving Associate</x-head>

    <section class="text-gray-600 body-font bg-gradient-to-br from-blue-200 to-blue-800 h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-2">
                @forelse( $employees as $employee)
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border-gray-200 border p-4 rounded-lg">
{{--                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">--}}
                        <div class="flex-grow">
                            <h2 class="text-black title-font font-medium">{{ $employee['users']['name'] }}</h2>
                            <p class="text-gray-900">Associate Members</p>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </section>
@endsection
