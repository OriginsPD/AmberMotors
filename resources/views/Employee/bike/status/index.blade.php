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
                    <x-table.heading_view colspan="2"></x-table.heading_view>

                </x-slot>
                @forelse ($details as $detail)

                    <x-table.row>
                        <x-table.cell>{{ $detail['bike_category']['category_nm'] }}</x-table.cell>
                        <x-table.cell>{{ $detail['bike_brands']['brand_nm'] }}</x-table.cell>
                        <x-table.cell>{{ $detail['bike_model'] }}</x-table.cell>
                        <x-table.cell
                            class="text-center">{{ ($detail['active_flg'] === 1) ? 'Yes' : 'No'  }}</x-table.cell>
                        <x-table.cell-edit class="text-center w-full">Edit</x-table.cell-edit>
                        <x-table.cell-edit>

                            <form action="{{ route('OwnerStatus.update',$detail['id']) }}"
                                  method="POST" name="{{ $detail['id'] }}">
                                @csrf
                                @method('PUT')
                                <select name="status" id="status"
                                        class="text-center px-4 py-2 form-select border border-gray-300 block w-full mt-1">
                                    <option onclick="(this.submit('#{{ $detail['id'] }}'))" value="1">Active</option>
                                    <option onclick="(this.submit())" value="0">Deactivate</option>
                                </select>
                            </form>

                        </x-table.cell-edit>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell colspan="5" class='text-center'> No Bike Detail Found</x-table.cell>
                    </x-table.row>
                @endforelse
            </x-table.index>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#1').PopO({})
        });
    </script>
@endsection
