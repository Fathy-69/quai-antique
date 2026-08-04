<?php
require_once __DIR__ . '/../../Core/Controller.php';
require_once __DIR__ . '/../../Core/Database.php';

class ScheduleController extends Controller {
    public function getSchedules() {
        try {
            $db = Database::getConnection();
            $stmt = $db->query("SELECT day_of_week, lunch_opening, lunch_closing, dinner_opening, dinner_closing, is_closed FROM schedules ORDER BY id ASC");
            $schedules = $stmt->fetchAll();

            $result = [];
            foreach ($schedules as $row) {
                $morning = ($row['lunch_opening'] && $row['lunch_closing']) 
                    ? substr($row['lunch_opening'], 0, 5) . ' - ' . substr($row['lunch_closing'], 0, 5)
                    : 'Fermé';

                $evening = ($row['dinner_opening'] && $row['dinner_closing']) 
                    ? substr($row['dinner_opening'], 0, 5) . ' - ' . substr($row['dinner_closing'], 0, 5)
                    : 'Fermé';

                $result[] = [
                    'day' => $row['day_of_week'],
                    'morning' => $morning,
                    'evening' => $evening,
                    'is_closed' => (bool)$row['is_closed']
                ];
            }

            $this->jsonResponse([
                'success' => true,
                'data' => $result
            ]);
        } catch (Exception $e) {
            $this->jsonResponse([
                'success' => false,
                'message' => 'Erreur lors de la récupération des horaires.'
            ], 500);
        }
    }
}
