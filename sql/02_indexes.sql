-- ==============================================================================
-- QUAI ANTIQUE - Script des Index et Optimisation Performance (02_indexes.sql)
-- ==============================================================================

USE quai_antique;

-- Index d'optimisation pour la recherche dynamique de disponibilité des créneaux de réservation
CREATE INDEX idx_booking_date_service ON bookings(booking_date, service_type, status);
CREATE INDEX idx_booking_date_time ON bookings(booking_date, booking_time);
CREATE INDEX idx_dishes_category ON dishes(category_id);
