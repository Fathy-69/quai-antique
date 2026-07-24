<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta SEO pour l'indexation du restaurant -->
    <meta name="description" content="Restaurant Quai Antique à Chambéry - Cuisine gastronomique savoyarde du Chef Arnaud Michant. Réservez votre table en ligne.">
    
    <!-- Titre dynamique injecté par PHP (par défaut: Quai Antique) -->
    <title><?= $pageTitle ?? 'Quai Antique | Restaurant Gastronomique Savoyard' ?></title>
    
    <!-- Polices Google Fonts : Outfit (Titres) & Roboto (Corps de texte) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Framework CSS Bootstrap 5 (Grille responsive & composants) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bibliothèque d'icônes FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Charte graphique & styles personnalisés Quai Antique -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

    <!-- ========================================================= -->
    <!-- 🏔️ EN-TÊTE DE NAVIGATION (Fixé en haut de page avec sticky-top) -->
    <!-- ========================================================= -->
    <header class="sticky-top shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark-savoy py-3">
            <div class="container">
                
                <!-- Logo & Nom du Restaurant (Redirige vers l'accueil) -->
                <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                    <i class="fa-solid fa-mountain-sun text-gold fs-3" aria-hidden="true"></i>
                    <span class="fw-bold fs-4 tracking-wide text-uppercase">Quai Antique</span>
                </a>

                <!-- Bouton Menu Burger (Affiché uniquement sur écran mobile/tablette) -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Basculer la navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu de navigation principal -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-uppercase fw-semibold fs-6">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="/menus">La Carte & Menus</a>
                        </li>
                        <li class="nav-item">
                            <!-- US1 : Accès au formulaire de connexion unique (Client / Admin) -->
                            <a class="nav-link px-3" href="/login">
                                <i class="fa-regular fa-user me-1" aria-hidden="true"></i> Connexion
                            </a>
                        </li>
                    </ul>

                    <!-- US6 : Bouton CTA "Réserver une table" mis en valeur (Bouton pilule Ocre Doré) -->
                    <div class="d-flex align-items-center">
                        <a href="/reservation" class="btn btn-gold btn-lg px-4 py-2 fw-bold text-uppercase rounded-pill shadow-sm hover-scale">
                            <i class="fa-regular fa-calendar-check me-2" aria-hidden="true"></i>Réserver une table
                        </a>
                    </div>
                </div>

            </div>
        </nav>
    </header>