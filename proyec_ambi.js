/*proyectos ambientales*/
function mostrarDetalles(titulo, detalles) {
    alert(`${titulo}\n\n${detalles}`);
}

function abrirFormulario() {
    const formulario = document.getElementById('formularioProyecto');
    formulario.style.display = 'block'; 
}

function cerrarFormulario() {
    const formulario = document.getElementById('formularioProyecto');
    formulario.style.display = 'none'; 
}

document.getElementById('inscripcionForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const proyectoSeleccionado = document.getElementById('proyectoSeleccionado').value;
    
    const mensajeProyectos = document.getElementById('mensajeProyectos');
    mensajeProyectos.innerText = `¡Gracias, ${nombre}! Te has unido al proyecto de ${proyectoSeleccionado}. 🎉`;

 
    this.reset();
    cerrarFormulario();
});