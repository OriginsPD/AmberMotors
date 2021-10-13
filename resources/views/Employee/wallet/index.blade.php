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
                            class="flex items-end justify-center mx-auto mb-8 text-3xl font-black leading-none text-center text-black lg:text-4xl ">
                            $0
                        </strong>
                        <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">
                            Grand Total Made. </h1>
                        <p class="mx-auto mb-12 text-base text-blueGray-700 lading-relaxed fbont-medium ">You're about
                            to launch soon and must be 100% focused on your product. Don't loose precious days
                            designing, coding the landing page and testing . </p>
                        <button
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
    </section>


    <script>

        const dataDoughnut = {
            labels: [
                'JavaScript',
                'Python',
                'Ruby'
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
