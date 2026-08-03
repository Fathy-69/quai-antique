<!-- PAGE LA CARTE & MENUS (PAGE DÉDIÉE PLEINE LARGEUR) -->

<div class="bg-beige-light py-section">
    <div class="container-custom">
        
        <!-- 1. MENUS DU CHEF (US4) -->
        <section class="mb-5 pb-4 border-bottom">
            <div class="text-center mb-5">
                <div class="d-flex justify-content-center align-items-center gap-1 text-gold mb-2">
                    <i class="fa-solid fa-mountain-sun fs-5"></i>
                </div>
                <h1 class="font-heading display-5 fw-bold text-uppercase mb-1">Menus du Chef</h1>
                <p class="font-serif fst-italic text-muted">Des formules gourmandes inspirées par notre terroir savoyard</p>
                <div class="gold-ornament mb-4 text-gold">❊</div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Menu 1 : Saveurs de Savoie avec m1.png -->
                <div class="col-lg-5 col-md-6">
                    <div class="formula-card h-100 text-center"> <!-- Ajout de l'image m1.png pour le menu Saveurs de Savoie -->
                        <img src="/assets/images/m1.png" alt="Menu Saveurs de Savoie" class="img-fluid mb-3" style="max-height: 80px;">
                        <span class="font-serif fst-italic text-gold d-block mb-1">Menu</span>
                        <h2 class="formula-title fs-3 text-uppercase fw-bold mb-3">Saveurs de Savoie</h2>
                        <div class="dish-price fs-2 text-gold fw-bold mb-3">38.00 €</div>
                        <p class="font-serif text-uppercase fw-semibold text-muted small mb-1">Formule Entrée + Plat</p>
                        <div class="fs-4 text-gold fw-bold">29.00 €</div>
                    </div>
                </div>

                <!-- Menu 2 : Le Grand Quai avec m2.png -->
                <div class="col-lg-5 col-md-6">
                    <div class="formula-card h-100 text-center"> <!-- Ajout de l'image m2.png pour le menu Le Grand Quai -->
                        <img src="/assets/images/m2.png" alt="Menu Le Grand Quai" class="img-fluid mb-3" style="max-height: 80px;">
                        <span class="font-serif fst-italic text-gold d-block mb-1">Menu</span>
                        <h2 class="formula-title fs-3 text-uppercase fw-bold mb-3">Le Grand Quai</h2>
                        <div class="dish-price fs-2 text-gold fw-bold mb-3">54.00 €</div>
                        <p class="font-serif text-uppercase fw-semibold text-muted small mb-1">Dégustation en 5 temps</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. SÉLECTION À LA CARTE (US3) -->
        <section class="mb-5">
            <div class="text-center mb-5">
                <div class="d-flex justify-content-center align-items-center gap-1 text-gold mb-2">
                    <i class="fa-solid fa-utensils fs-5"></i>
                </div>
                <h2 class="font-heading display-6 fw-bold text-uppercase mb-1">Sélection à la carte</h2>
                <p class="font-serif fst-italic text-muted">Des plats faits maison à base de produits frais et locaux</p>
                <div class="gold-ornament mb-4 text-gold">❊</div>

                <!-- Boutons de filtres par catégories (US3) -->
                <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
                    <button class="category-filter-btn btn-filter-category active" data-category="all">TOUS</button>
                    <button class="category-filter-btn btn-filter-category" data-category="entrees">ENTRÉES</button>
                    <button class="category-filter-btn btn-filter-category" data-category="plats">PLATS PRINCIPAUX</button>
                    <button class="category-filter-btn btn-filter-category" data-category="burgers">BURGERS</button>
                    <button class="category-filter-btn btn-filter-category" data-category="desserts">DESSERTS</button>
                    <button class="category-filter-btn btn-filter-category" data-category="boissons">BOISSONS</button>
                </div>
            </div>

            <!-- Grille des plats de la carte -->
            <div class="row g-4 justify-content-center" id="dishesGrid">
                
                <!-- Plat 1 : Velouté de Potimarron -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="entrees">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/potimarron.jpg" alt="Velouté de Potimarron" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Velouté de Potimarron</h3>
                                <div class="dish-price">14.50 €</div>
                            </div>
                            <p class="text-muted small mb-0">Velouté onctueux de potimarron, crème de reblochon et graines torréfiées.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 2 : Fondue Savoyarde -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="plats">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/fondue.jpg" alt="Fondue Savoyarde" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Fondue Savoyarde</h3>
                                <div class="dish-price">26.50 €</div>
                            </div>
                            <p class="text-muted small mb-0">Mélange de fromages savoyards AOP, pommes de terre et charcuterie locale.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 3 : Tarte aux Myrtilles -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="desserts">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/tarte-myrtille.png" alt="Tarte aux Myrtilles" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Tarte aux Myrtilles</h3>
                                <div class="dish-price">9.50 €</div>
                            </div>
                            <p class="text-muted small mb-0">Tarte maison aux myrtilles sauvages, crème d'amande et chantilly.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 4 : Burger Savoyard au Reblochon -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="burgers">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/crozets.jpg" alt="Burger Savoyard au Reblochon" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Burger Savoyard au Reblochon</h3>
                                <div class="dish-price">19.50 €</div>
                            </div>
                            <p class="text-muted small mb-0">Boeuf charolais local, reblochon AOP fondu, oignons confits au miel et frites maison.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 5 : Vin Chaud de Savoie -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="boissons">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/poret.jpg" alt="Vin Chaud de Savoie" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Vin Chaud de Savoie aux Épices</h3>
                                <div class="dish-price">6.50 €</div>
                            </div>
                            <p class="text-muted small mb-0">Vin rouge de Savoie, bâton de cannelle, badiane et écorces d'oranges fraîches.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 6 : Tartiflette Traditionnelle au Reblochon AOP -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="plats">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/tartiflette-tradition.jpg" alt="Tartiflette Traditionnelle" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Tartiflette au Reblochon AOP</h3>
                                <div class="dish-price">22.50 €</div>   <!-- Prix du plat sans espace entre le nombre et le symbole euro -->
                            </div>
                            <p class="text-muted small mb-0">Gratin traditionnel de pommes de terre, lardons croustillants, oignons et Reblochon AOP fondu.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 7 : Filets de Perche du Lac -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="plats">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/filet-perche.jpg" alt="Filets de Perche du Lac" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Filets de Perche du Lac</h3>
                                <div class="dish-price">28.00 €</div>
                            </div>
                            <p class="text-muted small mb-0">Filets de perche poêlés au beurre citronné, persil frais et pommes de terre grenailles.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 8 : Diots de Savoie au Vin Blanc -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="plats">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/diots-au-vin.jpg" alt="Diots de Savoie au Vin Blanc" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Diots de Savoie au Vin Blanc</h3>
                                <div class="dish-price">21.00 €</div>
                            </div>
                            <p class="text-muted small mb-0">Saucisses artisanales savoyardes mijotées au vin blanc Mondeuse et compotée d'oignons, servies sur polenta.</p>
                        </div>
                    </div>
                </div>

                <!-- Plat 9 : Gaufre Artisanale aux Myrtilles -->
                <div class="col-lg-4 col-md-6 dish-item" data-category="desserts">
                    <div class="card-dish h-100">
                        <img src="/assets/images/dishes/gaufre-savoyarde.jpg" alt="Gaufre Artisanale aux Myrtilles" class="dish-img">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title h5 mb-0">Gaufre aux Myrtilles Sauvages</h3>
                                <div class="dish-price">11.00 €</div>
                            </div>
                            <p class="text-muted small mb-0">Gaufre croustillante topping myrtilles sauvages, coulis maison, sucre glace et chantilly fouettée.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA RÉSERVER UNE TABLE DÈS MAINTENANT -->
        <div class="text-center mt-5">
            <a href="/reservation" class="btn btn-gold btn-lg rounded-pill px-5 py-3 fw-bold shadow hover-scale text-decoration-none">
                <i class="fa-solid fa-calendar-check me-2"></i> RÉSERVER UNE TABLE DÈS MAINTENANT
            </a>
        </div>

    </div>
</div>
