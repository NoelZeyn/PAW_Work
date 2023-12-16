<!-- resources/views/dashboard/trackings/index.blade.php -->

@extends('layouts.dashboard') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>Tracking Dashboard</h1>
{{--
    <form action="{{ route('tracking.find') }}" method="GET" class="mb-4">
        <div class="form-group">
            <label for="category_search">Search by Category/Name/Description:</label>
            <input type="text" name="category_search" id="category_search" class="form-control" value="{{ request('category_search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trackings as $tracking)
                <tr>
                    <td>
                        <h3>{{ $tracking->name }}</h3>
                    </td>
                    <td>{{ Str::limit($tracking->description, 50) }}</td>
                    <td style="color: red;">${{ $tracking->price }}</td>
                    <td>
                        @if($tracking->category)
                            {{ $tracking->category->name }}
                        @else
                            No Category
                        @endif
                    </td>
                    <td>
                        <!-- resources/views/dashboard/trackings/index.blade.php -->
                        <form action="{{ route('inventory.add', ['tracking' => $tracking->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary">BELI</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
