/*EDUCACION*/
function toggleFavorito(button) {
    const isFavorito = button.classList.toggle('favorito');

    if (isFavorito) {
        button.textContent = '⭐ (Favorito)'; 
        button.style.color = '#ff9800'; 
    } else {
        button.textContent = '⭐'; 
        button.style.color = '#ffc107'; 
    }
}
function mostrarFormulario() {
    const formulario = document.getElementById('formularioCertificado');
    formulario.classList.toggle('oculto'); 
}

document.getElementById('certificadoForm').addEventListener('submit', function(event) {
    event.preventDefault(); 


    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const empresa = document.getElementById('empresa').value;
    const curso = document.getElementById('curso').value;


    const mensajeInscripcion = document.getElementById('mensajeInscripcion');
    mensajeInscripcion.textContent = `¡Gracias, ${nombre}! Te has inscrito al curso: ${curso}. Se enviará un correo a ${email}.`;
    

    document.getElementById('certificadoForm').reset();
});