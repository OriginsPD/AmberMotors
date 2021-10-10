@extends('layout.employee')

@section('page_title','Dashboard')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="px-5 py-8 mx-auto">
            <div class="flex flex-wrap justify-evenly -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">Users</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                    <p class="leading-relaxed">Subscribes</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                    <p class="leading-relaxed">Downloads</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
                    <p class="leading-relaxed">Product</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-4 mx-auto">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                <div class="sm:w-1/2 mb-10 px-4">
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">
                            Bar chart
                        </div>
                        <canvas class="p-10 " id="chartBar"></canvas>
                    </div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">
                            Line chart
                        </div>
                        <canvas class="p-10 " id="chartLine"></canvas>
                    </div>
                </div>
                <div class="sm:w-1/2 mb-10 px-4">
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 bg-gray-50">
                            Doughnut chart
                        </div>
                        <canvas class="p-10 " id="chartDoughnut"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Chart doughnut -->
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

    <!-- Chart line -->
    <script>

        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'hsl(252, 82.9%, 67.8%)',
                borderColor: 'hsl(252, 82.9%, 67.8%)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const configLineChart = {
            type: 'line',
            data,
            options: {}
        };

        var chartLine = new Chart(
            document.getElementById('chartLine'),
            configLineChart
        );
    </script>

    <!-- Chart bar -->
    <script>

        const labelsBarChart = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const dataBarChart = {
            labels: labelsBarChart,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'hsl(252, 82.9%, 67.8%)',
                borderColor: 'hsl(252, 82.9%, 67.8%)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const configBarChart = {
            type: 'bar',
            data: dataBarChart,
            options: {}
        };


        var chartBar = new Chart(
            document.getElementById('chartBar'),
            configBarChart
        );
    </script>


@endsection
