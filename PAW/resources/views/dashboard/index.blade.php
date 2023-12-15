<!-- resources/views/dashboard/products/index.blade.php -->

@extends('layouts.dashboard') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1>Product Dashboard</h1>

    <form action="{{ route('dashboard.index') }}" method="GET" class="mb-4">
        <div class="form-group">
            <label for="category_search">Search by Category/Name/Description:</label>
            <input type="text" name="category_search" id="category_search" class="form-control" value="{{ request('category_search') }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <!-- Show/Hide Categories Buttons -->
    <br>
    <button id="showCategoriesBtn" class="btn btn-primary">Show All Categories</button>
    <button id="hideCategoriesBtn" class="btn btn-primary" style="display: none;">Close All Categories</button>

    <!-- Display a list of all categories -->
    <div id="allCategories" class="category-scroll" style="display: none;">
        <h2>All Categories</h2>
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Check if there is a category search or if products are available -->
    @if((request()->has('category_search') && count($products) > 0) || count($categories) > 0)

        <!-- Display products only if there is a category search -->
        @if(request()->has('category_search') && count($products) > 0)
            @foreach($products as $product)
                <div>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>

                    @if ($product->category)
                        <p>Category: {{ $product->category->name }}</p>
                    @else
                        <p>Category: No category available</p>
                    @endif
                </div>
            @endforeach

            <!-- Display pagination links -->
            {{ $products->links() }}
        @endif

        <!-- Display the table of products -->
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

        <!-- Display all categories if there is no category search -->
        @elseif(count($categories) > 0)
            <h2>All Categories</h2>
            <div class="category-scroll">
                <ul>
                    @foreach($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- JavaScript to handle the show/hide functionality -->
    <script>
        const showCategoriesBtn = document.getElementById('showCategoriesBtn');
        const hideCategoriesBtn = document.getElementById('hideCategoriesBtn');
        const allCategoriesDiv = document.getElementById('allCategories');

        showCategoriesBtn.addEventListener('click', function() {
            allCategoriesDiv.style.display = 'block';
            showCategoriesBtn.style.display = 'none';
            hideCategoriesBtn.style.display = 'inline-block';
        });

        hideCategoriesBtn.addEventListener('click', function() {
            allCategoriesDiv.style.display = 'none';
            showCategoriesBtn.style.display = 'inline-block';
            hideCategoriesBtn.style.display = 'none';
        });
    </script>

</div>

@endsection
