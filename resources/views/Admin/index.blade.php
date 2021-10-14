@extends('layout.admin')

@section('content')
<style>
  .tblbody{
    overflow: scroll;
    width: 100%;
    height: 50vh;
  }
</style>

<section class="">
  <div class="ml-20 mx-auto bg-red-500 mt-20 max-h-0">
    <h5 class="text-white font-bold max-w-xl">Add A Brand</h5>
  <form action="{{ route('Admin.create') }}" method="get">
    <span class="text-red-600 font-semibold">@error('brand')
      {{ $message }}
    @enderror</span><br>
  <div class=" flex flex-col rounded-lg overflow-hidden sm:flex-row max-h-16">
    <input class="py-3 px-4 bg-gray-200 text-gray-800 border-gray-300 border-2 outline-none placeholder-gray-500 focus:bg-gray-100" type="text" name="brand" placeholder="Enter brand" required>
    <button type="submit" class="py-3 px-4 bg-gray-700 text-gray-100 font-semibold uppercase hover:bg-gray-600">Go</button>
  </div>
  </form>
  </div> 
</section>
<!-- component -->
  <!-- component -->
<div class="w-2/3 mx-auto mt-40 mr-24">
  <div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Bike Name</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
        </tr>
      </thead>
      <tbody class="flex flex-col overflow-y-scroll w-full" style="height: 80vh;">
        <div>
        @foreach ($brands as $brand)
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">{{ $brand->brand_nm }}</td>
          <td class="py-4 px-6 border-b border-grey-light">
            <form action="{{ route('Admin.destroy',$brand->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="bg-red-500 text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">Delete</button>
              <button class="bg-green-500 text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark"><a href="{{ route('AdminCategory.show',$brand->id) }}"> View Categories</a></button>
              </form>
          </td>
        </tr>
        @endforeach
        </div>
      </tbody>
    </div>
    </table>
  </div>
</div>
<!-- component -->

@endsection
