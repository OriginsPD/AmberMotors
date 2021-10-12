@extends('layout.employee')

@section('page_title','Past Customers')

@section('content')
    <x-head class="text-center font-bold mt-2">All Clients Rental History</x-head>
    <x-tabs class="p-5">

        <x-table id="client" class="hidden">
            <x-slot name="heading">
                <x-table.heading> Clients Name</x-table.heading>
                <x-table.heading> Address</x-table.heading>
                <x-table.heading> Phone Number</x-table.heading>
                <x-table.heading> Bike Rented</x-table.heading>
                <x-table.heading> Date Rented</x-table.heading>
                <x-table.heading_view></x-table.heading_view>
            </x-slot>
            @forelse($pasts as $past)
                <x-table.row class="hover:bg-yellow-200">
                    <x-table.cell-bold> {{ $past['users']['name'] }} </x-table.cell-bold>
                    <x-table.cell>{{ $past['users']['address'] }}</x-table.cell>
                    <x-table.cell>{{ $past['users']['phone_nbr'] }}</x-table.cell>
                    <x-table.cell>{{ $past['bike_details']['bike_model'] }}</x-table.cell>
                    <x-table.cell>{{ $past['rental_start_date'] }}</x-table.cell>
                    <x-table.cell-edit href="{{ route('OwnerCustomer.Past.show',$past['id']) }}"> View
                    </x-table.cell-edit>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell-bold class="text-center">
                        No Customers Currently Listed
                    </x-table.cell-bold>
                </x-table.row>
            @endforelse
        </x-table>

       <x-table id="current" class="hidden">
           <x-slot name="heading">
               <x-table.heading> Clients Name </x-table.heading>
               <x-table.heading> Address </x-table.heading>
               <x-table.heading> Phone Number </x-table.heading>
               <x-table.heading> Bike Rented </x-table.heading>
               <x-table.heading> Date Rented </x-table.heading>
               <x-table.heading> Due Date </x-table.heading>
               <x-table.heading_view></x-table.heading_view>
           </x-slot>
           @forelse($currents as $current)
               <x-table.row>
                   <x-table.cell-bold> {{ $current['users']['name'] }} </x-table.cell-bold>
                   <x-table.cell>{{ $current['users']['address'] }}</x-table.cell>
                   <x-table.cell>{{ $current['users']['phone_nbr'] }}</x-table.cell>
                   <x-table.cell>{{ $current['bike_details']['bike_model'] }}</x-table.cell>
                   <x-table.cell>{{ $current['rental_start_date'] }}</x-table.cell>
                   <x-table.cell>{{ $current['rental_end_date'] }}</x-table.cell>
                   <x-table.cell-edit href="{{ route('OwnerCustomer.Past.show',$current['id']) }}"> View </x-table.cell-edit>
               </x-table.row>
           @empty
               <x-table.row>
                   <x-table.cell-bold class="text-center">
                       No Customers Currently Listed
                   </x-table.cell-bold>
               </x-table.row>
           @endforelse
       </x-table>

    </x-tabs>
@endsection
