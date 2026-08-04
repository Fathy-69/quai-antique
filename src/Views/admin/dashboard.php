<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration | Quai Antique</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="bg-dark text-light">

  <!-- Navigation Admin -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top border-bottom border-warning" id="admin-navbar" style="display: none;">
    <div class="container-fluid">
      <a class="navbar-brand text-warning font-serif" href="#/reservations">
        <i class="bi bi-shield-lock me-2"></i>Quai Antique <span class="text-white">Admin</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#/reservations"><i class="bi bi-calendar-check me-1"></i> Réservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/gallery"><i class="bi bi-images me-1"></i> Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/menu"><i class="bi bi-card-list me-1"></i> Plats (Carte)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/produits"><i class="bi bi-basket me-1"></i> Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/formules"><i class="bi bi-journal-text me-1"></i> Formules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/horaires"><i class="bi bi-clock me-1"></i> Horaires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/clients"><i class="bi bi-people me-1"></i> Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/utilisateurs"><i class="bi bi-person-badge me-1"></i> Équipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/settings"><i class="bi bi-gear me-1"></i> Paramètres</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
            <li class="nav-item me-3">
              <a class="nav-link text-info" href="#/account"><i class="bi bi-person-circle me-1"></i> Mon Compte</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-warning btn-sm" href="#/login"><i class="bi bi-box-arrow-right me-1"></i> Déconnexion</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content (Router Outlet) -->
  <main id="app-root" class="container py-5 min-vh-100">
    <!-- Views injected here by Navigo -->
  </main>

  <footer class="bg-black py-4 border-top border-secondary text-center text-secondary small">
    <div class="container">
      &copy; 2026 Quai Antique — Panel d'Administration.
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/admin-app.js?v=4"></script>
</body>
</html>
