<?php
/**
 * QUAI ANTIQUE - FRONT CONTROLLER (Point d'Entrée Unique)
 * Architecture MVC
 */

// Démarrage de session sécurisé
session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Lax' // ou 'Strict'
]);
session_start();

// Service direct des ressources statiques (CSS, JS, PNG, SVG)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// Initialisation du Routeur
$router = require_once __DIR__ . '/../src/Config/routes.php';

// Dispatch de la requête
$requestMethod = $_SERVER['REQUEST_METHOD'];
$router->dispatch($_SERVER['REQUEST_URI'], $requestMethod);