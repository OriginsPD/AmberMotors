<script>

    $(document).ready(function() {
        Swal.fire({
            title: "Failed",
            text: "{{ $message }}",
            icon: "fail",
            iconColor: 'red',
            confirmButtonColor: 'red'
        });

    });

</script>
