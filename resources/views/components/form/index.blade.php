<div class="mt-2">
    <form {{ $attributes }} method="POST">
        @csrf

    {{ $slot }}


    <div class="flex flex-col md:flex-row">
        <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
        <div class="flex-1 flex flex-col md:flex-row">
            <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300"> Submit </button>
        </div>
    </div>
    </form>
</div>
