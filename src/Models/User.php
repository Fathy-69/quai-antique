<?php

require_once __DIR__ . '/../Core/Database.php';

class User {
    private ?int $id;
    private string $email;
    private string $password;
    private array $roles;
    private int $defaultGuests;
    private ?string $allergies;
    private ?string $createdAt;

    public function __construct(
        string $email,
        string $password,
        array $roles = ['ROLE_USER'],
        int $defaultGuests = 2,
        ?string $allergies = null,
        ?int $id = null,
        ?string $createdAt = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->roles = $roles;
        $this->defaultGuests = $defaultGuests;
        $this->allergies = $allergies;
        $this->id = $id;
        $this->createdAt = $createdAt;
    }

    /**
     * Crée un nouvel utilisateur en base de données.
     */
    public static function create(array $data): bool {
        $db = Database::getConnection();
        
        // Hachage du mot de passe
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        
        // Roles par défaut
        $roles = json_encode(['ROLE_USER']);
        
        $stmt = $db->prepare("
            INSERT INTO users (email, password, roles, default_guests, allergies) 
            VALUES (:email, :password, :roles, :default_guests, :allergies)
        ");

        return $stmt->execute([
            'email' => $data['email'],
            'password' => $hashedPassword,
            'roles' => $roles,
            'default_guests' => $data['default_guests'] ?? 2,
            'allergies' => $data['allergies'] ?? null
        ]);
    }

    /**
     * Recherche un utilisateur par son adresse email.
     */
    public static function findByEmail(string $email): ?array {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }

        return $row;
    }
}
