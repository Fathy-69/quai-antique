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
                    $_SESSION['flash']['error'] = 'Cette adresse email est déjà utilisée.';
                    header('Location: /register');
                    exit;
                }

                User::create([
                    'email' => $email,
                    'password' => $password,
                    'default_guests' => $defaultGuests,
                    'allergies' => $allergies
                ]);

                $_SESSION['flash']['success'] = 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.';
                header('Location: /login');
                exit;
            }
        }
        
        header('Location: /register');
        exit;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/../Models/User.php';
            
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'] ?? '';

            if ($email && $password) {
                $user = User::findByEmail($email);

                if ($user && password_verify($password, $user['password'])) {
                    // Vérifier si le compte est actif
                    if (isset($user['status']) && $user['status'] !== 'active') {
                        $_SESSION['flash']['error'] = 'Votre compte a été désactivé.';
                        header('Location: /login');
                        exit;
                    }

                    // Sécurité : régénérer l'ID de session
                    session_regenerate_id(true);

                    // Stockage des informations en session
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'roles' => json_decode($user['roles'], true) ?? ['ROLE_USER']
                    ];

                    // Redirection selon le rôle
                    if (in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) {
                        header('Location: /admin');
                    } else {
                        header('Location: /');
                    }
                    exit;
                }
            }

            $_SESSION['flash']['error'] = 'Identifiants incorrects.';
            header('Location: /login');
            exit;
        }

        header('Location: /login');
        exit;
    }

    public function logout() {
        // Supprimer toutes les variables de session
        $_SESSION = [];

        // Détruire le cookie de session s'il existe
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Détruire la session
        session_destroy();

        header('Location: /');
        exit;
    }
}
