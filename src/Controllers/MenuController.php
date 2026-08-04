<?php
require_once __DIR__ . '/../Core/Controller.php';

class MenuController extends Controller {
    public function index() {
        $this->render('menus/index', [], 'Quai Antique | La Carte & Les Menus du Chef');
    }
}
