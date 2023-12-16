<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang EcommerceXpresse</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        scroll-padding-top: 2rem;
        scroll-behavior: smooth;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }
    :root{
        --main-color: #fd4646;
        --text-color: #171427;
        --bg-color: #fff;
    }
    img {
        width: 100%;
    }
    body{
        background: #FBF3F2;
    }
    .container{
        max-width: 1068px;
        margin: auto;
        width: 100%;
    }
    header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #032539;
        box-shadow: 0 1px 4px hsl(0 4% 15% / 10%);
        z-index: 100;
    }
    .nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0;
    }
    .logo{
        font-size: 1.5rem;
        font-weight: 400;
        color: #FA991C;
    }
    .nav-links {
    display: flex;
    justify-content: space-between;
    list-style: none;
}

.nav-links a {
    display: inline-block;
    padding: 10px 20px; 
    transition: background-color 0.3s, color 0.3s;
    color: #FBF3F2; 
}

.nav-links a:hover {
    background: #FA991C;
    color: #032539;
    width: 100%; 
}


#cart-icon {
    font-size: 1.8rem;
    color: #FA991C;
    position: absolute;
    top: 23px; 
    right: 110px; 
    cursor: pointer;
}

#user-icon {
    font-size: 1.8rem;
    color: #FA991C; 
    position: absolute;
    top: 23px;
    right: 50px; 
    cursor: pointer;
}

    .cart{
        position: fixed;
        top: 0;
        right: -100%;
        width: 360px;   
        min-height: 100vh;
        padding: 20px;
        background:  #032539;
        box-shadow: -2px 0 4px hsl(0 4% 15% / 10%);
        transition: 0.3s;
    }
    .cart-title{
        text-align: center;
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 2rem;
        color: #FBF3F2;
    }
    section{
        padding: 4rem 0 3rem;
    }
    .section-title{
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 1.5rem;
        color: #032539;
    }
    .shop{
        margin-top: 2rem;
    }
    .shop-content{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(220px, auto));
        gap: 1.5rem;
    }
    .product-box{
        position: relative;
    }
    .product-box:hover{
        padding: 10px;
        border: 1px solid var(--text-color);
        transition: 0.4s;
    }
    .product-img{
        width: 100%;
        height: auto;
        margin-bottom: 0.5rem;
    }
    .product-title{
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    .price{
        font-weight: 500;
    }
    .add-cart{
        position: absolute;
        bottom: 0;
        right: 0;
        background: #032539;
        color: #FBF3F2;
        padding: 10px;
        cursor: pointer;
    }
    .add-cart:hover{
        background: #032539;
        color: #FA991C;
    }
    .cart-box{
        display: grid;
        grid-template-columns: 32% 50% 18%;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
    }
    .cart-content {
    color: #FBF3F2; 
}
    .cart-img{
        width: 100px;
        height: 100px;
        object-fit: contain;
        padding: 10px;
    }
    .detail-box{
        display: grid;
        row-gap: 0.5rem;
    }
    .cart-product-title{
        font-size: 1rem;
        text-transform: uppercase;   
    }
    .cart-price{
        font-weight: 500;
    }
    .cart-quantity{
        border: 1px solid var(--text-color);
        outline-color: var(--main-color);
        width: 2.4rem;
        text-align: 1rem;
    }
    .cart-remove{
        font-size: 24px;
        color: #FA991C;
        cursor: pointer;
        padding-left: 150px;
    }
    .total{
        display: flex;
        justify-content: flex-end;
        margin-top: 1.5rem;
        border-top: 1px solid var(--text-color);
    }
    .total-title{
        font-size: 1rem;
        font-weight: 600;
        color: #FBF3F2;
    }
    .total-price{
        margin-left: 0.5rem;
        color: #FBF3F2;
    }
    .btn-buy{
        display: flex;
        margin: 1.5rem auto 0 auto;
        padding: 12px 20px;
        border: none;
        background: #1C768F;
        color: var(--bg-color);
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
    }
    .btn-buy:hover{
        background: #FA991C;
        color: #032539;
    }
    #close-cart{
        position: absolute;
        top: 1rem;
        right: 0.8rem;
        font-size: 2rem;
        color: #FBF3F2;
        cursor: pointer;
    }
    .cart.active{
        right: 0;
    }
    @media(max-width:1080px){
        .nav{
            padding: 15px;
        }
        section{
            padding: 3rem 0 2rem;
        }
        .container{
            margin: 0 auto;
            width: 90%;
        }
        .shop{
            margin-top: 2rem !important;
        }
    }
    @media(max-width:400px){
        .nav{
            padding: 11px;
        }
        .logo{
            font-size: 1rem;
        }
        .cart{
            width: 320px;
        }
    }
    @media(max-width:360px){
        .shop{
            margin-top: 1rem !important;
        }
        .cart{
            width: 280px;
        }
    }
    </style>

</head>
<body>

<header>
    <div class="nav container">
        <a href="#" class="logo" style="color: #FA991C;">EcommerceXpresse</a>
        <nav>
            <ul class="nav-links">
            <li><a href="{{ route('dashboard.index') }}">Home</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            </ul>
        </nav>
        <i class='bx bx-cart' id="cart-icon"></i>
        <i class='bx bx-user' id="user-icon"></i>

        <div class="cart">
            <h2 class="cart-title">KERANJANGMU</h2>
            <div class="cart-content">
                </div>
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$10</div>
                </div>
                <button type="button" class="btn-buy">Beli</button>
                <i class='bx bx-x' id="close-cart"></i>

            </div>
        </div>
        
    </div>
    </header>
    <section class="shop container">
        <h2 class="section-title">PRODUK</h2>
        <div class="shop-content">
            <div class="product-box">
                <img src="img/jam_tangan.jpg" alt="" class="product-img">
                <h2 class="product-title">JAM TANGAN</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/setrika.jpg" alt="" class="product-img">
                <h2 class="product-title">SETRIKA LISTRIK</h2>
                <span class="price">$15</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/boneka_beruang.jpg" alt="" class="product-img">
                <h2 class="product-title">BONEKA</h2>
                <span class="price">$5</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/sepatu.jpg" alt="" class="product-img">
                <h2 class="product-title">SEPATU</h2>
                <span class="price">$25</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/helm.jpg" alt="" class="product-img">
                <h2 class="product-title">HELM BOGO</h2>
                <span class="price">$30</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/bagpack.jpg" alt="" class="product-img">
                <h2 class="product-title">BAGPACK</h2>
                <span class="price">$80</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/headphone.jpg" alt="" class="product-img">
                <h2 class="product-title">HEADPHONE</h2>
                <span class="price">$40</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>

            <div class="product-box">
                <img src="img/kipas_angin.jpg" alt="" class="product-img">
                <h2 class="product-title">KIPAS ANGIN</h2>
                <span class="price">$35</span>
                <i class='bx bxs-shopping-bag add-cart' ></i>
            </div>
            
        </div>
    </section>

    <script>
    let cartIcon = document.querySelector("#cart-icon");
    let cart = document.querySelector(".cart");
    let closeCart = document.querySelector("#close-cart");

    cartIcon.onclick = () => {
        cart.classList.add("active");
    };
    closeCart.onclick = () => {
        cart.classList.remove("active");
    };

    if (document.readyState == "loading") {
        document.addEventListener("DOMContentLoaded", ready);
    } else {
        ready();
    }

    function ready() {
        var removeCartButtons = document.getElementsByClassName("cart-remove");
        for (var i = 0; i < removeCartButtons.length; i++) {
            var button = removeCartButtons[i];
            button.addEventListener("click", removeCartItem);
        }

        var quantityInputs = document.getElementsByClassName("cart-quantity");
        for (var i = 0; i < quantityInputs.length; i++) {
            var input = quantityInputs[i];
            input.addEventListener("change", quantityChanged);
            input.addEventListener("input", quantityChanged);
        }

        var addCart = document.getElementsByClassName("add-cart");
        for (var i = 0; i < addCart.length; i++) {
            var button = addCart[i];
            button.addEventListener("click", addCartClicked);
        }

        document.getElementsByClassName("btn-buy")[0].addEventListener("click", buyButtonClicked);
    }

    function buyButtonClicked() {
        alert('Pesanan Anda telah dibuat');
        var cartContent = document.querySelector(".cart-content");
        while (cartContent.hasChildNodes()) {
            cartContent.removeChild(cartContent.firstChild);
        }
        updatetotal();
    }

    function removeCartItem(event) {
        var buttonClicked = event.target;
        buttonClicked.parentNode.parentNode.remove();
        updatetotal();
    }

    function quantityChanged(event) {
        var input = event.target;
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1;
        }
        updatetotal();
    }

    function addCartClicked(event) {
        var button = event.target;
        var shopProducts = button.parentElement;
        var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
        var price = shopProducts.getElementsByClassName("price")[0].innerText;
        var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
        addProductToCart(title, price, productImg);
        updatetotal();
    }

    function addProductToCart(title, price, productImg) {
        var cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cart-box");

        var cartItems = document.querySelector(".cart-content");
        var cartItemsNames = cartItems.querySelectorAll(".cart-product-title");
        for (var i = 0; i < cartItemsNames.length; i++) {
            if (cartItemsNames[i].textContent === title) {
                alert("Item is already in the cart");
                return;
            }
        }
        var cartBoxContent = `
            <img src="${productImg}" alt="" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-title">${title}</div>
                <div class="cart-price">${price}</div>
                <input type="number" value="1" class="cart-quantity">
                <i class='bx bxs-trash-alt cart-remove'></i>
            </div>
        `;

        cartShopBox.innerHTML = cartBoxContent;
        cartItems.appendChild(cartShopBox);
        cartShopBox.querySelector(".cart-remove").addEventListener("click", removeCartItem);
        cartShopBox.querySelector(".cart-quantity").addEventListener("change", quantityChanged);
        cartShopBox.querySelector(".cart-quantity").addEventListener("input", quantityChanged);

        updatetotal();
    }

    function updatetotal() {
        var cartContent = document.getElementsByClassName("cart-content")[0];
        var cartBoxes = cartContent.getElementsByClassName("cart-box");
        var total = 0;
        for (var i = 0; i < cartBoxes.length; i++) {
            var cartBox = cartBoxes[i];
            var priceElement = cartBox.getElementsByClassName("cart-price")[0];
            var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
            var price = parseFloat(priceElement.innerText.replace("$", ""));
            var quantity = quantityElement.value;
            total = total + price * quantity;
        }
        total = Math.round(total * 100) / 100;

        document.getElementsByClassName("total-price")[0].innerText = "$" + total;
    }

    let userIcon = document.querySelector("#user-icon");
    userIcon.addEventListener("click", function () {
        window.location.href = "{{ route('users.index') }}";
    });
</script>

</body>
</html>