@extends('layouts.dashboard')

@section('content')
    <div class="payments-create-container">
        <form method="post" action="{{ route('payments.store') }}" class="payment-form">
            @csrf
            <h1 class="form-group">Create Payment</h1>
            <div class="form-group">
                <label for="order_id">Order ID:</label>
                <input type="text" name="order_id" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <input type="text" name="payment_method" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <style>

        .payments-create-container {
            text-align: center;
            padding: 100px;
        }

        .payment-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .payment-form label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .payment-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        .payment-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .payment-form button:hover {
            background-color: #45a049;
        }
    </style>
@endsection
