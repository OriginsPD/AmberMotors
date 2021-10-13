<div {{ $attributes->merge(['class' => 'py-1 align-middle mt-4 inline-block min-w-full mx-auto sm:px-6 lg:px-8']) }}>
    <div class=" border border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y shadow divide-gray-200">
            <thead class="bg-blue-700 rounded-t">
            <tr>
                {{ $heading }}
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{ $slot }}
            <!-- More people... -->
            </tbody>
        </table>
    </div>
</div>
