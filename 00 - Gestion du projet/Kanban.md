---

kanban-plugin: board
type: projet
projet: Quai Antique
statut: Valide
tags:
  - projet/quai-antique
  - kanban

---

## ⏳ En cours (In Progress - Priorité Front-End First)



## 📋 Backlog (À faire - Backend PHP, BDD & Livrables)

- [ ] **[Backend]** Développement de l'API PHP de calcul de disponibilité (`src/Services/BookingService.php`) avec règle des 15 min @{2026-07-30} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US6</span>
- [ ] **[Backend]** Implémentation du script JavaScript Fetch API (`public/assets/js/booking.js`) pour la vérification AJAX sans rechargement @{2026-08-01} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#2563eb;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#AJAX</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US6</span>
- [ ] **[Backend]** Implémentation de la règle métier : Exclusion de la **dernière heure** avant fermeture et blocage du **seuil convives** @{2026-08-03} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US6</span>
- [ ] **[Backend]** Traitement du formulaire unique de connexion Client / Admin (`src/Controllers/AuthController.php`) @{2026-08-05} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US1</span>
- [ ] **[Backend]** Inscription client avec hachage bcrypt, validation Regex et sauvegarde des allergies @{2026-08-07} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#7c3aed;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Security</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US7</span>
- [ ] **[Backend]** Espace Admin : CRUD des images de la galerie avec gestion des uploads (`storage/uploads/`) @{2026-08-09} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US2</span>
- [ ] **[Backend]** Espace Admin : CRUD des catégories, plats et formules menus (`Admin/MenuController.php`) @{2026-08-11} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US3</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US4</span>
- [ ] **[Backend]** Espace Admin : Édition dynamique des horaires et de la capacité d'accueil maximale (`Admin/ScheduleController.php`) @{2026-08-13} <span style="background:#059669;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#BackEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US5</span>
- [ ] **[Livrable]** Génération et export de la **Documentation Technique PDF** (`docs/documentation_technique.pdf`) @{2026-08-15} <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Docs</span> <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#PDF</span>
- [ ] **[Livrable]** Génération et export de la **Charte Graphique & 6 Maquettes PDF** (3 Mobile + 3 Desktop) (`docs/charte_graphique.pdf`) @{2026-08-17} <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Docs</span> <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#PDF</span>
- [ ] **[Livrable]** Rédaction du fichier `README.md` final (procédure d'install local + compte Admin) @{2026-08-19} <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Docs</span>
- [ ] **[Livrable]** Push sur dépôt GitHub public et Déploiement en ligne (Fly.io / Heroku) @{2026-08-20} <span style="background:#475569;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Git</span> <span style="background:#475569;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Deployment</span>


## 🔍 En révision / Test (Testing)

- [ ] Recette visuelle responsive (Mobile ET Desktop) des 5 vues principales @{2026-07-26} <span style="background:#d97706;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Test</span>
- [ ] Recette des cas limites de réservation (Test dernière heure et dépassement du seuil max convives) @{2026-07-26} <span style="background:#d97706;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Test</span>
- [ ] Vérification de la conformité aux exigences de l'examen DWWM (Manuel Utilisateur & scénarios de test) @{2026-07-26} <span style="background:#d97706;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Test</span>


## ✅ Terminé (Done)

- [ ] **[Backend]** Écriture manuelle des scripts SQL (`sql/01_schema.sql`, `sql/02_indexes.sql`, `sql/03_fixtures.sql`) @{2026-07-28} <span style="background:#ea580c;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Database</span>
- [x] **[Front]** Intégration Vues Espace Administration Back-Office (`src/Views/admin/dashboard.php`) @{2026-07-25} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span>
- [x] Initialisation de l'environnement local WSL2 & conteneurisation Docker (`docker-compose.yml`, `Dockerfile`, `docker/`) @{2026-06-20} <span style="background:#0d9488;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Docker</span>
- [x] Structuration du framework PHP MVC personnalisé et autoloader PSR-4 Composer (`composer.json`) @{2026-06-23} <span style="background:#4f46e5;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Architecture</span>
- [x] Modélisation UML : Diagramme de Cas d'Utilisation (Visiteur, Client, Admin) dans Obsidian @{2026-06-26} <span style="background:#9333ea;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#UML</span>
- [x] Modélisation UML : Diagramme de Séquence du module de réservation US6 dans Obsidian @{2026-06-29} <span style="background:#9333ea;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#UML</span>
- [x] Modélisation BDD : MCD & MLD MERISE pour MySQL @{2026-07-02} <span style="background:#ea580c;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Database</span>
- [x] Rédaction de la Feuille de route [[Roadmap Front-End First.md]] et mise à jour du coffre Obsidian @{2026-07-06} <span style="background:#db2777;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#Docs</span>
- [x] **[Front]** Intégration du Design System et thème CSS sur-mesure (`public/assets/css/main.css`, charte savoyarde) @{2026-07-10} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span>
- [x] **[Front]** Layouts HTML/PHP réutilisables (`base.php`, `header.php` avec CTA "Réserver", `footer.php` avec horaires US5) @{2026-07-14} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US5</span>
- [x] **[Front]** Intégration Page d'Accueil (`src/Views/home/index.php`) : Hero Banner, Galerie photos hover (US2) & CTA Réservation @{2026-07-18} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US2</span>
- [x] **[Front]** Intégration Page Carte & Menus (`src/Views/menus/index.php`) : Plats par catégorie (US3) et Formules du Chef (US4) @{2026-07-21} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US3</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US4</span>
- [x] **[Front]** Intégration Formulaire de Réservation HTML5 (`src/Views/booking/form.php` & `booking.js`) par 15 min (US6) & champ allergies (US7) @{2026-07-24} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US6</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US7</span>
- [x] **[Front]** Intégration Formulaires de Connexion & Inscription Client (`src/Views/auth/login.php` & `register.php`) @{2026-07-25} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US1</span> <span style="background:#e63946;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#US7</span>
- [x] **[Front]** Intégration et résolution définitive du Logo Calligraphique Authentique (`logo_authentic.png` / `logoF.png`) sans bug de police CORS @{2026-07-29} <span style="background:#0284c7;color:#fff;padding:2px 6px;border-radius:10px;font-size:11px;font-weight:bold;">#FrontEnd</span>


## 🎨 Légende & Palette de Couleurs des Tags

- [ ] <span style="background:#e63946;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#US1 à #US7</span> : **Rouge** ➔ Spécifications Fonctionnelles du sujet
- [ ] <span style="background:#0284c7;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#FrontEnd</span> : **Bleu Cyan** ➔ Interface utilisateur (HTML/CSS/JS/Bootstrap)
- [ ] <span style="background:#059669;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#BackEnd</span> : **Vert Émeraude** ➔ Code PHP (Contrôleurs, Services, Routeur)
- [ ] <span style="background:#ea580c;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#Database</span> : **Orange** ➔ Base de données MySQL & scripts SQL manuels
- [ ] <span style="background:#7c3aed;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#Security</span> : **Violet** ➔ Hachage bcrypt, anti-CSRF, XSS, requêtes préparées
- [ ] <span style="background:#0d9488;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#Docker</span> : **Teal** ➔ Conteneurs Docker & environnement WSL2
- [ ] <span style="background:#db2777;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#Docs / #PDF</span> : **Rose / Magenta** ➔ Livrables d'examen & documentation
- [ ] <span style="background:#d97706;color:#fff;padding:2px 8px;border-radius:12px;font-weight:bold;">#Test</span> : **Ambre** ➔ Recette des cas d'utilisation & scénarios de test




%% kanban:settings
```
{"kanban-plugin":"board","list-collapse":[false,false,false,false,false]}
```
%%