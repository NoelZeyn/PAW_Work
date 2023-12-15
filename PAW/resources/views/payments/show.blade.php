<!-- Display details of a single payment -->
@extends('layouts.app')

@section('content')
<div class="payment-details">
    <h1>Payment Details</h1>
    <p>ID: {{ $payments->id }}</p>
    <p>Order ID: {{ $payments->order_id }}</p>
    <p>Amount: {{ $payments->amount }}</p>
    <p>Payment Method: {{ $payments->payment_method }}</p>
    <p>Status: {{ $payments->status }}</p>
</div>
@endsection