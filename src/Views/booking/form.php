<!-- ========================================================= -->
<!-- 📅 FORMULAIRE DE RÉSERVATION EN LIGNE - EXIGENCES US6 & US7 -->
<!-- ========================================================= -->

<!-- EN-TÊTE DE LA PAGE -->
<section class="bg-dark-savoy text-white py-5 text-center">
    <div class="container">
        <h1 class="display-4 font-heading fw-bold text-uppercase">Réserver une Table</h1>
        <p class="lead text-gold mb-0">Réservez votre table en quelques clics au Quai Antique.</p>
    </div>
</section>

<!-- CONTENEUR DU FORMULAIRE -->
<section class="section-padding bg-beige-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="booking-card">
                    <form id="booking-form" action="/reservation" method="POST">

                        <!-- Message d'information convives -->
                        <div class="alert alert-info border-0 shadow-sm mb-4">
                            <i class="fa-solid fa-circle-info me-2 text-info"></i>
                            Pour des réservations de plus de 8 personnes, veuillez nous contacter directement par téléphone au 04 79 00 00 00.
                        </div>

                        <!-- 1. NOMBRE DE COUVERTS (US6 & US7) -->
                        <div class="mb-4">
                            <label for="guests" class="form-label">
                                <i class="fa-solid fa-users text-gold me-2"></i>Nombre de Couverts *
                            </label>
                            <!-- Auto-remplissage avec le nombre de convives par défaut si l'utilisateur est connecté (US7) -->
                            <select class="form-select form-select-lg" id="guests" name="guests" required>
                                <option value="" disabled selected>Choisissez le nombre de personnes</option>
                                <option value="1">1 Personne</option>
                                <option value="2" selected>2 Personnes</option>
                                <option value="3">3 Personnes</option>
                                <option value="4">4 Personnes</option>
                                <option value="5">5 Personnes</option>
                                <option value="6">6 Personnes</option>
                                <option value="7">7 Personnes</option>
                                <option value="8">8 Personnes</option>
                            </select>
                        </div>

                        <!-- 2. CHOIX DE LA DATE -->
                        <div class="mb-4">
                            <label for="booking_date" class="form-label">
                                <i class="fa-regular fa-calendar text-gold me-2"></i>Date de Réservation *
                            </label>
                            <input type="date" class="form-control form-control-lg" id="booking_date" name="booking_date" min="<?= date('Y-m-d') ?>" required>
                        </div>

                        <!-- 3. SÉLECTION DU SERVICE & HORAIRES PAR TRANCHES DE 15 MIN (US6) -->
                        <div class="mb-4">
                            <label class="form-label d-block">
                                <i class="fa-regular fa-clock text-gold me-2"></i>Horaire Souhaité (Par tranches de 15 minutes) *
                            </label>

                            <!-- Service Déjeuner -->
                            <div class="mb-3">
                                <span class="fw-bold text-dark d-block mb-2">Service du Déjeuner (12:00 - 14:00) :</span>
                                <div class="d-flex flex-wrap gap-2" id="slots-lunch">
                                    <span class="time-slot-badge" data-time="12:00">12:00</span>
                                    <span class="time-slot-badge" data-time="12:15">12:15</span>
                                    <span class="time-slot-badge" data-time="12:30">12:30</span>
                                    <span class="time-slot-badge" data-time="12:45">12:45</span>
                                    <!-- La dernière heure de service (13:00 - 14:00) est grisée/exclue conformément à la règle de l'examen (US6) -->
                                    <span class="time-slot-badge disabled" title="Dernière heure de service - Créneau non disponible">13:00 (Fermé)</span>
                                    <span class="time-slot-badge disabled" title="Dernière heure de service - Créneau non disponible">13:15 (Fermé)</span>
                                </div>
                            </div>

                            <!-- Service Dîner -->
                            <div class="mb-3">
                                <span class="fw-bold text-dark d-block mb-2">Service du Dîner (19:00 - 22:00) :</span>
                                <div class="d-flex flex-wrap gap-2" id="slots-dinner">
                                    <span class="time-slot-badge" data-time="19:00">19:00</span>
                                    <span class="time-slot-badge" data-time="19:15">19:15</span>
                                    <span class="time-slot-badge" data-time="19:30">19:30</span>
                                    <span class="time-slot-badge" data-time="19:45">19:45</span>
                                    <span class="time-slot-badge" data-time="20:00">20:00</span>
                                    <span class="time-slot-badge" data-time="20:15">20:15</span>
                                    <span class="time-slot-badge" data-time="20:30">20:30</span>
                                    <span class="time-slot-badge" data-time="20:45">20:45</span>
                                    <!-- Dernière heure de service de soir grisée -->
                                    <span class="time-slot-badge disabled" title="Dernière heure de service - Créneau non disponible">21:00 (Fermé)</span>
                                </div>
                            </div>

                            <!-- Champ caché pour enregistrer le créneau sélectionné -->
                            <input type="hidden" id="booking_time" name="booking_time" required>
                        </div>

                        <!-- 4. ALLERGIES ALIMENTAIRES (US7) -->
                        <div class="mb-4">
                            <label for="allergies" class="form-label">
                                <i class="fa-solid fa-wheat-awn-circle-exclamation text-gold me-2"></i>Allergies ou Régimes Particuliers (Optionnel)
                            </label>
                            <!-- Rempli automatiquement si le client a enregistré des allergies récurrentes dans son profil (US7) -->
                            <textarea class="form-control" id="allergies" name="allergies" rows="3" placeholder="Ex: Allergie aux fruits à coque, intolérance au lactose, régime végétarien..."></textarea>
                        </div>

                        <!-- BOUTON DE SOUMISSION -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-gold btn-lg w-100 py-3 rounded-pill fw-bold text-uppercase shadow-sm">
                                <i class="fa-regular fa-paper-plane me-2"></i>Confirmer Ma Réservation
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Inclusion du script JS d'interaction pour la réservation -->
<script src="/assets/js/booking.js"></script>