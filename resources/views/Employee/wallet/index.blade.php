@extends('layout.employee')

@section('page_title','Wallet')

@section('content')

    <x-head class="text-center font-bold mt-2 w-full">Invoice Details</x-head>

    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto">
            <div class="flex mb-12 text-center">
                <div class="w-full mx-auto lg:w-1/3">
                    <div class="p-6 mx-auto">
                        <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">
                            </h2>
                        <strong
                            class="flex items-end justify-center mx-auto mb-8 text-3xl font-black leading-none text-center lg:text-4xl ">
                            <span class="@if($income[0]['accumulate_amt']) text-green-500 @endif text-red-600">
                            $ {{ number_format($income[0]['accumulate_amt'],'2') }}
                            </span>

                        </strong>
                        <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:uppercase lg:text-2xl title-font">
                            Accumulated Income</h1>
                        <p class="mx-auto mb-12 text-base text-blueGray-700 lading-relaxed fbont-medium ">You're about
                            to launch soon and must be 100% focused on your product. Don't loose precious days
                            designing, coding the landing page and testing . </p>
                        <button id="his"
                            class="px-16 py-2 text-base hover:shadow-xl hover:scale-105 transform focus:scale-100 font-medium text-white transition duration-500 ease-in-out transform bg-blue-500 border-blue-100 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700">
                            History
                        </button>
                    </div>
                </div>
                <div class="w-full mt-8 mx-auto lg:w-1/3">

                    <div class="py-3 px-5 bg-gray-50">
                        Popular Bike Model
                    </div>
                    <canvas class="p-10 " id="chartDoughnut"></canvas>
                </div>
            </div>
        </div>


        <div id="history"
             class=" items-center fixed hidden inset-0 z-50 px-5 bg-white bg-opacity-95 h-full w-full py-12 lg:px-20">
            <x-head class="text-center font-bold mt-2">Income From Past Rentals</x-head>

            <x-table id="client" >
                <x-slot name="heading">
                    <x-table.heading> Customer</x-table.heading>
                    <x-table.heading> Total Fee</x-table.heading>
                    <x-table.heading> Percentage Earn</x-table.heading>
                    <x-table.heading> Date Logged</x-table.heading>
                </x-slot>
                @forelse($income_logs as $income_log)
                    <x-table.row class="hover:bg-gray-200" >
                        <x-table.cell-bold> {{ $income_log['rental']['users']['name'] }} </x-table.cell-bold>
                        <x-table.cell>{{ $income_log['fee_paid'] }}</x-table.cell>
                        <x-table.cell>{{ $income_log['percentage_earn'] * 100 }}%</x-table.cell>
                        <x-table.cell class="break-words">{{ $income_log['date_logged'] }}</x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell-bold colspan="6" class="text-center">
                            No Clients Currently Listed
                        </x-table.cell-bold>
                    </x-table.row>
                @endforelse
            </x-table>


            <button id="his-close"
                class="bg-blue-500 mt-4 ml-8 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="button">
                <i class="far fa-times-circle"></i> Close
            </button>
        </div>

        <span id="stats" class="hidden" >{{ $stats }}</span>

    </section>


    <script>

        $(document).ready(function () {
            $("#his").on('click', function () {
                $('#history').fadeToggle("slow");
            });

            $("#his-close").on('click', function () {
                $('#history').fadeToggle("slow");
            });


        });

        let stats = document.getElementById('stats').innerHTML;
        console.log(stats);

        const dataDoughnut = {
            labels: [
                'Bike 1',
                'Bike 2',
                'Bike 3'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],

                backgroundColor: [
                    'rgb(133, 105, 241)',
                    'rgb(164, 101, 241)',
                    'rgb(101, 143, 241)'
                ],
                hoverOffset: 4
            }]
        };

        const configDoughnut = {
            type: 'doughnut',
            data: dataDoughnut,
            options: {}
        };


        var chartBar = new Chart(
            document.getElementById('chartDoughnut'),
            configDoughnut
        );
    </script>

@endsection
