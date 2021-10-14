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
<div class="flex-col w-full md:flex md:flex-row md:min-h-screen shadow-2xl bg-blueGray-50">
    <div class="flex flex-col flex-shrink-0 w-full text-blueGray-700 bg-white shadow-xl md:w-64">
        <div class="flex flex-col items-center flex-shrink-0 bg-blueGray-50">
            <button class="p-1 m-2 ml-auto transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none" type="button" aria-label="Close" aria-hidden="true">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg> --}}
            </button>
        </div>
        <div class="flex flex-col items-center flex-shrink-0 pb-4 bg-blueGray-50">
            <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-blueGray-100 rounded-full" src="https://dummyimage.com/302x302/F3F4F7/8693ac">
            <h2 class="text-sm font-medium tracking-widest text-black uppercase title-font">Rasmus Doe</h2>
            <p class="text-blueGray-500">Back-Start Developer</p>
        </div>
        <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="{{ route("Admin.index") }}">Bike Brands</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="{{ route('user') }}">Users</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="{{ route('AdminRental.index') }}">Rental History</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="#">Services</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li>
                        <button type="submit" class="absolute bottom-4 block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black"> Logout </button>
                    </li>
                </form>
            </ul>
        </nav>
    </div>
    <div class=" justify-center bg-gradient-to-tr w-full">
        @yield('content')
    </div>
</div>

{{-- 
<div class="fixed flex flex-col top-1 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
  <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
    <ul class="flex flex-col py-4 space-y-1">
      <li class="px-5 hidden md:block">
        <div class="flex flex-row items-center h-8">
          <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
        </div>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Board</span>
          <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
        </a>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
        </a>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
          <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
        </a>
      </li>
      <li class="px-5 hidden md:block">
        <div class="flex flex-row items-center mt-5 h-8">
          <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
        </div>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
        </a>
      </li>
      <li>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
        </a>
      </li>
    </ul>
    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
  </div>
</div> --}}

</body>
</html>
