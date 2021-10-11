@extends('layout.admin')

@section('content')

    <x-head class="text-center mt-2">{{ $brands->brand_nm }}</x-head>
    <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">

            <x-table>
                <x-slot name="heading">
                    <x-table.heading>Categories</x-table.heading>
                </x-slot>
                @foreach ($bikeshow as $bike)
                    <x-table.row>
                        <x-table.cell>{{ $bike->category_nm }}</x-table.cell>
                    </x-table.row>
                        @endforeach
                      </x-table>
        </div>
    </div>

@endsection
