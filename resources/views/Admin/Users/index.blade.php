@extends('layout.admin')

@section('content')


<!-- component -->
<div class="min-w-screen h-screen ml-64 animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center  inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style="background-image: url(https://secure.images.demo.dev.pixelmotiondemo.com/pm-model-pages/f-800-gt/gallery/detail-6.jpg);" id="modal-id">
  <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
  <div class="container">
	<h1 class="mb-8">
   
  </h1>

	<table class="text-left w-full">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Name</th>
				<th class="p-4 w-1/4">Email</th>
				<th class="p-4 w-1/4">Address</th>
				<th class="p-4 w-1/4">Phone Number</th>
				<th class="p-4 w-1/4">Status</th>

			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 80vh;">
		@foreach ($buyers as $buyer)
    <tr class="flex w-full mb-4">
      <td class="p-4 w-1/4 border-black border-2">{{ $buyer->name }}</td>
      <td class="p-4 w-1/4 border-black border-2">{{ $buyer->email }}</td>
      <td class="p-4 w-1/4 border-black border-2">{{ $buyer->address }}</td>
      <td class="p-4 w-1/4 border-black border-2">{{ $buyer->phone_nbr }}</td>
      @if ($buyer->Active_flag == 1)
      <td class="p-4 w-1/4 border-black border-2 font-bold text-bold text-white">Active
        <form action="{{ route('AdminUser.update',$buyer->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="hidden" value="0" name="deactivate">
          <button type="submit" class="bg-red-500 px-2 py-1 text-white">Deactivate</button>
        </form>
      </td>
      @else
      <td  class="p-4 w-1/4 border-black border-2 font-bold text-base text-red-500">Deactivated
      
        <form action="{{ route('AdminUser.destroy',$buyer->id) }}" method="post">
          @csrf
          @method('PUT')
          <input type="hidden" value="1" name="activate">
          <button type="submit" class="bg-green-600  px-2 py-1 text-red-50">Activate</button>
        </form>
      </td>
    </tr>
    @endif
    @endforeach
		</tbody>
	</table>
</div>
</div>

@endsection