<?php
require_once __DIR__ . '/../Core/Router.php';

$router = new Router();

// Routes Web (Pages HTML)
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/menus', 'MenuController@index');
$router->get('/reservation', 'BookingController@showForm');
$router->get('/login', 'AuthController@showLogin');
$router->get('/register', 'AuthController@showRegister');
$router->get('/admin', 'Admin/DashboardController@dashboard');
$router->get('/admin/', 'Admin/DashboardController@dashboard');
$router->get('/admin/dashboard', 'Admin/DashboardController@dashboard');

// Routes API (AJAX JSON)
$router->get('/api/booking/availability', 'BookingController@checkAvailability');
$router->get('/api/schedules', 'Admin/ScheduleController@getSchedules');
$router->post('/api/booking/create', 'BookingController@createBooking');

return $router;
