<script>


    $(document).ready(function() {
        Swal.fire({
            title: "Added Successful",
            text: "{{ $message }}",
            icon: "success",
            iconColor: 'skyblue',
            confirmButtonColor: 'skyblue'
        });

    });

</script>
