@extends('layout.employee')

@section('page_title','Bike Information')

@section('content')

    <x-head class="text-center mt-2 w-full">All Bike Listing</x-head>

    <x-table.index>
        <x-slot name="heading">
            <x-table.cell-bold>Category Name</x-table.cell-bold>
            <x-table.cell>Brand</x-table.cell>
            <x-table.cell>Model</x-table.cell>
            <x-table.cell>Rent Fee</x-table.cell>
            <x-table.cell class="text-center">Availability</x-table.cell>
            <x-table.heading_view></x-table.heading_view>
        </x-slot>
        @forelse ($details as $detail)
            <x-table.row>
                <x-table.cell>{{ $detail->bike_category->category_nm }}</x-table.cell>
                <x-table.cell>{{ $detail->bike_brands->brand_nm }}</x-table.cell>
                <x-table.cell>{{ $detail->bike_model }}</x-table.cell>
                <x-table.cell>${{ $detail->rent_fee }} per Day</x-table.cell>
                <x-table.cell class="text-center">{{ ($detail->availability === 1) ? 'Yes' : 'No'  }}</x-table.cell>
                <x-table.cell-edit>

                    <x-button.form name="{{$detail->id}}" id="form_{{ $detail->id }}" action="{{ route('OwnerBike.show',$detail->id) }}">
                        @if($detail->availablity)
                            <x-button.toggle id="toggle_{{ $detail->id }}" form="{{$detail->id}}" />
                        @else
                            <x-button.toggle id="toggle_{{ $detail->id }}" form="{{$detail->id}}" checked  />
                        @endif
                    </x-button.form>



                </x-table.cell-edit>
            </x-table.row>
        @empty
            <x-table.row>
                <x-table.cell colspan="5" class='text-center'> No Bike Detail Found</x-table.cell>
            </x-table.row>
        @endforelse
    </x-table.index>

@endsection
