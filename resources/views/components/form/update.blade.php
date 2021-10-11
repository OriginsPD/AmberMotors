<div class="mt-2 border border-gray-200">
    <form {{ $attributes }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{ $slot }}

        <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
        <div class="flex-1 flex flex-col -mt-5 p-3  md:flex-row">
            <button type="submit" class="px-8 py-1 bg-green-600 font-semibold focus:ring-2 text-gray-100 text-lg rounded-lg focus:scale-95 duration-75 transform focus:border-4 border-blue-300"> Create </button>
        </div>

    </form>
</div>
