<?php
session_start();

$correct_user = "Dejah";
$correct_pass = "1234";
$nombre = "Dejah Thoris";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_user && $password === $correct_pass) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['status'] = 'activo';
        $_SESSION['valido'] = true;

        setcookie('nombre', $nombre, time() + 3600, "/"); // Expira en 1 hora
        setcookie('status', 'activo', time() + 3600, "/");
        setcookie('valido', true, time() + 3600, "/");

        header("Location: bienvenida.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>

