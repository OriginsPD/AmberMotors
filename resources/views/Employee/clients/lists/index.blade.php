@extends('layout.employee')

@section('page_title',' Client Listing')

@section('content')
    <x-head class="text-center font-bold mt-2">All Clients Rental History</x-head>
    <x-tabs class="p-5">

        <x-table id="client" >
            <x-slot name="heading">
                <x-table.heading> Clients Name</x-table.heading>
                <x-table.heading> Address</x-table.heading>
                <x-table.heading> Phone Number</x-table.heading>
                <x-table.heading> Bike Rented</x-table.heading>
                <x-table.heading> Date Rented</x-table.heading>
                <x-table.heading_view></x-table.heading_view>
            </x-slot>
            @forelse($pasts as $past)
                <x-table.row >
                    <x-table.cell-bold> {{ $past['users']['name'] }} </x-table.cell-bold>
                    <x-table.cell class="break-words">{{ $past['users']['address'] }}</x-table.cell>
                    <x-table.cell>{{ $past['users']['phone_nbr'] }}</x-table.cell>
                    <x-table.cell>{{ $past['bike_details']['bike_model'] }}</x-table.cell>
                    <x-table.cell>{{ $past['rental_start_date'] }}</x-table.cell>
                    <x-table.cell-edit href="{{ route('OwnerCustomer.list.show',$past['id']) }}"> View
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
               <x-table.heading> Bike Rented </x-table.heading>
               <x-table.heading> Date Rented </x-table.heading>
               <x-table.heading> Due Date </x-table.heading>
               <x-table.heading_view></x-table.heading_view>
           </x-slot>
           @forelse($currents as $current)
               <x-table.row>
                   <x-table.cell-bold> {{ $current['users']['name'] }} </x-table.cell-bold>
                   <x-table.cell>{{ $current['users']['address'] }}</x-table.cell>
                   <x-table.cell>{{ $current['bike_details']['bike_model'] }}</x-table.cell>
                   <x-table.cell>{{ $current['rental_start_date'] }}</x-table.cell>
                   <x-table.cell>{{ $current['rental_end_date'] }}</x-table.cell>
                   <x-table.cell-edit href="{{ route('OwnerCustomer.list.show',$current['id']) }}"> View </x-table.cell-edit>
               </x-table.row>
           @empty
               <x-table.row>
                   <x-table.cell-bold class="text-center">
                       No Customers Currently Listed
                   </x-table.cell-bold>
               </x-table.row>
           @endforelse
       </x-table>


        @if($bikes)
            <x-Links.showsearch />
            <x-table id="search" class="hidden">
                <x-slot name="heading">
                    <x-table.heading> Clients Name </x-table.heading>
                    <x-table.heading> Address </x-table.heading>
                    <x-table.heading> Bike Rented </x-table.heading>
                    <x-table.heading> Date Rented </x-table.heading>
                    <x-table.heading> Due Date </x-table.heading>
                    <x-table.heading_view></x-table.heading_view>
                </x-slot>
                @forelse($bikes as $bike)
                    <x-table.row>
                        <x-table.cell-bold> {{ $bike['users']['name'] }} </x-table.cell-bold>
                        <x-table.cell>{{ $bike['users']['address'] }}</x-table.cell>
                        <x-table.cell>{{ $bike['bike_details']['bike_model'] }}</x-table.cell>
                        <x-table.cell>{{ $bike['rental_start_date'] }}</x-table.cell>
                        <x-table.cell>{{ $bike['rental_end_date'] }}</x-table.cell>
                        <x-table.cell-edit href="{{ route('OwnerCustomer.list.show',$bike['id']) }}"> View </x-table.cell-edit>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell-bold colspan="6" class="text-center">
                            No Results Found
                        </x-table.cell-bold>
                    </x-table.row>
                @endforelse
            </x-table>
        @endif

    </x-tabs>
@endsection
