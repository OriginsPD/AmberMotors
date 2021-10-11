@extends('layout.admin')

@section('content')


<!-- component -->
<div class="container">
	<h1 class="mb-8">
    Scrollable Table Fixed Height
  </h1>

	<table class="text-left w-full">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<th class="p-4 w-1/4">Name</th>
				<th class="p-4 w-1/4">Email</th>
				<th class="p-4 w-1/4">Address</th>
				<th class="p-4 w-1/4">Phone Number</th>
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 80vh;">
		@foreach ($buyers as $buyer)
    <tr class="flex w-full mb-4">
      <td class="p-4 w-1/4">{{ $buyer->name }}</td>
      <td class="p-4 w-1/4">{{ $buyer->email }}</td>
      <td class="p-4 w-1/4">{{ $buyer->address }}</td>
      <td class="p-4 w-1/4">{{ $buyer->phone_nbr }}</td>
      <td>
        <form action="{{ route('AdminUser.update',$buyer->id) }}" method="POST">
        @csrf
        <input type="hidden" value="1" name="activate">
        <button type="submit">Activate</button>
        </form>
      </td>
    </tr>
    @endforeach
		</tbody>
	</table>
</div>


@endsection