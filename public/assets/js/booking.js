/**
 * GESTION INTERACTIVE DU FORMULAIRE DE RÉSERVATION (US6)
 */
document.addEventListener('DOMContentLoaded', function () {
    const timeBadges = document.querySelectorAll('.time-slot-badge:not(.disabled)');
    const hiddenTimeInput = document.getElementById('booking_time');
    const bookingForm = document.getElementById('booking-form');

    // 1. Sélection dynamique du créneau horaire au clic
    timeBadges.forEach(badge => {
        badge.addEventListener('click', function () {
            // Retirer la classe 'selected' de tous les autres créneaux
            timeBadges.forEach(b => b.classList.remove('selected'));

            // Ajouter la classe 'selected' sur le créneau cliqué
            this.classList.add('selected');

            // Enregistrer la valeur de l'heure dans le champ caché du formulaire
            const selectedTime = this.getAttribute('data-time');
            if (hiddenTimeInput) {
                hiddenTimeInput.value = selectedTime;
            }
        });
    });

    // 2. Validation avant soumission du formulaire
    if (bookingForm) {
        bookingForm.addEventListener('submit', function (e) {
            if (!hiddenTimeInput.value) {
                e.preventDefault();
                alert('Veuillez sélectionner un créneau horaire (tranche de 15 minutes) pour votre réservation.');
            }
        });
    }
});