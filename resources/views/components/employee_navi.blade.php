{{--<header class="text-gray-600 z-10 bg-yellow-600 sticky top-0 h-18 left-0 border-b border-yellow-600 body-font">--}}
{{--    <div class=" mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">--}}

{{--        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">--}}
{{--            --}}{{--            <a class="mr-5 hover:text-gray-900">First Link</a>--}}
{{--            --}}{{--            <a class="mr-5 hover:text-gray-900">Second Link</a>--}}
{{--            --}}{{--            <a class="mr-5 hover:text-gray-900">Third Link</a>--}}
{{--            --}}{{--            <a class="mr-5 hover:text-gray-900">Fourth Link</a>--}}
{{--        </nav>--}}
{{--        --}}{{--        <form action="{{ route('logout') }}" method="POST">--}}
{{--        --}}{{--            @csrf--}}
{{--        --}}{{--        <button type="submit" class="inline-flex items-center  border-0 py-1 px-3 focus:outline-none hover:underline  rounded text-base mt-4 md:mt-0">Logout--}}
{{--        --}}{{--        </button>--}}
{{--        --}}{{--        </form>--}}

{{--        <div class="relative inline-block ">--}}
{{--            <button id="drop">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"--}}
{{--                     stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"--}}
{{--                     viewBox="0 0 24 24">--}}
{{--                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--            <div id="drop-list" class=" absolute px-2 py-2 bg-white rounded-md shadow -ml-24 hidden dark-mode:bg-gray-800">--}}
{{--                <a class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"--}}
{{--                   href="#">Profile</a>--}}
{{--                <a class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"--}}
{{--                   href="#">Settings</a>--}}
{{--                <form action="{{ route('logout') }}" method="POST">--}}
{{--                    @csrf--}}
{{--                <button type="submit" class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">logout</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</header>--}}


<div
    class=" items-center text-gray-600 z-10 bg-gradient-to-r from-blue-500 to-blue-600 sticky top-0 h-18 left-0 border-b border-white border-l border-blue-700 shadow body-font">
    <div class="items-center justify-between w-full px-5 py-4 whitespace-nowrap  ">
        <div class="flex flex-col flex-wrap mx-auto md:items-center md:flex-row">

            <nav class="flex flex-wrap items-center justify-start text-base ">

            </nav>
            <div class="relative w-full text-right right-0 inline-block ">
                <button id="drop"
                        class="w-auto px-4 py-1.5 mt-1 ml-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-white border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-gray-100">
                    <i id="fa-bar" class="fas fa-bars text-black "></i>
                    <span id="fa-close" class="hidden"><i class="fas fa-times text-black px-1"></i></span>
                </button>
                <div id="drop-list" class=" absolute px-2 py-2 bg-white rounded-md shadow right-0 hidden dark-mode:bg-gray-800">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <i class="far fa-sign-out-alt text-black pr-1"></i> logout</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function () {
        $('#drop').on('click', function () {
            $('#fa-bar').toggle();
            $('#drop-list').slideToggle();
            $('#fa-close').toggle();

        })

    });
</script>
