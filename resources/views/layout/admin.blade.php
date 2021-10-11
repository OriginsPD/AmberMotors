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
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg>
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
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="{{ route("Admin.index") }}">Bike Brands</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="{{ route('user') }}">Users</a>
                </li>
                <li>
                    <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black" href="#">Services</a>
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

</body>
</html>
