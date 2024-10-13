<!DOCTYPE html>
<html lang="es">
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
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>


<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{route('')}}">Productos</a></li>
            <li class="list-group-item">Ventas</li>
            <li class="list-group-item">Almacenes</li>
            <li class="list-group-item">Facturas</li>
            <li class="list-group-item">Transportes</li>
        </ul>

    </div>
    <div class="col-md-9">
        <h5>Aqui es el dashboard</h5>
        @yield('contenido')
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
