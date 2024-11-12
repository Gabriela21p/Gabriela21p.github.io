// Ejecución de la función del click para abrir/cerrar el menú lateral
document.getElementById("btn_open").addEventListener("click", open_close_menu);

// Variables del menú lateral
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

// Evento para mostrar y ocultar el menú lateral
function open_close_menu() {
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu__side_move");
}

// Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página
if (window.innerWidth < 760) {
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

// Haciendo el menú responsive
window.addEventListener("resize", function() {
    if (window.innerWidth > 760) {
        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if (window.innerWidth < 760) {
        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }
});

// Función para mostrar el contenido correspondiente y activar la clase "selected"
document.addEventListener('DOMContentLoaded', function() {
    // Mostrar la sección de "Inicio" por defecto
    document.getElementById('inicio').style.display = 'block';

    // Establecer la opción "Inicio" como seleccionada por defecto
    document.getElementById('inicioLink').classList.add('selected');
    
    // Manejo de clics en las opciones del menú
    document.querySelectorAll('.options__menu a').forEach((link) => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Evita el comportamiento por defecto de los enlaces

            // Eliminar la clase "selected" de todos los enlaces
            document.querySelectorAll('.options__menu a').forEach((a) => {
                a.classList.remove('selected');
            });

            // Agregar la clase "selected" al enlace clicado
            this.classList.add('selected');

            // Ocultar todas las secciones
            document.querySelectorAll('.section-content').forEach((section) => {
                section.style.display = 'none';
            });

            // Mostrar la sección correspondiente
            const sectionId = this.getAttribute('href').substring(1); // Obtener el ID de la sección
            document.getElementById(sectionId).style.display = 'block';
        });
    });
});