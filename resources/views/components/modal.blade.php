<div id="model-bike"
     class=" items-center fixed hidden inset-0 z-50 px-5 bg-blue-200 bg-opacity-70 h-full w-full py-12 lg:px-20">
    <div class="w-full bg-white px-5 mx-auto my-20  border rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-2/3"
         aria-hidden="false" aria-describedby="modalDescription" role="dialog">
        <div class="flex items-center justify-end px-6 py-4 ">
            <button id="close-bike"
                    class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none"
                    type="button" aria-label="Close" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col w-full mx-auto mb-2 border-b border-gray-500 text-left lg:px-20 lg:text-center">
            <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">a great eader right
                here </h2>
            <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font"> A headline to switch
                your visitors into users. </h1>
        </div>
        <!-- component -->
        <div class="p-5">
            <x-form.index action="{{ route('OwnerBike.store') }}">
                <x-form.heading message="Bike Information">
                    <div>
                        <x-form.select name="brand_id">
                            <x-form.option selected disabled> Select Brand</x-form.option>
                            @forelse($brands as $brand)
                                <x-form.option value="{{ $brand['id'] }}">{{ $brand['brand_nm'] }}</x-form.option>
                            @empty
                                <x-form.option disabled> No Brands Have Been Added</x-form.option>
                            @endforelse
                        </x-form.select>
                        <div class="my-2 text-red-600 ml-8 text-xs">
                            @error('brand_id')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div>
                        <x-form.select name="category_id">
                            <x-form.option selected disabled> Select Category</x-form.option>
                            @forelse($catogries as $category)
                                <x-form.option value="{{ $category['id'] }}">
                                    {{ $category['category_nm'] }}</x-form.option>
                            @empty
                                <x-form.input disabled> No Categories Have Been Added</x-form.input>
                            @endforelse
                        </x-form.select>
                        <div class="my-2 text-red-600 ml-8 text-xs">
                            @error('category_id')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div>
                        <x-form.input name="bike_model" placeholder="Bike Model"/>
                        <div class="my-2 text-red-600 ml-8 text-xs">
                            @error('bike_model')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                </x-form.heading>
                <x-form.heading message="Fee Information">

                    <div class="flex">
                        <x-form.input-icon type="number" name="rent_fee" placeholder="Rental Fees"/>
                        <div class="my-2 text-red-600 ml-8 text-xs">
                            @error('rent_fee')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                </x-form.heading>
            </x-form.index>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#close-bike").on('click', function () {
            $('#model-bike').fadeToggle("slow");
        });

    });
</script>
