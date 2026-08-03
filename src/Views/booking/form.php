<!-- ========================================================= -->
<!-- PAGE DISPOSITION 2 COLONNES CÔTÉ À CÔTÉ (EXACTE MAQUETTE) -->
<!-- ========================================================= -->

<div class="bg-beige-light py-section">
    <div class="container-fluid px-lg-5" style="max-width: 1400px;">
        
        <!-- SECTION HAUTE : 2 COLONNES (MENUS DU CHEF À GAUCHE | SÉLECTION À LA CARTE À DROITE) -->
        <div class="row g-4 align-items-stretch mb-5 position-relative">
            
            <!-- GAUCHE : MENUS DU CHEF -->
            <div class="col-lg-5 pe-lg-4 border-end-lg">
                <div class="text-center mb-4">
                    <h2 class="font-heading fs-3 fw-bold text-uppercase mb-1">MENUS DU CHEF</h2>
                    <div class="gold-ornament mb-2 text-gold">❊</div>
                </div>

                <div class="row g-3">
                    <!-- Menu 1 : Saveurs de Savoie -->
                    <div class="col-6">
                        <div class="formula-card p-3 text-center h-100">
                            <img src="/assets/images/m1.png" alt="Menu Saveurs de Savoie" class="img-fluid mb-2" style="max-height: 60px;">
                            <span class="font-serif fst-italic text-gold small d-block mb-1">Menu</span>
                            <h3 class="formula-title fs-6 text-uppercase fw-bold mb-2">SAVEURS DE SAVOIE</h3>
                            <div class="dish-price fs-5 text-gold fw-bold mb-2">38.00 €</div>
                            <div class="gold-ornament small mb-2 text-gold">❊</div>
                            <p class="font-serif text-uppercase text-muted fw-semibold mb-1" style="font-size: 0.72rem;">FORMULE ENTRÉE + PLAT</p>
                            <div class="fs-6 text-gold fw-bold">29.00 €</div>
                        </div>
                    </div>

                    <!-- Menu 2 : Le Grand Quai -->
                    <div class="col-6">
                        <div class="formula-card p-3 text-center h-100">
                            <img src="/assets/images/m2.png" alt="Menu Le Grand Quai" class="img-fluid mb-2" style="max-height: 60px;">
                            <span class="font-serif fst-italic text-gold small d-block mb-1">Menu</span>
                            <h3 class="formula-title fs-6 text-uppercase fw-bold mb-2">LE GRAND QUAI</h3>
                            <div class="dish-price fs-5 text-gold fw-bold mb-2">54.00 €</div>
                            <div class="gold-ornament small mb-2 text-gold">❊</div>
                            <p class="font-serif text-uppercase text-muted fw-semibold mb-1" style="font-size: 0.72rem;">DÉGUSTATION EN 5 TEMPS</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DROITE : SELECTION À LA CARTE -->
            <div class="col-lg-7 ps-lg-4">
                <div class="text-center mb-4">
                    <h2 class="font-heading fs-3 fw-bold text-uppercase mb-1">SELECTION À LA CARTE</h2>
                    <div class="gold-ornament mb-3 text-gold">❊</div>
                    
                    <!-- Boutons Filtres Catégories -->
                    <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
                        <button class="category-filter-btn btn-filter-category active px-3 py-1 small" data-category="all">TOUS</button>
                        <button class="category-filter-btn btn-filter-category px-3 py-1 small" data-category="entrees">ENTRÉES</button>
                        <button class="category-filter-btn btn-filter-category px-3 py-1 small" data-category="plats">PLATS PRINCIPAUX</button>
                        <button class="category-filter-btn btn-filter-category px-3 py-1 small" data-category="burgers">BURGERS</button>
                        <button class="category-filter-btn btn-filter-category px-3 py-1 small" data-category="desserts">DESSERTS</button>
                        <button class="category-filter-btn btn-filter-category px-3 py-1 small" data-category="boissons">BOISSONS</button>
                    </div>
                </div>

                <!-- Grille 3 Plats côte à côte -->
                <div class="row g-3 justify-content-center" id="dishesGrid2ColForm">
                    <div class="col-md-4 dish-item" data-category="entrees">
                        <div class="card-dish h-100">
                            <img src="/assets/images/dishes/potimarron.jpg" alt="Velouté de Potimarron" class="dish-img" style="height: 130px;">
                            <div class="p-3">
                                <h4 class="dish-title text-uppercase mt-1" style="font-size: 0.8rem;">VELOUTÉ DE POTIMARRON</h4>
                                <div class="dish-price fs-6 mb-2">14.50 €</div>
                                <p class="text-muted mb-0" style="font-size: 0.75rem;">Velouté onctueux de potimarron, crème de reblochon et graines torréfiées.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dish-item" data-category="plats">
                        <div class="card-dish h-100">
                            <img src="/assets/images/dishes/fondue.jpg" alt="Fondue Savoyarde" class="dish-img" style="height: 130px;">
                            <div class="p-3">
                                <h4 class="dish-title text-uppercase mt-1" style="font-size: 0.8rem;">FONDUE SAVOYARDE</h4>
                                <div class="dish-price fs-6 mb-2">26.50 €</div>
                                <p class="text-muted mb-0" style="font-size: 0.75rem;">Mélange de fromages savoyards AOP, pommes de terre et charcuterie locale.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 dish-item" data-category="desserts">
                        <div class="card-dish h-100">
                            <img src="/assets/images/dishes/tarte-myrtille.png" alt="Tarte aux Myrtilles" class="dish-img" style="height: 130px;">
                            <div class="p-3">
                                <h4 class="dish-title text-uppercase mt-1" style="font-size: 0.8rem;">TARTE AUX MYRTILLES</h4>
                                <div class="dish-price fs-6 mb-2">9.50 €</div>
                                <p class="text-muted mb-0" style="font-size: 0.75rem;">Tarte maison aux myrtilles sauvages, crème d'amande et chantilly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 2. BARRE CTA CENTRÉE -->
        <div class="text-center my-5">
            <a href="#formulaire-reservation-block" class="btn btn-gold btn-lg rounded-pill px-5 py-3 fw-bold shadow hover-scale text-decoration-none font-serif text-uppercase">
                <i class="fa-solid fa-arrow-down me-2"></i> ALLER AU FORMULAIRE
            </a>
        </div>

        <!-- 3. FORMULAIRE DE RÉSERVATION (EN DESSOUS) -->
        <section class="mt-5 pt-3" id="formulaire-reservation-block">
            <div class="text-center mb-4">
                <h2 class="font-heading display-5 fw-bold text-uppercase mb-1">FORMULAIRE DE RÉSERVATION</h2>
                <div class="gold-ornament mb-4 text-gold">❊</div>
            </div>

            <!-- Cadre Global du Formulaire -->
            <div class="booking-card mx-auto" style="max-width: 960px;">
                <form action="/api/reservation" method="POST" id="bookingFormDedicated">
                    
                    <!-- 1. INFORMATIONS PERSONNELLES -->
                    <div class="mb-4 pb-3 border-bottom">
                        <div class="font-heading fs-5 fw-bold mb-3">
                            <i class="fa-solid fa-user me-2 text-gold"></i>1. INFORMATIONS PERSONNELLES
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name_res" class="form-label font-serif small fw-bold">Nom Complet <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name_res" name="name" placeholder="Votre nom complet" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email_res" class="form-label font-serif small fw-bold">Adresse Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email_res" name="email" placeholder="exemple@email.com" required>
                            </div>
                        </div>
                    </div>

                    <!-- 2. CONVIVES & DATE -->
                    <div class="mb-4 pb-3 border-bottom">
                        <div class="font-heading fs-5 fw-bold mb-3">
                            <i class="fa-solid fa-users me-2 text-gold"></i>2. CONVIVES & DATE
                        </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="guests_res" class="form-label font-serif small fw-bold">Nombre de couverts <span class="text-danger">*</span></label>
                                <select class="form-select" id="guests_res" name="guests" required>
                                    <option value="" selected disabled>Sélectionnez</option>
                                    <option value="1">1 Personne</option>
                                    <option value="2">2 Personnes</option>
                                    <option value="3">3 Personnes</option>
                                    <option value="4">4 Personnes</option>
                                    <option value="5">5 Personnes</option>
                                    <option value="6">6 Personnes</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="date_res" class="form-label font-serif small fw-bold">Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date_res" name="date" required>
                            </div>
                            <div class="col-md-4">
                                <label for="service_res" class="form-label font-serif small fw-bold">Service <span class="text-danger">*</span></label>
                                <select class="form-select" id="service_res" name="service" required>
                                    <option value="" selected disabled>Choisissez un service</option>
                                    <option value="lunch">Déjeuner (Midi)</option>
                                    <option value="dinner">Dîner (Soir)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- 3. HORAIRE D'ARRIVÉE -->
                    <div class="mb-4 pb-3 border-bottom">
                        <div class="font-heading fs-5 fw-bold mb-3">
                            <i class="fa-regular fa-clock me-2 text-gold"></i>3. HORAIRE D'ARRIVÉE <span class="fw-normal text-muted small">(TRANCHES DE 15 MIN - EXCL. DERNIÈRE HEURE)</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <button type="button" class="time-slot-badge">12:00</button>
                            <button type="button" class="time-slot-badge">12:15</button>
                            <button type="button" class="time-slot-badge">12:30</button>
                            <button type="button" class="time-slot-badge">12:45</button>
                            <button type="button" class="time-slot-badge">13:00</button>
                            <button type="button" class="time-slot-badge">13:15</button>
                            <button type="button" class="time-slot-badge">13:30</button>
                            <button type="button" class="time-slot-badge disabled">13:45 ✕</button>
                            <button type="button" class="time-slot-badge disabled">14:00 ✕</button>
                        </div>
                        <p class="font-serif fst-italic text-muted small mb-0">Les créneaux de la dernière heure ne sont pas disponibles.</p>
                    </div>

                    <!-- 4. ALLERGIES & REMARQUES -->
                    <div class="mb-4">
                        <div class="font-heading fs-5 fw-bold mb-3">
                            <i class="fa-regular fa-clipboard me-2 text-gold"></i>4. ALLERGIES & REMARQUES
                        </div>
                        <p class="font-serif small text-muted mb-2">Indiquez ici vos allergies alimentaires ou toute autre remarque</p>
                        <textarea class="form-control" id="allergies_res" name="allergies" rows="4" placeholder="Votre message..."></textarea>
                    </div>

                    <!-- BOUTON DE CONFIRMATION CTA -->
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-gold w-100 py-3 fs-5 rounded-3 fw-bold text-uppercase hover-scale">
                            <i class="fa-solid fa-check-circle me-2"></i> CONFIRMER MA RÉSERVATION
                        </button>
                    </div>

                </form>
            </div>
        </section>

    </div>
</div>
