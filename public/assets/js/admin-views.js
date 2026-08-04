export function loginView() {
    return `
    <div class="row justify-content-center align-items-center h-100 mt-5">
        <div class="col-md-6 col-lg-5">
            <div class="glass-panel text-center">
                <i class="bi bi-shield-lock-fill text-warning" style="font-size: 3rem;"></i>
                <h2 class="font-serif mb-4 mt-2">Connexion Admin</h2>
                <form id="form-login">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-dark" id="loginEmail" placeholder="name@example.com" required>
                        <label for="loginEmail" class="text-secondary">Adresse E-mail</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control form-control-dark" id="loginPassword" placeholder="Mot de passe" required>
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

export function registerView() {
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

export function accountView() {
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

export function securityView() {
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

export function galleryView() {
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

export function reservationsView() {
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

export function menuView() {
    return `
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="font-serif text-warning">Gestion de la Carte</h2>
            <button class="btn btn-ocre"><i class="bi bi-plus-lg"></i> Ajouter un plat</button>
        </div>
    </div>
    
    <div class="row">
        <!-- Catégorie: Entrées -->
        <div class="col-md-6 mb-4">
            <div class="glass-panel">
                <h4 class="font-serif border-bottom border-secondary pb-2 mb-3">Entrées</h4>
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
        </div>
        
        <!-- Catégorie: Plats -->
        <div class="col-md-6 mb-4">
            <div class="glass-panel">
                <h4 class="font-serif border-bottom border-secondary pb-2 mb-3">Plats</h4>
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
        </div>
    </div>
    `;
}
