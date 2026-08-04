<?php
require_once __DIR__ . '/../../Core/Controller.php';

class DashboardController extends Controller {
    public function dashboard() {
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
