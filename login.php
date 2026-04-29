<?php
// esto tiene que ir siempre antes de todo para que funcionen las sesiones
session_start();

// si el usuario ya esta logueado lo mando al index directamente
if (isset($_SESSION['logueado'])) {
  if ($_SESSION['logueado'] == true) {
    header("Location: index.php");
    exit;
  }
}

// variable para guardar el error si lo hay
$error = "";

// comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // recoger los datos del formulario
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  // comprobar si el usuario y contraseña son correctos
  // los tengo aqui fijos porque es solo una practica
  if ($usuario == "admin" && $password == "1234") {
    // si es correcto guardo en sesion que esta logueado
    $_SESSION['logueado'] = true;
    $_SESSION['usuario'] = $usuario;

    // y lo mando al index
    header("Location: index.php");
    exit;
  } else {
    // si no es correcto muestro un error
    $error = "Usuario o contraseña incorrectos";
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KintVinylSugi™ | Iniciar Sesión</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login-wrapper">
    <div class="login-card">
      <span class="login-badge">Acceso</span>
      <h1 class="login-titulo">Iniciar Sesión</h1>
      <p class="login-subtitulo">Inicia sesión para acceder al configurador</p>

      <?php
      // si hay un error lo muestro
      if ($error != "") {
        echo '<div class="login-error">' . $error . '</div>';
      }
      ?>

      <form method="POST" action="login.php">
        <div class="login-campo">
          <label for="usuario">Usuario</label>
          <input type="text" id="usuario" name="usuario" placeholder="admin" required>
        </div>
        <div class="login-campo">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="••••" required>
        </div>
        <button type="submit" class="login-btn">Entrar →</button>
      </form>

      <div class="login-footer">
        <span>金継ぎ</span> KintVinylSugi™
      </div>
    </div>
  </div>
</body>

</html>
