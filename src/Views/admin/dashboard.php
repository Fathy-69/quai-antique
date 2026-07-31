<!--  DASHBOARD BACK-OFFICE ADMINISTRATION (HÔTE D'ACCUEIL) -->


<div class="container-fluid py-4">
    <div class="row">

        <!-- BARRE LATÉRALE DE NAVIGATION ADMIN -->
        <aside class="col-lg-3 col-md-4 mb-4">
            <div class="admin-sidebar rounded-4 shadow-sm">
                <h2 class="sidebar-title">
                    <i class="fa-solid fa-gauge me-2"></i>Administration
                </h2>
                <div class="nav flex-column nav-pills" role="tablist">
                    <button class="nav-link active text-start" id="tab-capacity-tab" data-bs-toggle="pill" data-bs-target="#tab-capacity" type="button">
                        <i class="fa-solid fa-users-gear"></i>Seuil Max Convives (US6)
                    </button>
                    <button class="nav-link text-start" id="tab-schedules-tab" data-bs-toggle="pill" data-bs-target="#tab-schedules" type="button">
                        <i class="fa-regular fa-clock"></i>Gestion des Horaires (US5)
                    </button>
                    <button class="nav-link text-start" id="tab-gallery-tab" data-bs-toggle="pill" data-bs-target="#tab-gallery" type="button">
                        <i class="fa-regular fa-images"></i>Galerie Photos (US2)
                    </button>
                    <button class="nav-link text-start" id="tab-dishes-tab" data-bs-toggle="pill" data-bs-target="#tab-dishes" type="button">
                        <i class="fa-solid fa-utensils"></i>La Carte & Plats (US3)
                    </button>
                    <button class="nav-link text-start" id="tab-menus-tab" data-bs-toggle="pill" data-bs-target="#tab-menus" type="button">
                        <i class="fa-solid fa-book-open"></i>Menus du Chef (US4)
                    </button>
                </div>
            </div>
        </aside>

        <!-- CONTENU CENTRAL DU DASHBOARD -->
        <main class="col-lg-9 col-md-8">
            <div class="tab-content">

                <!-- 1. TAB SEUIL MAXIMUM DE CONVIVES (US6) -->
                <div class="tab-pane fade show active" id="tab-capacity" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h3 class="font-heading text-dark border-bottom pb-3 mb-4">
                            <i class="fa-solid fa-users-gear text-gold me-2"></i>Capacité Maximale d'Accueil (US6)
                        </h3>
                        <p class="text-muted">Définissez le nombre maximum de couverts que le restaurant peut accepter par service.</p>
                        
                        <form action="/admin/capacity" method="POST" class="mt-3">
                            <div class="row align-items-end g-3">
                                <div class="col-md-6">
                                    <label for="max_capacity" class="form-label font-heading">Nombre maximum de convives par service *</label>
                                    <input type="number" class="form-control form-control-lg" id="max_capacity" name="max_capacity" value="40" min="1" max="150" required>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gold btn-lg w-100 py-3 rounded-pill">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>Enregistrer le Seuil
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- 2. TAB GESTION DES HORAIRES (US5) -->
                <div class="tab-pane fade" id="tab-schedules" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h3 class="font-heading text-dark border-bottom pb-3 mb-4">
                            <i class="fa-regular fa-clock text-gold me-2"></i>Édition des Horaires d'Ouverture (US5)
                        </h3>

                        <table class="table table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Jour</th>
                                    <th>Service Déjeuner</th>
                                    <th>Service Dîner</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Lundi</td>
                                    <td>12:00 - 14:00</td>
                                    <td>19:00 - 22:00</td>
                                    <td><button class="btn btn-sm btn-outline-gold"><i class="fa-solid fa-pen"></i> Modifier</button></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Mercredi</td>
                                    <td colspan="2" class="text-danger italic">Fermé</td>
                                    <td><button class="btn btn-sm btn-outline-gold"><i class="fa-solid fa-pen"></i> Modifier</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. TAB GALERIE PHOTOS & UPLOADS (US2) -->
                <div class="tab-pane fade" id="tab-gallery" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                            <h3 class="font-heading text-dark mb-0">
                                <i class="fa-regular fa-images text-gold me-2"></i>Gestion de la Galerie Photos (US2)
                            </h3>
                            <button class="btn btn-gold rounded-pill" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                <i class="fa-solid fa-plus me-2"></i>Ajouter une Photo
                            </button>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <img src="/assets/images/dishes/tartiflette.jpg" class="card-img-top" alt="Tartiflette">
                                    <div class="card-body p-2 text-center">
                                        <small class="fw-bold d-block">Tartiflette Savoyarde</small>
                                        <button class="btn btn-sm btn-outline-danger mt-2"><i class="fa-solid fa-trash"></i> Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. TAB CARTE & PLATS (US3) -->
                <div class="tab-pane fade" id="tab-dishes" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                            <h3 class="font-heading text-dark mb-0">
                                <i class="fa-solid fa-utensils text-gold me-2"></i>Gestion des Plats & Catégories (US3)
                            </h3>
                            <button class="btn btn-gold rounded-pill">
                                <i class="fa-solid fa-plus me-2"></i>Nouveau Plat
                            </button>
                        </div>
                        <p class="text-muted">Gérez les titres, descriptions, prix et allergènes des plats de la carte.</p>
                    </div>
                </div>

                <!-- 5. TAB MENUS DU CHEF (US4) -->
                <div class="tab-pane fade" id="tab-menus" role="tabpanel">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                            <h3 class="font-heading text-dark mb-0">
                                <i class="fa-solid fa-book-open text-gold me-2"></i>Gestion des Menus & Formules (US4)
                            </h3>
                            <button class="btn btn-gold rounded-pill">
                                <i class="fa-solid fa-plus me-2"></i>Nouveau Menu
                            </button>
                        </div>
                        <p class="text-muted">Créez et éditez les formules du chef (Entrée + Plat + Dessert).</p>
                    </div>
                </div>

            </div>
        </main>

    </div>
</div>