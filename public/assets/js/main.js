/**
 * RESTAURANT QUAI ANTIQUE - MAIN JAVASCRIPT
 * Interactions UI, Filtrage de la Carte (US3) et Animations
 */

document.addEventListener('DOMContentLoaded', function () {

    // =========================================================
    // 1. FILTRAGE DYNAMIQUE DE LA CARTE DES PLATS (EXIGENCE US3)
    // =========================================================
    const filterButtons = document.querySelectorAll('.category-filter-btn');
    const dishItems = document.querySelectorAll('.dish-item');

    if (filterButtons.length > 0 && dishItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Activer le bouton cliqué et désactiver les autres
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                // Filtrer les cartes de plats selon la catégorie
                dishItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');

                    if (filterValue === 'all' || filterValue === itemCategory) {
                        item.style.display = 'block';
                        // Effet d'apparition fluide
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    } else {
                        item.style.display = 'none';
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.95)';
                    }
                });
            });
        });
    }

    // =========================================================
    // 2. EFFET D'EN-TÊTE STICKY AU DÉFILEMENT (NAVBAR SHADOW)
    // =========================================================
    const headerElement = document.querySelector('header');
    
    if (headerElement) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                headerElement.classList.add('shadow');
            } else {
                headerElement.classList.remove('shadow');
            }
        });
    }

    // =========================================================
    // 3. DÉFILEMENT DOUX POUR LES LIENS D'ANCRE (#galerie, #carte)
    // =========================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
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

});