// Función para ocultar todas las secciones
function ocultarSecciones() {
    const secciones = document.querySelectorAll('.seccion');
    secciones.forEach(function(seccion) {
        seccion.style.display = 'none';
    });
}

// Función para mostrar la sección de "Home"
function mostrarHome() {
    ocultarSecciones();  // Ocultar todas las secciones antes de mostrar una nueva
    document.getElementById('inicio').style.display = 'block';  // Mostrar la sección de inicio
}