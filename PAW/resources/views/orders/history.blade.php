
@extends('layouts.app')

@section('content')
    <h1>Riwayat Pesanan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Tanggal Pesanan</th>
                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->order_date }}</td>
                    <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                    <td>
                        <form action="{{ route('orders.delete',['order_id' => $order->order_id]) }}" method="post">
                        @csrf    
                        @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="confirmDelete({{$order->order_id}}) >Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
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
                    // Submit form jika pengguna mengonfirmasi
                    document.getElementById('deleteForm' + orderId).submit();
                }
            });
        }
    </script>

@endsection