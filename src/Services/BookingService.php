<?php
/**
 * QUAI ANTIQUE - Service Métier : Réservations et Génération des créneaux (US6)
 */

require_once __DIR__ . '/../Core/Database.php';

class BookingService {
    private PDO $pdo;

    public function __construct(?PDO $pdo = null) {
        $this->pdo = $pdo ?? Database::getConnection();
    }

    /**
     * Calcule le nombre total de couverts déjà réservés pour une date et un service.
     */
    public function getBookedGuestCount(string $date, string $service): int {
        $stmt = $this->pdo->prepare("
            SELECT COALESCE(SUM(guest_count), 0) 
            FROM bookings 
            WHERE booking_date = :date 
              AND service_type = :service 
              AND (status IS NULL OR status = 'CONFIRMED')
        ");
        $stmt->execute([
            'date' => $date,
            'service' => $service
        ]);
        return (int) $stmt->fetchColumn();
    }

    /**
     * Récupère la capacité maximale d'accueil pour un jour de la semaine.
     */
    public function getMaxCapacity(string $dayOfWeek): int {
        $stmt = $this->pdo->prepare("SELECT max_capacity FROM schedules WHERE day_of_week = :day");
        $stmt->execute(['day' => $dayOfWeek]);
        $capacity = $stmt->fetchColumn();
        return $capacity !== false ? (int)$capacity : 40; // 40 couverts par défaut
    }

    /**
     * Vérifie si le nombre de couverts demandé est disponible.
     */
    public function checkCapacityAvailable(string $date, string $service, int $requestedGuests, string $dayOfWeek): array {
        $maxCapacity = $this->getMaxCapacity($dayOfWeek);
        $alreadyBooked = $this->getBookedGuestCount($date, $service);
        $remainingSeats = max(0, $maxCapacity - $alreadyBooked);
        $isAvailable = ($requestedGuests <= $remainingSeats);

        return [
            'is_available' => $isAvailable,
            'max_capacity' => $maxCapacity,
            'already_booked' => $alreadyBooked,
            'remaining_seats' => $remainingSeats,
            'requested_guests' => $requestedGuests
        ];
    }

    /**
     * Enregistre une réservation en base de données avec requêtes préparées.
     */
    public function createBooking(array $data): bool {
        $stmt = $this->pdo->prepare("
            INSERT INTO bookings (customer_name, customer_email, guest_count, booking_date, booking_time, service_type, allergies, status)
            VALUES (:name, :email, :guests, :date, :time, :service, :allergies, 'CONFIRMED')
        ");

        return $stmt->execute([
            'name' => $data['customer_name'],
            'email' => $data['customer_email'],
            'guests' => (int) $data['guest_count'],
            'date' => $data['booking_date'],
            'time' => $data['booking_time'],
            'service' => $data['service_type'],
            'allergies' => $data['allergies'] ?? null
        ]);
    }

    /**
     * Génère la liste des créneaux de 15 minutes réservables
     * en excluant la dernière heure avant la fermeture de service.
     *
     * @param string $openingTime Format HH:MM (ex: "12:00")
     * @param string $closingTime Format HH:MM (ex: "15:00")
     * @return array Tableau des créneaux valides et leur statut
     */
    public static function generateReservableSlots(string $openingTime, string $closingTime): array {
        $slots = [];
        try {
            $start = new DateTime($openingTime);
            $end = new DateTime($closingTime);

            // Seuil de fermeture admis : retrait d'1 heure complète du service
            $lastAdmissibleTime = clone $end;
            $lastAdmissibleTime->modify('-1 hour');

            $interval = new DateInterval('PT15M'); // Pas de 15 minutes
            $current = clone $start;

            while ($current < $end) {
                $timeString = $current->format('H:i');
                $isAdmissible = ($current <= $lastAdmissibleTime);

                $slots[] = [
                    'time' => $timeString,
                    'available' => $isAdmissible,
                    'reason' => $isAdmissible ? 'Créneau disponible' : 'Exclusion automatique : dernière heure de service'
                ];

                $current->add($interval);
            }
        } catch (Exception $e) {
            return [];
        }

        return $slots;
    }
}
