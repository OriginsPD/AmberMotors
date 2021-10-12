@extends('layout.employee')

@section('page_title','Vehicle Status')

@section('content')
    <x-head class="text-center font-bold mt-2">Vehicle Status</x-head>
    <div class="flex container mx-auto mt-8 flex-col">
        <div class="-my-2 overflow-x-auto ">

            <x-table.index>
                <x-slot name="heading">
                    <x-table.heading>Category Name</x-table.heading>
                    <x-table.heading>Brand</x-table.heading>
                    <x-table.heading>Model</x-table.heading>
                    <x-table.heading>Active Status</x-table.heading>
                    <x-table.heading class="text-right"></x-table.heading>
                    <x-table.heading class="text-center">Actions</x-table.heading>

                </x-slot>
                @forelse ($details as $detail)

                    <x-table.row>
                        <x-table.cell>{{ $detail['bike_category']['category_nm'] }}</x-table.cell>
                        <x-table.cell>{{ $detail['bike_brands']['brand_nm'] }}</x-table.cell>
                        <x-table.cell>{{ $detail['bike_model'] }}</x-table.cell>
                        <x-table.cell
                            class="text-center">{{ ($detail['active_flg'] === 1) ? 'Yes' : 'No'  }}</x-table.cell>

                        <x-table.cell-edit>

                            @if($detail['availability'])
                                <form action="{{ route('OwnerStatus.update',$detail['id']) }}"
                                      method="POST" id="{{ $detail['id'] }}">
                                    @csrf
                                    @method('PUT')

                                    <a class="text-center px-4 py-2 cursor-pointer  block w-full mt-1"
                                       onclick="document.getElementById('{{ $detail['id'] }}').submit()">
                                        @if($detail['active_flg'])
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        @else
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        @endif
                                    </a>
                                </form>
                            @endif

                        </x-table.cell-edit>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell colspan="6" class='text-center font-bold'> No Bike Detail Found</x-table.cell>
                    </x-table.row>
                @endforelse
            </x-table.index>

        </div>
    </div>

@endsection
