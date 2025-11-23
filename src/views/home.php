<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenManga - Tu destino definitivo para comprar fideos anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/CrunchyEats_AlexRomeroLozano/public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="public/js/script.js"></script>
</head>
<body id="body-home">
    <!-- Top Banner -->
    <?php include __DIR__ . '/nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <img src="/CrunchyEats_AlexRomeroLozano/public/img/primera_imagen_home.png" alt="Imagen publicidad">
    </section>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            <div class="cabecera-products-section mb4">
                <h2>Descuentos Navideños</h2>
                <a href="#" class="text-decoration-none">Ver todo →</a>
            </div>
            
            <!-- Carousel -->
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $chunks = array_chunk($productos, 4);
        foreach ($chunks as $index => $slide) {
            $active = $index === 0 ? 'active' : '';
            echo "<div class='carousel-item $active'><div class='row'>";
            foreach ($slide as $producto) {
                echo "
                <div class='col-md-3 col-sm-6'>
                    <div class='product-card'>
                        <img src='{$producto['imagen']}' alt='{$producto['nombre']}' class='product-image'>
                        <div class='product-info'>
                            <h5>{$producto['nombre']}</h5>
                            <div class='product-price'>\${$producto['precio']}</div>
                            <button class='btn-add-cart'>Añadir al carrito</button>
                        </div>
                    </div>
                </div>
                ";
            }
            echo "</div></div>";
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
    </section>

    <!-- Promo Banners -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="promo-card promo-teal">
                        <div>
                            <h3>Descubre la esencia de las ramas jóvenes</h3>
                            <span class="badge-discount">20% DSCTO</span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=150&h=100&fit=crop" alt="Ramen" class="img-fluid rounded mt-3">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-card promo-green">
                        <div>
                            <h3>Triunfarás en un mes de ramas</h3>
                            <span class="badge-discount" style="background: red;">PRONTO</span>
                        </div>
                        <div class="mt-3">
                            <img src="https://images.unsplash.com/photo-1623341214825-9f4f963727da?w=100&h=80&fit=crop" alt="Ramen" class="img-fluid rounded d-inline me-2">
                            <img src="https://images.unsplash.com/photo-1617093727343-374698b1b08d?w=100&h=80&fit=crop" alt="Ramen" class="img-fluid rounded d-inline">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-card promo-lime">
                        <div>
                            <h3>Conviértete en cazador de demonios</h3>
                            <span class="badge-discount">15% + 5% OFF</span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=150&h=100&fit=crop" alt="Ramen" class="img-fluid rounded mt-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Products -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Nuevos productos</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Combo KIMETSU</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor camarón</p>
                            <div class="product-price">$8.00</div>
                            <button class="btn-add-cart">Comprar por series</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1623341214825-9f4f963727da?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Combo EVANGELION</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor res</p>
                            <div class="product-price">$8.00</div>
                            <button class="btn-add-cart">Comprar por series</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1617093727343-374698b1b08d?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Combo JUJU JAMGOKEN</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor miso</p>
                            <div class="product-price">$8.00</div>
                            <button class="btn-add-cart">Comprar por series</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Products -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Comprar por series</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Ramen primicia</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor pollo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1623341214825-9f4f963727da?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Ramen picón</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor picante</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card position-relative">
                        <span class="badge-new">New</span>
                        <img src="https://images.unsplash.com/photo-1617093727343-374698b1b08d?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Nuevadon</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor vegetales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400&h=300&fit=crop" alt="Ramen" class="product-image">
                        <div class="product-info">
                            <h5>Ramen especial</h5>
                            <p class="small mb-2">Fideos Instantáneos sabor curry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands-section">
        <div class="container">
            <h2 class="text-center mb-5">Comprar por series</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #FF6B35;">NARUTO</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #E74C3C;">FAIRYTAIL</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #9B59B6;">HUNTER X HUNTER</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #E67E22;">DRAGON BALL</span>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #3498DB;">BLEACH</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #8B4513;">ONE PIECE</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #2ECC71;">BOKU NO HERO</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #34495E;">DEMON SLAYER</span>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #E91E63;">JUJU JAMGOKEN</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #00BCD4;">ONE PUNCH MAN</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #673AB7;">CHAINSAW MAN</span>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <span class="brand-logo d-inline-block" style="font-weight: bold; font-size: 24px; color: #795548;">SHANGRI-LA FRONTIER</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features-section">
        <div class="container">
            <h2 class="text-center mb-5">¡Tu destino definitivo para comprar fideos anime!</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h5>Orden Garantizada</h5>
                        <p>Volvemos a enviar una orden que aún no haya llegado o te devolvemos la compra.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Compra Segura</h5>
                        <p>Si no te llega lo que compraste, te devolvemos tu dinero.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h5>Llevando ramen desde 2023</h5>
                        <p>Tenemos más de un año llevando los mejores fideos a toda Latinoamérica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Nosotros</h5>
                    <a href="#">Quiénes somos</a>
                    <a href="#">Trabaja con nosotros</a>
                    <a href="#">Términos y condiciones</a>
                </div>
                <div class="col-md-3">
                    <h5>Productos</h5>
                    <a href="#">Comprar</a>
                    <a href="#">Tienda oficial</a>
                    <a href="#">Vender</a>
                </div>
                <div class="col-md-3">
                    <h5>Ayuda</h5>
                    <a href="#">Comprar</a>
                    <a href="#">Vender</a>
                    <a href="#">Resolución de problemas</a>
                </div>
                <div class="col-md-3">
                    <h5>Redes sociales</h5>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
            <hr style="border-color: #444;">
            <div class="text-center py-3">
                <p class="mb-0">&copy; 2024 OpenManga. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>