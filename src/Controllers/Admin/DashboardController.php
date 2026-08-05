<?php
require_once __DIR__ . '/../../Core/Controller.php';

class DashboardController extends Controller {
    public function dashboard() {
        // Contrôle d'accès : Réservé aux administrateurs
        if (!isset($_SESSION['user']) || !in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {
            $_SESSION['flash']['error'] = 'Accès refusé. Cette zone est réservée à l\'administration.';
            header('Location: /login');
            exit;
        }

        // Ensure trailing slash for relative asset paths
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($uri === '/admin') {
            header('Location: /admin/');
            exit;
        }
        
        // Affichage de la vue admin (SPA)
        require_once __DIR__ . '/../../Views/admin/dashboard.php';
        exit;
    }
}
