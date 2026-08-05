<?php
require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Services/BookingService.php';

class BookingController extends Controller {
    public function showForm() {
        $this->render('booking/form', [], 'Quai Antique | Réserver une Table en Ligne');
    }

    public function checkAvailability() {
        $date = $_GET['date'] ?? $_POST['date'] ?? date('Y-m-d');
        $service = $_GET['service'] ?? $_POST['service'] ?? 'midi';
        $guests = (int)($_GET['guests'] ?? $_POST['guests'] ?? 2);

        // Déterminer le jour de la semaine en français
        $timestamp = strtotime($date);
        $daysFr = [
            'Sunday' => 'Dimanche', 'Monday' => 'Lundi', 'Tuesday' => 'Mardi',
            'Wednesday' => 'Mercredi', 'Thursday' => 'Jeudi', 'Friday' => 'Vendredi', 'Saturday' => 'Samedi'
        ];
        $dayNameEn = date('l', $timestamp);
        $dayFr = $daysFr[$dayNameEn] ?? 'Lundi';

        // Service Validation
        $bookingService = new BookingService();
        $capacityInfo = $bookingService->checkCapacityAvailable($date, $service, $guests, $dayFr);

        // Définition des plages de service selon les derniers horaires
        $isClosed = false;
        if ($dayFr === 'Mercredi') $isClosed = true;
        if ($dayFr === 'Samedi' && $service === 'midi') $isClosed = true;
        if ($dayFr === 'Dimanche' && $service === 'soir') $isClosed = true;

        $openingHours = [
            'midi' => ['start' => '12:00', 'end' => '14:00'],
            'soir' => ['start' => '19:00', 'end' => ($dayFr === 'Samedi') ? '23:00' : '22:00']
        ];

        $slots = [];
        if (!$isClosed && $capacityInfo['is_available']) {
            $selectedServiceHours = $openingHours[$service] ?? $openingHours['midi'];
            $slots = BookingService::generateReservableSlots($selectedServiceHours['start'], $selectedServiceHours['end']);
        }

        $this->jsonResponse([
            'success' => true,
            'date' => $date,
            'day_of_week' => $dayFr,
            'service' => $service,
            'requested_guests' => $guests,
            'capacity' => $capacityInfo,
            'slots' => $slots
        ]);
    }

    public function createBooking() {
        $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;
        
        $date = $data['date'] ?? null;
        $service = $data['service'] ?? null;
        $guests = (int)($data['guests'] ?? 0);
        $time = $data['booking_time'] ?? null;
        $name = htmlspecialchars($data['name'] ?? '');
        $email = filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $allergies = htmlspecialchars($data['allergies'] ?? '');

        if (!$date || !$service || !$guests || !$time || !$name || !$email) {
            $this->jsonResponse(['success' => false, 'message' => 'Veuillez remplir tous les champs obligatoires.']);
            return;
        }

        // Déterminer le jour
        $timestamp = strtotime($date);
        $daysFr = ['Sunday' => 'Dimanche', 'Monday' => 'Lundi', 'Tuesday' => 'Mardi', 'Wednesday' => 'Mercredi', 'Thursday' => 'Jeudi', 'Friday' => 'Vendredi', 'Saturday' => 'Samedi'];
        $dayFr = $daysFr[date('l', $timestamp)] ?? 'Lundi';

        $bookingService = new BookingService();
        $capacityInfo = $bookingService->checkCapacityAvailable($date, $service, $guests, $dayFr);

        if (!$capacityInfo['is_available']) {
            $this->jsonResponse(['success' => false, 'message' => "Le restaurant n'a plus assez de place pour accueillir $guests couverts à ce service."]);
            return;
        }

        // Si l'utilisateur est connecté, on associe la réservation
        $userId = $_SESSION['user']['id'] ?? null;

        $bookingData = [
            'customer_name' => $name,
            'customer_email' => $email,
            'guest_count' => $guests,
            'booking_date' => $date,
            'booking_time' => $time,
            'service_type' => $service,
            'allergies' => $allergies,
            'user_id' => $userId
        ];

        $success = $bookingService->createBooking($bookingData);

        if ($success) {
            $this->jsonResponse([
                'success' => true,
                'message' => 'Réservation confirmée avec succès pour le ' . date('d/m/Y', $timestamp) . ' à ' . $time . '.'
            ]);
        } else {
            $this->jsonResponse([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'enregistrement de votre réservation.'
            ]);
        }
    }
}
