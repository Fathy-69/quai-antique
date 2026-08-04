<?php
class Router {
    private array $routes = [];

    public function add(string $method, string $uri, string $action) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function get(string $uri, string $action) {
        $this->add('GET', $uri, $action);
    }

    public function post(string $uri, string $action) {
        $this->add('POST', $uri, $action);
    }

    public function dispatch(string $requestUri, string $requestMethod) {
        $uri = parse_url($requestUri, PHP_URL_PATH);
        
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $requestMethod) {
                list($controllerPath, $method) = explode('@', $route['action']);
                
                require_once __DIR__ . '/../Controllers/' . $controllerPath . '.php';
                
                // Extraire le nom de la classe (ex: Admin/DashboardController -> DashboardController)
                $pathParts = explode('/', $controllerPath);
                $className = end($pathParts);
                
                $controllerInstance = new $className();
                return $controllerInstance->$method();
            }
        }
        
        http_response_code(404);
        $pageTitle = 'Quai Antique | Page non trouvée';
        $content = '<div class="container my-5 text-center"><h1 class="text-gold font-heading">404 - Page Non Trouvée</h1><a href="/" class="btn btn-gold mt-3">Retour à l\'accueil</a></div>';
        require_once __DIR__ . '/../Views/layouts/base.php';
    }
}
