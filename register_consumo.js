/* REGISTRO CONSUMO */
function registrarConsumo() {
    const energiaMes = document.getElementById("energiaMes").value;
    const aguaMes = document.getElementById("aguaMes").value;
    
    if (energiaMes && aguaMes) {
        const tabla = document.getElementById("tablaConsumo").getElementsByTagName('tbody')[0];
        
 
        const nuevaFila = tabla.insertRow();
        const celdaMes = nuevaFila.insertCell(0);
        const celdaEnergia = nuevaFila.insertCell(1);
        const celdaAgua = nuevaFila.insertCell(2);


        const fecha = new Date();
        const mesActual = fecha.toLocaleString('default', { month: 'long' });
        

        celdaMes.textContent = mesActual;
        celdaEnergia.textContent = energiaMes;
        celdaAgua.textContent = aguaMes;

 
        document.getElementById("consumoForm").reset();
    } else {
        alert("Por favor, completa todos los campos.");
    }
}
