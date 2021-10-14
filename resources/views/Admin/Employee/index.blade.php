@extends('layout.admin')

@section('content')

    <x-head class="text-center mt-2">Employee Details</x-head>
    <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">

            <x-table>
                <x-slot name="heading">
                    <x-table.heading> Name </x-table.heading>
                    <x-table.heading> Email </x-table.heading>
                    <x-table.heading> Phone Number </x-table.heading>
                    <x-table.heading> Address</x-table.heading>
                    <x-table.heading> Status </x-table.heading>
                    <x-table.heading_view></x-table.heading_view>
                </x-slot>
                @foreach ($employees as $employee)
                    <x-table.row>
                        {{-- <x-table.cell-bold></x-table.cell-bold> --}}
                        <x-table.cell>{{ $employee->name }}</x-table.cell>
                        <x-table.cell>{{ $employee->email }}</x-table.cell>
                        <x-table.cell>{{ $employee->phone_nbr }}</x-table.cell>
                        <x-table.cell>{{ $employee->address }}</x-table.cell>
                        @if ($employee->Active_flag == 1)
                            <x-table.cell>Active
                                <form action="{{ route('AdminEmployee.update', $employee->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="0" name="deactivate">
                                    <button type="submit" class="bg-red-500 px-2 py-1 text-white">Deactivate</button>
                                </form>
                            </x-table.cell>
                        @else
                            <x-table.cell>Not Active
                                <form action="{{ route('AdminEmployee.update', $employee->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="1" name="activate">
                                    <button type="submit" class="bg-green-500 px-2 py-1 text-white">Activate</button>
                                </form>
                            </x-table.cell>
                            @endif
                            <x-table.cell-edit href="{{ route('AdminEmployee.show',$employee->id) }}"> View </x-table.cell-edit>
                    </x-table.row>
                @endforeach
            </x-table>

        </div>
    </div>

@endsection