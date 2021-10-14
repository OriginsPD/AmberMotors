 <div class="flex h-28">
        <div>
            <label
                class="w-64 flex flex-col items-center px-4 py-6 bg-blue-500 text-white hover:scale-95 duration-75 transform rounded-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-400 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input id="imgInp" type='file' onchange="loadFile(event)" {{ $attributes }} />
            </label>
        </div>
     <div class=" h-46 w-28 border-blue-700 border">
         <img id="output" height="80%" WIDTH="100%" class=" h-28 object-fill"/>
     </div>
    </div>



<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
