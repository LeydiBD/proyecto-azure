<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Hardverst - Tienda de Plantas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/style4.css">
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="container-logo">
                    <i class="fa-solid fa-leaf"></i>
                    <h1 class=""><a href="">Green Hardverst</a></h1>
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
                <ul class="menu">
                    <li><a href="dashboard.php">Inicio</a></li>
                    <li><a href="index2.php">Productos</a></li>
                    <li><a href="index3.php">Categorias</a></li>
                    <li><a href="index4.php">Plantas</a></li>
                    <li><a href="#">Más</a></li>
                    <li><a href="#">Contactos</a></li>
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
        <!-- Sección de Plantas Ornamentales -->
        <section class="container plant-categories">
            <div class="category-header">
                <h2 class="category-title">Plantas Ornamentales</h2>
                <a href="#" class="view-all">Ver todas</a>
            </div>
            
            <div class="category-banner">
                <div class="category-banner-content">
                    <h2>Decora tu hogar con naturaleza</h2>
                    <p>Descubre nuestra selección de plantas ornamentales que traerán vida y frescura a tus espacios.</p>
                </div>
                <div class="category-banner-img">
                    <img src="img/rosas-banner.jpg" alt="Plantas ornamentales">
                </div>
            </div>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/rosa.jpg" alt="Rosas" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Rosas</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.000<span>(ramo)</span></p>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/girasol.jpg" alt="Girasoles" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Girasol</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.000<span>(und)</span></p>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/sabila.jpg" alt="Sábila" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Sábila</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$100<span>(und)</span></p>
                    </div>
                </div>
                
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/breva.jpg" alt="Breva" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Breva</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.400<span>(lbr)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Plantas Medicinales -->
        <section class="container plant-categories">
            <div class="category-header">
                <h2 class="category-title">Plantas Medicinales</h2>
                <a href="#" class="view-all">Ver todas</a>
            </div>
            
            <div class="category-banner">
                <div class="category-banner-content">
                    <h2>Salud natural en tu hogar</h2>
                    <p>Descubre el poder curativo de la naturaleza con nuestras plantas medicinales cultivadas orgánicamente.</p>
                </div>
                <div class="category-banner-img">
                    <img src="img/hierbas-banner.jpg" alt="Plantas medicinales">
                </div>
            </div>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cidron.jpg" alt="Cidrón" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Cidrón</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/estragon.jpg" alt="Estragón" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Estragón</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cilantro.jpg" alt="Cilantro" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Cilantro</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
                
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/apio.jpg" alt="Apio" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Apio</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(atd)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Hortalizas -->
        <section class="container plant-categories">
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/lechuga.jpeg" alt="Lechuga" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Lechuga</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.200<span>(kg)</span></p>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/acelga.jpg" alt="Acelga" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <p class="price">$800<span>(atd)</span></p>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/acelga roja.jpg" alt="Acelga roja" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Acelga roja</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.600<span>(kg)</span></p>
                    </div>
                </div>
                
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/tatsoi.jpg" alt="Tatsoi" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Tatsoi</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.000<span>(und)</span></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="container plant-categories">
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/large.jpg" alt="Tomate de árbol" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Tomate de árbol</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.200<span>(kg)</span></p>
                    </div>
                </div>
                
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/curuba.jpg" alt="Curuba" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Curuba</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$2.500<span>(kg)</span></p>
                    </div>
                </div>
                
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/pepino.png" alt="Pepino" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/calabaza.jpg" alt="Calabaza" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Calabaza</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$1.200<span>(und)</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Especiales -->
        <section class="container specials">
            <h1 class="heading-1">Ofertas Especiales</h1>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-irish.jpg" alt="Cafe Irish" />
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Cafe Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.60 <span>$5.30</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-ingles.jpg" alt="Cafe inglés" />
                        <span class="discount">-22%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Cafe Inglés</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.70 <span>$7.30</span></p>
                    </div>
                </div>
                <!--  -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-viena.jpg" alt="Cafe Viena" />
                        <span class="discount">-30%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3>Cafe Viena</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.85 <span>$5.50</span></p>
                    </div>
                </div>
                <!--  -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/cafe-liqueurs.jpg" alt="Cafe Liqueurs" />
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-code-compare"></i>
                            </span>
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
                        <h3>Cafe Liqueurs</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.60</p>
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

    <script
        src="https://kit.fontawesome.com/81581fb069.js"
        crossorigin="anonymous"
    ></script>
</body>
</html>