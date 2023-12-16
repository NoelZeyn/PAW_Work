@extends('layouts.dashboard')

@section('content')
    <div class="payment-details-container">
        <div class="payment-details">
            <h1>Payment Details</h1>
            <p>ID: {{ $payments->id }}</p>
            <p>Order ID: {{ $payments->order_id }}</p>
            <p>Amount: {{ $payments->amount }}</p>
            <p>Payment Method: {{ $payments->payment_method }}</p>
            <p>Status: {{ $payments->status }}</p>
        </div>
    </div>
    
    <style>
        .payment-details-container {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .payment-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        .payment-details h1 {
            text-align: center;
            color: #333;
            padding: 20px;
        }

        .payment-details p {
            margin-bottom: 10px;
            color: #555;
            padding: 5px;
        }
    </style>
@endsection
