@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Konfirmasi Penghapusan Pesanan</h1>

        <p>Anda yakin ingin menghapus pesanan ini?</p>

        <form action="{{ route('orders.delete', ['order_id' => $order->order_id]) }}" method="post">
            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger">Ya, Hapus Pesanan</button>
            <a href="{{ route('orders.history') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
