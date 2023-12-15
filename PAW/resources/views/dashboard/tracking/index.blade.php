@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Tracking Data Dashboard</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trackings as $tracking)
                <tr>
                    <td>{{ $tracking }}</td>
                    <td>{{ $tracking->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



</div>

@endsection
