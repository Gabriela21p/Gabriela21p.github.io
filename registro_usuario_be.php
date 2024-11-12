<?php 

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña); // encriptamiento de clave 

// Asegúrate de que la tabla se llama `usuarios
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contraseña) VALUES ('$nombre_completo', '$correo', '$usuario', '$contraseña')";

// Verificación para que no se repita el correo en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../log_in.php";
        </script>
    ';
    exit();
}

// Verificación para que no se repita el usuario en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro diferente");
            window.location = "../log_in.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario creado exitosamente");
            window.location = "../log_in.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Inténtelo de nuevo, el usuario no se pudo registrar");
            window.location = "../log_in.php";
        </script>
    ';
}

mysqli_close($conexion);
