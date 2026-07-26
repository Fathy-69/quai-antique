<?php
/**
 * GABARIT PRINCIPAL (LAYOUT BASE)
 * 
 * @var string $pageTitle Titre spécifique à la page
 * @var string $content Contenu HTML injecté par la vue spécifique
 */

// 1. Inclusion de l'en-tête de navigation (Header & <head>)
require_once __DIR__ . '/header.php';
?>

<!-- 🏔️ CONTENU PRINCIPAL DE LA PAGE (INJECTÉ DYNAMIQUEMENT) -->
<main class="py-4">
    <?php if (isset($content)): ?>
        <?= $content ?>
    <?php else: ?>
        <div class="container my-5 text-center">
            <h2 class="text-gold font-heading">Bienvenue sur Quai Antique</h2>
            <p class="lead">Le contenu de cette page est en cours de chargement...</p>
        </div>
    <?php endif; ?>
</main>

<?php
// 2. Inclusion du pied de page (Footer & Horaires US5 & Scripts JS)
require_once __DIR__ . '/footer.php';
?>