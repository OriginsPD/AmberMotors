<div id="desc-section" class="hidden">
    <h1 class="text-xl font-bold leading-tight">Address:</h1>
    <p class="leading-relaxed break-words mb-4"> {{ $customer[0]['users']['address'] }}.</p>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Email Address: </span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['users']['email'] }}</span>
    </div>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Payment Type:</span>
        <span class="ml-auto text-gray-900">{{ $customer[0]['rental_start_date'] }}</span>
    </div>
    <div class="flex border-t border-gray-200 py-2">
        <span class="text-gray-500">Payment Date: </span>
        <span class="ml-auto text-gray-900"> 00/00/2021 </span>
    </div>
    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
        <span class="text-gray-500">Penalty: </span>
        <span class="ml-auto text-gray-900"> None </span>
    </div>

</div>
