<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/payments.css') }}">
    <!-- Add your stylesheets, scripts, or other head content here -->
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('inventories.index') }}">Inventories</a></li>
            <li><a href="{{ route('orders.history') }}">Orders</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('reviews.index') }}">Reviews</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li>
                <a href="{{ route('keranjang.index') }}" style="position: absolute; top: 10px; right: 10px;">
                <img src="/path/to/your/cart/logo.png" alt="Keranjang" width="50" height="50">
            </a>
            </li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Add your footer content here -->

</body>
</html>
