<?php
// Definición de credenciales de administrador
$nombre_admin = "admin"; 
$id_admin = "1234"; 

// Captura de datos enviados desde el formulario
$username = $_POST['username'] ?? ''; 
$password = $_POST['password'] ?? ''; 

// Función para limpiar la entrada de datos
function limpiar_entrada($entrada) {
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    return $entrada;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    header('Location: https://cc.unison.mx');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpieza de datos de entrada
    $nombre = limpiar_entrada($_POST['nombre'] ?? '');
    $id = limpiar_entrada($_POST['id'] ?? '');

    // Validación de credenciales
    if ($nombre == $nombre_admin && $id == $id_admin) {
        header('Location: /bienvenido_admin.php');
        exit();
    } else {
        $mensaje = "Los datos proporcionados no coinciden <BR>Favor de reingresar datos";
        header('Location: /formulario_acceso.php?mensajeManual=' . urlencode($mensaje));
        exit();
    }
}
?>