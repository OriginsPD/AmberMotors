@extends('layout.employee')

@section('page_title','Bike Information')

@section('content')

    <x-head class="text-center mt-2 w-full">Bike Information</x-head>

    <x-table.index>
        <x-slot name="heading">
            <x-table.cell-bold>Category Name</x-table.cell-bold>
            <x-table.cell>Brand</x-table.cell>
            <x-table.cell>Model</x-table.cell>
            <x-table.cell>Rent Fee</x-table.cell>
            <x-table.cell>Availability</x-table.cell>
        </x-slot>
        @forelse ($details as $detail)
        <x-table.row>
            <x-table.cell>Brand</x-table.cell>
            <x-table.cell>Model</x-table.cell>
            <x-table.cell>Rent Fee</x-table.cell>
            <x-table.cell>Availability</x-table.cell>
        </x-table.row>
        @empty
            <x-table.row>
                <x-table.cell colspan="5" class='text-center'> No Bike Detail Found </x-table.cell>
            </x-table.row>
        @endforelse
    </x-table.index>

@endsection
