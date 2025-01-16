<?php
session_start();

if (isset($_SESSION['valido']) && $_SESSION['valido'] === true) {
    $nombre = $_SESSION['nombre'];
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($nombre); ?>!</h1>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>

