<?php
/**
 * POINT D'ENTRÉE & ROUTEUR DE PRÉVISUALISATION FRONT-END
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;

// Service direct des ressources statiques (CSS, JS, PNG, SVG)
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// Router simple de prévisualisation des vues HTML/PHP
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
        http_response_code(404);
        $pageTitle = 'Quai Antique | Page non trouvée';
        $content = '<div class="container my-5 text-center"><h1 class="text-gold font-heading">404 - Page Non Trouvée</h1><a href="/" class="btn btn-gold mt-3">Retour à l\'accueil</a></div>';
        break;
}

// Injection du contenu dans le gabarit principal (base.php)
require_once __DIR__ . '/../src/Views/layouts/base.php';