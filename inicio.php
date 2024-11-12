<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../log_in.php";
            </script>
        ';
        session_destroy();
        die(); // Detener la ejecución
    }
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huella Cero</title>
    <link rel="shortcut icon" href="./Imagenes/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/nomalize.css">
    <link rel="stylesheet" href="./CSS/estilos_inicio.css">
    <link rel="stylesheet" href="./CSS/estilos_utilidades.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-circle-user"></i>
            <h4>User</h4>
        </div>

        <div class="options__menu">	

            <a href="javascript:void(0)" onclick="mostrarHome()">
                <div class="option">
                    <i class="fa-solid fa-house" title="Home"></i>
                    <h4>Home</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarCalculadora(this)">
                <div class="option">
                    <i class="fa-solid fa-fingerprint" title="Calculadora De Huella"></i>
                    <h4>Calculadora De Huella</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarMonitoreoConsumo(this)">
                <div class="option">
                    <i class="fa-solid fa-chart-simple" title="Monitoreo De Consumo"></i>
                    <h4>Monitoreo De Consumo</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarGuiaReciclaje(this)">
                <div class="option">
                    <i class="fa-brands fa-viadeo" title="Guia De Reciclaje"></i>
                    <h4>Guía De Reciclaje</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarProyectosAmbientales(this)">
                <div class="option">
                    <i class="fa-solid fa-diagram-project" title="Proyectos Ambientales"></i>
                    <h4>Proyectos Ambientales</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarEducacionRecursos(this)">
                <div class="option">
                    <i class="fa-solid fa-school" title="Educación y Recursos"></i>
                    <h4>Educación y Recursos</h4>
                </div>
            </a>

            <a href="javascript:void(0)" onclick="mostrarRecompensas(this)">
                <div class="option">
                    <i class="fa-solid fa-gift" title="Recompensas"></i>
                    <h4>Recompensas</h4>
                </div>
            </a>

            <a href="php/cerrar_sesion.php">
                <div class="option">
                    <i class="fa-solid fa-door-open" title="Cerrar Sesión"></i>
                    <h4>Cerrar Sesión</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
            <!-- Contenido de la sección de inicio -->
        <section id="inicio" class="selected">
                
            <h1>Bienvenido a Huella Cero</h1>
            <p>Lorem</p>
            <p>Lorem</p>
            <footer>

                <div class="container__footer">
                    <div class="box__footer">
                        <div class="logo">
                            <img src="/Imagenes/favicon.png" alt="">
                        </div>
                        <div class="terms">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
                        </div>
                    </div>
                    <div class="box__footer">
                        <h2>Soluciones</h2>
                        <a href="https://www.google.com">App Desarrollo</a>
                        <a href="#">App Marketing</a>
                        <a href="#">IOS Desarrollo</a>
                        <a href="#">Android Desarrollo</a>
                    </div>

                    <div class="box__footer">
                        <h2>Compañia</h2>
                        <a href="#">Ayuda</a>
                        <a href="#">Trabajos</a>
                        <a href="#">Procesos</a>
                        <a href="#">Servicios</a>              
                    </div>

                    <div class="box__footer">
                        <h2>Redes Sociales</h2>
                        <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                        <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                        <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                        <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                    </div>

                </div>

                <div class="box__copyright">
                    <hr>
                    <p>Todos los derechos reservados © 2024 <b>Huella Cero</b></p>
                </div>
            </footer>
        </section>

        <!-- Sección de la calculadora de huella -->
        <section id="calculadora_huella" class="seccion" style="display: none;">
            <div class="container_tor">
                <h2>Calcula tu Huella de Carbono e Hídrica</h2>
                <p>Introduce tus hábitos de consumo para calcular tu impacto ambiental y visualizar tu huella.</p>
            </div>
            
            <div class="container_cal">
                <form id="carbonForm">
                    <div class="form-group">
                        <label for="energia">Consumo de energía (kWh/mes):</label>
                        <input type="number" id="energia" name="energia" placeholder="Ej. 150" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="agua">Consumo de agua (litros/mes):</label>
                        <input type="number" id="agua" name="agua" placeholder="Ej. 500" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="transporte">Transporte (km/mes):</label>
                        <input type="number" id="transporte" name="transporte" placeholder="Ej. 300" required>
                    </div>
                    
                    <button type="button" class="btn" onclick="calcularHuella()">Calcular Huella</button>
                </form>
            </div>
            
            <div id="resultadoHuellaContainer" style="display: none;">
                <p id="resultadoHuella"></p>
                <div class="progress-bar">
                    <div id="progress" class="progress"></div>
                </div>
            </div>
        </section>

        <!-- Sección Monitoreo de Consumo -->
        <section id="monitoreo_consumo" class="consumo-container" class="selected" style="display: none;">
            <h2>Monitoreo de Consumo 📊</h2>
            <p>Registra y analiza tu consumo de energía, agua y recursos.</p>
            
            <form id="consumoForm">
                <label for="energiaMes">Consumo de energía (kWh):</label>
                <input type="number" id="energiaMes" name="energiaMes" required><br>

                <label for="aguaMes">Consumo de agua (litros):</label>
                <input type="number" id="aguaMes" name="aguaMes" required><br>

                <button type="button" class="registrar-btn" onclick="registrarConsumo()">Registrar Consumo</button>
            </form>

            <table id="tablaConsumo">
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Consumo de Energía (kWh)</th>
                        <th>Consumo de Agua (litros)</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </section>

        <!-- Sección Guía de Reciclaje -->
        <section id="#guia_reciclaje" class="selected" style="display: none;">
            <h2>Guía de Reciclaje</h2>
            <p>Aprende a reciclar correctamente y reduce tus residuos.</p>
            <ul class="reciclaje-list">
                <li>🌍 <strong>Plásticos:</strong> Separar por tipo y lavar antes de reciclar.</li>
                <li>🍷 <strong>Vidrios:</strong> No mezclar con cerámicas o espejos rotos.</li>
                <li>📄 <strong>Papel:</strong> Evitar reciclar papel mojado o sucio.</li>
                <li>⚠️ <strong>Residuos peligrosos:</strong> Llamar a servicios especializados.</li>
            </ul>

            <div class="video-container">
                <video controls>
                    <source src="https://youtu.be/YiHTNfKJwAw?si=fA0TB2ZyCcsZqis2" type="video/mp4">
                </video>
            </div>

            <button type="button" class="btn" onclick="mostrarRecordatorio()">Recordatorio de Reciclaje</button>
            <p id="mensajeReciclaje" class="mensaje"></p>

            <div id="notificaciones" class="notificaciones">
                <h3>Recibe Notificaciones sobre Reciclaje</h3>
                <p>Ingresa tu información para recibir recordatorios sobre qué reciclar y cuándo:</p>
                <input type="text" id="nombre" placeholder="Tu nombre" required>
                <input type="email" id="email" placeholder="Tu correo electrónico" required>
                <button type="button" class="btn" onclick="registrarNotificacion()">Registrar Notificación</button>
                <p id="mensajeNotificacion" class="mensaje"></p>
            </div>
        </section>

        <!-- Sección Proyectos Ambientales -->
        <section id="proyectos_ambientales" class="selected" style="display: none;">
            <h2>Proyectos Ambientales 🌱</h2>
            <p>Descubre iniciativas en tu comunidad y participa en eventos ecológicos.</p>
            <ul class="proyectos-list">
                <li>
                    🌊 <strong>Limpieza de playas:</strong> 15 de octubre
                    <button class="detalles-btn" onclick="mostrarDetalles('Limpieza de playas', 'Participa en la limpieza de nuestras playas. Se proporcionarán guantes y bolsas de basura. ¡Trae tu espíritu ecológico!')">Detalles</button>
                </li>
                <li>
                    🌳 <strong>Plantación de árboles:</strong> 22 de octubre
                    <button class="detalles-btn" onclick="mostrarDetalles('Plantación de árboles', 'Únete a nosotros para plantar árboles en nuestra comunidad. Ayuda a mejorar nuestro entorno y crea conciencia sobre la reforestación.')">Detalles</button>
                </li>
                <li>
                    ♻️ <strong>Reciclaje comunitario:</strong> 29 de octubre
                    <button class="detalles-btn" onclick="mostrarDetalles('Reciclaje comunitario', 'Ayuda a clasificar y reciclar materiales en nuestra comunidad. Trae tus reciclables y colabora con otros!')">Detalles</button>
                </li>
            </ul>
            <button class="btn" onclick="abrirFormulario()">Unirse a Proyecto</button>
            <p id="mensajeProyectos" class="mensaje"></p>
            
            <div id="formularioProyecto" class="form-container" style="display:none;">
                <h3>Formulario de Inscripción</h3>
                <form id="inscripcionForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" required>
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" required>
                    <label for="proyectoSeleccionado">Proyecto:</label>
                    <select id="proyectoSeleccionado" required>
                        <option value="">Selecciona un proyecto</option>
                        <option value="Limpieza de playas">Limpieza de playas</option>
                        <option value="Plantación de árboles">Plantación de árboles</option>
                        <option value="Reciclaje comunitario">Reciclaje comunitario</option>
                    </select>
                    <button type="submit" class="btn">Enviar</button>
                </form>
                <button class="btn" onclick="cerrarFormulario()">Cancelar</button>
            </div>
        </section>

        <!-- Sección Educación y Recursos -->
        <section id="educacion_recursos" class="selected" style="display: none;">
            <h2>Educación y Recursos 📚</h2>
            <p>Artículos, videos y cursos sobre sostenibilidad y cambios climáticos.</p>
            <ul class="recursos-list">
                <li>
                    <a href="#" class="recurso-link">Curso: Introducción a la Sostenibilidad</a>
                    <button class="favorito-btn" onclick="toggleFavorito(this)">⭐</button>
                </li>
                <li>
                    <a href="#" class="recurso-link">Artículo: 10 maneras de reducir el consumo de agua</a>
                    <button class="favorito-btn" onclick="toggleFavorito(this)">⭐</button>
                </li>
                <li>
                    <a href="#" class="recurso-link">Video: ¿Qué es la huella de carbono?</a>
                    <button class="favorito-btn" onclick="toggleFavorito(this)">⭐</button>
                </li>
            </ul>

            <div class="empresa-container">
                <button type="button" onclick="mostrarFormulario()">¿Perteneces a una empresa?</button>
            </div>

            <div id="formularioCertificado" class="formulario oculto">
                <h3>Formulario de Inscripción a Cursos Certificados</h3>
                <form id="certificadoForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="empresa">Nombre de la Empresa:</label>
                    <input type="text" id="empresa" name="empresa" required>

                    <label for="curso">Selecciona el curso:</label>
                    <select id="curso" name="curso" required>
                        <option value="">--Selecciona un curso--</option>
                        <option value="sostenibilidad">Curso: Introducción a la Sostenibilidad</option>
                        <option value="reduccion-agua">Artículo: 10 maneras de reducir el consumo de agua</option>
                        <option value="huella-carbono">Video: ¿Qué es la huella de carbono?</option>
                        <option value="cambio-climatico">Curso Certificado: Impacto del Cambio Climático</option>
                        <option value="energias-renovables">Curso Certificado: Energías Renovables en la Práctica</option>
                        <option value="gestion-residuos">Curso Certificado: Gestión Efectiva de Residuos</option>
                        <option value="ecoemprendimiento">Curso Certificado: Ecoemprendimiento y Sostenibilidad</option>
                    </select>

                    <button type="submit">Enviar Inscripción</button>
                    <p id="mensajeInscripcion" class="mensaje"></p>
                </form>
            </div>

            <div class="video-container">
                <h3>Video Educativo</h3>
                <video controls>
                    <source src="https://www.example.com/video_sostenibilidad.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de videos.
                </video>
            </div>
        </section>

        <!-- Sección Recompensas -->
        <section id="recompensas" class="recompensas-container" class="selected" style="display: none;">
            <h2>Recompensas 🎉</h2>
            <p>Obtén recompensas por tus acciones sostenibles y mejora tu impacto ambiental.</p>
            <button class="ver-recompensas-btn" type="button" onclick="mostrarRecompensas()">Ver mis recompensas</button>

            <div id="recompensasLista" class="recompensas-lista oculto">
                <h3>Tus Recompensas Disponibles:</h3>
                <ul>
                    <li>
                        <div class="recompensa-item">
                            <p>🟢 Cupón de descuento del 20% en productos ecológicos</p>
                            <button class="reclamar-btn" onclick="reclamarRecompensa('Cupón de descuento del 20%')">Reclamar</button>
                        </div>
                    </li>
                    <li>
                        <div class="recompensa-item">
                            <p>🌱 Un árbol plantado a tu nombre</p>
                            <button class="reclamar-btn" onclick="reclamarRecompensa('Un árbol plantado')">Reclamar</button>
                        </div>
                    </li>
                    <li>
                        <div class="recompensa-item">
                            <p>♻️ Participación gratuita en un taller de reciclaje</p>
                            <button class="reclamar-btn" onclick="reclamarRecompensa('Taller de reciclaje gratuito')">Reclamar</button>
                        </div>
                    </li>
                </ul>
                <p id="mensajeRecompensas" class="mensaje"></p>
            </div>
        </section>
    </main>


    <script src="./js/menuinicio.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/cal_huella.js"></script>
    <script src="./js/recordatorio.js"></script>
    <script src="./js/proyec_ambi.js"></script>
    <script src="./js/educacion.js"></script>
    <script src="./js/recompensas.js"></script>
    <script src="./js/register_consumo.js"></script>
</body>
</html>