function loginView() {
    return `
    <div class="row justify-content-center align-items-center h-100 mt-5">
        <div class="col-md-6 col-lg-5">
            <div class="glass-panel text-center">
                <i class="bi bi-shield-lock-fill text-warning" style="font-size: 3rem;"></i>
                <h2 class="font-serif mb-4 mt-2">Connexion Admin</h2>
                <form id="form-login">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-dark" id="loginEmail" placeholder="name@example.com" value="admin@quaiantique.fr">
                        <label for="loginEmail" class="text-secondary">Adresse E-mail</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control form-control-dark" id="loginPassword" placeholder="Mot de passe" value="password123">
                        <label for="loginPassword" class="text-secondary">Mot de passe</label>
                    </div>
                    <button class="btn btn-ocre w-100 py-3 mb-3" type="submit">Se connecter</button>
                    <a href="#/register" data-navigo class="text-info text-decoration-none small">Créer un compte administrateur</a>
                </form>
            </div>
        </div>
    </div>
    `;
}

function registerView() {
    return `
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 col-lg-6">
            <div class="glass-panel">
                <h2 class="font-serif mb-4 text-center">Création de Compte</h2>
                <form id="form-register">
                    <div class="row g-3 mb-3">
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control form-control-dark" id="regNom" placeholder="Nom" required>
                            <label for="regNom" class="ms-2 text-secondary">Nom</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control form-control-dark" id="regPrenom" placeholder="Prénom" required>
                            <label for="regPrenom" class="ms-2 text-secondary">Prénom</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-dark" id="regEmail" placeholder="name@example.com" required>
                        <label for="regEmail" class="text-secondary">Adresse E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-dark" id="regPassword" placeholder="Mot de passe" required>
                        <label for="regPassword" class="text-secondary">Mot de passe</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control form-control-dark" id="regPasswordConfirm" placeholder="Confirmer Mot de passe" required>
                        <label for="regPasswordConfirm" class="text-secondary">Validation du mot de passe</label>
                    </div>
                    <button class="btn btn-ocre w-100 py-3 mb-3" type="submit">S'inscrire</button>
                    <div class="text-center">
                        <a href="#/login" data-navigo class="text-warning text-decoration-none small">Déjà un compte ? Se connecter</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    `;
}

function accountView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Mon Compte</h2>
            <a href="#/security" data-navigo class="btn btn-outline-danger btn-sm"><i class="bi bi-shield-lock"></i> Sécurité (Mot de passe)</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="glass-panel">
                <form id="form-account">
                    <h5 class="border-bottom border-secondary pb-2 mb-4">Informations personnelles</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label text-light">Nom</label>
                            <input type="text" class="form-control form-control-dark" value="Dupont" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-light">Prénom</label>
                            <input type="text" class="form-control form-control-dark" value="Jean" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-light">Allergies (Par défaut)</label>
                        <textarea class="form-control form-control-dark" rows="3">Intolérance au lactose</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-light">Nombre de convives habituel</label>
                        <input type="number" class="form-control form-control-dark" value="2" min="1" max="15">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-ocre"><i class="bi bi-save me-1"></i> Sauvegarder les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    `;
}

function securityView() {
    return `
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="font-serif text-warning"><a href="#/account" data-navigo class="text-secondary me-2"><i class="bi bi-arrow-left"></i></a> Sécurité</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="glass-panel border-danger">
                <form id="form-security">
                    <div class="mb-3">
                        <label class="form-label text-light">Mot de passe actuel</label>
                        <input type="password" class="form-control form-control-dark" required>
                    </div>
                    <hr class="border-secondary my-4">
                    <div class="mb-3">
                        <label class="form-label text-light">Nouveau mot de passe</label>
                        <input type="password" class="form-control form-control-dark" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-light">Confirmer le nouveau mot de passe</label>
                        <input type="password" class="form-control form-control-dark" required>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-danger"><i class="bi bi-key me-1"></i> Mettre à jour le mot de passe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    `;
}

function galleryView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion de la Galerie</h2>
            <button class="btn btn-ocre" data-bs-toggle="modal" data-bs-target="#imageModal"><i class="bi bi-plus-lg"></i> Ajouter une image</button>
        </div>
    </div>
    <div class="row g-4">
        <!-- Image 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="gallery-item">
                <img src="../assets/images/chef-arnaud.jpg" alt="Chef Arnaud">
                <div class="gallery-actions">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#imageModal"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </div>
            </div>
            <p class="text-center mt-2 small text-secondary">Le Chef Arnaud en cuisine</p>
        </div>
        <!-- Image 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="gallery-item">
                <img src="../assets/images/hero-bg.jpg" alt="Salle de restaurant">
                <div class="gallery-actions">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#imageModal"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                </div>
            </div>
            <p class="text-center mt-2 small text-secondary">La salle du restaurant</p>
        </div>
    </div>

    <!-- Modale Ajout/Edition Image -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Ajouter / Modifier une image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-image">
                <div class="mb-3">
                    <label class="form-label">Titre de l'image</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fichier</label>
                    <input type="file" class="form-control">
                </div>
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-ocre" data-bs-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modale Suppression -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered text-dark">
        <div class="modal-content border-danger">
          <div class="modal-body text-center p-4">
            <i class="bi bi-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
            <p class="mt-3 mb-4">Voulez-vous vraiment supprimer cet élément ?</p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="alert('Supprimé !')">Supprimer</button>
          </div>
        </div>
      </div>
    </div>
    `;
}

function reservationsView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion des Réservations</h2>
            <button class="btn btn-ocre" data-bs-toggle="modal" data-bs-target="#reservationModal"><i class="bi bi-plus-lg"></i> Nouvelle Réservation</button>
        </div>
    </div>
    
    <div class="glass-panel p-0 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle">
                <thead>
                    <tr>
                        <th>Date & Heure</th>
                        <th>Client</th>
                        <th>Couverts</th>
                        <th>Allergies</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="d-block fw-bold text-info">15 Nov 2026</span>
                            <span class="small text-secondary">20:15 (Soir)</span>
                        </td>
                        <td>
                            <span class="d-block">Jean Dupont</span>
                            <span class="small text-secondary">jean.dupont@email.com</span>
                        </td>
                        <td><span class="badge bg-secondary">2 pers.</span></td>
                        <td><span class="text-warning small">Intolérance au lactose</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#reservationModal"><i class="bi bi-pencil"></i> Éditer</a>
                            <a href="#" class="btn btn-sm btn-outline-danger ms-1" data-bs-toggle="modal" data-bs-target="#cancelResaModal"><i class="bi bi-x-circle"></i> Annuler</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-block fw-bold text-info">16 Nov 2026</span>
                            <span class="small text-secondary">12:30 (Midi)</span>
                        </td>
                        <td>
                            <span class="d-block">Marie Curie</span>
                            <span class="small text-secondary">marie@science.fr</span>
                        </td>
                        <td><span class="badge bg-secondary">4 pers.</span></td>
                        <td><span class="text-muted small">Aucune</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#reservationModal"><i class="bi bi-pencil"></i> Éditer</a>
                            <a href="#" class="btn btn-sm btn-outline-danger ms-1" data-bs-toggle="modal" data-bs-target="#cancelResaModal"><i class="bi bi-x-circle"></i> Annuler</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modale Édition/Création Réservation -->
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif text-ocre">Modifier Réservation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form id="form-reservation">
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label">Client</label>
                        <input type="text" class="form-control" value="Jean Dupont" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Couverts</label>
                        <input type="number" class="form-control" value="2" min="1" max="20" required>
                    </div>
                </div>
                
                <h6 class="border-bottom pb-2 mb-3">Détails du repas</h6>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" value="2026-11-15" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label d-block">Service</label>
                        <div class="form-check form-check-inline mt-2">
                          <input class="form-check-input" type="radio" name="serviceRadio" id="serviceMidi" value="midi">
                          <label class="form-check-label" for="serviceMidi">Midi</label>
                        </div>
                        <div class="form-check form-check-inline mt-2">
                          <input class="form-check-input" type="radio" name="serviceRadio" id="serviceSoir" value="soir" checked>
                          <label class="form-check-label" for="serviceSoir">Soir</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Heure d'arrivée</label>
                        <select class="form-select" required>
                            <option value="19:00">19:00</option>
                            <option value="19:15">19:15</option>
                            <option value="19:30">19:30</option>
                            <option value="19:45">19:45</option>
                            <option value="20:00">20:00</option>
                            <option value="20:15" selected>20:15</option>
                            <option value="20:30">20:30</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Allergies / Remarques</label>
                    <textarea class="form-control" rows="2">Intolérance au lactose</textarea>
                </div>
                
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-ocre" data-bs-dismiss="modal">Enregistrer</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modale d'Annulation -->
    <div class="modal fade" id="cancelResaModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered text-dark">
        <div class="modal-content border-danger">
          <div class="modal-body text-center p-4">
            <i class="bi bi-calendar-x text-danger" style="font-size: 3rem;"></i>
            <p class="mt-3 mb-4">Confirmez-vous l'annulation de cette réservation ?</p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non, retour</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="alert('Réservation annulée')">Oui, Annuler</button>
          </div>
        </div>
      </div>
    </div>
    `;
}

function menuView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion de la Carte</h2>
            <button class="btn btn-ocre" data-bs-toggle="modal" data-bs-target="#menuModal"><i class="bi bi-plus-lg"></i> Ajouter un plat</button>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-12">
            <!-- Onglets de Catégories (en haut) -->
            <ul class="nav nav-pills nav-fill bg-black rounded p-2 mb-4 border border-secondary" id="menuTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded text-white" data-bs-toggle="tab" data-bs-target="#tab-entrees" type="button" role="tab">Entrées</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded text-white" data-bs-toggle="tab" data-bs-target="#tab-plats" type="button" role="tab">Plats</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded text-white" data-bs-toggle="tab" data-bs-target="#tab-desserts" type="button" role="tab">Desserts</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded text-white" data-bs-toggle="tab" data-bs-target="#tab-boissons" type="button" role="tab">Boissons</button>
                </li>
            </ul>

            <!-- Contenu des onglets (Listes verticales) -->
            <div class="tab-content glass-panel p-4" id="menuTabsContent">
                
                <!-- Tab: Entrées -->
                <div class="tab-pane fade show active" id="tab-entrees" role="tabpanel">
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                            <div>
                                <span class="fw-bold">Tartare de truite de Savoie</span>
                                <span class="d-block small text-secondary">Pomme verte, estragon et citron caviar</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-warning me-3">18 €</span>
                                <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                            <div>
                                <span class="fw-bold">Velouté de cèpes</span>
                                <span class="d-block small text-secondary">Émulsion à la noisette torréfiée</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-warning me-3">15 €</span>
                                <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Tab: Plats -->
                <div class="tab-pane fade" id="tab-plats" role="tabpanel">
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                            <div>
                                <span class="fw-bold">Omble chevalier meunière</span>
                                <span class="d-block small text-secondary">Légumes anciens glacés</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-warning me-3">28 €</span>
                                <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Tab: Desserts -->
                <div class="tab-pane fade" id="tab-desserts" role="tabpanel">
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                            <div>
                                <span class="fw-bold">Tarte myrtille déstructurée</span>
                                <span class="d-block small text-secondary">Crème légère à la vanille</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-warning me-3">12 €</span>
                                <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Tab: Boissons -->
                <div class="tab-pane fade" id="tab-boissons" role="tabpanel">
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary">
                            <div>
                                <span class="fw-bold">Vin de Savoie - Apremont</span>
                                <span class="d-block small text-secondary">Bouteille 75cl</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="text-warning me-3">24 €</span>
                                <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Modale Ajout Plat -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Ajouter un plat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-menu">
                <div class="mb-3">
                    <label class="form-label">Catégorie</label>
                    <select class="form-select" id="menuCategory" required>
                        <option value="0">Entrées</option>
                        <option value="1">Plats</option>
                        <option value="2">Desserts</option>
                        <option value="3">Boissons</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nom de l'élément</label>
                    <input type="text" class="form-control" id="menuName" placeholder="ex: Tartare de bœuf" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" id="menuDesc" placeholder="ex: Décrivez la préparation, la cuisson...">
                </div>
                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between">
                        <span>Ingrédients / Produits liés <span class="small text-muted">(Ctrl+Clic)</span></span>
                        <a href="#/produits" class="text-info small" data-bs-dismiss="modal"><i class="bi bi-plus-circle"></i> Nouveau produit</a>
                    </label>
                    <select multiple class="form-select" id="menuIngredients" style="height: 100px;">
                        <option value="boeuf">Bœuf de Savoie</option>
                        <option value="reblochon">Reblochon Fermier</option>
                        <option value="noix">Noix de Grenoble</option>
                        <option value="truite">Truite de Savoie</option>
                        <option value="cepes">Cèpes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prix (€)</label>
                    <input type="number" class="form-control" id="menuPrice" placeholder="ex: 18" required>
                </div>
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-ocre" data-bs-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    `;
}

function horairesView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion des Horaires</h2>
            <button class="btn btn-gold" id="btnAddJour"><i class="bi bi-plus-lg"></i> Ajouter un jour</button>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-12">
            <div class="glass-panel">
                <form id="form-horaires">
                    <div id="horaires-error" class="alert alert-danger d-none mb-4 small">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> L'heure de fermeture doit être après l'heure d'ouverture. (Veuillez corriger le formulaire)
                    </div>
                    <div id="horaires-success" class="alert alert-success d-none mb-4 small">
                        <i class="bi bi-check-circle-fill me-2"></i> Horaires enregistrés en BDD.
                    </div>

                    <p class="text-secondary small mb-4"><i class="bi bi-info-circle me-1"></i> Pour simuler une erreur, saisissez "12:00" dans la case Fermeture du Mardi. Vous pouvez renommer les jours en cliquant dessus.</p>

                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th style="width: 20%">Jour</th>
                                    <th style="width: 40%">Service Midi</th>
                                    <th style="width: 40%">Service Soir</th>
                                </tr>
                            </thead>
                            <tbody id="horaires-tbody">
                                <!-- Lundi -->
                                <tr>
                                    <td><div class="fw-bold mb-1 font-serif text-warning" contenteditable="true">Lundi</div></td>
                                    <td>
                                        <div class="d-flex align-items-center mb-1">
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-midi" disabled>
                                            <span class="text-secondary mx-2">-</span>
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-midi" disabled>
                                        </div>
                                        <div class="form-check form-switch mt-1">
                                            <input class="form-check-input switch-service" data-target="midi" type="checkbox" checked>
                                            <label class="form-check-label text-danger small">Fermé ce midi</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-1">
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-soir" disabled>
                                            <span class="text-secondary mx-2">-</span>
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-soir" disabled>
                                        </div>
                                        <div class="form-check form-switch mt-1">
                                            <input class="form-check-input switch-service" data-target="soir" type="checkbox" checked>
                                            <label class="form-check-label text-danger small">Fermé ce soir</label>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Mardi à Samedi -->
                                <tr>
                                    <td><div class="fw-bold mb-1 font-serif text-warning" contenteditable="true">Mardi à Samedi</div></td>
                                    <td>
                                        <div class="d-flex align-items-center mb-1">
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-midi" id="mardiMidiOuv" value="12:00">
                                            <span class="text-secondary mx-2">-</span>
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-midi" id="mardiMidiFerm" value="14:00">
                                        </div>
                                        <div class="form-check form-switch mt-1">
                                            <input class="form-check-input switch-service" data-target="midi" type="checkbox">
                                            <label class="form-check-label text-success small">Ouvert ce midi</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-1">
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-soir" value="19:00">
                                            <span class="text-secondary mx-2">-</span>
                                            <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-soir" value="22:30">
                                        </div>
                                        <div class="form-check form-switch mt-1">
                                            <input class="form-check-input switch-service" data-target="soir" type="checkbox">
                                            <label class="form-check-label text-success small">Ouvert ce soir</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-gold"><i class="bi bi-save me-1"></i> Enregistrer les horaires</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SECTION: HORAIRES EXCEPTIONNELS / FERMETURES -->
    <div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="glass-panel border-warning">
                <div class="d-flex justify-content-between align-items-center border-bottom border-secondary pb-2 mb-4">
                    <h4 class="font-serif text-warning mb-0"><i class="bi bi-calendar-event me-2"></i> Fermetures & Horaires Exceptionnels</h4>
                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exceptionModal"><i class="bi bi-plus-lg"></i> Ajouter une exception</button>
                </div>
                
                <div class="alert alert-dark small border-info text-info mb-4">
                    <i class="bi bi-info-circle me-1"></i> Utilisez cette section pour définir vos périodes de <strong>vacances</strong> ou des <strong>jours fériés / événements</strong>.
                </div>

                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Période / Date</th>
                                <th>Motif</th>
                                <th>Statut & Horaires</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="exceptions-list">
                            <tr>
                                <td><span class="fw-bold text-light">Du 15/08/2026 au 31/08/2026</span></td>
                                <td><span class="badge bg-danger">Vacances d'été</span></td>
                                <td><span class="text-danger fw-bold"><i class="bi bi-door-closed"></i> Fermé</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-success btn-supprimer-jour" title="Réouvrir"><i class="bi bi-check-circle"></i> Réouvrir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Exception / Fermeture -->
    <div class="modal fade" id="exceptionModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Nouvelle Exception / Fermeture</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-exception">
                <div class="mb-3">
                    <label class="form-label">Type d'exception</label>
                    <select class="form-select" id="exceptionType" required>
                        <option value="fermeture">Fermeture Temporaire (Vacances, Travaux)</option>
                        <option value="horaire">Horaires Spécifiques (Jours fériés, Événements)</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de début</label>
                        <input type="date" class="form-control" id="excStartDate" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de fin</label>
                        <input type="date" class="form-control" id="excEndDate" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Motif (Titre)</label>
                    <input type="text" class="form-control" id="excMotif" placeholder="ex: Vacances de Noël, Fête..." required>
                </div>
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-gold" data-bs-dismiss="modal">Enregistrer</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>`;
}

function settingsView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Paramètres du Restaurant</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="glass-panel">
                <form id="form-settings">
                    <h5 class="border-bottom border-secondary pb-2 mb-4 text-ocre"><i class="bi bi-people me-2"></i> Capacité d'Accueil</h5>
                    
                    <div class="alert alert-info small mb-4">
                        <i class="bi bi-info-circle me-1"></i> La capacité maximale est utilisée pour bloquer automatiquement la prise de réservation en ligne lorsque le nombre total de couverts réservés pour un service atteint cette limite.
                    </div>

                    <div class="row g-3 mb-4 align-items-center">
                        <div class="col-md-8">
                            <label class="form-label fw-bold text-light mb-0">Capacité maximale par service (Couverts)</label>
                            <div class="text-secondary small">Nombre limite de convives pouvant être servis simultanément.</div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="number" class="form-control form-control-dark text-center fs-5" id="maxCapacity" value="40" min="1" max="200" required>
                                <span class="input-group-text bg-secondary border-secondary"><i class="bi bi-person-fill"></i></span>
                            </div>
                        </div>
                    </div>

                    <h5 class="border-bottom border-secondary pb-2 mb-4 mt-5 text-ocre"><i class="bi bi-clock-history me-2"></i> Créneaux de Réservation</h5>
                    <div class="row g-3 mb-4 align-items-center">
                        <div class="col-md-8">
                            <label class="form-label fw-bold text-light mb-0">Intervalle de réservation (Minutes)</label>
                            <div class="text-secondary small">Écart entre deux propositions d'heures (ex: 19:00, 19:15).</div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select form-control-dark" id="timeSlot" required>
                                <option value="15" selected>15 minutes</option>
                                <option value="30">30 minutes</option>
                                <option value="60">1 heure</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-end mt-5">
                        <button type="submit" class="btn btn-gold"><i class="bi bi-save me-1"></i> Sauvegarder les paramètres</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    `;
}

function formulesView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion des Formules / Menus</h2>
            <button class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#formuleModal"><i class="bi bi-plus-lg"></i> Créer une Formule / Menu</button>
        </div>
    </div>
    
    <!-- Barre de filtrage -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="glass-panel p-3 border-info">
                <div class="row g-2 align-items-center">
                    <div class="col-md-auto fw-bold text-info"><i class="bi bi-funnel me-1"></i> Filtres :</div>
                    <div class="col-md-3">
                        <select class="form-select form-select-sm form-control-dark" id="filterType">
                            <option value="">Tous les types</option>
                            <option value="standard">Formules Standards</option>
                            <option value="thematique">Tous les Thèmes</option>
                            <optgroup label="Thèmes Spécifiques">
                                <option value="theme-noel">Noël</option>
                                <option value="theme-paques">Pâques</option>
                                <option value="theme-stvalentin">Saint-Valentin</option>
                                <option value="theme-nouvelan">Nouvel An</option>
                                <option value="theme-fetes">Fête des Mères/Pères</option>
                                <option value="theme-saison">Saisonnier</option>
                                <option value="theme-autre">Autre événement...</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select form-select-sm form-control-dark" id="filterPrice">
                            <option value="">Prix (Tous)</option>
                            <option value="asc">Prix croissant</option>
                            <option value="desc">Prix décroissant</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select form-select-sm form-control-dark" id="filterRegime">
                            <option value="">Régime (Tous)</option>
                            <option value="veg">Végétarien</option>
                            <option value="vegan">Vegan</option>
                            <option value="gf">Sans gluten</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select form-select-sm form-control-dark" id="filterConvives">
                            <option value="">Convives (Tous)</option>
                            <option value="1">Individuel (1)</option>
                            <option value="2">À partager (2+)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="glass-panel">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Nom de la Formule / Menu</th>
                                <th>Caractéristiques</th>
                                <th>Description</th>
                                <th>Prix (€)</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="formules-list">
                            <tr data-type="standard" data-price="20" data-regime="" data-convives="1">
                                <td><span class="fw-bold text-light">Menu du Marché</span></td>
                                <td>
                                    <span class="badge bg-secondary me-1">Standard</span>
                                    <span class="badge bg-success"><i class="bi bi-person"></i> 1 pers.</span>
                                </td>
                                <td><span class="small text-secondary">Entrée + Plat ou Plat + Dessert</span></td>
                                <td><span class="badge bg-ocre fs-6">20 €</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr data-type="theme-noel" data-price="85" data-regime="" data-convives="1">
                                <td><span class="fw-bold text-info"><i class="bi bi-star-fill text-warning me-1"></i> Menu de Noël</span></td>
                                <td>
                                    <span class="badge bg-info text-dark me-1">Thème: Noël</span>
                                    <span class="badge border border-info text-info me-1">Sur réservation</span>
                                    <span class="badge bg-success"><i class="bi bi-person"></i> 1 pers.</span>
                                </td>
                                <td><span class="small text-secondary">Amuse-bouche, Foie gras, Chapon, Bûche artisanale.</span></td>
                                <td><span class="badge bg-ocre fs-6">85 €</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Formule -->
    <div class="modal fade" id="formuleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Nouvelle Formule / Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-formules">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type / Thème</label>
                        <select class="form-select" id="formuleType">
                            <option value="standard">Standard</option>
                            <optgroup label="Thématiques">
                                <option value="theme-noel">Noël</option>
                                <option value="theme-paques">Pâques</option>
                                <option value="theme-stvalentin">Saint-Valentin</option>
                                <option value="theme-nouvelan">Nouvel An</option>
                                <option value="theme-fetes">Fête des Mères/Pères</option>
                                <option value="theme-saison">Menu Saisonnier</option>
                                <option value="theme-autre">Autre événement...</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom de la formule</label>
                        <input type="text" class="form-control" id="formuleName" placeholder="ex: Menu du Marché" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description (Composition)</label>
                    <textarea class="form-control" id="formuleDesc" rows="2" placeholder="ex: Entrée + Plat ou Plat + Dessert" required></textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Régime</label>
                        <select class="form-select" id="formuleRegime">
                            <option value="">Aucun / Standard</option>
                            <option value="veg">Végétarien</option>
                            <option value="vegan">Vegan</option>
                            <option value="gf">Sans gluten</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Convives</label>
                        <select class="form-select" id="formuleConvives">
                            <option value="1">1 pers. (Individuel)</option>
                            <option value="2">2 pers. (À partager)</option>
                            <option value="group">Groupe (Sur devis)</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Prix (€)</label>
                        <input type="number" class="form-control" id="formulePrice" placeholder="ex: 25" required>
                    </div>
                </div>
                
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-gold" data-bs-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    `;
}

function clientsView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Clients Inscrits</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="glass-panel">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Réservations</th>
                                <th>Allergies / Diète</th>
                                <th class="text-end">Gérer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="d-block fw-bold text-light">Jean Dupont</span>
                                    <span class="small text-secondary">jean.dupont@email.com</span>
                                </td>
                                <td><span class="badge bg-secondary">3</span></td>
                                <td><span class="text-warning small">Intolérance au lactose</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-person-x"></i> Ban</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-block fw-bold text-light">Marie Curie</span>
                                    <span class="small text-secondary">marie.c@science.fr</span>
                                </td>
                                <td><span class="badge bg-secondary">8</span></td>
                                <td><span class="text-muted small">Aucune</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-person-x"></i> Ban</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="d-block fw-bold text-light">Léon Marchand</span>
                                    <span class="small text-secondary">leon@sport.fr</span>
                                </td>
                                <td><span class="badge bg-secondary">1</span></td>
                                <td><span class="text-danger fw-bold small">Arachides</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-person-x"></i> Ban</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    `;
}

function produitsView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion des Produits / Ingrédients</h2>
            <button class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#produitModal"><i class="bi bi-plus-lg"></i> Ajouter un Produit</button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="glass-panel">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Stock</th>
                                <th>Origine</th>
                                <th>Allergènes</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="produits-list">
                            <tr>
                                <td><span class="fw-bold text-light">Bœuf de Savoie</span></td>
                                <td><span class="badge bg-secondary">Viande</span></td>
                                <td><span class="badge bg-success">15 kg</span></td>
                                <td><span class="small text-muted"><i class="bi bi-geo-alt-fill text-warning"></i> France (Local)</span></td>
                                <td><span class="text-secondary small">Aucun</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold text-light">Reblochon Fermier</span></td>
                                <td><span class="badge bg-secondary">Fromage</span></td>
                                <td><span class="badge bg-warning text-dark">3 kg</span></td>
                                <td><span class="small text-muted"><i class="bi bi-geo-alt-fill text-warning"></i> Savoie</span></td>
                                <td><span class="text-danger fw-bold small">Lait</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold text-light">Noix de Grenoble</span></td>
                                <td><span class="badge bg-secondary">Fruits à coque</span></td>
                                <td><span class="badge bg-danger">0.5 kg</span></td>
                                <td><span class="small text-muted"><i class="bi bi-geo-alt-fill text-warning"></i> Isère</span></td>
                                <td><span class="text-danger fw-bold small">Fruits à coque</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Produit -->
    <div class="modal fade" id="produitModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Nouveau Produit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-produits">
                <div class="mb-3">
                    <label class="form-label">Nom du Produit</label>
                    <input type="text" class="form-control" id="produitName" placeholder="ex: Bœuf de Savoie" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Catégorie</label>
                        <select class="form-select" id="produitCat" required>
                            <option value="Entrée">Entrée</option>
                            <option value="Plat">Plat</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Boisson">Boisson</option>
                            <option value="Viande">Viande</option>
                            <option value="Poisson">Poisson</option>
                            <option value="Légume">Légume</option>
                            <option value="Fromage">Fromage</option>
                            <option value="Épicerie">Épicerie</option>
                            <option value="Fruits à coque">Fruits à coque</option>
                            <option value="Sauce/Accompagnement">Sauce / Accompagnement</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Origine</label>
                        <input type="text" class="form-control" id="produitOrigine" placeholder="ex: Savoie, France..." required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stock (Quantité)</label>
                        <input type="number" step="0.01" class="form-control" id="produitStockQty" placeholder="ex: 15" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Unité</label>
                        <select class="form-select" id="produitStockUnit" required>
                            <option value="kg">kg (Kilogrammes)</option>
                            <option value="g">g (Grammes)</option>
                            <option value="L">L (Litres)</option>
                            <option value="cl">cl (Centilitres)</option>
                            <option value="unités">Unités / Pièces</option>
                            <option value="portions">Portions</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Allergènes majeurs</label>
                    <input type="text" class="form-control" id="produitAllergenes" placeholder="ex: Lait, Gluten, ou Aucun">
                </div>
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-gold" data-bs-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    `;
}

function utilisateursView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion de l'Équipe & Administrateurs</h2>
            <button class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#userModal"><i class="bi bi-person-plus-fill"></i> Nouvel Utilisateur</button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="glass-panel">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Nom & Email</th>
                                <th>Rôle</th>
                                <th>Statut</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="utilisateurs-list">
                            <tr>
                                <td>
                                    <div class="fw-bold text-light">Michant Arnaud</div>
                                    <div class="small text-secondary">m.arnaud@quai-antique.fr</div>
                                </td>
                                <td><span class="badge bg-danger">Administrateur</span></td>
                                <td><span class="badge border border-success text-success">Actif</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning" title="Modifier"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-info ms-1" title="Réinitialiser MDP"><i class="bi bi-key"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1" title="Désactiver/Supprimer"><i class="bi bi-person-dash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-bold text-light">Jeanne Dupont</div>
                                    <div class="small text-secondary">j.dupont@quai-antique.fr</div>
                                </td>
                                <td><span class="badge bg-info text-dark">Employé(e)</span></td>
                                <td><span class="badge border border-success text-success">Actif</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning" title="Modifier"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-info ms-1" title="Réinitialiser MDP"><i class="bi bi-key"></i></button>
                                    <button class="btn btn-sm btn-outline-danger ms-1" title="Désactiver/Supprimer"><i class="bi bi-person-dash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-bold text-light text-muted text-decoration-line-through">Pierre Martin</div>
                                    <div class="small text-secondary">p.martin@quai-antique.fr</div>
                                </td>
                                <td><span class="badge bg-info text-dark opacity-50">Employé(e)</span></td>
                                <td><span class="badge border border-danger text-danger">Inactif</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning" title="Modifier"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-info ms-1" title="Réinitialiser MDP"><i class="bi bi-key"></i></button>
                                    <button class="btn btn-sm btn-outline-success ms-1" title="Réactiver"><i class="bi bi-person-check"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Utilisateur -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered text-dark">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-serif">Nouveau Compte Équipe</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-utilisateurs">
                <div class="mb-3">
                    <label class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="userName" placeholder="ex: Jean Dupond" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="userEmail" placeholder="ex: jean@quai-antique.fr" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Rôle</label>
                        <select class="form-select" id="userRole" required>
                            <option value="employe">Employé(e)</option>
                            <option value="admin">Administrateur</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Statut</label>
                        <select class="form-select" id="userStatus" required>
                            <option value="actif">Actif</option>
                            <option value="inactif">Inactif (Désactivé)</option>
                        </select>
                    </div>
                </div>
                
                <div class="alert alert-info small mt-2">
                    <i class="bi bi-info-circle me-1"></i> Un mot de passe provisoire sera généré et envoyé à cette adresse email.
                </div>
                
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-gold" data-bs-dismiss="modal">Créer le compte</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    `;
}

// Fonction pour injecter la vue
const appRoot = document.getElementById('app-root');
const navbar = document.getElementById('admin-navbar');

function render(content, showNavbar = true) {
    appRoot.innerHTML = content;
    navbar.style.display = showNavbar ? 'flex' : 'none';
}

// Configuration du routeur Vanilla basé sur le Hash (#)
function router() {
    // Récupérer le hash (ex: #/login), s'il est vide on met #/login
    let hash = window.location.hash;
    if (!hash || hash === '#' || hash === '#/') {
        window.location.hash = '#/login';
        return;
    }

    // Routage simple
    switch(hash) {
        case '#/login':
            render(loginView(), false);
            break;
        case '#/register':
            render(registerView(), false);
            break;
        case '#/account':
            render(accountView(), true);
            break;
        case '#/security':
            render(securityView(), true);
            break;
        case '#/gallery':
            render(galleryView(), true);
            break;
        case '#/reservations':
            render(reservationsView(), true);
            break;
        case '#/menu':
            render(menuView(), true);
            break;
        case '#/produits':
            render(produitsView(), true);
            break;
        case '#/formules':
            render(formulesView(), true);
            break;
        case '#/clients':
            render(clientsView(), true);
            break;
        case '#/utilisateurs':
            render(utilisateursView(), true);
            break;
        case '#/horaires':
            render(horairesView(), true);
            break;
        case '#/settings':
            render(settingsView(), true);
            break;
        default:
            // Si la route n'existe pas, on redirige vers le login
            window.location.hash = '#/login';
            break;
    }
}

// Écouter les changements de # dans l'URL
window.addEventListener('hashchange', router);

// Lancer le routeur au démarrage
window.addEventListener('DOMContentLoaded', router);

// Gestionnaire global pour écouter les actions clic (ex: Ajouter un jour)
document.addEventListener('click', (e) => {
    if (e.target.id === 'btnAddJour' || e.target.closest('#btnAddJour')) {
        e.preventDefault();
        const tbody = document.getElementById('horaires-tbody');
        if (tbody) {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>
                    <div class="fw-bold mb-1 font-serif text-warning" contenteditable="true">Nouveau Jour</div>
                    <button class="btn btn-sm btn-outline-danger btn-supprimer-jour"><i class="bi bi-trash"></i></button>
                </td>
                <td>
                    <div class="d-flex align-items-center mb-1">
                        <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-midi" value="12:00">
                        <span class="text-secondary mx-2">-</span>
                        <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-midi" value="14:00">
                    </div>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input switch-service" data-target="midi" type="checkbox">
                        <label class="form-check-label text-success small">Ouvert ce midi</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center mb-1">
                        <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center me-2 time-input-soir" value="19:00">
                        <span class="text-secondary mx-2">-</span>
                        <input type="time" class="form-control form-control-sm form-control-dark w-auto text-center time-input-soir" value="22:30">
                    </div>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input switch-service" data-target="soir" type="checkbox">
                        <label class="form-check-label text-success small">Ouvert ce soir</label>
                    </div>
                </td>
            `;
            tbody.appendChild(tr);
        }
    } else if (e.target.closest('.btn-supprimer-jour')) {
        const row = e.target.closest('tr');
        if (row && confirm('Supprimer ce jour/exception ?')) {
            row.remove();
        }
    } else if (e.target.closest('.bi-pencil') || e.target.closest('.btn-outline-warning')) {
        // Intercepter les clics sur les boutons de modification
        alert("Mode édition ouvert ! (Dans la version finale, ceci pré-remplira le formulaire pour modification)");
    }
});

// Gestionnaire global pour les switchs ouvert/fermé des services
document.addEventListener('change', (e) => {
    if (e.target.classList.contains('switch-service')) {
        const cell = e.target.closest('td');
        if (!cell) return;
        
        const target = e.target.getAttribute('data-target'); // 'midi' or 'soir'
        const label = cell.querySelector('.form-check-label');
        const inputs = cell.querySelectorAll('.time-input-' + target);
        
        if (e.target.checked) { // Checked = Fermé
            if (label) {
                label.textContent = "Fermé ce " + target;
                label.classList.remove('text-success');
                label.classList.add('text-danger');
            }
            inputs.forEach(inp => inp.disabled = true);
        } else { // Unchecked = Ouvert
            if (label) {
                label.textContent = "Ouvert ce " + target;
                label.classList.remove('text-danger');
                label.classList.add('text-success');
            }
            inputs.forEach(inp => inp.disabled = false);
        }
    }
});

// Gestionnaire global pour écouter les soumissions de formulaires
document.addEventListener('submit', (e) => {
    e.preventDefault();
    if(e.target.id === 'form-login') {
        window.location.hash = '#/reservations';
    } else if (e.target.id === 'form-register') {
        alert("Inscription réussie, connectez-vous.");
        window.location.hash = '#/login';
    } else if (e.target.id === 'form-image') {
        // Simulation d'ajout visuel d'une image
        const imgContainer = document.querySelector('.row.g-4');
        if(imgContainer) {
            const newItem = document.createElement('div');
            newItem.className = 'col-md-4 col-sm-6';
            newItem.innerHTML = `
                <div class="gallery-item">
                    <img src="../assets/images/logo_authentic.png" style="background:#fff; object-fit:contain;" alt="Nouvelle image">
                    <div class="gallery-actions">
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#imageModal"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
                <p class="text-center mt-2 small text-secondary">Nouvelle image ajoutée</p>
            `;
            imgContainer.appendChild(newItem);
        }
    } else if (e.target.id === 'form-menu') {
        // Simulation d'ajout visuel d'un plat dans la liste
        const categoryIndex = document.getElementById('menuCategory').value;
        const listGroup = document.querySelectorAll('.list-group')[categoryIndex];
        const name = document.getElementById('menuName').value;
        const desc = document.getElementById('menuDesc').value;
        const price = document.getElementById('menuPrice').value;
        if(listGroup) {
            const newDish = document.createElement('li');
            newDish.className = 'list-group-item bg-transparent text-light px-0 d-flex justify-content-between align-items-center border-secondary';
            newDish.innerHTML = `
                <div>
                    <span class="fw-bold">${name}</span>
                    <span class="d-block small text-secondary">${desc}</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="text-warning me-3">${price} €</span>
                    <button class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></button>
                </div>
            `;
            listGroup.appendChild(newDish);
        }
    } else if (e.target.id === 'form-reservation') {
        // Simulation d'ajout visuel de réservation
        const tbody = document.querySelector('tbody');
        if (tbody) {
             const newRow = document.createElement('tr');
             newRow.innerHTML = `
                 <td>
                     <span class="d-block fw-bold text-info">Nouvelle</span>
                     <span class="small text-secondary">A l'instant</span>
                 </td>
                 <td>
                     <span class="d-block">Nouveau Client</span>
                     <span class="small text-secondary">client@email.com</span>
                 </td>
                 <td><span class="badge bg-secondary">2 pers.</span></td>
                 <td><span class="text-muted small">Aucune</span></td>
                 <td class="text-end">
                     <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#reservationModal"><i class="bi bi-pencil"></i> Éditer</a>
                     <a href="#" class="btn btn-sm btn-outline-danger ms-1" data-bs-toggle="modal" data-bs-target="#cancelResaModal"><i class="bi bi-x-circle"></i> Annuler</a>
                 </td>
             `;
             tbody.appendChild(newRow);
        }
     } else if (e.target.id === 'form-horaires') {
        const errorAlert = document.getElementById('horaires-error');
        const successAlert = document.getElementById('horaires-success');
        errorAlert.classList.add('d-none');
        successAlert.classList.add('d-none');
        
        // Logique de validation (correspondant à la branche "Les données sont valides ?" du diagramme)
        const fermMidi = document.getElementById('mardiMidiFerm').value;
        
        // Simulation d'une erreur si la fermeture est absurde (ex: midi à midi)
        if (fermMidi === "12:00" || fermMidi <= "12:00") {
            errorAlert.classList.remove('d-none');
            // Retour au formulaire sans enregistrer (branche invalide du diagramme)
            return;
        }
        
        // Branche valide du diagramme : on affiche le succès (BDD)
        successAlert.classList.remove('d-none');
    } else if (e.target.id === 'form-settings') {
        alert("Paramètres du restaurant mis à jour avec succès ! (Maquette Front-End)");
    } else if (e.target.id === 'form-formules') {
        const tbody = document.getElementById('formules-list');
        const type = document.getElementById('formuleType').value;
        const name = document.getElementById('formuleName').value;
        const desc = document.getElementById('formuleDesc').value;
        const price = document.getElementById('formulePrice').value;
        const regime = document.getElementById('formuleRegime').value;
        const convives = document.getElementById('formuleConvives').value;
        
        const isTheme = type.startsWith('theme-');
        const themeLabel = document.querySelector(`#formuleType option[value="${type}"]`)?.textContent || 'Thématique';
        
        let typeBadge = isTheme ? `<span class="badge bg-info text-dark me-1">Thème: ${themeLabel}</span>` : '<span class="badge bg-secondary me-1">Standard</span>';
        let nameHTML = isTheme ? `<span class="fw-bold text-info"><i class="bi bi-star-fill text-warning me-1"></i> ${name}</span>` : `<span class="fw-bold text-light">${name}</span>`;
        
        let regimeBadge = '';
        if (regime === 'veg') regimeBadge = '<span class="badge border border-success text-success me-1">Végétarien</span>';
        if (regime === 'vegan') regimeBadge = '<span class="badge border border-success text-success me-1">Vegan</span>';
        if (regime === 'gf') regimeBadge = '<span class="badge border border-warning text-warning me-1">Sans gluten</span>';
        
        let convivesBadge = convives == "1" ? '<span class="badge bg-success"><i class="bi bi-person"></i> 1 pers.</span>' : '<span class="badge bg-success"><i class="bi bi-people"></i> À partager</span>';

        if (tbody) {
            const tr = document.createElement('tr');
            tr.setAttribute('data-type', type);
            tr.setAttribute('data-price', price);
            tr.setAttribute('data-regime', regime);
            tr.setAttribute('data-convives', convives == "group" ? "2" : convives); // group -> treats as 2+
            tr.innerHTML = `
                <td>${nameHTML}</td>
                <td>
                    ${typeBadge}${regimeBadge}${convivesBadge}
                </td>
                <td><span class="small text-secondary">${desc}</span></td>
                <td><span class="badge bg-ocre fs-6">${price} €</span></td>
                <td class="text-end">
                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                </td>
            `;
            tbody.appendChild(tr);
            // Trigger filters
            const filterEvent = new Event('change', { bubbles: true });
            document.querySelector('#filterType')?.dispatchEvent(filterEvent);
        }
    } else if (e.target.id === 'form-produits') {
        const tbody = document.getElementById('produits-list');
        const name = document.getElementById('produitName').value;
        const cat = document.getElementById('produitCat').value;
        const origine = document.getElementById('produitOrigine').value;
        const qty = parseFloat(document.getElementById('produitStockQty').value);
        const unit = document.getElementById('produitStockUnit').value;
        const allergenes = document.getElementById('produitAllergenes').value || 'Aucun';
        
        let allergeneDisplay = '<span class="text-secondary small">Aucun</span>';
        if (allergenes.toLowerCase() !== 'aucun' && allergenes.trim() !== '') {
            allergeneDisplay = `<span class="text-danger fw-bold small">${allergenes}</span>`;
        }
        
        // Stock styling
        let stockBadge = 'bg-success';
        if (qty <= 5) stockBadge = 'bg-warning text-dark';
        if (qty <= 1) stockBadge = 'bg-danger';

        if (tbody) {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td><span class="fw-bold text-light">${name}</span></td>
                <td><span class="badge bg-secondary">${cat}</span></td>
                <td><span class="badge ${stockBadge}">${qty} ${unit}</span></td>
                <td><span class="small text-muted"><i class="bi bi-geo-alt-fill text-warning"></i> ${origine}</span></td>
                <td>${allergeneDisplay}</td>
                <td class="text-end">
                    <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-outline-danger ms-1"><i class="bi bi-trash"></i></button>
                </td>
            `;
            tbody.appendChild(tr);
        }
    } else if (e.target.id === 'form-utilisateurs') {
        const tbody = document.getElementById('utilisateurs-list');
        const name = document.getElementById('userName').value;
        const email = document.getElementById('userEmail').value;
        const role = document.getElementById('userRole').value;
        const status = document.getElementById('userStatus').value;
        
        let roleBadge = role === 'admin' ? '<span class="badge bg-danger">Administrateur</span>' : '<span class="badge bg-info text-dark">Employé(e)</span>';
        let statusBadge = status === 'actif' ? '<span class="badge border border-success text-success">Actif</span>' : '<span class="badge border border-danger text-danger">Inactif</span>';
        let nameStyle = status === 'inactif' ? 'text-muted text-decoration-line-through' : 'text-light';
        let opacityStyle = status === 'inactif' ? 'opacity-50' : '';
        
        let actionButtons = `
            <button class="btn btn-sm btn-outline-warning" title="Modifier"><i class="bi bi-pencil"></i></button>
            <button class="btn btn-sm btn-outline-info ms-1" title="Réinitialiser MDP"><i class="bi bi-key"></i></button>
        `;
        if (status === 'actif') {
            actionButtons += `<button class="btn btn-sm btn-outline-danger ms-1" title="Désactiver/Supprimer"><i class="bi bi-person-dash"></i></button>`;
        } else {
            actionButtons += `<button class="btn btn-sm btn-outline-success ms-1" title="Réactiver"><i class="bi bi-person-check"></i></button>`;
        }

        if (tbody) {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>
                    <div class="fw-bold ${nameStyle}">${name}</div>
                    <div class="small text-secondary">${email}</div>
                </td>
                <td class="${opacityStyle}">${roleBadge}</td>
                <td>${statusBadge}</td>
                <td class="text-end">${actionButtons}</td>
            `;
            tbody.appendChild(tr);
        }
    } else if (e.target.id === 'form-exception') {
        const tbody = document.getElementById('exceptions-list');
        const type = document.getElementById('exceptionType').value;
        const start = document.getElementById('excStartDate').value;
        const end = document.getElementById('excEndDate').value;
        const motif = document.getElementById('excMotif').value;
        
        let statusHtml = type === 'fermeture' ? 
            '<span class="text-danger fw-bold"><i class="bi bi-door-closed"></i> Fermé</span>' : 
            '<span class="text-success"><i class="bi bi-door-open"></i> Horaire Spécifique</span>';
            
        let badgeClass = type === 'fermeture' ? 'bg-danger' : 'bg-info';

        if (tbody && start && motif) {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td><span class="fw-bold text-light">Du ${start} au ${end}</span></td>
                <td><span class="badge ${badgeClass}">${motif}</span></td>
                <td>${statusHtml}</td>
                <td class="text-end">
                    <button class="btn btn-sm btn-outline-success btn-supprimer-jour"><i class="bi bi-check-circle"></i> Annuler</button>
                </td>
            `;
            tbody.appendChild(tr);
        }
    } else {
        alert("Modifications enregistrées visuellement ! (Maquette Front-End)");
    }
});

// Logique de filtrage dynamique des formules
document.addEventListener('change', (e) => {
    if (e.target.id === 'filterType' || e.target.id === 'filterPrice' || e.target.id === 'filterRegime' || e.target.id === 'filterConvives') {
        const typeFilter = document.getElementById('filterType').value;
        const priceSort = document.getElementById('filterPrice').value;
        const regimeFilter = document.getElementById('filterRegime').value;
        const convivesFilter = document.getElementById('filterConvives').value;
        
        const tbody = document.getElementById('formules-list');
        if (!tbody) return;
        
        let rows = Array.from(tbody.querySelectorAll('tr'));
        
        rows.forEach(row => {
            const rowType = row.getAttribute('data-type');
            let matchType = false;
            
            if (typeFilter === "") {
                matchType = true;
            } else if (typeFilter === "thematique") {
                matchType = rowType.startsWith('theme-');
            } else {
                matchType = (rowType === typeFilter);
            }
            
            let matchRegime = regimeFilter === "" || row.getAttribute('data-regime') === regimeFilter;
            let matchConvives = convivesFilter === "" || (convivesFilter === "2" && parseInt(row.getAttribute('data-convives')) >= 2) || row.getAttribute('data-convives') === convivesFilter;
            
            if (matchType && matchRegime && matchConvives) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        
        // Tri par prix
        if (priceSort !== "") {
            rows.sort((a, b) => {
                let p1 = parseFloat(a.getAttribute('data-price'));
                let p2 = parseFloat(b.getAttribute('data-price'));
                return priceSort === 'asc' ? p1 - p2 : p2 - p1;
            });
            rows.forEach(row => tbody.appendChild(row));
        }
    }
});
