<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: '{{ $message }}'
    })

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
