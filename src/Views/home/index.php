<!-- ========================================================= -->
<!-- PAGE D'ACCUEIL - CONFORME À LA MAQUETTE EXACTE DU SUJET -->
<!-- ========================================================= -->

<!-- 1. HERO BANNER -->
<section class="hero-banner d-flex align-items-center justify-content-center text-center">
    <div class="container py-5">
        <span class="hero-tagline text-uppercase text-gold font-serif letter-spacing-2 mb-2 d-block">Restaurant</span>
        <h1 class="hero-main-title text-uppercase font-serif text-white display-2 fw-bold mb-3">
            Quai Antique
        </h1>
        <p class="hero-subtext font-serif fst-italic text-white-50 fs-4 mb-5">
            La promesse d'un voyage culinaire savoyard
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/reservation" class="btn btn-gold btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif">
                <i class="fa-regular fa-calendar-check me-2"></i>Réserver une table
            </a>
            <a href="/menus" class="btn btn-glass btn-lg px-4 py-3 rounded-1 text-uppercase fw-bold font-serif">
                <i class="fa-solid fa-book-open me-2"></i>Découvrir la carte
            </a>
        </div>
    </div>
</section>

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
                    Au Quai Antique, le Chef Arnaud Michant sublime les trésors de la Savoie à travers une cuisine gastronomique et authentique.
                </p>
                <p class="text-secondary mb-3">
                    Nos produits sont soigneusement sélectionnés auprès de producteurs et artisans locaux avec lesquels nous partageons une même passion pour l'excellence et le terroir.
                </p>
                <p class="text-secondary mb-0">
                    Dans une ambiance chaleureuse et raffinée, notre équipe vous accueille pour une expérience culinaire unique, entre lac et montagnes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. GALERIE GASTRONOMIQUE (US2 - CARROUSEL INTERACTIF DE 9 PLATS) -->
<section class="section-padding bg-cream py-5" id="galerie">
    <div class="container text-center position-relative px-4 px-md-5">
        <h2 class="font-serif display-5 fw-bold text-dark-savoy mb-2">Galerie Gastronomique</h2>
        <p class="font-serif fst-italic text-muted mb-1">Découvrez la richesse culinaire savoyarde du Chef Arnaud Michant</p>
        <div class="gold-ornament mb-4">❊</div>

        <!-- Système de défilement (Bootstrap 5 Carousel) avec 9 photos de plats en 3 diapos -->
        <div id="gastronomicGalleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            
            <!-- Diapositives du carrousel -->
            <div class="carousel-inner">
                
                <!-- SLIDE 1 : Plats d'Exception 1, 2, 3 -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/omble.jpg" alt="Omble Chevalier" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Omble Chevalier</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">au beurre blanc de Savoie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/raviole.jpg" alt="Raviole de Royans" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Raviole de Royans</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">crème de morilles</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/tonka.jpg" alt="Délice chocolat tonka" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Délice chocolat tonka</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">noisette du Piémont</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 : Plats d'Exception 4, 5, 6 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/tartiflette-tradition.jpg" alt="Tartiflette au Reblochon AOP" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Tartiflette Reblochon AOP</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">gratin traditionnel croustillant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/filet-perche.jpg" alt="Filets de Perche du Lac" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Filets de Perche du Lac</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">beurre citronné et persil frais</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/diots-au-vin.jpg" alt="Diots de Savoie" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Diots de Savoie</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">au vin blanc Mondeuse & polenta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 : Plats d'Exception 7, 8, 9 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/gaufre-savoyarde.jpg" alt="Gaufre aux Myrtilles Sauvages" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Gaufre aux Myrtilles</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">coulis maison et chantilly</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/potimarron.jpg" alt="Velouté de Potimarron" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Velouté de Potimarron</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">crème de reblochon & graines</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card-container shadow-sm">
                                <img src="/assets/images/dishes/fondue.jpg" alt="Fondue Savoyarde AOP" class="gallery-card-img">
                                <div class="gallery-card-caption">
                                    <h3 class="font-serif text-white h4 mb-1">Fondue Savoyarde AOP</h3>
                                    <p class="font-serif fst-italic text-gold mb-0 small">fromages affinés & charcuterie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Boutons de contrôle (Précédent / Suivant) -->
            <button class="carousel-gallery-control prev" type="button" data-bs-target="#gastronomicGalleryCarousel" data-bs-slide="prev" aria-label="Précédent">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-gallery-control next" type="button" data-bs-target="#gastronomicGalleryCarousel" data-bs-slide="next" aria-label="Suivant">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

            <!-- Indicateurs de carrousel -->
            <div class="carousel-indicators carousel-indicators-gold">
                <button type="button" data-bs-target="#gastronomicGalleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#gastronomicGalleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#gastronomicGalleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

        </div>

        <!-- BOUTON CTA SOUS LA GALERIE (EXIGENCE US2) -->
        <div class="mt-5 pt-3">
            <a href="/reservation" class="btn btn-dark-cta btn-lg px-5 py-3 rounded-2 text-uppercase font-serif">
                <i class="fa-solid fa-bell me-2"></i>Réserver une table dès maintenant
            </a>
        </div>
    </div>
</section>