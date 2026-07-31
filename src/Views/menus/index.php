<!-- PAGE LA CARTE & MENUS (PAGE DÉDIÉE PLEINE LARGEUR) -->

<div class="bg-cream py-5">
    <div class="container">
        
        <!-- 1. MENUS DU CHEF (US4) -->
        <section class="mb-5">
            <div class="text-center mb-4">
                <div class="d-flex justify-content-center align-items-center gap-1 text-gold mb-2">
                    <i class="fa-solid fa-mountain-sun fs-5"></i>
                </div>
                <h1 class="font-serif display-5 fw-bold text-dark-savoy text-uppercase mb-1">Menus du Chef</h1>
                <p class="font-serif fst-italic text-muted">Des formules gourmandes inspirées par notre terroir savoyard</p>
                <div class="gold-ornament mb-4">❊</div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Menu 1 : Saveurs de Savoie avec m1.png -->
                <div class="col-lg-5 col-md-6">
                    <div class="menu-formula-card">
                        <img src="/assets/images/m1.png" alt="Menu Saveurs de Savoie" class="menu-engraving-img img-fluid">
                        <span class="font-serif fst-italic text-gold d-block mb-1">Menu</span>
                        <h2 class="font-serif fs-3 text-uppercase text-dark-savoy fw-bold mb-3">Saveurs de Savoie</h2>
                        <div class="dish-price fs-2 text-gold fw-bold mb-3">38.00 €</div>
                        <div class="gold-ornament mb-3">❊</div>
                        <p class="font-serif text-uppercase fw-semibold text-muted small mb-1">Formule Entrée + Plat</p>
                        <div class="fs-4 text-gold fw-bold">29.00 €</div>
                    </div>
                </div>

                <!-- Menu 2 : Le Grand Quai avec m2.png -->
                <div class="col-lg-5 col-md-6">
                    <div class="menu-formula-card">
                        <img src="/assets/images/m2.png" alt="Menu Le Grand Quai" class="menu-engraving-img img-fluid">
                        <span class="font-serif fst-italic text-gold d-block mb-1">Menu</span>
                        <h2 class="font-serif fs-3 text-uppercase text-dark-savoy fw-bold mb-3">Le Grand Quai</h2>
                        <div class="dish-price fs-2 text-gold fw-bold mb-3">54.00 €</div>
                        <div class="gold-ornament mb-3">❊</div>
                        <p class="font-serif text-uppercase fw-semibold text-muted small mb-1">Dégustation en 5 temps</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. SÉLECTION À LA CARTE (US3) -->
        <section class="mb-5">
            <div class="text-center mb-4">
                <div class="d-flex justify-content-center align-items-center gap-1 text-gold mb-2">
                    <i class="fa-solid fa-mountain-sun fs-5"></i>
                </div>
                <h2 class="font-serif display-6 fw-bold text-dark-savoy text-uppercase mb-1">Sélection à la carte</h2>
                <p class="font-serif fst-italic text-muted">Des plats faits maison à base de produits frais et locaux</p>
                <div class="gold-ornament mb-4">❊</div>

                <!-- Boutons de filtres par catégories (US3) -->
                <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
                    <button class="category-btn-filter active" data-category="all">TOUS</button>
                    <button class="category-btn-filter" data-category="entrees">ENTRÉES</button>
                    <button class="category-btn-filter" data-category="plats">PLATS PRINCIPAUX</button>
                    <button class="category-btn-filter" data-category="burgers">BURGERS</button>
                    <button class="category-btn-filter" data-category="desserts">DESSERTS</button>
                    <button class="category-btn-filter" data-category="boissons">BOISSONS</button>
                </div>
            </div>

            <!-- Grille des plats de la carte -->
            <div class="row g-4 justify-content-center" id="dishesGrid">
                
                <!-- Plat 1 : Velouté de Potimarron -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="entrees">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/potimarron.jpg" alt="Velouté de Potimarron">
                        <h3 class="dish-title text-uppercase">Velouté de Potimarron</h3>
                        <div class="dish-price">14.50 €</div>
                        <p class="dish-desc">
                            Velouté onctueux de potimarron, crème de reblochon et graines torréfiées.
                        </p>
                    </div>
                </div>

                <!-- Plat 2 : Fondue Savoyarde -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="plats">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/fondue.jpg" alt="Fondue Savoyarde">
                        <h3 class="dish-title text-uppercase">Fondue Savoyarde</h3>
                        <div class="dish-price">26.50 €</div>
                        <p class="dish-desc">
                            Mélange de fromages savoyards AOP, pommes de terre et charcuterie locale.
                        </p>
                    </div>
                </div>

                <!-- Plat 3 : Tarte aux Myrtilles -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="desserts">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/tarte-myrtille.png" alt="Tarte aux Myrtilles">
                        <h3 class="dish-title text-uppercase">Tarte aux Myrtilles</h3>
                        <div class="dish-price">9.50 €</div>
                        <p class="dish-desc">
                            Tarte maison aux myrtilles sauvages, crème d'amande et chantilly.
                        </p>
                    </div>
                </div>

                <!-- Plat 4 : Burger Savoyard au Reblochon -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="burgers">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/crozets.jpg" alt="Burger Savoyard au Reblochon">
                        <h3 class="dish-title text-uppercase">Burger Savoyard au Reblochon</h3>
                        <div class="dish-price">19.50 €</div>
                        <p class="dish-desc">
                            Boeuf charolais local, reblochon AOP fondu, oignons confits au miel et frites maison.
                        </p>
                    </div>
                </div>

                <!-- Plat 5 : Vin Chaud de Savoie -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="boissons">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/poret.jpg" alt="Vin Chaud de Savoie">
                        <h3 class="dish-title text-uppercase">Vin Chaud de Savoie aux Épices</h3>
                        <div class="dish-price">6.50 €</div>
                        <p class="dish-desc">
                            Vin rouge de Savoie, bâton de cannelle, badiane et écorces d'oranges fraîches.
                        </p>
                    </div>
                </div>

                <!-- Plat 6 : Tartiflette Traditionnelle au Reblochon AOP -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="plats">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/tartiflette-tradition.jpg" alt="Tartiflette Traditionnelle">
                        <h3 class="dish-title text-uppercase">Tartiflette au Reblochon AOP</h3>
                        <div class="dish-price">22.50 €</div>
                        <p class="dish-desc">
                            Gratin traditionnel de pommes de terre, lardons croustillants, oignons et Reblochon AOP fondu.
                        </p>
                    </div>
                </div>

                <!-- Plat 7 : Filets de Perche du Lac -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="plats">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/filet-perche.jpg" alt="Filets de Perche du Lac">
                        <h3 class="dish-title text-uppercase">Filets de Perche du Lac</h3>
                        <div class="dish-price">28.00 €</div>
                        <p class="dish-desc">
                            Filets de perche poêlés au beurre citronné, persil frais et pommes de terre grenailles.
                        </p>
                    </div>
                </div>

                <!-- Plat 8 : Diots de Savoie au Vin Blanc -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="plats">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/diots-au-vin.jpg" alt="Diots de Savoie au Vin Blanc">
                        <h3 class="dish-title text-uppercase">Diots de Savoie au Vin Blanc</h3>
                        <div class="dish-price">21.00 €</div>
                        <p class="dish-desc">
                            Saucisses artisanales savoyardes mijotées au vin blanc Mondeuse et compotée d'oignons, servies sur polenta.
                        </p>
                    </div>
                </div>

                <!-- Plat 9 : Gaufre Artisanale aux Myrtilles -->
                <div class="col-lg-4 col-md-6 dish-card-wrapper" data-category="desserts">
                    <div class="dish-card-exact">
                        <img src="/assets/images/dishes/gaufre-savoyarde.jpg" alt="Gaufre Artisanale aux Myrtilles">
                        <h3 class="dish-title text-uppercase">Gaufre aux Myrtilles Sauvages</h3>
                        <div class="dish-price">11.00 €</div>
                        <p class="dish-desc">
                            Gaufre croustillante topping myrtilles sauvages, coulis maison, sucre glace et chantilly fouettée.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA RÉSERVER UNE TABLE DÈS MAINTENANT -->
        <div class="text-center mt-5">
            <a href="/reservation" class="btn-cta-bar text-decoration-none">
                === RÉSERVER UNE TABLE DÈS MAINTENANT ===
            </a>
        </div>

    </div>
</div>
