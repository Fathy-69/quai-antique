<?php
require_once __DIR__ . '/../Core/Controller.php';

class AuthController extends Controller {
    public function showLogin() {
        $this->render('auth/login', [], 'Quai Antique | Connexion Espace Client / Admin');
    }

    public function showRegister() {
        $this->render('auth/register', [], 'Quai Antique | Créer un Compte Client');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../Models/User.php';
            
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'] ?? '';
            $defaultGuests = (int)($_POST['default_guests'] ?? 2);
            $allergies = htmlspecialchars($_POST['default_allergies'] ?? '');

            if ($email && $password) {
                // Vérifier si l'utilisateur existe déjà
                if (User::findByEmail($email)) {
                    // TODO: Gérer l'erreur (email déjà utilisé) via des flash messages
                    header('Location: /register');
                    exit;
                }

                User::create([
                    'email' => $email,
                    'password' => $password,
                    'default_guests' => $defaultGuests,
                    'allergies' => $allergies
                ]);

                header('Location: /login');
                exit;
            }
        }
        
        header('Location: /register');
        exit;
    }
}
