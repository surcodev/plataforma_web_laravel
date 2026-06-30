document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('[data-whatsapp-form]');

    if (!forms.length) {
        return;
    }

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    forms.forEach((form) => {
        const btnEnviar = form.querySelector('[data-wa-submit]');
        const nombreInput = form.querySelector('[data-wa-name]');
        const accionInput = form.querySelector('[data-wa-action]');
        const tipoInput = form.querySelector('[data-wa-type]');
        const emailInput = form.querySelector('[data-wa-email]');
        const csrfInput = form.querySelector('input[name="_token"]');

        if (!btnEnviar || !nombreInput || !accionInput || !tipoInput || !emailInput || !csrfInput) {
            return;
        }

        btnEnviar.addEventListener('click', function(e) {
            e.preventDefault();

            const nombre = nombreInput.value.trim();
            const accion = accionInput.value;
            const tipo = tipoInput.value;
            const email = emailInput.value.trim();

            if (nombre === '' || accion === '' || tipo === '') {
                Toast.fire({
                    icon: 'warning',
                    title: 'Faltan datos',
                    text: 'Por favor, completa tu Nombre, Acción y Tipo de Inmueble.'
                });
                return;
            }

            if (email !== '') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Correo inválido',
                        text: 'Por favor, ingresa un correo electrónico válido.'
                    });
                    return;
                }
            }

            const textoOriginal = btnEnviar.innerHTML;
            btnEnviar.innerHTML = 'PROCESANDO... <i class="bi bi-hourglass-split ms-2 fs-4"></i>';
            btnEnviar.disabled = true;

            fetch(form.dataset.url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfInput.value
                },
                body: JSON.stringify({ nombre, accion, tipo, email })
            })
            .then(response => response.json())
            .then(data => {
                btnEnviar.innerHTML = textoOriginal;
                btnEnviar.disabled = false;

                if (data.success) {
                    window.open(data.url, '_blank');
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un problema al procesar tu solicitud.'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                btnEnviar.innerHTML = textoOriginal;
                btnEnviar.disabled = false;

                Toast.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'No pudimos conectar con el servidor. Intenta de nuevo.'
                });
            });
        });
    });
});
