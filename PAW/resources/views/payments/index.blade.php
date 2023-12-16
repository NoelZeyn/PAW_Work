@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="payment-list">
            <h1>Payment List</h1>
            
            <div class="payments-table">
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
                        @forelse($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->order_id }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->payment_method }}</td>
                                <td>{{ $payment->status }}</td>
                                <td><a href="{{ route('payments.show', $payment->id) }}" class="view-details">View Details</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No payments available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .payment-list h1 {
            margin-bottom: 20px;
        }

        .payments-table table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .payments-table th, .payments-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .payments-table th {
            background-color: #f2f2f2;
        }

        .view-details {
            color: #007bff;
            text-decoration: none;
        }

        .view-details:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
@endsection