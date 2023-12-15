<!-- resources/views/dashboard/products/index.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>Product Dashboard</h1>
    <form action="{{ route('dashboard.index') }}" method="GET" class="mb-4">
            <div class="form-group">
                <label for="category_search">Search by Category:</label>
                <input type="text" name="category_search" id="category_search" class="form-control" value="{{ request('category_search') }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

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
            @foreach($products as $product)
            <tr>
                <td>
                    <h3>{{ $product->name }}</h3>
                </td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td style="color: red;">${{ $product->price }}</td>
                <td>
                    @if($product->category)
                    {{ $product->category->name }}
                    @else
                    No Category
                    @endif
                </td>
                <td>
                    <!-- resources/views/dashboard/products/index.blade.php -->

                    <form action="{{ route('inventory.add', ['product' => $product->id]) }}" method="post">
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