<div c >
    <p class="leading-relaxed my-4 border-t-2">Lorem ipsum dolor sitamet, consectetur adipisicing elit. Aspernatur consequuntur deserunt eius fugiat id magnam non nostrum qui quisquam tempora.</p>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Payment Status:</span>
        <span class="ml-auto text-gray-900">{{ ($customer[0]['payment_status']) ? 'Paid' : 'Not Paid' }}</span>
    </div>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Start Date:</span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['rental_start_date'] }}</span>
    </div>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">End Date: </span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['rental_end_date'] }}</span>
    </div>
    <div class="py-2 flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Return Date: </span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['return_date'] }}</span>
    </div>
    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
        <span class="text-gray-500">Rent Fee: </span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['bike_details']['rent_fee'] }}</span>
    </div>
    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">
                            Payment Fee: ${{ $customer[0]['payment_fee'] }}
                        </span>
    </div>
</div>
