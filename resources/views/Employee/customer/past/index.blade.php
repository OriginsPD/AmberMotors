@extends('layout.employee')

@section('page_title','Past Customers')

@section('content')
    <x-head class="text-center mt-2">Past Customer History</x-head>
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
                @forelse($customers as $customer)
                    <x-table.row>
                        <x-table.cell-bold> {{ $customer['users']['name'] }} </x-table.cell-bold>
                        <x-table.cell>{{ $customer['users']['address'] }}</x-table.cell>
                        <x-table.cell>{{ $customer['users']['phone_nbr'] }}</x-table.cell>
                        <x-table.cell>{{ $customer['bike_details']['bike_model'] }}</x-table.cell>
                        <x-table.cell>{{ $customer['rental_start_date'] }}</x-table.cell>
                        <x-table.cell-edit href="#"> View </x-table.cell-edit>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell-bold class="text-center">
                            No Customers Currently Listed
                        </x-table.cell-bold>
                    </x-table.row>
                @endforelse
            </x-table>

        </div>
    </div>
@endsection
