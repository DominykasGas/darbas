import 'bootstrap';
import Swal from 'sweetalert2';

window.Swal = Swal;
const alerts = document.querySelectorAll('.js-alert');

alerts.forEach((alert) => {
    Swal.fire({
        text: alert.textContent,
        icon: alert.classList.contains('alert-danger') ? 'error' : 'success',
        confirmButtonText: 'OK',
    });
});

const deleteForms = document.querySelectorAll('.js-delete-form');

deleteForms.forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        Swal.fire({
            text: 'Ar tikrai norite trinti?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Taip',
            cancelButtonText: 'Ne',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
