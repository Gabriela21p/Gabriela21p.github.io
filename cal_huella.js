// Mostrar la sección de la calculadora de huella
function mostrarCalculadora() {
    console.log("Mostrando la calculadora...");
    ocultarSecciones();
    const calculadora = document.getElementById('calculadora_huella');
    if (calculadora) {
        calculadora.style.display = 'block';  // Mostrar la calculadora
    }
}

// Función para ocultar todas las secciones
function ocultarSecciones() {
    // Especificar los IDs de todas las secciones que se pueden mostrar u ocultar
    const secciones = ['calculadora_huella', 'monitoreo_consumo', 'guia_reciclaje', 'proyectos_ambientales', 'educacion_recursos', 'recompensas'];
    
    // Ocultar todas las secciones
    secciones.forEach(function(id) {
        const section = document.getElementById(id);
        if (section) {
            section.style.display = 'none';
        }
    });
}

// Función para calcular la huella
function calcularHuella() { 
    const energia = parseFloat(document.getElementById('energia').value);
    const agua = parseFloat(document.getElementById('agua').value);
    const transporte = parseFloat(document.getElementById('transporte').value);
    const resultadoContainer = document.getElementById('resultadoHuellaContainer');
    const resultadoText = document.getElementById('resultadoHuella');
    const progressBar = document.getElementById('progress');

    if (!isNaN(energia) && !isNaN(agua) && !isNaN(transporte)) {
        const huella = (energia * 0.3) + (agua * 0.1) + (transporte * 0.5);
        resultadoContainer.style.display = 'block';
        resultadoText.innerText = `Tu huella total es de ${huella.toFixed(2)} unidades.`;
        const porcentaje = Math.min((huella / 100) * 100, 100); 
        progressBar.style.width = porcentaje + '%';
        
        if (porcentaje < 33) {
            progressBar.style.backgroundColor = '#4caf50'; // Verde
        } else if (porcentaje < 66) {
            progressBar.style.backgroundColor = '#ffeb3b'; // Amarillo
        } else {
            progressBar.style.backgroundColor = '#f44336'; // Rojo
        }
    } else {
        alert('Por favor, complete todos los campos correctamente.');
    }
}

// Función para resetear los campos y el progreso
function resetearCalculadora() {
    document.getElementById('energia').value = '';
    document.getElementById('agua').value = '';
    document.getElementById('transporte').value = '';
    document.getElementById('resultadoHuellaContainer').style.display = 'none';
    document.getElementById('progress').style.width = '0%';
    document.getElementById('progress').style.backgroundColor = '#4caf50'; // Restablecer color a verde
}