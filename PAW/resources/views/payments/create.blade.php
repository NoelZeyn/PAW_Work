@extends('layouts.app')

@section('content')
<h1>Create Payment</h1>
<form method="post" action="{{ route('payments.store') }}">
    @csrf
    <label for="order_id">Order ID:</label>
    <input type="text" name="order_id" required>
    <br>
    <label for="amount">Amount:</label>
    <input type="text" name="amount" required>
    <br>
    <label for="payment_method">Payment Method:</label>
    <input type="text" name="payment_method" required>
    <br>
    <button type="submit">Submit Payment</button>
</form>
@endsection
