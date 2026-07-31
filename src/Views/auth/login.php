<!--  FORMULAIRE DE CONNEXION UNIQUE (CLIENT / ADMIN) - US1 -->

<section class="section-padding bg-beige-light">
    <div class="container">
        <div class="auth-card">
            
            <!-- En-tête de la carte -->
            <div class="text-center mb-4">
                <i class="fa-solid fa-user-lock text-gold fs-1 mb-3"></i>
                <h1 class="font-heading fs-2 text-uppercase mb-1">Espace Connexion</h1>
                <p class="text-muted small">Connectez-vous pour gérer vos réservations et vos préférences.</p>
            </div>

            <!-- Formulaire de Connexion -->
            <form action="/login" method="POST">
                
                <!-- Champ Adresse Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email *</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-regular fa-envelope text-muted"></i></span>
                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="votre.email@exemple.com" required autocomplete="email">
                    </div>
                </div>

                <!-- Champ Mot de Passe -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="password" class="form-label mb-0">Mot de Passe *</label>
                    </div>
                    <div class="input-group mt-1">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-lock text-muted"></i></span>
                        <input type="password" class="form-control border-start-0 ps-0" id="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>

                <!-- Bouton Se Connecter -->
                <button type="submit" class="btn btn-gold btn-lg w-100 py-3 rounded-pill fw-bold text-uppercase shadow-sm mb-3">
                    <i class="fa-solid fa-right-to-bracket me-2"></i>Se Connecter
                </button>

                <!-- Lien vers Inscription Client -->
                <div class="text-center mt-3 pt-3 border-top">
                    <span class="text-muted small">Vous n'avez pas encore de compte ?</span>
                    <a href="/register" class="text-gold fw-bold small ms-1 text-decoration-underline">Créer un compte client</a>
                </div>

            </form>

        </div>
    </div>
</section>