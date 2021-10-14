<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<!-- Required font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

<!-- Small -->
<div class="relative flex w-full flex-wrap items-stretch">
  <span
      class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 rounded-l-full absolute bg-yellow-500 rounded text-base items-center justify-center w-8 p-2 py-1">
    <i class="fas fa-search text-white z-10"></i>
  </span>
    <form action="{{ route('OwnerCustomer.list.index') }}" method="GET">
        @csrf
    <label>
        <input type="text" name="search" placeholder="Search"
               class="px-2 py-1 placeholder-yellow-600 rounded-xl text-gray-600 relative bg-white bg-white rounded text-sm border border-yellow-600 focus:ring-2 ring-gray-400 outline-none  w-full pl-10" />
    </label>
    </form>
</div>

