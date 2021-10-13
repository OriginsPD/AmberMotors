@extends('layout.admin')


@section('content')


<x-head class="text-center mt-2">Bikes Owned</x-head>
<div class="flex container mx-auto mt-20 flex-col">
    <div class="-my-2 overflow-x-auto ">
        <x-table>
            <x-slot name="heading">
                <x-table.heading> Bike Model</x-table.heading>
                <x-table.heading> Bike Brand </x-table.heading>
                <x-table.heading> Category</x-table.heading>
                <x-table.heading> Costing </x-table.heading>

                {{-- <x-table.heading> </x-table.heading>
                <x-table.heading_view></x-table.heading_view> --}}
            </x-slot>
            @foreach ($bikeowned as $bikes)
                <x-table.row>
                    {{-- <x-table.cell-bold></x-table.cell-bold> --}}
                    <x-table.cell>{{ $bikes->bike_model}}</x-table.cell>
                    <x-table.cell>{{ $bikes->brand_nm}}</x-table.cell>
                    <x-table.cell>{{ $bikes->category_nm}}</x-table.cell>
                    <x-table.cell>{{ $bikes->rent_fee}}</x-table.cell>
                    {{-- <x-table.cell>{{ $bikes->}}</x-table.cell>
                    <x-table.cell>{{ $bikes->}}</x-table.cell> --}}
                </x-table.row>
            @endforeach
        </x-table>
    </div>
</div>

<x-head class="text-center mt-2">Sales History</x-head>
<div class="flex container mx-auto mt-20 flex-col">
    <div class="-my-2 overflow-x-auto ">
        <x-table>
            <x-slot name="heading">
                <x-table.heading> User ID </x-table.heading>
                <x-table.heading> Customer Name </x-table.heading>
                <x-table.heading> Bike Model </x-table.heading>
                <x-table.heading> Payment Fee</x-table.heading>
                <x-table.heading> Payment Status </x-table.heading>
                {{-- <x-table.heading> Rent Status </x-table.heading>
                <x-table.heading> </x-table.heading>
                <x-table.heading_view></x-table.heading_view>  --}}
             </x-slot>
            @foreach ($allsales as $sales)
                <x-table.row>
                    <x-table.cell-bold>{{ $sales['id'] }}</x-table.cell-bold>
                    {{-- <x-table.cell></x-table.cell>  --}}
                    <x-table.cell>{{ $sales['name'] }}</x-table.cell>
                    <x-table.cell>{{ $sales['rentals'][0]['bike_details']['bike_model'] }}</x-table.cell>
                    <x-table.cell>{{ $sales['rentals'][0]['payment_fee'] }}</x-table.cell>
                    <x-table.cell>PAID</x-table.cell>
                </x-table.row>
            @endforeach
        </x-table>
    </div>
</div> 
@endsection