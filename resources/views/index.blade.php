<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page with Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart-icon {
            position: relative;
            cursor: pointer;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 5px 10px;
            font-size: 12px;
        }
    </style>
    <style>
        .carousel-item img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }
    </style>

<style>
        /* Degradado en tonos azules */
        .navbar-custom {
            background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(0,80,192,1) 100%);
        }
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .navbar-custom .navbar-brand {
            color: white;
        }
        .navbar-custom .nav-link:hover {
            color: #d9e2f3; /* Color más claro en hover */
        }
    </style>


</head>
<body>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>


 <!-- Slider -->
 <div id="sliderExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="../../imagenes/imagen1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="../../imagenes/imagen1.png" class="d-block w-100" alt="Slide 2">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="../../imagenes/imagen1.jpg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    
    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#sliderExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sliderExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <!-- Indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#sliderExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#sliderExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#sliderExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
</div>

<!-- Main content -->
<div class="container my-5">
    <h1 class="text-center mb-4">Our Products</h1>
    <div class="row" id="products">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="text-muted">$29.99</p>
                    <a href="#" class="btn btn-primary" onclick="addToCart('Product 1', 29.99)">Buy Now</a>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="text-muted">$39.99</p>
                    <a href="#" class="btn btn-primary" onclick="addToCart('Product 2', 39.99)">Buy Now</a>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="text-muted">$49.99</p>
                    <a href="#" class="btn btn-primary" onclick="addToCart('Product 3', 49.99)">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
<div id="cart-modal" class="modal fade" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="cart-items" class="list-group">
                    <!-- Cart items will be dynamically added here -->
                </ul>
                <p class="mt-3">Total: $<span id="cart-total">0.00</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Checkout</button>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <p>&copy; 2024 My Store. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let cart = [];
        let total = 0;

        function addToCart(product, price) {
            cart.push({ product, price });
            total += price;
            updateCart();
        }

        function updateCart() {
            document.getElementById("cart-count").innerText = cart.length;
            const cartItems = document.getElementById("cart-items");
            const cartTotal = document.getElementById("cart-total");
            
            cartItems.innerHTML = "";
            cart.forEach(item => {
                const li = document.createElement("li");
                li.classList.add("list-group-item");
                li.innerText = `${item.product} - $${item.price.toFixed(2)}`;
                cartItems.appendChild(li);
            });
            cartTotal.innerText = total.toFixed(2);
        }

        function toggleCart() {
            const cartModal = new bootstrap.Modal(document.getElementById('cart-modal'));
            cartModal.show();
        }
    </script>

    <!-- Slider autoplay configuration -->
    <script>
        const myCarousel = document.querySelector('#sliderExample');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // 3 segundos
            ride: 'carousel'
        });
    </script>


</body>
</html>
