<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link rel="stylesheet" href="estilos.css">

    <script>
        function mostrarAlerta() {
            const params = new URLSearchParams(window.location.search); // Obtener parámetros de la URL
            const mensaje = params.get('mensajeManual'); // Obtener el mensaje específico

            if (mensaje) {
                alert(mensaje); 
            }
        }
    </script>
</head>
<body onload="mostrarAlerta()">
    <h1>Identificación de Usuario</h1>
    <form action="validar_acceso.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" title="Ingresa 'admin'" required><br><br>
        
        <label for="id">Clave:</label>
        <input type="password" id="id" name="id" title="Ingresa '1234'" required><br><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>