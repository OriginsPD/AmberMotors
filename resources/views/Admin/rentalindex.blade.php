@extends('layout.admin')

@section('content')
    <x-head class="text-center mt-2">All Rentals</x-head>
    <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">
            <x-table>
                <x-slot name="heading">
                    <x-table.heading>Customer Name</x-table.heading>
                    <x-table.heading>Associate Name</x-table.heading>
                    <x-table.heading>Bikes Model</x-table.heading>
                    <x-table.heading>Bike Brand</x-table.heading>
                    <x-table.heading>Cost per Day</x-table.heading>
                    <x-table.heading>Payment Status</x-table.heading>
                </x-slot>
                @foreach ($allrentals as $rental)
                    <x-table.row>
                        <x-table.cell><a
                                href="{{ route('AdminUser.show', $rental['users']['id']) }}">{{ $rental['users']['name'] }}</a>
                        </x-table.cell>
                        <x-table.cell> <a
                                href="{{ route('AdminEmployee.show', $rental['employees']['users']['id']) }}">{{ $rental['employees']['users']['name'] }}</a>
                        </x-table.cell>
                        <x-table.cell>{{ $rental['bike_details']['bike_model'] }}</x-table.cell>
                        <x-table.cell>{{ $rental['bike_details']['bike_brands']['brand_nm'] }}</x-table.cell>
                        <x-table.cell>{{ $rental['payment_fee'] }}</x-table.cell>
                        @if ($rental['payment_status'] == 1)
                            <x-table.cell>
                                PAID
                            </x-table.cell>
                        @else
                            <x-table.cell>
                                PENDING
                            </x-table.cell>
                        @endif
                        <x-table.cell><a onclick="openmodal({{ $rental['id'] }})">More Details</a></x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table>
        </div>
    </div>
    <div id="searchid" class=" items-center fixed hidden inset-0 z-50 px-5 bg-white bg-opacity-95 h-full w-full py-12 lg:px-20">
      <span onclick="closeModal()" class="">x</span>
      <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">
            <x-table>
                <x-slot name="heading">
                    <x-table.heading>Cost per Day</x-table.heading>
                    <x-table.heading>Rental Start Date</x-table.heading>
                    <x-table.heading>Rental End Date</x-table.heading>
                    <x-table.heading>Date Return</x-table.heading>
                    <x-table.heading>Address</x-table.heading>
                </x-slot>
                <x-table.row class="table-body">
                </x-table.row>
            </x-table>
        </div>
    </div>
    </div>
    @foreach ($allrentals as $rental)

        <input hidden id="getid" value="{{ $rental['id'] }}">
    @endforeach

    <script>
        
        function closeModal() {
            $('#searchid').css('display','none');
        }

        function openmodal(id) {
          let _token = $('input[name="_token"]').val()
          let url = new URL('http://127.0.0.1:8000/getuser/' + id + '')
          $.ajax({
              type: 'GET',
              url: url,
              data: {},
              success: function(data) {
                let mytable = ''
                data.success.forEach(element => {
                  console.log(element)
                  mytable += `
                    <x-table.cell>${element.payment_fee}</x-table.cell>
                    <x-table.cell>${element.rental_start_date}</x-table.cell>
                    <x-table.cell>${element.rental_end_date}</x-table.cell>
                    <x-table.cell>${element.return_date}</x-table.cell>
                    <x-table.cell>${element.users.address}</x-table.cell>
                  
                  `
                });

                $('.table-body').html(mytable)
                $('#searchid').fadeToggle("slow");
              }
          })
        }
    </script>

@endsection
