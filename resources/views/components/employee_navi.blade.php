<header class="text-gray-600 border-b border-blue-500 body-font">
    <div class=" mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{ route('OwnerCustomerlist.index') }}" class="mr-5 hover:underline cursor-pointer hover:text-gray-900">Customers List</a>
            <a href="{{ route('OwnerBike.index') }}" class="mr-5 hover:underline cursor-pointer hover:text-gray-900">Bike Information</a>
            <a href="#" class="mr-5 hover:underline cursor-pointer hover:text-gray-900">Rent History</a>
            <a href="#" class=" hover:underline cursor-pointer hover:text-gray-900">Current Rent</a>
        </nav>
        <a href="{{ route('Owner.index') }}" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">{{ auth()->user()->name }}</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="w-auto px-8 py-2 my-2 ml-auto text-xs font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>
