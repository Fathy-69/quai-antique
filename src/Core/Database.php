<?php
/**
 * QUAI ANTIQUE - Connection Manager Database PDO Singleton
 */

class Database {
    private static ?PDO $instance = null;

    public static function getConnection(): PDO {
        if (self::$instance === null) {
            $host = getenv('DB_HOST') ?: '127.0.0.1';
            $dbname = getenv('DB_NAME') ?: 'quai_antique';
            $user = getenv('DB_USER') ?: 'root';
            $password = getenv('DB_PASSWORD') ?: '';
            $port = getenv('DB_PORT') ?: '3306';

            try {
                $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";
                self::$instance = new PDO($dsn, $user, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]);
            } catch (PDOException $e) {
                // Fallback to local SQLite database if MySQL server is offline during dev
                $sqlitePath = __DIR__ . '/../storage/quai_antique.sqlite';
                $dir = dirname($sqlitePath);
                if (!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }
                
                self::$instance = new PDO("sqlite:" . $sqlitePath, null, null, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);

                self::initSqliteSchema(self::$instance);
            }
        }
        return self::$instance;
    }

    private static function initSqliteSchema(PDO $db): void {
        $db->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL,
                roles TEXT NOT NULL,
                default_guests INTEGER DEFAULT 2,
                allergies TEXT NULL,
                created_at TEXT DEFAULT CURRENT_TIMESTAMP
            );

            CREATE TABLE IF NOT EXISTS schedules (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                day_of_week TEXT NOT NULL,
                lunch_opening TEXT NULL,
                lunch_closing TEXT NULL,
                dinner_opening TEXT NULL,
                dinner_closing TEXT NULL,
                max_capacity INTEGER DEFAULT 40,
                is_closed INTEGER DEFAULT 0
            );

            CREATE TABLE IF NOT EXISTS bookings (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                user_id INTEGER NULL,
                customer_name TEXT NOT NULL,
                customer_email TEXT NOT NULL,
                guest_count INTEGER NOT NULL,
                booking_date TEXT NOT NULL,
                booking_time TEXT NOT NULL,
                service_type TEXT NOT NULL DEFAULT 'midi',
                allergies TEXT NULL,
                status TEXT DEFAULT 'CONFIRMED',
                created_at TEXT DEFAULT CURRENT_TIMESTAMP
            );
        ");

        // Seed initial schedules if empty
        $stmt = $db->query("SELECT COUNT(*) FROM schedules");
        if ((int)$stmt->fetchColumn() === 0) {
            $db->exec("
                INSERT INTO schedules (day_of_week, lunch_opening, lunch_closing, dinner_opening, dinner_closing, max_capacity, is_closed) VALUES
                ('Lundi', '12:00', '14:00', '19:00', '22:00', 40, 0),
                ('Mardi', '12:00', '14:00', '19:00', '22:00', 40, 0),
                ('Mercredi', NULL, NULL, NULL, NULL, 40, 1),
                ('Jeudi', '12:00', '14:00', '19:00', '22:00', 40, 0),
                ('Vendredi', '12:00', '14:00', '19:00', '22:00', 40, 0),
                ('Samedi', NULL, NULL, '19:00', '23:00', 40, 0),
                ('Dimanche', '12:00', '14:00', NULL, NULL, 40, 0);
            ");
        }
    }
}
