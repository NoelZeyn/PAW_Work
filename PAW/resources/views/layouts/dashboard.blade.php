<!-- resources/views/layouts/app.blade.php -->

<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <nav>
        <ul>
            <li><a href="{{ route('dashboard.index') }}">EcommerceXpresse</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('inventories.index') }}">Inventories</a></li>
            <li><a href="{{ route('orders.history') }}">Orders</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('reviews.index') }}">Reviews</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
        <i class='bx bxs-cart' id="cart-icon"></i>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Add your footer content here -->

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

</html>