<header class="text-gray-600 shadow-xl z-20 bg-white sticky top-0 left-0 border-b border-blue-500 body-font">
    <div class=" mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            {{--            <a class="mr-5 hover:text-gray-900">First Link</a>--}}
            {{--            <a class="mr-5 hover:text-gray-900">Second Link</a>--}}
            {{--            <a class="mr-5 hover:text-gray-900">Third Link</a>--}}
            {{--            <a class="mr-5 hover:text-gray-900">Fourth Link</a>--}}
        </nav>
        {{--        <form action="{{ route('logout') }}" method="POST">--}}
        {{--            @csrf--}}
        {{--        <button type="submit" class="inline-flex items-center  border-0 py-1 px-3 focus:outline-none hover:underline  rounded text-base mt-4 md:mt-0">Logout--}}
        {{--        </button>--}}
        {{--        </form>--}}

        <div class="relative inline-block ">
            <button id="drop">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
                     viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
            </button>
            <div id="drop-list" class=" absolute px-2 py-2 bg-white rounded-md shadow -ml-24 hidden dark-mode:bg-gray-800">
                <a class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Profile</a>
                <a class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Settings</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                <button type="submit" class="block px-8 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">logout</button>
                </form>

            </div>
        </div>

    </div>
</header>

<script>
    $(document).ready(function () {
        $('#drop').on('click', function () {
            $('#drop-list').toggle();
        })

    });
</script>
