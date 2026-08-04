<?php
require_once __DIR__ . '/../Core/Controller.php';

class AuthController extends Controller {
    public function showLogin() {
        $this->render('auth/login', [], 'Quai Antique | Connexion Espace Client / Admin');
    }

    public function showRegister() {
        $this->render('auth/register', [], 'Quai Antique | Créer un Compte Client');
    }
}
