{{--<div class="sticky top-0 z-50 items-center">--}}
{{--    <div class="text-Gray-700 transition duration-500 ease-in-out transform bg-white border ">--}}
{{--        <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">--}}
{{--            <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">--}}
{{--                <div class="inline-flex items-center">--}}
{{--                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">--}}
{{--                    </div>--}}
{{--                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">--}}
{{--                        Bike System--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">--}}
{{--                <ul class="items-center inline-block list-none lg:inline-flex">--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('Home.catalogue') }}"--}}
{{--                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Catalogue</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('Home.brands') }}"--}}
{{--                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Brands</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('Home.team') }}"--}}
{{--                           class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Team</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <div class="flex">--}}
{{--                @guest--}}
{{--                    <div>--}}
{{--                        <a href="{{ route('register.index') }}"--}}
{{--                           class=" px-8 hover:underline py-2 my-2 text-black font-medium transition duration-500 ease-in-out transform focus:shadow-outline ">Sign--}}
{{--                            Up </a>--}}
{{--                        <a href="{{ route('login.index') }}"--}}
{{--                           class="px-8 hover:underline py-2 my-2 text-base font-medium text-black transition duration-500 ease-in-out transform ">Login</a>--}}
{{--                    </div>--}}
{{--                @endguest--}}
{{--                @auth--}}
{{--                        <div>--}}
{{--                            <form action="{{ route('logout') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <button type="submit"--}}
{{--                                        class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700 ">--}}
{{--                                    Logout--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<nav class="border-b">
    <div class="container px-6 py-2 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <x-logo href="{{ route('index') }}" />
            </div>
            <div class="flex md:hidden">
                <button type="button" aria-label="toggle menu"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="items-center hidden md:flex">
            <div
                class="flex flex-col mt-4 space-y-8 md:flex-row md:items-center md:mt-0 md:space-y-0 md:space-x-16">
                <a href="{{ route('Home.catalogue') }}" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">
                    Catalogue</a>
                <a href="{{ route('Home.brands') }}" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">
                    Brands</a>
                <a href="{{ route('Home.team') }}" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">Team Members</a>
                <a href="#contact" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">Contact</a>

                @guest
                    <div>
                        <a href="{{ route('register.index') }}"
                           class=" px-8 hover:underline py-2 my-2 text-black font-medium transition duration-500 ease-in-out transform focus:shadow-outline ">Sign
                            Up </a>
                        <a href="{{ route('login.index') }}"
                           class="px-4 hover:underline py-2 my-2 text-white rounded hover:bg-blue-800 focus:scale-75 transform duration-150 font-medium text-black bg-blue-700 transition duration-500 ease-in-out transform ">Login</a>
                    </div>
                @endguest
                @auth
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700 ">
                                Logout
                            </button>
                        </form>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</nav>

