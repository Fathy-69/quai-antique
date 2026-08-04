<?php
class Controller {
    protected function render(string $view, array $data = [], ?string $pageTitle = null) {
        extract($data);
        if ($pageTitle) {
            $GLOBALS['pageTitle'] = $pageTitle;
        }
        ob_start();
        require_once __DIR__ . '/../Views/' . $view . '.php';
        $content = ob_get_clean();
        
        require_once __DIR__ . '/../Views/layouts/base.php';
    }

    protected function jsonResponse(array $data, int $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit;
    }
}
