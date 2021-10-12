@extends('layout.admin')

@section('content')

    <section class="">
  <div class=" ml-20 mx-auto bg-red-500 mt-20 max-h-0">
        <h5 class="text-white font-bold max-w-xl">Add Category</h5>
        <form action="{{ route('AdminCategory.create') }}" method="get">
            <span class="text-red-600 font-semibold">@error('category')
                    {{ $message }}
                @enderror</span><br>
            <div class=" flex flex-col rounded-lg overflow-hidden sm:flex-row max-h-16">
                <input type="hidden" value="{{ $brands->id }}" name="brand_id">
                <input
                    class="py-3 px-4 bg-gray-200 text-gray-800 border-gray-300 border-2 outline-none placeholder-gray-500 focus:bg-gray-100"
                    type="text" name="category" placeholder="Enter Category" required>
                <button type="submit"
                    class="py-3 px-4 bg-gray-700 text-gray-100 font-semibold uppercase hover:bg-gray-600">Go</button>
            </div>
        </form>
        </div>
    </section>

    <x-head class="text-center mt-2">{{ $brands->brand_nm }}</x-head>
    <div class="flex container mx-auto mt-20 flex-col">
        <div class="-my-2 overflow-x-auto ">

            <x-table>
                <x-slot name="heading">
                    <x-table.heading>Categories</x-table.heading>
                    <x-table.heading>Option</x-table.heading>
                </x-slot>
                @foreach ($bikeshow as $bike)
                    <x-table.row>
                        <x-table.cell>{{ $bike['category_nm'] }}</x-table.cell>
                        <x-table.cell>
                            <form action="{{ route('AdminCategory.destroy', $bike['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">DELETE</button>
                            </form>
                        </x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table>
        </div>
        {{-- {{ $category->id }} --}}
    </div>

@endsection
