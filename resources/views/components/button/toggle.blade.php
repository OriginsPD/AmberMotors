<link rel="stylesheet" href="{{ asset('css/toggle.css') }}">

<!-- Component Start -->

<input class="hidden" name="toggle" type="checkbox"  {{ $attributes }} >
<label class="flex items-center justify-start w-10 border border-gray-500 h-6 p-1 rounded-full cursor-pointer" for="toggle_1">
    <span class="w-4 h-4 bg-black rounded-full"></span>
</label>

<!-- Component End  -->

<script>
    $(document).ready(function (){
        let toggleform = $('[id^="form_"]');
        let buttons = $('[id^="toggle_"]');

        $(buttons).on('click',function (){
            toggleform.submit()
        })
    });
</script>
