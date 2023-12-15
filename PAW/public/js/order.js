document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.btn-danger');
    
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const orderId = this.getAttribute('data-orderid');
            confirmDelete(orderId);
        });
    });

    function confirmDelete(orderId) {
        Swal.fire({
            title: 'Konfirmasi Penghapusan',
            text: 'Apakah Anda yakin ingin menghapus histori pesanan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Tindakan apa yang ingin dilakukan setelah konfirmasi (submit form, dll.)
                document.getElementById('deleteForm' + orderId).submit();
            }
        });
    }
});