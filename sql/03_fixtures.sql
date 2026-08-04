-- ==============================================================================
-- QUAI ANTIQUE - Script de Données Initiales et Fixtures (03_fixtures.sql)
-- ==============================================================================

USE quai_antique;

-- Nettoyage préalable (ordre des clés étrangères)
DELETE FROM bookings;
DELETE FROM menu_formulas;
DELETE FROM menus;
DELETE FROM dishes;
DELETE FROM categories;
DELETE FROM schedules;
DELETE FROM users;

-- 1. Compte Administrateur par défaut (Password: Admin123!)
INSERT INTO users (email, password, roles, default_guests, allergies) VALUES 
('admin@quaiantique.fr', '$2y$12$zC.m/P55Z0rQJ2lM0d/PceO5lXW2L8M1j6Qv5Z/7hL0K3P0Q1R2S3', '["ROLE_ADMIN"]', 2, NULL),
('client@gmail.com', '$2y$12$eImiTXuWVxfM37uY4JANjO5E.6hXW2L8M1j6Qv5Z/7hL0K3P0Q1R2S3', '["ROLE_USER"]', 4, 'Gluten');

-- 2. Horaires d'Ouverture
-- Lundi, Mardi, Jeudi, Vendredi : Midi 12h00 - 14h00 / Soir 19h00 - 22h00
-- Mercredi : FERMÉ
-- Samedi : Midi FERMÉ / Soir 19h00 - 23h00
-- Dimanche : Midi 12h00 - 14h00 / Soir FERMÉ
INSERT INTO schedules (day_of_week, lunch_opening, lunch_closing, dinner_opening, dinner_closing, max_capacity, is_closed) VALUES
('Lundi', '12:00:00', '14:00:00', '19:00:00', '22:00:00', 40, 0),
('Mardi', '12:00:00', '14:00:00', '19:00:00', '22:00:00', 40, 0),
('Mercredi', NULL, NULL, NULL, NULL, 40, 1),
('Jeudi', '12:00:00', '14:00:00', '19:00:00', '22:00:00', 40, 0),
('Vendredi', '12:00:00', '14:00:00', '19:00:00', '22:00:00', 40, 0),
('Samedi', NULL, NULL, '19:00:00', '23:00:00', 40, 0),
('Dimanche', '12:00:00', '14:00:00', NULL, NULL, 40, 0);

-- 3. Catégories de Plats
INSERT INTO categories (id, name, position) VALUES 
(1, 'Entrées', 1),
(2, 'Plats Principaux', 2),
(3, 'Burgers Savoyards', 3),
(4, 'Desserts', 4),
(5, 'Vins & Boissons', 5);

-- 4. Plats de la Carte
INSERT INTO dishes (category_id, title, description, price, active) VALUES 
(1, 'Velouté de Potimarron & Beaufort', 'Potimarron rôti au thym des montagnes, émulsion au Beaufort AOP affiné 18 mois et éclats de noisettes torréfiées.', 14.50, 1),
(1, 'Croustillant de Tomme des Bauges', 'Feuilleté doré garni de Tomme fermière fondante, jeunes pousses de salade et vinaigrette au miel de sapin.', 16.00, 1),
(2, 'Fondue Savoyarde Traditionnelle', 'Mélange secret du Chef (Beaufort, Comté, Abondance), vin blanc Apremont et pain croustillant au levain naturel.', 26.50, 1),
(2, 'Filets de Perche du Lac meunière', 'Pêche fraîche du Lac du Bourget dorée au beurre de baratte, jus de citron jaune et frites de polenta cuites au four.', 28.00, 1),
(2, 'Diots de Savoie au Vin de Mondeuse', 'Saucisses traditionnelles braisées au vin rouge Mondeuse de Savoie, servies avec des crozets au sarrasin.', 23.00, 1),
(3, 'Le Burger Savoyard au Reblochon', 'Haché de bœuf de Savoie, coulée généreuse de Reblochon AOP fondant, poitrine fumée croustillante et oignons confits.', 21.50, 1),
(4, 'Tarte Artisanale aux Myrtilles', 'Pâte sablée maison garnie de myrtilles sauvages récoltées en altitude et crème fouettée à la vanille de Madagascar.', 9.50, 1),
(4, 'Biscuit de Savoie Glacé au Génépi', 'Biscuit ultra léger traditionnel imbibé au sirop de Génépi artisanal et glace au lait fermier des alpages.', 11.00, 1),
(5, 'Apremont AOP Domaine Régional', 'Vin blanc sec et minéral aux notes de fleurs blanches, compagnon idéal des fondues et spécialités au fromage.', 28.00, 1);

-- 5. Menus et Formules du Chef
INSERT INTO menus (id, title, description) VALUES 
(1, 'Menu Saveurs de Savoie', 'Un voyage gustatif complet mettant à l’honneur les fromages et viandes de nos vallées.'),
(2, 'Menu Le Grand Quai', 'L’expression ultime du savoir-faire du Chef Arnaud Michant en 5 temps.');

INSERT INTO menu_formulas (menu_id, title, description, price) VALUES 
(1, 'Formule Entrée + Plat OU Plat + Dessert', 'Au choix parmi les suggestions du marché affichées à l’ardoise.', 29.00),
(1, 'Formule Complète (Entrée + Plat + Dessert)', 'Sélection parmi l’ensemble des plats identifiés par l’étoile du Chef.', 38.00),
(2, 'Menu Dégustation 5 Temps', 'Menu d’exception comprenant amuse-bouche, entrée, plat de poisson ou viande,fromages affinés et dessert signature.', 54.00);

-- 6. Réservations de démonstration
INSERT INTO bookings (customer_name, customer_email, guest_count, booking_date, booking_time, service_type, allergies, status) VALUES 
('Pierre Martin', 'pierre.martin@example.com', 4, CURRENT_DATE(), '12:30:00', 'midi', 'Aucune', 'CONFIRMED'),
('Sophie Bernard', 'sophie.bernard@example.com', 2, CURRENT_DATE(), '19:30:00', 'soir', 'Arachides', 'CONFIRMED');
