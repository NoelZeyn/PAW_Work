<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesanan</title>
        <script src="{{ asset('js/order.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/order.css') }}"></head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <body>
        @extends('layouts.dashboard')

        @section('content')
        <div class="container">
            <h1>Riwayat Pesanan</h1>

            @if(session('success'))
                <script>
                    window.onload = function() {
                        alert("{{ session('success') }}");
                    }
                </script>
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
                        <th>Status Pesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->order_date }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <form action="{{ route('orders.delete',['order_id' => $order->order_id]) }}" method="post">
                                    @csrf    
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" data-orderid="{{ $order->order_id}}" >Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

            
        @endsection
    </body>
    </html>

