<?php
require_once __DIR__ . '/../../Core/Controller.php';
require_once __DIR__ . '/../../Core/Database.php';

class ProductController extends Controller {
    public function getProducts() {
        try {
            $db = Database::getConnection();
            $stmt = $db->query("SELECT id, name, category, origin, allergens, stock_qty, stock_unit FROM products ORDER BY name ASC");
            $products = $stmt->fetchAll();

            $this->jsonResponse([
                'success' => true,
                'data' => $products
            ]);
        } catch (Exception $e) {
            $this->jsonResponse([
                'success' => false,
                'message' => 'Erreur lors de la récupération des produits.'
            ], 500);
        }
    }
}
