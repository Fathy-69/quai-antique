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
        if (!$isClosed) {
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
        // Logique simplifiée pour US6
        $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;
        
        $this->jsonResponse([
            'success' => true,
            'message' => 'Réservation confirmée (Simulation via Controller)'
        ]);
    }
}
