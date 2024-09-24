    // Obtenemos el formulario y la imagen de carga
    const form = document.getElementById('loginForm');
    const loadingImg = document.getElementById('loadingImg');

    // Agregamos un evento al formulario cuando se envíe
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío automático para mostrar la imagen de carga

        // Mostrar la imagen de carga
        loadingImg.style.display = 'block';

        // Simular una espera antes de enviar el formulario (puedes realizar la lógica de envío aquí)
        setTimeout(function() {
            // Ocultar la imagen de carga (puedes omitir esto si el envío es inmediato)
            loadingImg.style.display = 'none';

            // Enviar el formulario (o hacer la lógica de envío AJAX aquí)
            alert("Formulario enviado");
            // form.submit(); // Descomentar si quieres enviar el formulario después de mostrar la imagen
        }, 3000); // 3 segundos de espera para simular una operación

    });