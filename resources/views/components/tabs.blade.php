<div {{ $attributes->merge(['class' => 'flex container mx-auto mt-4 flex-col']) }}>
    <ul class="list-reset flex border-b">
        <li id="tab-1" class=" border-r bg-gray-500">
            <a id="tab-btn-1"
                class="bg-white inline-block tab-active border-b-2 hover:border-yellow-500 py-2 px-4 hover:text-yellow-500 focus:outline-none"
                href="#"
            >Client</a
            >
        </li>
        <li id="tab-2" class=" border-r bg-gray-500">
            <a id="tab-btn-2"
                class="bg-white inline-block border-b-2 hover:border-yellow-500 py-2 px-4 hover:text-blue-darker hover:text-yellow-500 focus:outline-none"
                href="#"
            >Current</a
            >
        </li>
        <li id="tab-3" class=" border-r bg-gray-500">
            <a id="tab-btn-3"
                class="bg-white inline-block border-b-2 hover:border-yellow-500 py-2 px-4 hover:text-blue-darker hover:text-yellow-500 focus:outline-none"
                href="#"
            >Penalty</a
            >
        </li>
        <li id="tab-4" class="">
            <span
                class="bg-white inline-block  py-2 px-4 hover:text-yellow-500 focus:outline-none">
                <x-search />
            </span>
        </li>
    </ul>
    <div class="flex flex-row ">
        {{ $slot }}
    </div>
</div>

<script>
    $(document).ready(function (){
        $('#tab-1').on('click',function (){
            $('#tab-btn-1').addClass('tab-active');
            $('#tab-btn-2').removeClass('tab-active');
            $('#tab-btn-3').removeClass('tab-active');
            $('#client').slideToggle();
            $('#current').hide();
            $('#penalty').hide()
            $('#search').hide();

        });

        $('#tab-2').on('click',function (){
            $('#tab-btn-1').removeClass('tab-active');
            $('#tab-btn-2').addClass('tab-active');
            $('#tab-btn-3').removeClass('tab-active');
            $('#client').hide();
            $('#penalty').hide()
            $('#search').hide();
            $('#current').slideToggle();

        });

        $('#tab-3').on('click',function (){
            $('#tab-btn-1').removeClass('tab-active');
            $('#tab-btn-2').removeClass('tab-active');
            $('#tab-btn-3').addClass('tab-active');
            $('#client').hide();
            $('#penalty').slideToggle();
            $('#current').hide();
            $('#search').hide();

        });

    });
</script>

