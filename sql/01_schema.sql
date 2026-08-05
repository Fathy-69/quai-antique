-- ==============================================================================
-- QUAI ANTIQUE - Script DDL d'initialisation de la Base de Données (01_schema.sql)
-- Conformité Titre Pro DWWM - Rédigé manuellement
-- ==============================================================================

CREATE DATABASE IF NOT EXISTS quai_antique CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE quai_antique;

-- Table des utilisateurs (Clients & Administrateurs)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(180) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    roles JSON NOT NULL,
    default_guests INT DEFAULT 2,
    allergies TEXT NULL,
    status VARCHAR(50) DEFAULT 'active',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Table des catégories de la carte (Entrées, Plats, Desserts, etc.)
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position INT DEFAULT 0
) ENGINE=InnoDB;

-- Table des plats de la carte
CREATE TABLE IF NOT EXISTS dishes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    active TINYINT(1) DEFAULT 1,
    CONSTRAINT fk_dishes_categories FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table des menus du chef
CREATE TABLE IF NOT EXISTS menus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NULL
) ENGINE=InnoDB;

-- Table des formules de menus
CREATE TABLE IF NOT EXISTS menu_formulas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    menu_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    CONSTRAINT fk_formulas_menus FOREIGN KEY (menu_id) REFERENCES menus(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table des horaires d'ouverture et capacité d'accueil maximale
CREATE TABLE IF NOT EXISTS schedules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day_of_week VARCHAR(20) NOT NULL,
    lunch_opening TIME NULL,
    lunch_closing TIME NULL,
    dinner_opening TIME NULL,
    dinner_closing TIME NULL,
    max_capacity INT DEFAULT 40,
    is_closed TINYINT(1) DEFAULT 0
) ENGINE=InnoDB;

-- Table des réservations (US6)
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NULL,
    customer_name VARCHAR(120) NOT NULL,
    customer_email VARCHAR(180) NOT NULL,
    guest_count INT NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    service_type VARCHAR(20) NOT NULL DEFAULT 'midi',
    allergies TEXT NULL,
    status VARCHAR(50) DEFAULT 'CONFIRMED',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_bookings_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Table de la galerie d'images (US2)
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
