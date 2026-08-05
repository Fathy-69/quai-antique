<!--  FORMULAIRE D'INSCRIPTION CLIENT (CONVIVES & ALLERGIES) - US7 -->

<section class="section-padding bg-beige-light">
    <div class="container">
        <div class="auth-card" style="max-width: 600px;">
            
            <div class="text-center mb-4">
                <i class="fa-solid fa-user-plus text-gold fs-1 mb-3"></i>
                <h1 class="font-heading fs-2 text-uppercase mb-1">Créer un Compte Client</h1>
                <p class="text-muted small">Enregistrez vos habitudes de réservation pour gagner du temps.</p>
            </div>

            <form action="/register" method="POST">
                
                <?php if (isset($_SESSION['flash']['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i> <?= $_SESSION['flash']['error'] ?>
                    </div>
                    <?php unset($_SESSION['flash']['error']); ?>
                <?php endif; ?>
                
                <div class="row g-3">
                    <!-- Nom -->
                    <div class="col-md-6 mb-3">
                        <label for="lastname" class="form-label">Nom *</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>

                    <!-- Prénom -->
                    <div class="col-md-6 mb-3">
                        <label for="firstname" class="form-label">Prénom *</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Mot de passe sécurisé (Exigence bcrypt) -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de Passe *</label>
                    <input type="password" class="form-control" id="password" name="password" required minlength="8">
                    <div class="form-text small">Au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.</div>
                </div>

                <!-- US7 : NOMBRE DE CONVIVES PAR DÉFAUT -->
                <div class="mb-3">
                    <label for="default_guests" class="form-label text-dark fw-bold">
                        <i class="fa-solid fa-users text-gold me-2"></i>Nombre de Convives par Défaut (US7)
                    </label>
                    <select class="form-select" id="default_guests" name="default_guests">
                        <option value="1">1 Personne</option>
                        <option value="2" selected>2 Personnes (Par défaut)</option>
                        <option value="3">3 Personnes</option>
                        <option value="4">4 Personnes</option>
                        <option value="5">5 Personnes</option>
                        <option value="6">6 Personnes</option>
                    </select>
                    <div class="form-text small">Ce nombre pré-remplira automatiquement vos futures réservations.</div>
                </div>

                <!-- US7 : ALLERGIES RÉCURRENTES PAR DÉFAUT -->
                <div class="mb-4">
                    <label for="default_allergies" class="form-label text-dark fw-bold">
                        <i class="fa-solid fa-wheat-awn-circle-exclamation text-gold me-2"></i>Allergies ou Régimes Récurrents (US7)
                    </label>
                    <textarea class="form-control" id="default_allergies" name="default_allergies" rows="3" placeholder="Ex: Allergie au gluten, lactose, fruits à coque..."></textarea>
                    <div class="form-text small">Vos allergies seront automatiquement prises en compte lors de vos réservations.</div>
                </div>

                <button type="submit" class="btn btn-gold btn-lg w-100 py-3 rounded-pill fw-bold text-uppercase shadow-sm mb-3">
                    <i class="fa-solid fa-user-check me-2"></i>Créer Mon Compte
                </button>

                <div class="text-center mt-3 pt-3 border-top">
                    <span class="text-muted small">Vous avez déjà un compte ?</span>
                    <a href="/login" class="text-gold fw-bold small ms-1 text-decoration-underline">Se connecter</a>
                </div>

            </form>

        </div>
    </div>
</section>