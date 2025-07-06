<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Verificar si el usuario está logueado
checkAuth();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Hardverst - Productos Naturales</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/style2.css">
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="container-logo">
                    <i class="fa-solid fa-leaf"></i>
                    <h1><a href="#">Green Hardverst</a></h1>
                </div>
                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-basket-shopping"></i>
                    <div class="content-shopping-cart">
                        <span class="text">Carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="dashboard.php">Inicio</a></li>
                    <li><a href="dashboard2.php">Productos</a></li>
                    <li><a href="dashboard3.php">Categorías</a></li>
                    <li><a href="dashboard4.php">Plantas</a></li>
                    <li><a href="#">Más</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="logout.php">Cerrar sesion</a></li>
                    
                </ul>
                <form class="search-form">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <!-- Sección 1: Lácteos -->
        <section class="container top-products">
            <h1 class="heading-1">Lácteos</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/huevos.png" alt="Huevos frescos" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Huevos frescos</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$500<span>(und)</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/leche.jpg" alt="Leche fresca" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Leche fresca</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$12.000<span>(lit)</span></p>
                    </div>
                </div>
                <!--Producto 3-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/queso.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Queso</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.000<span>(lb)</span></p>
                    </div>
                </div>
                <!--Producto 4-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/yogurt.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Yogurt</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$12.000<span>(lit)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Frutas y Verduras -->
        <section class="container top-products">
            <h1 class="heading-1">Frutas y Verduras</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/large.jpg" alt="Tomate fresco" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Tomate de arbol</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.200<span>(kg)</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/lechuga.jpeg" alt="Lechuga orgánica" />
                        <span class="discount">-15%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Lechuga orgánica</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.200<span>(kg)</span></p>
                    </div>
                </div>
                <!--Producto 3-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/pimenton.jpg" alt="Tomate fresco" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Pimenton</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.200<span>(kg)</span></p>
                    </div>
                </div>
                <!--Producto 4-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/yacon.jpg" alt="Tomate fresco" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Yacon</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.200<span>(kg)</span></p>
                    </div>
                </div>
                <!--Producto 5-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/acelga.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Acelga</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">800<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 6-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/pepino.png" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Pepino zuchini</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(und)</span></p>
                    </div>
                </div>
                <!--Producto 7-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/lechuga.jpeg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Lechuga crespa verde</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.400<span>(kg)</span></p>
                    </div>
                </div>
                <!--Producto 8-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/calabaza.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Calabaza</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.200<span>(und)</span></p>
                    </div>
                </div>
                <!--Producto 9-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/tatsoi.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Tatsoi</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(und)</span></p>
                    </div>
                </div>
                <!--Producto 10-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/apio.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Apio</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 11-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/colchina.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Colchina</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.500<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 12-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/kale.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Kale</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.500<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 13-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/mostaza.jpg" alt=""/>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Mostaza</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.500<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 14-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cogollo.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Cogollo</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.500<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 15-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cilantro.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Cilantro</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atado)</span></p>
                    </div>
                </div>
                <!--Producto 16-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/aji_deshidratado.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Aji deshidratado</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(bolsa)</span></p>
                    </div>
                </div>
                <!--Producto 17-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/tomate_chonto.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Tomate chonto</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.200<span>(kg)</span></p>
                    </div>
                </div>
                <!--Producto 18-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/frijol.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Frijol desgranado</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.000<span>(Lb)</span></p>
                    </div>
                </div>
                <!--Producto 19-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/puerro.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Puerro</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(und)</span></p>
                    </div>
                </div>
                <!--Producto 20-->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/frijol_cascara.jpg" alt="" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Frijol con cascara</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.000<span>(lb)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Plantas Ornamentales -->
        <section class="container top-products">
            <h1 class="heading-1">Plantas Ornamentales</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/rosa.jpg" alt="Rosas frescas" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Rosas frescas</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.000<span>(und)</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/girasol.jpg" alt="Girasoles" />
                        <span class="discount">-20%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Girasoles</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.000<span>(und)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 4: Plantas Medicinales -->
        <section class="container top-products">
            <h1 class="heading-1">Plantas Medicinales</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/sabila.jpg" alt="Sábila natural" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Sábila natural</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$100<span>(und)</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cidron.jpg" alt="Cidrón fresco" />
                        <span class="discount">-5%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Cidrón fresco</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 5: Especias y Hierbas -->
        <section class="container top-products">
            <h1 class="heading-1">Especias y Hierbas</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cilantro.jpg" alt="Cilantro fresco" />
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Cilantro fresco</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/estragon.jpg" alt="Estragón fresco" />
                        <span class="discount">-8%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Estragón fresco</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 6: Productos Especiales -->
        <section class="container top-products">
            <h1 class="heading-1">Productos Especiales</h1>
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-irish.jpg" alt="Café Irish" />
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.60 <span>$5.30</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-ingles.jpg" alt="Café Inglés" />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span><i class="fa-regular fa-eye"></i></span>
                            <span><i class="fa-regular fa-heart"></i></span>
                            <span><i class="fa-solid fa-code-compare"></i></span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Inglés</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Contacto</p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Calle Principal 123, Ciudad Verde</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>+123 456 7890</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>info@greenhardverst.com</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-clock"></i>
                            <span>L-V: 9am - 6pm</span>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <span class="facebook" title="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="twitter" title="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="instagram" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <span class="whatsapp" title="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </span>
                    </div>
                </div>
    
                <div class="information">
                    <p class="title-footer">Enlaces útiles</p>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Sobre nosotros</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Nuestros productos</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Preguntas frecuentes</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Política de privacidad</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Términos y condiciones</a></li>
                    </ul>
                </div>
    
                <div class="my-account">
                    <p class="title-footer">Mi cuenta</p>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Mis pedidos</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Lista de deseos</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Mis favoritos</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Historial de compras</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Configuración</a></li>
                    </ul>
                </div>
    
                <div class="newsletter">
                    <p class="title-footer">Newsletter</p>
                    <div class="content">
                        <p>
                            Suscríbete para recibir ofertas exclusivas y novedades sobre productos naturales.
                        </p>
                        <form class="newsletter-form">
                            <div class="input-group">
                                <input type="email" placeholder="Tu correo electrónico" required>
                                <button type="submit" class="btn-send">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                        <div class="payment-methods">
                            <p>Aceptamos:</p>
                            <div class="payment-icons">
                                <i class="fa-brands fa-cc-visa" title="Visa"></i>
                                <i class="fa-brands fa-cc-mastercard" title="Mastercard"></i>
                                <i class="fa-brands fa-cc-paypal" title="PayPal"></i>
                                <i class="fa-brands fa-cc-amex" title="American Express"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="copyright">
                <div class="footer-links">
                    <a href="#">Mapa del sitio</a>
                    <a href="#">Política de cookies</a>
                    <a href="#">Aviso legal</a>
                </div>
                <p>
                    &copy; 2024 <span class="highlight">Green Hardverst</span> - Todos los derechos reservados | 
                    Desarrollado por <a href="#" class="developer">Equipo Verde</a>
                </p>
                <div class="back-to-top">
                    <a href="#" id="back-to-top" title="Volver arriba">
                        <i class="fa-solid fa-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Año actual en el footer
        document.getElementById('year').textContent = new Date().getFullYear();
        
        // Menú hamburguesa
        const menuBtn = document.querySelector('.fa-bars');
        const menu = document.querySelector('.menu');
        
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('show');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Variables globales
    let cartCount = 0;
    const cartNumberElement = document.querySelector('.content-shopping-cart .number');
    const cartIcon = document.querySelector('.fa-basket-shopping');
    
    // Verificar que los elementos existen
    if (!cartNumberElement) {
        console.error('No se encontró el elemento del contador del carrito');
    }
    
    if (!cartIcon) {
        console.error('No se encontró el icono del carrito');
    }

    // 1. Funcionalidad del carrito de compras
    const addToCartButtons = document.querySelectorAll('.add-cart');
    
    if (addToCartButtons.length === 0) {
        console.warn('No se encontraron botones "Añadir al carrito"');
    }
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            cartCount++;
            updateCartCount();
            showNotification('Producto añadido al carrito');
            
            // Obtener información del producto
            const productCard = this.closest('.card-product');
            if (productCard) {
                const productName = productCard.querySelector('h3')?.textContent || 'Producto sin nombre';
                const productPrice = productCard.querySelector('.price')?.textContent || 'Precio no disponible';
                
                console.log(`Añadido al carrito: ${productName} - ${productPrice}`);
                
                // Aquí podrías almacenar el producto en un array
                // Ejemplo: cartItems.push({name: productName, price: productPrice});
            } else {
                console.warn('No se pudo encontrar la tarjeta de producto');
            }
        });
    });
    
    // Función para actualizar el contador del carrito (mejorada)
    function updateCartCount() {
        if (cartNumberElement) {
            cartNumberElement.textContent = cartCount > 0 ? `(${cartCount})` : '';
        }
        
        // Opcional: animación cuando se añade un producto
        if (cartIcon) {
            cartIcon.classList.add('animate-bounce');
            setTimeout(() => {
                cartIcon.classList.remove('animate-bounce');
            }, 500);
        }
    }
    
    // Función para mostrar notificaciones (mejorada)
    function showNotification(message) {
        // Verificar si ya existe una notificación
        const existingNotification = document.querySelector('.custom-notification');
        if (existingNotification) {
            existingNotification.remove();
        }
        
        const notification = document.createElement('div');
        notification.className = 'custom-notification';
        notification.textContent = message;
        
        // Estilos mejorados
        Object.assign(notification.style, {
            position: 'fixed',
            bottom: '20px',
            right: '20px',
            backgroundColor: '#4CAF50',
            color: 'white',
            padding: '15px 25px',
            borderRadius: '4px',
            boxShadow: '0 4px 8px rgba(0, 0, 0, 0.2)',
            zIndex: '1000',
            animation: 'fadeIn 0.3s, fadeOut 0.3s 2.7s forwards'
        });
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
    
    // Añadir estilos CSS para la animación (solo si no existen)
    if (!document.querySelector('#notification-styles')) {
        const style = document.createElement('style');
        style.id = 'notification-styles';
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes fadeOut {
                from { opacity: 1; transform: translateY(0); }
                to { opacity: 0; transform: translateY(20px); }
            }
            .animate-bounce {
                animation: bounce 0.5s;
            }
            @keyframes bounce {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-5px); }
            }
        `;
        document.head.appendChild(style);
    }
});
    </script>
</body>
</html>