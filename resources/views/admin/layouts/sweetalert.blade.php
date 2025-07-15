
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                text: "{{ session('error') }}",
                timer: 5000,
                showConfirmButton: false
            });
        @endif

        @if (session('success'))
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                text: "{{ session('success') }}",
                timer: 1500,
                showConfirmButton: false
            });
        @endif
    });
</script>