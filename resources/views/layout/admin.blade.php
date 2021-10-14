<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</head>

<body>

    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen shadow-2xl bg-white">
        <div class="flex flex-col flex-shrink-0 w-full text-blueGray-700 bg-gray-900 shadow-xl md:w-64 ">
            {{-- <div class="flex flex-col items-center flex-shrink-0 bg-blueGray-50">
                <button
                    class="p-1 m-2 ml-auto transition-colors duration-200 transform rounded-md hover:bg-opacity-25 text-gray-500 hover:bg-blueGray-600 focus:outline-none"
                    type="button" aria-label="Close" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                    </svg>
                </button>
            </div> --}}
            {{-- <div class="flex flex-col items-center flex-shrink-0 pb-4 bg-blueGray-50">
            <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-blueGray-100 rounded-full" src="https://dummyimage.com/302x302/F3F4F7/8693ac">
            <h2 class="text-sm font-medium tracking-widest text-black uppercase title-font">Rasmus Doe</h2>
            <p class="text-gray-500">Back-Start Developer</p>
        </div> --}}
            <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
                <ul>
                    <li class="relative text-gray-500 hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pr-4 ">
                            <svg class="w-6 hover:bg-white"
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                              </svg>
                        </div>
                        <a class="block px-4 py-2 pl-14 pr-4 mt-28 text-base text-gray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-white"
                            href="">Bikes</a>
                            <button class="absolute inset-y-0 right-0 p-1 flex items-center">
                                <svg
                                    class="w-6 hover:text-white" 
                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                            </button>
                        </li>
                            <div class="pt-2 pl-4">
                                <ul class="flex flex-col pl-2 border-l text-gray-500 border-gray-700">
                                    <li><a href="{{ route('Admin.index') }}"class="inline-block w-full px-4 py-2 text-sm hover:text-white focus">Brands</a></li>
                                    <li><a href="#"class="inline-block w-full px-4 py-2 text-sm hover:text-white ">Categories</a></li>
                                </ul>
                            </div>
                    <li class="relative text-gray-500 hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pr-4 ">
                            <svg 
                                class="w-6 hover:bg-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <a class="block px-4 py-2 pl-14 pr-4 mt-2 text-base text-gray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-white"
                            href="{{ route('user') }}">Users</a>
                    </li>
                    <li class="relative text-gray-500 hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pr-4 ">
                            <svg class="w-6 hover:bg-white"
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </div>
                        <a class="block px-4 py-2 pl-14 pr-4 mt-2 text-base text-gray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-white"
                            href="#">Rental History</a>
                    </li>
                    <li class="relative text-gray-500 hover:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pr-4 ">
                            <svg class="w-6 hover:bg-white"
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </div>
                        <a class="block px-4 py-2 pl-14 pr-4 mt-2 text-base text-gray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-white"
                            href="#">Services</a>
                    </li>
                    <div class="px-6 pt-4 mt-40">
                        <hr class="border-gray-700" >
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="relative text-gray-500 hover:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-6 pr-4 ">
                                <svg class="w-6 hover:bg-white"
                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                  </svg>
                            </div>
                            <button    
                                type="submit"
                                class="mt-8 block px-4 py-2 pl-14 pr-4 text-base text-gray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-white">
                                Logout </button>
                        </li>
                    </form>
                </ul>
            </nav>
        </div>
        <div class=" justify-center bg-gradient-to-tr w-full">
            @yield('content')
        </div>
    </div>

</body>

</html>
