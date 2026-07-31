<?php
$current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant Quai Antique à Chindrieux - Cuisine savoyarde authentique au bord du lac.">
    <title><?= $pageTitle ?? 'Quai Antique | Restaurant Savoyard' ?></title>
    
    <!-- Google Fonts Officiel : Cinzel & Lora (Titres Serif) + Hind Madurai (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Great+Vibes&family=Hind+Madurai:wght@400;500;600;700&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Framework CSS Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

    <!-- NAVBAR HEADER AVEC LOGO VECTORIEL TRANSPARENT -->
    <header class="header-quai sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark py-2">
            <div class="container">
                
                <!-- Logo Transparent Calligraphique Authentique -->
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo_authentic.svg" alt="Quai Antique Logo" style="height: 64px; width: auto; object-fit: contain;">
                </a>

                <!-- Mobile Toggler -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-uppercase fw-semibold fs-6">
                        <li class="nav-item">
                            <a class="nav-link px-3 <?= ($current_page === '/' || $current_page === '/home') ? 'active border-bottom-gold' : '' ?>" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 <?= ($current_page === '/menus') ? 'active border-bottom-gold' : '' ?>" href="/menus">La Carte & Menus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 <?= ($current_page === '/login') ? 'active border-bottom-gold' : '' ?>" href="/login">
                                <i class="fa-regular fa-user me-1"></i> Connexion
                            </a>
                        </li>
                        <?php if ($current_page === '/admin' || $current_page === '/admin/dashboard'): ?>
                        <li class="nav-item">
                            <a class="nav-link px-3 active text-warning" href="/admin">
                                <i class="fa-solid fa-lock me-1"></i> Administration
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <!-- CTA Top Right -->
                    <div class="d-flex align-items-center">
                        <a href="/reservation" class="btn btn-header-cta text-uppercase">
                            <i class="fa-regular fa-calendar-check text-gold me-2"></i>Réserver une table
                        </a>
                    </div>
                </div>

            </div>
        </nav>
    </header>