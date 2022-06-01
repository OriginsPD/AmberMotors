@extends('layout.app')

@section('page_title','Login')

@section('content')

<section class="flex flex-col items-center md:flex-row ">
    <div class="relative hidden w-full h-screen bg-Gray-400 lg:block md:w-1/3 xl:w-1/3">
        <img src="https://www.teahub.io/photos/full/193-1939794_bike-wallpapers-in-hd-motorcycle.jpg" alt="" class="absolute object-cover w-full h-full">

    </div>
    <div class="flex w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 items-left justify-left">
        <div class="w-full py-32 lg:py-6 lg:h-100">
            <h1 class="my-12 font-black tracking-tighter text-black 2xl sm:text-5xl title-font">Log In.</h1>

            <form class="mt-6" action="{{ route('login.store') }}" method="POST">
                @csrf
                <div>
                    <label class="text-base font-medium leading-relaxed text-blueGray-700">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-full px-4 py-2 mt-2 text-base text-blue-700 border-2 border-gray-900 rounded-lg bg-blueGray-100 ext-blue-700 focus:border-blueGray-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" autocomplete="off">
                    <div class="text-xs ml-2 text-red-700">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <label class="text-base font-medium leading-relaxed text-blueGray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password" minlength="6" class="w-full px-4 py-2 mt-2 text-base text-blue-700 border-2 border-gray-900 rounded-lg bg-blueGray-100 ext-blue-700 focus:border-blueGray-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                    <div class="text-xs ml-2 text-red-700">
                        @error('password')
                        *{{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mt-2 text-right">
                    <a href="#" class="text-sm font-semibold leading-relaxed text-blueGray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                </div>
                <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-gradient-to-r from-black hover:from-black to-black focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 hover:to-black">Log In</button>
            </form>
            <p class="mt-8 text-center">Need an account? <a href="{{ route('register.index') }}" class="font-semibold text-blue-500 hover:text-blue-400">Sign Up</a></p>
        </div>
    </div>
</section>


@endsection
