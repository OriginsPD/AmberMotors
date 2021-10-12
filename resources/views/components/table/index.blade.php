<div {{ $attributes->merge(['class' => 'py-1 align-middle inline-block min-w-full sm:px-6 lg:px-8']) }}>
    <div class="shadow border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
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
