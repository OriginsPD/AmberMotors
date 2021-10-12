<li class="my-4">
    <a {{ $attributes->merge(['class' => 'block px-4 cursor-pointer py-2 mt-2 text-base transition duration-500 font-medium ease-in-out transform border-l-4 border-white text-blue-800 hover:border-yellow-600 ring-offset-current ring-offset-2 hover:text-yellow-600']) }}> {{ $slot }} </a>
</li>
