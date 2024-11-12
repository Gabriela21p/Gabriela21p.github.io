/* RECOMPENSAS */
function mostrarRecompensas() {
    const recompensasLista = document.getElementById("recompensasLista");
    recompensasLista.classList.toggle("oculto");
}

function reclamarRecompensa(recompensa) {
    const mensajeElement = document.getElementById("mensajeRecompensas");
    mensajeElement.textContent = `¡Has reclamado: ${recompensa}! Disfruta de tu recompensa y sigue contribuyendo al planeta.`;

    const botones = document.querySelectorAll(".reclamar-btn");
    botones.forEach(boton => {
        if (boton.textContent.includes(recompensa)) {
            boton.disabled = true;
            boton.textContent = "Reclamado";
            boton.style.backgroundColor = "#ccc";
            boton.style.cursor = "not-allowed";
        }
    });
}