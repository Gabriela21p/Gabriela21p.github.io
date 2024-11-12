/*recordatorio*/

function mostrarRecordatorio() {
    const recordatorios = [
        "Recuerda que cada pequeño esfuerzo cuenta. ¡Recicla y ayuda a nuestro planeta!",
        "Antes de reciclar, asegúrate de que tus residuos estén limpios y secos.",
        "Investiga sobre los puntos de reciclaje en tu comunidad.",
        "¡Reciclar es fácil y divertido! Comparte estos tips con tus amigos."
    ];
    const mensajeReciclaje = document.getElementById('mensajeReciclaje');
    const randomIndex = Math.floor(Math.random() * recordatorios.length);
    mensajeReciclaje.innerText = recordatorios[randomIndex];
}

function registrarNotificacion() {
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const mensajeNotificacion = document.getElementById('mensajeNotificacion');

    if (nombre && email) {
        mensajeNotificacion.innerText = `Gracias, ${nombre}! Te has registrado para recibir notificaciones sobre reciclaje en ${email}.`;
    } else {
        mensajeNotificacion.innerText = "Por favor, completa todos los campos.";
    }
}

