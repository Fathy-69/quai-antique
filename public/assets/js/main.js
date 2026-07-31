/**
 * RESTAURANT QUAI ANTIQUE - MAIN JAVASCRIPT UNIFIÉ 
 * Architecture modulaire, propre et maintenable pour le dossier professionnel.
 * 
 * Inclus :
 * - Sticky Header avec ombre sur-mesure (.header-scrolled)
 * - Smooth Scrolling vers les ancres (#)
 * - Filtrage dynamique (US3) compatible dataset.category & dataset.filter sans style inline
 * - Sélection des créneaux horaires de réservation (US6)
 */

document.addEventListener('DOMContentLoaded', () => {
    initStickyHeader();
    initSmoothScroll();
    initMenuFilter();
    initReservationSlots();
});

/**
 * 1. En-tête Sticky avec ombre sur-mesure au défilement
 */
function initStickyHeader() {
    const header = document.querySelector('.header-quai') || document.querySelector('header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });
}

/**
 * 2. Défilement fluide (Smooth Scroll) vers les sections avec ancres (#)
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}

/**
 * 3. Filtrage dynamique de la carte & des menus (US3)
 * - Support étendu des attributs (dataset.category || dataset.filter)
 * - Utilisation des classes Bootstrap (.d-none) pour préserver le layout Grid/Flex sans styles inline
 * - Animation fluide par classe CSS (.fade-in)
 */
function initMenuFilter() {
    const categoryButtons = document.querySelectorAll('.category-btn-filter, .category-filter-btn');
    const dishCards = document.querySelectorAll('.dish-card-wrapper, .dish-item');

    if (categoryButtons.length === 0 || dishCards.length === 0) return;

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Mettre à jour la classe active sur le bouton cliqué
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Extraction robuste : supporte data-category ET data-filter (compatibilité V1/V2)
            const selectedCategory = button.dataset.category || button.dataset.filter || 'all';

            dishCards.forEach(card => {
                const cardCategory = card.dataset.category || card.dataset.filter;

                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    // Affichage propre via suppression de la classe d-none Bootstrap
                    card.classList.remove('d-none');
                    
                    // Relancer l'animation CSS (.fade-in)
                    card.classList.remove('fade-in');
                    void card.offsetWidth; // Reflow pour déclencher à nouveau la transition CSS
                    card.classList.add('fade-in');
                } else {
                    // Masquage propre par ajout de d-none Bootstrap
                    card.classList.add('d-none');
                    card.classList.remove('fade-in');
                }
            });
        });
    });
}

/**
 * 4. Gestion de la sélection des créneaux horaires de réservation (US6)
 * - Activation visuelle du badge cliqué (.selected)
 * - Synchronisation dynamique avec le champ caché du formulaire
 */
function initReservationSlots() {
    const timeSlotBadges = document.querySelectorAll('.time-slot-badge-exact');
    if (timeSlotBadges.length === 0) return;

    timeSlotBadges.forEach(badge => {
        if (!badge.classList.contains('disabled')) {
            badge.addEventListener('click', () => {
                timeSlotBadges.forEach(b => b.classList.remove('selected'));
                badge.classList.add('selected');

                // Synchronisation avec le champ masqué du formulaire
                const hiddenInput = document.getElementById('selectedTimeSlot') || document.getElementById('booking_time');
                if (hiddenInput) {
                    hiddenInput.value = badge.dataset.time || badge.textContent.trim();
                }
            });
        }
    });
}

// Initialiser explicitement le carrousel principal
document.addEventListener('DOMContentLoaded', function() {
    var myCarousel = document.getElementById('heroCarousel');
    if (myCarousel) {
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000,
            ride: 'carousel',
            pause: 'hover'
        });
        carousel.cycle();
    }
});