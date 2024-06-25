<?php
// Borrar la cookie de titular
setcookie('titular', '', time() - 3600, '/'); // Establecer una fecha de expiración en el pasado para eliminar la cookie

// Redirigir al index.php
header('Location: index.php');
exit;
?>