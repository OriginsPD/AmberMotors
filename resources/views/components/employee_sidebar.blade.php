<div class=" md:flex md:flex-row border-r shadow-xl border-blue-500 min-h-screen bg-blueGray-50">
    <div class="flex flex-col flex-shrink-0  bg-white shadow-xl text-blueGray-700 md:w-64">
        <div class="flex flex-row items-center justify-between flex-shrink-0 py-4">
            <a href="/" class="px-8 focus:outline-none">
                <div class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> wickedblocks </h2>
                </div>
            </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <div class="text-sm text-gray-500 m-2">
                    Dashboards
                </div>
                <x-sidebar-link href="{{ route('Owner.index') }}" >Main Stats</x-sidebar-link>
                <x-sidebar-link href="{{ route('OwnerCustomer-list.index') }}">Customer</x-sidebar-link>
                <div class="text-sm text-gray-500 m-2">
                    Table information
                </div>
                <x-sidebar-link>Current Clients</x-sidebar-link>
                <x-sidebar-link>Clients History </x-sidebar-link>
                <x-sidebar-link>Penalty History</x-sidebar-link>
                <div class="text-sm text-gray-500 m-2">
                    Vehicle Details
                </div>
                <x-sidebar-link href="{{ route('OwnerBike.index') }}">Vehicle Information</x-sidebar-link>
                <x-sidebar-link>Information</x-sidebar-link>
                <div class="text-sm text-gray-500 m-2">
                    Create / Edit
                </div>

                <x-sidebar-link-create id="create-bike" >Add Bike +</x-sidebar-link-create>

            </ul>
        </nav>
    </div>
</div>

<script>
    $(document).ready(function (){
        $("#create-bike").on('click',function (){
            $('#model-bike').fadeToggle("slow");
        });

    });
</script>
