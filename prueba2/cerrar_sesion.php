<?php
session_start();

session_unset();

session_destroy();

setcookie('nombre', '', time() - 3600, "/");
setcookie('status', '', time() - 3600, "/");
setcookie('valido', '', time() - 3600, "/");

header("Location: index.php");
exit();
?>

