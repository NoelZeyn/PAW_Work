<!-- resources/views/dashboard/products/index.blade.php -->

@extends('layouts.dashboard') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>Product Dashboard</h1>
    <!-- resources/views/dashboard/index.blade.php -->

    <form action="{{ route('dashboard.index') }}" method="GET" class="mb-4">
        <div class="form-group">
            <label for="category_search">Search by Category/Name/Description:</label>
            <input type="text" name="category_search" id="category_search" class="form-control" value="{{ request('category_search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <!-- Display a list of all categories -->
    <h2>All Categories</h2>
    <div class="category-scroll">
        <ul>
            @foreach($categories as $category)
            <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>


    @if(request()->has('category_search') && count($products) > 0)
    <!-- Display your search results here -->
    <!-- resources/views/dashboard/index.blade.php -->

    @foreach($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>

        @if ($product->category) <!-- Check if the category relationship exists -->
        <p>Category: {{ $product->category->name }}</p>
        @else
        <p>Category: No category available</p>
        @endif
    </div>
    @endforeach

    <!-- Display pagination links -->
    {{ $products->links() }}
    @endif

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