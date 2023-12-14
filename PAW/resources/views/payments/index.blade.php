@extends('layouts.app')

@section('content')
<h1>Payment List</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Order ID</th>
            <th>Amount</th>
            <th>Payment Method</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->order_id }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->status }}</td>
                <td><a href="{{ route('payments.show', $payment->id) }}">View Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection