<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<<<<<<< Updated upstream
    <!-- Add this to the head section of your HTML file -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>

        nav {
            position: relative;
            background-color: #032539; /* Warna 032539 */

        }

        .keranjang-icon {
            position: absolute;
            top: 10px; 
            right: 10px;
        }
        .keranjang-icon a i {
            color: #FA991C; /* Warna FA991C */
        }


    </style>
=======
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
>>>>>>> Stashed changes

<script>
    $(document).ready(function () {
        $('.category-scroll a').on('click', function (event) {
            if (this.hash !== '') {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
    
    <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}">     -->
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
            <li class="keranjang-icon">
            <a href="{{ route('keranjang.index') }}">
                <i class="fa fa-shopping-cart"></i>
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
