    <!-- ========================================================= -->
    <!-- 🦶 PIED DE PAGE (FOOTER) - EXIGENCE US5 (HORAIRES DYNAMIQUES) -->
    <!-- ========================================================= -->
    <footer class="mt-auto">
        <div class="container">
            <div class="row g-4">

                <!-- Colonne 1 : À propos du Restaurant -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase fw-bold">Quai Antique</h5>
                    <p class="small text-muted mb-3">
                        Le Chef Arnaud Michant vous accueille à Chambéry pour vous faire découvrir une cuisine gastronomique authentique, mariant produits du terroir savoyard et créativité culinaire.
                    </p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" class="text-gold" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-gold" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-gold" aria-label="TripAdvisor"><i class="fa-solid fa-utensils"></i></a>
                    </div>
                </div>

                <!-- Colonne 2 : US5 - Tableau d'affichage des Horaires d'ouverture -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase fw-bold">Horaires d'Ouverture</h5>
                    <!-- Ce tableau est alimenté dynamiquement via la BDD / Script JS (US5) -->
                    <table class="schedule-table">
                        <tbody>
                            <tr>
                                <td class="day-name">Lundi</td>
                                <td class="hours-time">12:00 - 14:00 | 19:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td class="day-name">Mardi</td>
                                <td class="hours-time">12:00 - 14:00 | 19:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td class="day-name">Mercredi</td>
                                <td class="hours-time closed-day">Fermé</td>
                            </tr>
                            <tr>
                                <td class="day-name">Jeudi</td>
                                <td class="hours-time">12:00 - 14:00 | 19:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td class="day-name">Vendredi</td>
                                <td class="hours-time">12:00 - 14:00 | 19:00 - 22:30</td>
                            </tr>
                            <tr>
                                <td class="day-name">Samedi</td>
                                <td class="hours-time">12:00 - 14:30 | 19:00 - 23:00</td>
                            </tr>
                            <tr>
                                <td class="day-name">Dimanche</td>
                                <td class="hours-time">12:00 - 15:00 (Déjeuner uniquement)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Colonne 3 : Contact & Localisation -->
                <div class="col-lg-4 col-md-12">
                    <h5 class="text-uppercase fw-bold">Nous Trouver</h5>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2">
                            <i class="fa-solid fa-location-dot text-gold me-2"></i>
                            12 Rue Haute-du-Château, 73000 Chambéry
                        </li>
                        <li class="mb-2">
                            <i class="fa-solid fa-phone text-gold me-2"></i>
                            04 79 00 00 00
                        </li>
                        <li class="mb-2">
                            <i class="fa-solid fa-envelope text-gold me-2"></i>
                            contact@quaiantique.fr
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Mentions Légales & Copyright -->
            <div class="footer-bottom text-center small">
                <p class="mb-0">
                    &copy; <?= date('Y') ?> Quai Antique - Tous droits réservés. | 
                    <a href="/mentions-legales" class="text-decoration-underline text-muted">Mentions Légales</a> | 
                    <a href="/politique-confidentialite" class="text-decoration-underline text-muted">Politique de Confidentialité</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Script JavaScript Bootstrap 5 Bundle (avec Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script JavaScript principal pour les interactions UI -->
    <script src="/assets/js/main.js"></script>
</body>
</html>