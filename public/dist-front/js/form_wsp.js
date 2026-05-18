document.addEventListener('DOMContentLoaded', function() {
    const btnEnviar = document.getElementById('btn-enviar-wa');

    // 1. Configuración del "Toast"
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3500, // Desaparece solo en 3.5 segundos
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    btnEnviar.addEventListener('click', function(e) {
        e.preventDefault();

        const nombre = document.getElementById('wa_nombre').value.trim();
        const accion = document.getElementById('wa_accion').value;
        const tipo = document.getElementById('wa_tipo').value;
        const email = document.getElementById('wa_email').value.trim();

        // 2. Validación de campos obligatorios con SweetAlert
        if (nombre === '' || accion === '' || tipo === '') {
            Toast.fire({
                icon: 'warning',
                title: 'Faltan datos',
                text: 'Por favor, completa tu Nombre, Acción y Tipo de Inmueble.'
            });
            return;
        }

        // 3. Validación de correo con SweetAlert
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

        // Cambiar el estado del botón a "Cargando"
        const textoOriginal = btnEnviar.innerHTML;
        btnEnviar.innerHTML = 'PROCESANDO... <i class="bi bi-hourglass-split ms-2 fs-4"></i>';
        btnEnviar.disabled = true;

        // 1. Extraemos la URL que guardamos en el HTML
        const urlBackend = document.getElementById('formulario-whatsapp').getAttribute('data-url');

        // 2. Usamos esa variable en el fetch
        fetch(urlBackend, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
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