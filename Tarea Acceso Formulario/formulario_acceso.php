<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Identificación de Usuario</h1>
    <form action="validar_acceso.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="id">Clave:</label>
        <input type="password" id="id" name="id" required><br><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>