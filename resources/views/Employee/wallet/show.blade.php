@extends('layout.employee')

@section('page_title','Income History')

@section('content')
    <div id="model-bike"
         class=" items-center fixed hidden inset-0 z-50 px-5 bg-blue-200 bg-opacity-95 h-full w-full py-12 lg:px-20">
    <x-head class="text-center font-bold mt-2">Income From Past Rentals</x-head>

        <x-table id="client" >
            <x-slot name="heading">
                <x-table.heading> Employee</x-table.heading>
                <x-table.heading> Total Fee</x-table.heading>
                <x-table.heading> Percentage Earn</x-table.heading>
                <x-table.heading> Date Logged</x-table.heading>
                <x-table.heading_view></x-table.heading_view>
            </x-slot>
            @forelse($income_logs as $income_log)
                <x-table.row >
                    <x-table.cell-bold> {{ $income_log['users']['name'] }} </x-table.cell-bold>
                    <x-table.cell>{{ $income_log['fee_paid'] }}</x-table.cell>
                    <x-table.cell>{{ $income_log['percentage_earn'] }}</x-table.cell>
                    <x-table.cell class="break-words">{{ $income_log['date_logged'] }}</x-table.cell>
                    <x-table.cell-edit href="{{ route('OwnerCustomer.list.show',$income_log['id']) }}"> View
                    </x-table.cell-edit>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell-bold colspan="6" class="text-center">
                        No Clients Currently Listed
                    </x-table.cell-bold>
                </x-table.row>
            @endforelse
        </x-table>
    </div>
@endsection
