@extends('layout.app')

@section('page_title','Register')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                <div class="sm:w-1/2 mb-10 px-4">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="https://motorcycleshippers.com/wp-content/uploads/2018/06/Rent-Your-Motorcycle.jpg">
                    </div>
                    <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Join Us As a Seller</h2>
                    <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis earum facere ipsa laborum? Excepturi..</p>
                    <a href="{{ route('RegisterEmployee.create') }}"><button class="flex mx-auto mt-6 text-white bg-blue-500 font-bold shadow-xl border-0 py-2 px-5 focus:outline-none hover:bg-blue-600 font-bold shadow-xl rounded">Apply Today</button></a>
                </div>
                <div class="sm:w-1/2 mb-10 px-4">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="https://cdn.theculturetrip.com/wp-content/uploads/2017/11/motorbike-tigit.jpg">
                    </div>
                    <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Join as a Clients</h2>
                    <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta earum eveniet ipsam mollitia temporibus. Assumenda illum nemo obcaecati?</p>
                    <a href="{{ route('RegisterCustomer.create') }}"><button class="flex mx-auto mt-6 text-white bg-blue-500 font-bold shadow-xl border-0 py-2 px-5 focus:outline-none hover:bg-blue-600 font-bold shadow-xl rounded">JOIN</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
