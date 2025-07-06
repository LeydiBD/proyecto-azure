<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Verificar si el usuario está logueado
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Campo</title>
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
						<li><a href="dashboard2.php">Productos</a></li>
						<li><a href="dashboard3.php">Categorias</a></li>
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
			<section class="container top-products">
				<h1 class="heading-1">Plantas ornamentales</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/anturio.jpg" alt="" />
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
							<h3>Anturio</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$500<span>(und)</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/orquideas.jpg" alt="" />
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
							<h3>Orquideas</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$12.000<span>(lit)</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/girasol.jpg" alt=""
							/>
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
							<h3>Girasol</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.200<span>(kg)</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/helechos.jpg" alt="" />
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
							<h3>Helechos</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$1.200<span>(kg)</span></p>
						</div>
					</div>

                    <div class="card-product">
						<div class="container-img">
							<img src="img/hortensias.jpg" alt="" />
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
							<h3>Hortensias</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$800<span>(atd)</span></p>
						</div>
					</div>
                </div>
                <br>

                <h1 class="heading-1">Plantas medicinales</h1>

				<section>
                <div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/anturio.jpg" alt="" />
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
							<h3>Anturio</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$500<span>(und)</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/orquideas.jpg" alt="" />
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
							<h3>Orquideas</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$12.000<span>(lit)</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/" alt=""
							/>
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
							<h3>Girasol</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.200<span>(kg)</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/" alt="" />
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
							<h3>Helechos</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$1.200<span>(kg)</span></p>
						</div>
					</div>

                    <div class="card-product">
						<div class="container-img">
							<img src="img/" alt="" />
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
							<h3>Hortensias</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$800<span>(atd)</span></p>
						</div>
					</div>
                </div>
			</section>

            <br>

			<section class="container specials">
				<h1 class="heading-1">Especiales</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/" alt=""/>
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
							<h3></h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60</p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/" alt=""/>
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
							<h3></h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/" alt=""/>
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
							<h3></h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/" alt="" />
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
							<h3></h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>
			<br>
		</main>

		<br>

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