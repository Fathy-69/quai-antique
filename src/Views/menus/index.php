<!-- ========================================================= -->
<!-- LA CARTE & LES MENUS - EXIGENCES US3 & US4 -->
<!-- ========================================================= -->

<!-- 1. EN-TÊTE DE SECTION -->
<section class="bg-dark-savoy text-white py-5 text-center">
    <div class="container">
        <h1 class="display-4 font-heading fw-bold text-uppercase">La Carte & Les Menus</h1>
        <p class="lead text-gold mb-0">Découvrez les saveurs authentiques du terroir savoyard préparées par le Chef Arnaud Michant.</p>
    </div>
</section>

<!-- 2. US4 : LES MENUS DU CHEF & FORMULES -->
<section class="section-padding bg-white" id="menus-formules">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-gold text-uppercase fw-bold tracking-wide">Formules Rituelles</span>
            <h2 class="font-heading fs-1 my-2">Les Menus du Chef</h2>
            <p class="text-muted">Des compositions équilibrées au gré des arrivages du marché.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Menu 1 : Saveurs de Savoie -->
            <div class="col-lg-6">
                <div class="formula-card h-100 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                        <h3 class="formula-title mb-0 fs-3">Menu Saveurs de Savoie</h3>
                        <span class="fs-2 font-heading text-gold fw-bold">38 €</span>
                    </div>
                    <p class="text-muted fst-italic mb-4">Servi midi et soir du lundi au dimanche.</p>
                    
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong class="d-block text-dark">Entrée au choix :</strong>
                            <span class="text-muted">Salade Savoyarde au Reblochon poêlé OU Velouté de Potimarron aux châtaignes.</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block text-dark">Plat au choix :</strong>
                            <span class="text-muted">Tartiflette traditionnelle au Reblochon AOP OU Filet d'Omble Chevalier du Lac.</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block text-dark">Dessert au choix :</strong>
                            <span class="text-muted">Tartelette aux Myrtilles sauvages OU Assiette de Fromages affinés de Savoie.</span>
                        </li>
                    </ul>

                    <!-- Détail des Formules combinées (US4) -->
                    <div class="bg-beige-light p-3 rounded-3 mt-4">
                        <div class="d-flex justify-content-between small fw-bold text-dark">
                            <span>Formule Entrée + Plat :</span>
                            <span class="text-gold">29 €</span>
                        </div>
                        <div class="d-flex justify-content-between small fw-bold text-dark mt-1">
                            <span>Formule Plat + Dessert :</span>
                            <span class="text-gold">27 €</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu 2 : Menu du Petit Gourmand -->
            <div class="col-lg-6">
                <div class="formula-card h-100 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                        <h3 class="formula-title mb-0 fs-3">Menu Petit Gourmand</h3>
                        <span class="fs-2 font-heading text-gold fw-bold">16 €</span>
                    </div>
                    <p class="text-muted fst-italic mb-4">Réservé aux enfants jusqu'à 12 ans.</p>

                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong class="d-block text-dark">Plat au choix :</strong>
                            <span class="text-muted">Mini-Gratin de Crozets au jambon cru OU Burger Savoyard pur bœuf.</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block text-dark">Dessert au choix :</strong>
                            <span class="text-muted">Coupe de Glace artisanale (2 boules) OU Crêpe au sucre.</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block text-dark">Boisson incluse :</strong>
                            <span class="text-muted">Jus de pomme artisanal de Savoie (20cl) OU Sirop à l'eau.</span>
                        </li>
                    </ul>

                    <div class="bg-beige-light p-3 rounded-3 mt-4 text-center">
                        <span class="small fw-bold text-muted">Inclus : Un jeu de coloriage savoyard offert !</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. US3 : LA CARTE DES PLATS PAR CATÉGORIES -->
<section class="section-padding bg-beige-light" id="carte">
    <div class="container">
        <div class="text-center mb-4">
            <span class="text-gold text-uppercase fw-bold tracking-wide">Sélection à la Carte</span>
            <h2 class="font-heading fs-1 my-2">La Carte du Restaurant</h2>
            <p class="text-muted">Sélectionnez une catégorie pour filtrer nos spécialités.</p>
        </div>

        <!-- Boutons de filtrage par catégorie (US3) -->
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
            <button class="category-filter-btn active" data-filter="all">Tous les plats</button>
            <button class="category-filter-btn" data-filter="entrees">Entrées</button>
            <button class="category-filter-btn" data-filter="savoyardes">Spécialités Savoyardes</button>
            <button class="category-filter-btn" data-filter="desserts">Desserts</button>
        </div>

        <!-- Grille des Cartes de Plats (US3) -->
        <div class="row g-4" id="dishes-container">

            <!-- Plat 1 : Entrée -->
            <div class="col-lg-4 col-md-6 dish-item" data-category="entrees">
                <div class="card-dish h-100">
                    <img src="/assets/images/dishes/crozets.jpg" class="dish-img" alt="Salade Savoyarde">
                    <div class="p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title fs-5 mb-0">Salade Savoyarde du Chef</h3>
                                <span class="dish-price">14 €</span>
                            </div>
                            <p class="text-muted small">Mesclun bio, toast de Reblochon AOP poêlé, noix de Grenoble et vinaigrette au miel.</p>
                        </div>
                        <span class="badge bg-secondary w-auto align-self-start">Allergènes : Lait, Noix</span>
                    </div>
                </div>
            </div>

            <!-- Plat 2 : Spécialité Savoyarde -->
            <div class="col-lg-4 col-md-6 dish-item" data-category="savoyardes">
                <div class="card-dish h-100">
                    <img src="/assets/images/dishes/tartiflette.jpg" class="dish-img" alt="Tartiflette Traditionnelle">
                    <div class="p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title fs-5 mb-0">Tartiflette Traditionnelle</h3>
                                <span class="dish-price">22 €</span>
                            </div>
                            <p class="text-muted small">Pommes de terre de Savoie, lardons fumés, oignons rissolés et demi-Reblochon AOP fondu.</p>
                        </div>
                        <span class="badge bg-secondary w-auto align-self-start">Allergènes : Lait</span>
                    </div>
                </div>
            </div>

            <!-- Plat 3 : Spécialité Savoyarde (Poisson) -->
            <div class="col-lg-4 col-md-6 dish-item" data-category="savoyardes">
                <div class="card-dish h-100">
                    <img src="/assets/images/dishes/omble.jpg" class="dish-img" alt="Omble Chevalier">
                    <div class="p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title fs-5 mb-0">Omble Chevalier Poêlé</h3>
                                <span class="dish-price">26 €</span>
                            </div>
                            <p class="text-muted small">Filet d'omble sauvage du Lac du Bourget, beurre blanc à la Roussette de Savoie et risoni.</p>
                        </div>
                        <span class="badge bg-secondary w-auto align-self-start">Allergènes : Poisson, Lait</span>
                    </div>
                </div>
            </div>

            <!-- Plat 4 : Viande Savoyarde -->
            <div class="col-lg-4 col-md-6 dish-item" data-category="savoyardes">
                <div class="card-dish h-100">
                    <img src="/assets/images/dishes/poret.jpg" class="dish-img" alt="Filet Mignon aux Myrtilles">
                    <div class="p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title fs-5 mb-0">Filet Mignon des Bauges</h3>
                                <span class="dish-price">24 €</span>
                            </div>
                            <p class="text-muted small">Porc fermier rôti, réduction de jus au vin Mondeuse et myrtilles sauvages écrasées.</p>
                        </div>
                        <span class="badge bg-secondary w-auto align-self-start">Allergènes : Aucun</span>
                    </div>
                </div>
            </div>

            <!-- Plat 5 : Dessert -->
            <div class="col-lg-4 col-md-6 dish-item" data-category="desserts">
                <div class="card-dish h-100">
                    <img src="/assets/images/dishes/tarte-myrtille.jpg" class="dish-img" alt="Tartelette aux Myrtilles">
                    <div class="p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="dish-title fs-5 mb-0">Tartelette aux Myrtilles</h3>
                                <span class="dish-price">9 €</span>
                            </div>
                            <p class="text-muted small">Pâte sablée pur beurre, crème d'amande et myrtilles fraîches récoltées en Savoie.</p>
                        </div>
                        <span class="badge bg-secondary w-auto align-self-start">Allergènes : Gluten, Lait, Œufs</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bouton CTA de Réservation -->
        <div class="text-center mt-5">
            <a href="/reservation" class="btn btn-gold btn-lg px-5 py-3 rounded-pill shadow-sm hover-scale fs-5">
                <i class="fa-regular fa-calendar-check me-2"></i>Réserver pour Déguster Ces Spécialités
            </a>
        </div>

    </div>
</section>