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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Hardvest - Productos Naturales</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/style1.css">
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="container-logo">
                    <i class="fa-solid fa-leaf"></i>
                    <h1><a href="#">Green Hardvest</a></h1>
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="dashboard2.php">Productos</a></li>
                    <li><a href="dashboard3.php">Categorias</a></li>
                    <li><a href="dashboard4.php">Plantas</a></li>
                    <li><a href="#">Más</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="logout.php">Cerrar Sesion</a></li>
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

    <section class="banner">
        <div class="content-banner">
            <p>Bienvenido al campo</p>
            <h2>100% Natural <br />Productos frescos</h2>
            <a href="#" class="btn">Comprar ahora</a>
        </div>
    </section>

    <main class="main-content">
        <section class="container top-categories">
            <h1 class="heading-1">Categorías</h1>
            <div class="container-categories">
                <div class="card-category category-lacteos">
                    <p>Lácteos</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-plantas">
                    <p>Plantas ornamentales</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-frutas">
                    <p>Frutas y Verduras</p>
                    <span>Ver más</span>
                </div>
            </div>
        </section>

        <section class="container top-products">
            <h1 class="heading-1">Productos</h1>

            <div class="container-options">
                <span class="active">Destacados</span>
                <span>Más recientes</span>
                <span>Mejores Vendidos</span>
            </div>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/huevos.png" alt="Huevos frescos" />
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
                        <h3>Huevos frescos</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$12.000</p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/leche.jpg" alt="Leche fresca" />
                        <span class="discount">-15%</span>
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
                        <h3>Leche fresca</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$12.000</p>
                    </div>
                </div>
                <!-- Producto 3 -->
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
                        <p class="price">$1200</p>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/Astromelia.jpg" alt="Astromelia" />
                        <span class="discount">-10%</span>
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
                        <h3>Astromelia</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.600</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <img src="img/4.jpg" alt="Productos frescos" class="gallery-img-1" />
            <img src="img/8.0.jpeg" alt="Cosecha natural" class="gallery-img-2" />
            <img src="img/9.0.jpeg" alt="Verduras orgánicas" class="gallery-img-3" />
            <img src="img/Astromelia.jpg" alt="Plantas ornamentales" class="gallery-img-4" />
            <img src="img/7.0.jpeg" alt="Campo verde" class="gallery-img-5" />
        </section>

        <br>

        <section class="container specials">
            <h1 class="heading-1">Productos Especiales</h1>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/miel.jpg" alt="Miel natural" />
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
                        <h3>Miel natural</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">6.000</p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/queso.jpg" alt="Queso artesanal" />
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
                        <h3>Queso artesanal</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.000</p>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/mermelada.jpg" alt="Mermelada casera" />
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
                        <h3>Mermelada casera</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$3.000</p>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="img/aceite.jpg" alt="Aceite de oliva" />
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
                        <h3>Aceite de oliva</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$5.000</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container blogs">
            <h1 class="heading-1">Últimas noticias</h1>

            <div class="container-blogs">
                <div class="card-blog">
                    <div class="container-img">
                        <img src="img/agri.jpg" alt="Agricultura sostenible" />
                        <div class="button-group-blog">
                            <span>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3>Agricultura sostenible</h3>
                        <span>15 Junio 2024</span>
                        <p>
                            Descubre cómo estamos implementando prácticas agrícolas sostenibles para proteger el medio ambiente y ofrecer productos más saludables.
                        </p>
                        <div class="btn-read-more">Leer más</div>
                    </div>
                </div>
                <div class="card-blog">
                    <div class="container-img">
                        <img src="img/culti.jpg" alt="Nuevos productos" />
                        <div class="button-group-blog">
                            <span>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3>Nuestra nueva línea de productos</h3>
                        <span>2 Mayo 2024</span>
                        <p>
                            Presentamos nuestra nueva línea de productos orgánicos certificados, cultivados con amor y respeto por la naturaleza.
                        </p>
                        <div class="btn-read-more">Leer más</div>
                    </div>
                </div>
                <div class="card-blog">
                    <div class="container-img">
                        <img src="img/even.jpg" alt="Evento comunitario" />
                        <div class="button-group-blog">
                            <span>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <span>
                                <i class="fa-solid fa-link"></i>
                            </span>
                        </div>
                    </div>
                    <div class="content-blog">
                        <h3>Evento comunitario</h3>
                        <span>20 Abril 2024</span>
                        <p>
                            Únete a nuestro próximo evento comunitario donde compartiremos consejos sobre cultivo en casa y alimentación saludable.
                        </p>
                        <div class="btn-read-more">Leer más</div>
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
        crossorigin="anonymous">
    </script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Variables globales
    let cartCount = 0;
    const cartNumberElement = document.querySelector('.content-shopping-cart .number');
    const cartIcon = document.querySelector('.fa-basket-shopping');
    
    // 1. Funcionalidad del carrito de compras
    const addToCartButtons = document.querySelectorAll('.add-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            cartCount++;
            updateCartCount();
            showNotification('Producto añadido al carrito');
            
            // Aquí podrías añadir lógica para almacenar el producto en el carrito
            const productCard = this.closest('.card-product');
            const productName = productCard.querySelector('h3').textContent;
            const productPrice = productCard.querySelector('.price').textContent;
            
            console.log(`Añadido al carrito: ${productName} - ${productPrice}`);
        });
    });
    
    // 2. Funcionalidad de los iconos de acción (corazón, ojo, comparar)
    document.querySelectorAll('.button-group span, .button-group-blog span').forEach(icon => {
        icon.addEventListener('click', function() {
            const iconClass = this.querySelector('i').className;
            
            if (iconClass.includes('fa-heart')) {
                this.classList.toggle('active');
                const isActive = this.classList.contains('active');
                this.querySelector('i').className = isActive ? 'fa-solid fa-heart' : 'fa-regular fa-heart';
                
                if (isActive) {
                    showNotification('Añadido a favoritos');
                }
            } else if (iconClass.includes('fa-eye')) {
                // Simular vista rápida del producto
                const productCard = this.closest('.card-product, .card-blog');
                const productName = productCard.querySelector('h3').textContent;
                showNotification(`Vista rápida: ${productName}`);
            } else if (iconClass.includes('fa-code-compare')) {
                showNotification('Producto añadido para comparar');
            } else if (iconClass.includes('fa-link')) {
                // Copiar enlace del blog
                const blogLink = window.location.href;
                navigator.clipboard.writeText(blogLink)
                    .then(() => showNotification('Enlace copiado al portapapeles'));
            } else if (iconClass.includes('fa-magnifying-glass')) {
                // Simular zoom de imagen
                const imgContainer = this.closest('.container-img');
                const img = imgContainer.querySelector('img');
                img.style.transform = img.style.transform === 'scale(1.5)' ? 'scale(1)' : 'scale(1.5)';
            }
        });
    });
    
    // 3. Funcionalidad de las categorías
    document.querySelectorAll('.card-category').forEach(category => {
        category.addEventListener('click', function() {
            const categoryName = this.querySelector('p').textContent;
            showNotification(`Mostrando productos de: ${categoryName}`);
            // Aquí normalmente redirigirías o filtrarías productos por categoría
        });
    });
    
    // 4. Funcionalidad de los filtros de productos
    document.querySelectorAll('.container-options span').forEach(option => {
        option.addEventListener('click', function() {
            // Remover clase active de todos los elementos
            document.querySelectorAll('.container-options span').forEach(el => {
                el.classList.remove('active');
            });
            
            // Añadir clase active al elemento clickeado
            this.classList.add('active');
            
            const filterType = this.textContent;
            showNotification(`Filtrando por: ${filterType}`);
            // Aquí normalmente filtrarías los productos según la opción seleccionada
        });
    });
    
    // 5. Funcionalidad del botón "Leer más" en blogs
    document.querySelectorAll('.btn-read-more').forEach(btn => {
        btn.addEventListener('click', function() {
            const blogTitle = this.closest('.content-blog').querySelector('h3').textContent;
            showNotification(`Redirigiendo a: ${blogTitle}`);
            // Aquí normalmente redirigirías a la página completa del blog
        });
    });
    
    // 6. Funcionalidad de las redes sociales
    document.querySelectorAll('.social-icons span').forEach(icon => {
        icon.addEventListener('click', function() {
            let socialNetwork = '';
            if (this.classList.contains('facebook')) socialNetwork = 'Facebook';
            else if (this.classList.contains('twitter')) socialNetwork = 'Twitter';
            else if (this.classList.contains('instagram')) socialNetwork = 'Instagram';
            else if (this.classList.contains('whatsapp')) socialNetwork = 'WhatsApp';
            
            showNotification(`Redirigiendo a nuestro ${socialNetwork}`);
            // Aquí normalmente redirigirías a la página correspondiente
        });
    });
    
    // 7. Funcionalidad del newsletter
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput.value) {
                showNotification(`Gracias por suscribirte con: ${emailInput.value}`);
                emailInput.value = ''; // Limpiar el campo
            }
        });
    });
    
    // 8. Botón de volver arriba
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Mostrar/ocultar botón al hacer scroll
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });
    }
    
    // 9. Funcionalidad del buscador
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchInput = this.querySelector('input');
            if (searchInput.value.trim() !== '') {
                showNotification(`Buscando: ${searchInput.value}`);
                // Aquí normalmente realizarías la búsqueda y mostrarías resultados
                searchInput.value = ''; // Limpiar el campo
            }
        });
    }
    
    // 10. Funcionalidad del icono de usuario
    const userIcon = document.querySelector('.fa-user');
    if (userIcon) {
        userIcon.addEventListener('click', function() {
            showNotification('Accediendo a tu cuenta');
            // Aquí normalmente redirigirías a la página de login/cuenta
        });
    }
    
    // Función para actualizar el contador del carrito
    function updateCartCount() {
        cartNumberElement.textContent = `(${cartCount})`;
    }
    
    // Función para mostrar notificaciones
    function showNotification(message) {
        // Crear elemento de notificación
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        
        // Estilos para la notificación
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.backgroundColor = '#94e068';
        notification.style.color = 'white';
        notification.style.padding = '15px 25px';
        notification.style.borderRadius = '5px';
        notification.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
        notification.style.zIndex = '1000';
        notification.style.animation = 'fadeIn 0.3s, fadeOut 0.3s 2.7s';
        
        // Añadir al cuerpo del documento
        document.body.appendChild(notification);
        
        // Eliminar después de 3 segundos
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
    
    // Añadir estilos CSS para la animación de notificación
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(20px); }
        }
    `;
    document.head.appendChild(style);
    
    // 11. Efecto hover para los enlaces del menú
    const menuLinks = document.querySelectorAll('.menu li a');
    menuLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.color = '#94e068';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.color = '';
        });
    });
    
    // 12. Funcionalidad para los botones "Ver más" en categorías
    document.querySelectorAll('.card-category span').forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation(); // Evitar que se active el click de la categoría
            const category = this.closest('.card-category').querySelector('p').textContent;
            showNotification(`Explorando categoría: ${category}`);
        });
    });
    
    // 13. Funcionalidad para el botón "Comprar ahora" del banner
    const bannerButton = document.querySelector('.banner .btn');
    if (bannerButton) {
        bannerButton.addEventListener('click', function(e) {
            e.preventDefault();
            showNotification('Explorando productos destacados');
            // Aquí normalmente redirigirías a la página de productos
        });
    }
});

import { useState } from "react";

function ProductCard({ product, addToCart }) {
  return (
    <div className="border p-4 rounded-lg shadow">
      <img src={product.image} alt={product.name} className="w-full h-48 object-cover" />
      <h3 className="text-xl font-bold">{product.name}</h3>
      <p>${product.price}</p>
      <button 
        onClick={() => addToCart(product)} 
        className="bg-blue-500 text-white px-4 py-2 rounded"
      >
        Añadir al carrito
      </button>
    </div>
  );
}
</script>
</body>
</html>