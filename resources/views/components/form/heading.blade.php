<div {{ $attributes->merge(['class' => 'border border-gray-200 p-4 mb-4']) }}>
    <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">{{ $message }}</div>
    <div class="flex-1 flex flex-col md:flex-row">

        {{ $slot }}

    </div>
</div>
