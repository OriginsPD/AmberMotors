@extends('layout.employee')

@section('page_title','Edit Bike Information')

@section('content')

    <div class="w-full bg-white px-5 mx-auto border rounded-lg shadow-2xl lg:px-0 text-blueGray-500 lg:w-2/3"
         aria-hidden="false" aria-describedby="modalDescription" role="dialog">
        <div class="flex items-center justify-end px-6 py-4 ">

        </div>
        <div class="flex flex-col w-full mx-auto mb-2  text-left lg:px-20 lg:text-center">
            <x-head class="text-center font-bold mt-2 w-full">Edit Bike Information</x-head>
        </div>
        <!-- component -->
        <div class="p-5">
            <x-form.index action="{{ route('OwnerBike.store') }}">
                <x-form.heading message="Bike Information">
                    <div class="m-1">
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

                    <div class="m-1">
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

                    <div class="m-1">
                        <x-form.input name="bike_model" placeholder="Bike Model"/>
                        <div class="mb-1 text-red-600 ml-8 text-xs">
                            @error('bike_model')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                </x-form.heading>

                <x-form.heading class="flex flex-col md:flex-row" message="Bike Image">

                    <div class="m-1">
                        <x-form.upload name="image" class="hidden"/>
                        <div class="my-2 text-red-600 ml-8 text-xs">
                            @error('image')
                            *{{ $message }}
                            @enderror
                        </div>
                    </div>

                </x-form.heading>

                <x-form.heading class="flex flex-col md:flex-row" message="Fee Information">

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

@endsection
