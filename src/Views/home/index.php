<!-- ========================================================= -->
<!-- PAGE D'ACCUEIL - CONFORME À LA MAQUETTE EXACTE DU SUJET -->
<!-- ========================================================= -->

<!-- 1. HERO BANNER CAROUSEL -->
<header id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: linear-gradient(rgba(57, 44, 30, 0.75), rgba(57, 44, 30, 0.85)), url('/assets/images/quai_antique_hero.jpg') center/cover no-repeat; min-height: 75vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 py-5">
                <span class="badge bg-warning text-dark px-3 py-2 text-uppercase font-sans mb-3" style="letter-spacing: 1px;">Savoie & Gastronomie</span>
                <h1 class="hero-title mb-3 text-white display-2 font-serif text-uppercase fw-bold">Restaurant Quai Antique</h1>
                <p class="fs-4 font-serif fst-italic mb-4 max-w-700 mx-auto text-light">"La promesse d'un voyage authentique et gourmand à travers l'univers culinaire savoyard."</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/reservation" class="btn btn-gold btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif"><i class="fa-regular fa-calendar-check me-2"></i> Réserver une Table</a>
                    <a href="/menus" class="btn btn-glass btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif"><i class="fa-solid fa-book-open me-2"></i> Découvrir la Carte</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background: linear-gradient(rgba(57, 44, 30, 0.75), rgba(57, 44, 30, 0.85)), url('/assets/images/dish_fondue.jpg') center/cover no-repeat; min-height: 75vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 py-5">
                <span class="badge bg-warning text-dark px-3 py-2 text-uppercase font-sans mb-3" style="letter-spacing: 1px;">Terroir & Tradition</span>
                <h1 class="hero-title mb-3 text-white display-2 font-serif text-uppercase fw-bold">Cuisine Fait Maison</h1>
                <p class="fs-4 font-serif fst-italic mb-4 max-w-700 mx-auto text-light">"Des fromages affinés AOP, des produits frais du jour et la créativité du Chef Arnaud Michant."</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/menus" class="btn btn-glass btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif"><i class="fa-solid fa-book-open me-2"></i> Nos Menus & Plats</a>
                    <a href="/reservation" class="btn btn-gold btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif"><i class="fa-regular fa-calendar-check me-2"></i> Réserver une Table</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background: linear-gradient(rgba(57, 44, 30, 0.75), rgba(57, 44, 30, 0.85)), url('/assets/images/dish_tartiflette.jpg') center/cover no-repeat; min-height: 75vh;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 py-5">
                <span class="badge bg-warning text-dark px-3 py-2 text-uppercase font-sans mb-3" style="letter-spacing: 1px;">Accueillant & Chaleureux</span>
                <h1 class="hero-title mb-3 text-white display-2 font-serif text-uppercase fw-bold">Expérience Culinaire Unique</h1>
                <p class="fs-4 font-serif fst-italic mb-4 max-w-700 mx-auto text-light">"Bienvenue au Quai Antique — Déjeuner et Dîner aux couleurs des Alpes."</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/reservation" class="btn btn-gold btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif"><i class="fa-regular fa-calendar-check me-2"></i> Réserver Dès Maintenant</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</header>

<!-- 2. SECTION LE CHEF & LA VISION -->
<section class="section-padding bg-cream py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="chef-image-wrapper">
                    <img src="/assets/images/chef-arnaud.jpg" alt="Chef Arnaud Michant" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>
            <div class="col-lg-7">
                <span class="text-uppercase text-dark-gold font-serif letter-spacing-2 fw-semibold d-block mb-1">Le Chef & La Vision</span>
                <h2 class="font-serif display-4 text-gold mb-3">Arnaud Michant</h2>
                <div class="gold-ornament mb-4">❊</div>
                
                <p class="lead text-dark-savoy mb-3">
                    "Passionné par les producteurs locaux et le terroir alpin, je mets un point d'honneur à sublimer chaque ingrédient avec rigueur et créativité."
                </p>
                <p class="text-secondary mb-4">
                    Installé à Chambéry, le troisième établissement du Chef Arnaud Michant vous accueille dans une ambiance chaleureuse et raffinée. Une cuisine sans artifice où les produits de la Savoie sont mis à l'honneur lors du déjeuner comme du dîner.
                </p>
                <div class="d-flex gap-4">
                    <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border border-light w-100">
                        <i class="fa-solid fa-leaf text-gold fs-2 me-3"></i>
                        <div>
                            <strong class="d-block text-dark">100% Terroir</strong>
                            <small class="text-muted">Producteurs savoyards</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border border-light w-100">
                        <i class="fa-solid fa-utensils text-gold fs-2 me-3"></i>
                        <div>
                            <strong class="d-block text-dark">Cuisine Fait Maison</strong>
                            <small class="text-muted">Produits frais du jour</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. GALERIE GASTRONOMIQUE (STRUCTURE DEMANDEE) -->
<section class="py-5 bg-cream" id="galerie">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-uppercase text-dark-gold font-serif fw-bold">Galerie Gastronomique</span>
            <h2 class="font-serif display-5 fw-bold text-dark-savoy mb-2">Nos Créations Culinaires</h2>
            <p class="font-serif fst-italic text-muted">Survolez chaque photo pour découvrir le nom du plat.</p>
            <div class="gold-ornament mb-4">❊</div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Ligne 1 : 3 images -->
            <div class="col-md-4">
                <div class="gallery-card" tabindex="0" role="button">
                    <img src="/assets/images/dishes/fondue.jpg" alt="Fondue Savoyarde aux trois fromages affinés" class="gallery-card-img">
                    <div class="gallery-overlay">
                        <h3 class="gallery-overlay-title">Fondue Savoyarde</h3>
                        <p class="font-serif fst-italic text-gold mb-0 small">aux trois fromages affinés</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="gallery-card" tabindex="0" role="button">
                    <img src="/assets/images/dishes/tartiflette.jpg" alt="Tartiflette revisitée au Reblochon fermier" class="gallery-card-img">
                    <div class="gallery-overlay">
                        <h3 class="gallery-overlay-title">Tartiflette revisitée</h3>
                        <p class="font-serif fst-italic text-gold mb-0 small">au Reblochon fermier</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-card" tabindex="0" role="button">
                    <img src="/assets/images/dishes/filet-perche.jpg" alt="Filets de perche meunière du Lac du Bourget" class="gallery-card-img">
                    <div class="gallery-overlay">
                        <h3 class="gallery-overlay-title">Filets de perche meunière</h3>
                        <p class="font-serif fst-italic text-gold mb-0 small">du Lac du Bourget</p>
                    </div>
                </div>
            </div>

            <!-- Ligne 2 : 2 images -->
            <div class="col-md-6">
                <div class="gallery-card" tabindex="0" role="button">
                    <img src="/assets/images/dishes/tarte-myrtille.png" alt="Tarte fine aux myrtilles sauvages des Bauges" class="gallery-card-img">
                    <div class="gallery-overlay">
                        <h3 class="gallery-overlay-title">Tarte fine aux myrtilles</h3>
                        <p class="font-serif fst-italic text-gold mb-0 small">sauvages des Bauges</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="gallery-card" tabindex="0" role="button">
                    <img src="/assets/images/quai_antique_hero.jpg" alt="Ambiance chaleureuse du restaurant Quai Antique" class="gallery-card-img">
                    <div class="gallery-overlay">
                        <h3 class="gallery-overlay-title">Ambiance chaleureuse</h3>
                        <p class="font-serif fst-italic text-gold mb-0 small">du restaurant Quai Antique</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center pt-3">
            <a href="/reservation" class="btn btn-dark-cta btn-lg px-5 py-3 rounded-2 text-uppercase font-serif">
                <i class="fa-solid fa-bell me-2"></i>Réserver une table dès maintenant
            </a>
        </div>
    </div>
</section>
