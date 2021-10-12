<div class=" md:flex md:flex-row border-r border-white h-screen bg-blueGray-50">
    <div class="flex flex-col flex-shrink-0  bg-white shadow-xl text-blueGray-700 md:w-64">
        <div
            class="flex flex-row items-center justify-between border-r-2 border-b border-blue-600 bg-gradient-to-l from-blue-500 to-blue-600 flex-shrink-0 py-3.5">
            <a href="{{ route('Owner.index') }}" class="px-8 focus:outline-none">
                <div class="inline-flex items-center">
                    <div class="w-10 h-10 text-white pl-1.5 pt-2.5 bg-yellow-500 border rounded-full">
                        <i class="far fa-gem text-2xl "></i>
                    </div>

                    <h2 class="block p-2 text-xl font-medium tracking-tighter transition duration-500 ease-in-out transform cursor-pointer text-white lg:text-x lg:mr-8">
                        <span class=" text-white">AmberMotors</span></h2>
                </div>
            </a>
        </div>
        <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
            <ul>
                <div class="text-sm text-gray-500 m-2">
                    Dashboards
                </div>
                <x-sidebar-link href="{{ route('Owner.index') }}">
                    <i class="fas fa-chart-bar text-blue-700 pr-2"></i> Main Stats

                </x-sidebar-link>
                <x-sidebar-link href="{{ route('OwnerWallet.index') }}">
                    <i class="fas fa-wallet text-blue-700 pr-2"></i> Wallet
                </x-sidebar-link>
                <div class="text-sm text-gray-500 m-2">
                    Table information
                </div>

                <x-sidebar-link href="{{ route('OwnerCustomer.list.index') }}">
                    <i class="fas fa-user-edit text-blue-700 pr-2"></i>
                    Clients
                </x-sidebar-link>

                <div class="text-sm text-gray-500 m-2">
                    Vehicle Details
                </div>
                <x-sidebar-link href="{{ route('OwnerBike.index') }}">
                    <i class="fas fa-motorcycle text-blue-700 pr-2"></i>
                    Vehicle Listing
                </x-sidebar-link>

                <x-sidebar-link href="{{ route('OwnerStatus.index') }}">
                    <i class="fas fa-toggle-on text-blue-700 pr-2"></i>
                    Active Status
                </x-sidebar-link>

                <div class="text-sm text-gray-500 m-2">
                    Create / Edit
                </div>

                <x-sidebar-link-create id="create-bike" class="bg-blue-500 border border-white hover:bg-blue-600">Add Bike
                    <i class="far fa-plus-square pl-1"></i>
                </x-sidebar-link-create>


            </ul>
        </nav>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#create-bike").on('click', function () {
            $('#model-bike').fadeToggle("slow");
        });


    });
</script>
