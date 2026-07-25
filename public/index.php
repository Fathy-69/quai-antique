<?php
/**
 * POINT D'ENTRÉE & ROUTEUR DE PRÉVISUALISATION FRONT-END
 */

// Récupération de l'URL demandée
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Router simple de prévisualisation des vues
switch ($uri) {
    case '/':
    case '/home':
        $pageTitle = 'Quai Antique | Restaurant Gastronomique Savoyard';
        ob_start();
        require_once __DIR__ . '/../src/Views/home/index.php';
        $content = ob_get_clean();
        break;

    case '/menus':
        $pageTitle = 'Quai Antique | La Carte & Les Menus du Chef';
        ob_start();
        require_once __DIR__ . '/../src/Views/menus/index.php';
        $content = ob_get_clean();
        break;

    case '/reservation':
        $pageTitle = 'Quai Antique | Réserver une Table en Ligne';
        ob_start();
        require_once __DIR__ . '/../src/Views/booking/form.php';
        $content = ob_get_clean();
        break;

    case '/login':
        $pageTitle = 'Quai Antique | Connexion Espace Client / Admin';
        ob_start();
        require_once __DIR__ . '/../src/Views/auth/login.php';
        $content = ob_get_clean();
        break;

    case '/register':
        $pageTitle = 'Quai Antique | Créer un Compte Client';
        ob_start();
        require_once __DIR__ . '/../src/Views/auth/register.php';
        $content = ob_get_clean();
        break;

    case '/admin':
    case '/admin/dashboard':
        $pageTitle = 'Quai Antique | Administration Back-Office Hôte d\'accueil';
        ob_start();
        require_once __DIR__ . '/../src/Views/admin/dashboard.php';
        $content = ob_get_clean();
        break;

    default:
        // Si c'est une ressource statique (CSS, JS, images), la laisser servir directement
        if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
            return false;
        }
        http_response_code(404);
        $pageTitle = 'Quai Antique | Page non trouvée';
        $content = '<div class="container my-5 text-center"><h1 class="text-gold font-heading">404 - Page Non Trouvée</h1><a href="/" class="btn btn-gold mt-3">Retour à l\'accueil</a></div>';
        break;
}

// Injection du contenu dans le gabarit principal (base.php)
require_once __DIR__ . '/../src/Views/layouts/base.php';