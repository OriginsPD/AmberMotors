@extends('layout.employee')

@section('page_title','Current Customers')

@section('content')
    <x-head class="text-center mt-2">Current Customer Details</x-head>
    <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">

            <x-table>
                <x-slot name="heading">
                    <x-table.heading> Customer Name </x-table.heading>
                    <x-table.heading> Address </x-table.heading>
                    <x-table.heading> Phone Number </x-table.heading>
                    <x-table.heading> Bike Rented </x-table.heading>
                    <x-table.heading> Date Rented </x-table.heading>
                    <x-table.heading_view></x-table.heading_view>
                </x-slot>
                <x-table.row>
                    <x-table.cell-bold>Name Information</x-table.cell-bold>
                    <x-table.cell>Information</x-table.cell>
                    <x-table.cell>Information</x-table.cell>
                    <x-table.cell>Information</x-table.cell>
                    <x-table.cell>00/00/0000</x-table.cell>
                    <x-table.cell-edit href="#"> View </x-table.cell-edit>
                </x-table.row>
            </x-table>

        </div>
    </div>
@endsection
