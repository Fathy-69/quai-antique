/**
 * QUAI ANTIQUE - LOGIQUE JAVASCRIPT FRONT-END INTERACTIVE
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. FILTRAGE INTERACTIF PAR CATÉGORIES (US3)
    const categoryButtons = document.querySelectorAll('.category-btn-filter');
    const dishCards = document.querySelectorAll('.dish-card-wrapper');

    if (categoryButtons.length > 0) {
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Retirer la classe active de tous les boutons
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                
                // Ajouter la classe active au bouton cliqué
                button.classList.add('active');

                const selectedCategory = button.getAttribute('data-category');

                // Filtrer les cartes de plats
                dishCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                        card.style.display = 'block';
                        card.classList.add('fade-in');
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 2. GESTION DES BADGES D'HEURES DANS LE FORMULAIRE DE RÉSERVATION (US6)
    const timeSlotBadges = document.querySelectorAll('.time-slot-badge-exact');
    timeSlotBadges.forEach(badge => {
        if (!badge.classList.contains('disabled')) {
            badge.addEventListener('click', () => {
                timeSlotBadges.forEach(b => b.classList.remove('selected'));
                badge.classList.add('selected');
            });
        }
    });

});