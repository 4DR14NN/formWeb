<?php
// para poder usar session_destroy necesito iniciar la sesion primero
session_start();

// destruyo la sesion para que se cierre todo
session_destroy();

// mando al usuario al login otra vez
header("Location: login.php");
exit;
?>
