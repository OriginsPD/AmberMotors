<div class=" md:flex md:flex-row border-r border-yellow-600 h-screen bg-blueGray-50">
    <div class="flex flex-col flex-shrink-0  bg-white shadow-xl text-blueGray-700 md:w-64">
        <div class="flex flex-row items-center justify-between border-b bg-yellow-600 flex-shrink-0 py-5">
            <a href="{{ route('Owner.index') }}" class="px-8 focus:outline-none">
                <div class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-600 border rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter transition duration-500 ease-in-out transform cursor-pointer text-white lg:text-x lg:mr-8"><span class=" text-white">AmberMotors</span>.</h2>
                </div>
            </a>
        </div>
        <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <div class="text-sm text-gray-500 m-2">
                    Dashboards
                </div>
                <x-sidebar-link href="{{ route('Owner.index') }}">
                    <i class="fas fa-chart-bar text-yellow-600 pr-2"></i> Main Stats

                </x-sidebar-link>
                <x-sidebar-link href="{{ route('OwnerCustomer-list.index') }}">Clients</x-sidebar-link>
                <div class="text-sm text-gray-500 m-2">
                    Table information
                </div>

                <x-sidebar-link href="{{ route('OwnerCustomer.Past.index') }}">
                    <i class="fas fa-user-edit text-yellow-600 pr-2"></i>
                    Clients
                </x-sidebar-link>

                <div class="text-sm text-gray-500 m-2">
                    Vehicle Details
                </div>
                <x-sidebar-link href="{{ route('OwnerBike.index') }}">
                    <i class="fas fa-motorcycle text-yellow-600 pr-2"></i>
                    Vehicle Listing
                </x-sidebar-link>

                <x-sidebar-link href="{{ route('OwnerStatus.index') }}">
                    <i class="fas fa-toggle-on text-yellow-600 pr-2"></i>
                    Active Status
                </x-sidebar-link>

                <div class="text-sm text-gray-500 m-2">
                    Create / Edit
                </div>

                <x-sidebar-link-create id="create-bike" class="bg-blue-500 hover:bg-blue-600">Add Bike +</x-sidebar-link-create>


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
