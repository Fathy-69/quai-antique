/**
 * GESTION INTERACTIVE DU FORMULAIRE DE RÉSERVATION (US6)
 */
document.addEventListener('DOMContentLoaded', function () {
    const bookingForm = document.getElementById('bookingFormDedicated');
    const guestsSelect = document.getElementById('guests_res');
    const dateInput = document.getElementById('date_res');
    const serviceSelect = document.getElementById('service_res');
    
    const timeSlotsContainer = document.getElementById('time-slots-container');
    const hiddenTimeInput = document.getElementById('booking_time');
    const bookingAlert = document.getElementById('booking-alert');
    const submitBtn = bookingForm ? bookingForm.querySelector('button[type="submit"]') : null;

    if (!bookingForm) return;

    // Fonction pour afficher une alerte
    function showAlert(message, type) {
        bookingAlert.className = `mt-3 alert alert-${type}`;
        bookingAlert.innerHTML = message;
        bookingAlert.classList.remove('d-none');
    }

    function hideAlert() {
        bookingAlert.classList.add('d-none');
    }

    // Fonction pour vérifier la disponibilité en temps réel via AJAX
    async function checkAvailability() {
        const guests = guestsSelect.value;
        const date = dateInput.value;
        const service = serviceSelect.value;

        // On ne cherche que si les 3 critères sont remplis
        if (!guests || !date || !service) {
            timeSlotsContainer.innerHTML = '<p class="text-muted small w-100"><em>Veuillez sélectionner une date, un service et le nombre de convives pour voir les horaires disponibles.</em></p>';
            hiddenTimeInput.value = '';
            submitBtn.disabled = true;
            hideAlert();
            return;
        }

        try {
            timeSlotsContainer.innerHTML = '<div class="spinner-border text-gold" role="status"><span class="visually-hidden">Chargement...</span></div>';
            submitBtn.disabled = true;
            hiddenTimeInput.value = '';
            hideAlert();

            const url = `/api/booking/availability?date=${date}&service=${service}&guests=${guests}`;
            const response = await fetch(url);
            const data = await response.json();

            timeSlotsContainer.innerHTML = '';

            if (data.success) {
                if (!data.capacity.is_available) {
                    // Si on a dépassé le max capacity
                    showAlert(`<i class="fa-solid fa-ban me-2"></i> Désolé, le restaurant est complet ou ne peut pas accueillir ${guests} couverts supplémentaires pour ce service.`, 'danger');
                    timeSlotsContainer.innerHTML = '<p class="text-danger small w-100 fw-bold">Aucun créneau disponible pour ce nombre de convives.</p>';
                } else if (data.slots.length === 0) {
                    // Si le restaurant est fermé ou s'il n'y a aucun créneau
                    showAlert(`<i class="fa-solid fa-door-closed me-2"></i> Le restaurant est fermé à cette date ou pour ce service.`, 'warning');
                    timeSlotsContainer.innerHTML = '<p class="text-warning small w-100 fw-bold">Service non disponible.</p>';
                } else {
                    // Affichage des créneaux de 15 minutes
                    let hasAvailableSlot = false;
                    
                    data.slots.forEach(slot => {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.textContent = slot.time;
                        
                        if (slot.available) {
                            btn.className = 'time-slot-badge';
                            btn.addEventListener('click', function() {
                                // Gérer la sélection
                                document.querySelectorAll('.time-slot-badge').forEach(b => b.classList.remove('selected'));
                                this.classList.add('selected');
                                hiddenTimeInput.value = slot.time;
                                submitBtn.disabled = false; // Réactiver le bouton de soumission
                                hideAlert();
                            });
                            hasAvailableSlot = true;
                        } else {
                            btn.className = 'time-slot-badge disabled';
                            btn.textContent += ' ✕';
                            btn.title = slot.reason;
                        }
                        
                        timeSlotsContainer.appendChild(btn);
                    });

                    if (hasAvailableSlot) {
                        const info = document.createElement('p');
                        info.className = 'font-serif fst-italic text-muted small mb-0 mt-2 w-100';
                        info.textContent = 'Les créneaux de la dernière heure ne sont pas disponibles (règle des 15 minutes).';
                        timeSlotsContainer.appendChild(info);
                    } else {
                        showAlert(`<i class="fa-solid fa-clock me-2"></i> Il n'y a plus de créneaux admissibles pour ce service.`, 'warning');
                    }
                }
            } else {
                showAlert(`<i class="fa-solid fa-triangle-exclamation me-2"></i> Erreur lors de la vérification de disponibilité.`, 'danger');
            }

        } catch (error) {
            console.error('Erreur AJAX:', error);
            showAlert(`<i class="fa-solid fa-wifi me-2"></i> Erreur réseau, impossible de vérifier la disponibilité.`, 'danger');
            timeSlotsContainer.innerHTML = '';
        }
    }

    // Écouteurs d'événements sur les changements
    guestsSelect.addEventListener('change', checkAvailability);
    dateInput.addEventListener('change', checkAvailability);
    serviceSelect.addEventListener('change', checkAvailability);

    // Initialiser le bouton comme désactivé
    if (submitBtn) submitBtn.disabled = true;

    // Soumission du formulaire (Option A : AJAX)
    bookingForm.addEventListener('submit', async function (e) {
        e.preventDefault();

        if (!hiddenTimeInput.value) {
            showAlert('Veuillez sélectionner un créneau horaire avant de valider.', 'warning');
            return;
        }

        const formData = new FormData(bookingForm);
        const data = Object.fromEntries(formData.entries());

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> CONFIRMATION...';

        try {
            const response = await fetch('/api/booking/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (result.success) {
                // Remplacer tout le formulaire par le message de succès !
                bookingForm.innerHTML = `
                    <div class="text-center py-5">
                        <i class="fa-solid fa-circle-check text-success" style="font-size: 5rem;"></i>
                        <h3 class="font-heading mt-4 text-success text-uppercase">RÉSERVATION CONFIRMÉE !</h3>
                        <p class="fs-5 mt-3">${result.message}</p>
                        <p class="text-muted mt-2">Un email de confirmation vous sera envoyé prochainement à l'adresse <strong>${data.email}</strong>.</p>
                        <a href="/" class="btn btn-gold rounded-pill px-4 py-2 mt-4"><i class="fa-solid fa-home me-2"></i> Retour à l'accueil</a>
                    </div>
                `;
            } else {
                showAlert(result.message || 'Une erreur est survenue lors de la réservation.', 'danger');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-check-circle me-2"></i> CONFIRMER MA RÉSERVATION';
            }
        } catch (error) {
            console.error('Erreur AJAX Soumission:', error);
            showAlert('Impossible de contacter le serveur. Veuillez réessayer plus tard.', 'danger');
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fa-solid fa-check-circle me-2"></i> CONFIRMER MA RÉSERVATION';
        }
    });
});
