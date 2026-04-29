<?php
session_start();

// si no hay sesion lo mando al login
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] != true) {
  header("Location: login.php");
  exit;
}

// si se ha enviado el formulario del configurador guardo todo en la sesion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // guardo cada campo del formulario en una variable de sesion
  // asi cuando recargue la pagina se mantienen los valores
  $_SESSION['colorPrincipal'] = $_POST['colorPrincipal'];
  $_SESSION['fuente'] = $_POST['fuente'];
  $_SESSION['modo'] = $_POST['modo'];
  $_SESSION['nombreEmpresa'] = $_POST['nombreEmpresa'];
  $_SESSION['descripcion'] = $_POST['descripcion'];

  // uso isset para ver si vienen o no
  if (isset($_POST['chkConcepto'])) {
    $_SESSION['chkConcepto'] = true;
  } else {
    $_SESSION['chkConcepto'] = false;
  }
  if (isset($_POST['chkGaleria'])) {
    $_SESSION['chkGaleria'] = true;
  } else {
    $_SESSION['chkGaleria'] = false;
  }
  if (isset($_POST['chkTaller'])) {
    $_SESSION['chkTaller'] = true;
  } else {
    $_SESSION['chkTaller'] = false;
  }
  if (isset($_POST['chkContacto'])) {
    $_SESSION['chkContacto'] = true;
  } else {
    $_SESSION['chkContacto'] = false;
  }
}

// ahora leo de la sesion los valores que tengo guardados
// si no hay nada guardado pongo un valor por defecto

// color
if (isset($_SESSION['colorPrincipal'])) {
  $colorSesion = $_SESSION['colorPrincipal'];
} else {
  $colorSesion = "#d4af37";
}

// fuente
if (isset($_SESSION['fuente'])) {
  $fuenteSesion = $_SESSION['fuente'];
} else {
  $fuenteSesion = "Inter";
}

// modo oscuro o claro
if (isset($_SESSION['modo'])) {
  $modoSesion = $_SESSION['modo'];
} else {
  $modoSesion = "oscuro";
}

// nombre de la empresa (puede estar vacio)
if (isset($_SESSION['nombreEmpresa'])) {
  $nombreSesion = $_SESSION['nombreEmpresa'];
} else {
  $nombreSesion = "";
}

// descripcion (puede estar vacia)
if (isset($_SESSION['descripcion'])) {
  $descSesion = $_SESSION['descripcion'];
} else {
  $descSesion = "";
}

// secciones visibles - si no esta guardado en sesion pongo true por defecto
if (isset($_SESSION['chkConcepto'])) {
  $verConcepto = $_SESSION['chkConcepto'];
} else {
  $verConcepto = true;
}
if (isset($_SESSION['chkGaleria'])) {
  $verGaleria = $_SESSION['chkGaleria'];
} else {
  $verGaleria = true;
}
if (isset($_SESSION['chkTaller'])) {
  $verTaller = $_SESSION['chkTaller'];
} else {
  $verTaller = true;
}
if (isset($_SESSION['chkContacto'])) {
  $verContacto = $_SESSION['chkContacto'];
} else {
  $verContacto = true;
}

// Datos que uso en varias partes de la pagina.
// Los dejo arriba porque asi no tengo que buscar por todo el html si cambio algo.
$nombre_empresa = "KintVinylSugi™";
$slogan = "El arte de unir vinilos con oro";
$descripcion = "Unimos dos vinilos con oro. El arte japonés del kintsugi llevado a la música.";
$email = "info@kintvinylsugi.com";
$telefono = "+34 612 345 678";
$ciudad = "Madrid, España";
$anio_fundacion = "2024";

// Esto lo aprendi hace poco: date("Y") saca el año actual.
$anio_actual = date("Y");

// Lista de vinilos. Es bastante larga pero la dejo aqui porque luego la paso a JavaScript.
$vinilos = array(
  array("nombre" => "Thriller", "artista" => "Michael Jackson"),
  array("nombre" => "Me muevo como Dios", "artista" => "Rels B"),
  array("nombre" => "Abbey Road", "artista" => "The Beatles"),
  array("nombre" => "Un Verano Sin Ti", "artista" => "Bad Bunny"),
  array("nombre" => "The Dark Side of the Moon", "artista" => "Pink Floyd"),
  array("nombre" => "MOTOMAMI", "artista" => "Rosalía"),
  array("nombre" => "Nevermind", "artista" => "Nirvana"),
  array("nombre" => "El Madrileño", "artista" => "C. Tangana"),
  array("nombre" => "Back in Black", "artista" => "AC/DC"),
  array("nombre" => "YHLQMDLG", "artista" => "Bad Bunny"),
  array("nombre" => "Rumours", "artista" => "Fleetwood Mac"),
  array("nombre" => "Vida Cómoda", "artista" => "Quevedo"),
  array("nombre" => "OK Computer", "artista" => "Radiohead"),
  array("nombre" => "Bohemian Rhapsody", "artista" => "Queen"),
  array("nombre" => "Hotel California", "artista" => "Eagles"),
  array("nombre" => "El Último Tour Del Mundo", "artista" => "Bad Bunny"),
  array("nombre" => "Wish You Were Here", "artista" => "Pink Floyd"),
  array("nombre" => "Las Que No Iban a Salir", "artista" => "Bad Bunny"),
  array("nombre" => "Led Zeppelin IV", "artista" => "Led Zeppelin"),
  array("nombre" => "Donde Quiero Estar", "artista" => "Quevedo"),
  array("nombre" => "Born to Run", "artista" => "Bruce Springsteen"),
  array("nombre" => "Híbrido", "artista" => "Duki"),
  array("nombre" => "The Wall", "artista" => "Pink Floyd"),
  array("nombre" => "Sin Miedo (del Amor y Otros Demonios)", "artista" => "Kali Uchis"),
  array("nombre" => "Appetite for Destruction", "artista" => "Guns N' Roses"),
  array("nombre" => "Cosmogonía", "artista" => "Víctor Jara"),
  array("nombre" => "Master of Puppets", "artista" => "Metallica"),
  array("nombre" => "KG0516", "artista" => "Karol G"),
  array("nombre" => "A Night at the Opera", "artista" => "Queen"),
  array("nombre" => "Salvavida de Hielo", "artista" => "Rels B"),
  array("nombre" => "In Utero", "artista" => "Nirvana"),
  array("nombre" => "Cuando Me Siento Bien", "artista" => "Rels B"),
  array("nombre" => "Purple Rain", "artista" => "Prince"),
  array("nombre" => "Mañana Será Bonito", "artista" => "Karol G"),
  array("nombre" => "The Joshua Tree", "artista" => "U2"),
  array("nombre" => "Afrodisíaco", "artista" => "Rauw Alejandro"),
  array("nombre" => "Paranoid", "artista" => "Black Sabbath"),
  array("nombre" => "Vice Versa", "artista" => "Rauw Alejandro"),
  array("nombre" => "Highway to Hell", "artista" => "AC/DC"),
  array("nombre" => "Bzrp Music Sessions", "artista" => "Bizarrap"),
  array("nombre" => "Sticky Fingers", "artista" => "The Rolling Stones"),
  array("nombre" => "Nadie Sabe Lo Que Va a Pasar Mañana", "artista" => "Bad Bunny"),
  array("nombre" => "Sgt. Pepper's", "artista" => "The Beatles"),
  array("nombre" => "DeBí TiRAR MáS FOToS", "artista" => "Bad Bunny"),
  array("nombre" => "Blonde on Blonde", "artista" => "Bob Dylan"),
  array("nombre" => "Cachita", "artista" => "Rels B"),
  array("nombre" => "Ziggy Stardust", "artista" => "David Bowie"),
  array("nombre" => "Leyendas", "artista" => "Myke Towers"),
  array("nombre" => "Let It Be", "artista" => "The Beatles"),
  array("nombre" => "Mientras No Nos Vemos", "artista" => "Omar Montes"),
);

// Estos son los productos que salen en hot ventas.
// Podria hacerlo a mano en html, pero con foreach practico arrays en PHP.
$hot_ventas = array(
  array("num" => 1, "a" => "Thriller", "b" => "Me muevo como Dios", "artistas" => "Michael Jackson + Rels B", "precio" => "49,99€"),
  array("num" => 2, "a" => "Abbey Road", "b" => "Un Verano Sin Ti", "artistas" => "The Beatles + Bad Bunny", "precio" => "49,99€"),
  array("num" => 3, "a" => "The Dark Side", "b" => "MOTOMAMI", "artistas" => "Pink Floyd + Rosalía", "precio" => "54,99€"),
  array("num" => 4, "a" => "Nevermind", "b" => "El Madrileño", "artistas" => "Nirvana + C. Tangana", "precio" => "49,99€"),
  array("num" => 5, "a" => "Back in Black", "b" => "YHLQMDLG", "artistas" => "AC/DC + Bad Bunny", "precio" => "49,99€"),
  array("num" => 6, "a" => "Rumours", "b" => "Vida Cómoda", "artistas" => "Fleetwood Mac + Quevedo", "precio" => "49,99€"),
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($nombre_empresa); ?> | <?php echo htmlspecialchars($slogan); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($descripcion); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link id="fontLink"
    href="https://fonts.googleapis.com/css2?family=<?php echo urlencode($fuenteSesion); ?>:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    :root {
      --color-principal: <?php echo htmlspecialchars($colorSesion); ?>;
      --fuente-texto: '<?php echo htmlspecialchars($fuenteSesion); ?>', sans-serif;
    }
  </style>
</head>

<body class="<?php echo $modoSesion === 'claro' ? 'modo-claro' : ''; ?>">

  <!-- MODAL CONFIGURADOR -->
  <div class="modal-overlay oculto" id="modalConfig">
    <div class="modal-caja">
      <form method="POST" action="index.php">
      <div class="modal-head">
        <div class="modal-head-izq">
          <span class="modal-badge">Config</span>
          <div>
            <div class="modal-titulo">Personaliza tu web</div>
            <div class="modal-subtitulo">Configura y pulsa "Aplicar" para guardar en sesión</div>
          </div>
        </div>
        <button type="submit" class="modal-btn-ver">Aplicar configuración →</button>
      </div>
      <input type="hidden" name="modo" id="modoHidden" value="<?php echo htmlspecialchars($modoSesion); ?>">

      <div class="config-cuerpo">

        <!-- grupo 1: datos de la empresa -->
        <div class="config-grupo">
          <p class="config-grupo-tit">Empresa</p>

          <div class="config-campo">
            <label>Logotipo</label>
            <div class="logo-drop" id="logoDrop">
              <input type="file" id="logoInput" accept="image/*" onchange="subirLogo(event)">
              <img id="logoPreview" src="" alt="Preview logo">
              <p id="logoDropTxt">Haz clic o arrastra tu logo aquí</p>
            </div>
          </div>

          <div class="config-campo">
            <label for="inputNombre">Nombre de la empresa</label>
            <input type="text" id="inputNombre" name="nombreEmpresa" placeholder="<?php echo htmlspecialchars($nombre_empresa); ?>"
              value="<?php echo htmlspecialchars($nombreSesion); ?>" oninput="actualizarNombre(this.value)">
          </div>

          <div class="config-campo">
            <label for="inputDesc">Descripción (hero)</label>
            <textarea id="inputDesc" name="descripcion" placeholder="<?php echo htmlspecialchars($descripcion); ?>"
              oninput="actualizarDesc(this.value)"><?php echo htmlspecialchars($descSesion); ?></textarea>
          </div>
        </div>

        <!-- grupo 2: que secciones se ven -->
        <div class="config-grupo">
          <p class="config-grupo-tit">Secciones visibles</p>
          <p style="font-size:0.72em;color:var(--txt-3);margin-bottom:18px;">Solo se muestran las secciones marcadas</p>

          <label class="check-item">
            <input type="checkbox" id="chkConcepto" name="chkConcepto" value="1" <?php echo $verConcepto ? 'checked' : ''; ?>
              onchange="toggleSeccion('quees', ['navConcepto','menuConcepto','footerConcepto'], this.checked)">
            <span>Quiénes somos</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkGaleria" name="chkGaleria" value="1" <?php echo $verGaleria ? 'checked' : ''; ?>
              onchange="toggleSeccion('galeriaGroup', ['navGaleria','menuGaleria','footerGaleria'], this.checked)">
            <span>Galería / Hot Ventas</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkTaller" name="chkTaller" value="1" <?php echo $verTaller ? 'checked' : ''; ?>
              onchange="toggleSeccion('taller', ['navTaller','menuTaller','footerTaller'], this.checked)">
            <span>Taller</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkContacto" name="chkContacto" value="1" <?php echo $verContacto ? 'checked' : ''; ?>
              onchange="toggleSeccion('contactoGroup', ['navContacto','menuContacto'], this.checked)">
            <span>Contacto / Newsletter</span>
          </label>
        </div>

        <!-- grupo 3: estilo visual -->
        <div class="config-grupo">
          <p class="config-grupo-tit">Estilo</p>

          <div class="config-campo">
            <label>Color principal</label>
            <div class="color-wrap">
              <input type="color" id="colorPicker" name="colorPrincipal" value="<?php echo htmlspecialchars($colorSesion); ?>" oninput="actualizarColor(this.value)">
              <span class="color-hex" id="colorHex"><?php echo htmlspecialchars($colorSesion); ?></span>
            </div>
          </div>

          <div class="config-campo">
            <label for="fontSelect">Fuente de párrafos</label>
            <select id="fontSelect" name="fuente" onchange="actualizarFuente(this.value)">
              <option value="Inter" <?php echo $fuenteSesion === 'Inter' ? 'selected' : ''; ?>>Inter</option>
              <option value="Montserrat" <?php echo $fuenteSesion === 'Montserrat' ? 'selected' : ''; ?>>Montserrat</option>
              <option value="Raleway" <?php echo $fuenteSesion === 'Raleway' ? 'selected' : ''; ?>>Raleway</option>
              <option value="Roboto" <?php echo $fuenteSesion === 'Roboto' ? 'selected' : ''; ?>>Roboto</option>
              <option value="Lato" <?php echo $fuenteSesion === 'Lato' ? 'selected' : ''; ?>>Lato</option>
              <option value="Poppins" <?php echo $fuenteSesion === 'Poppins' ? 'selected' : ''; ?>>Poppins</option>
              <option value="Oswald" <?php echo $fuenteSesion === 'Oswald' ? 'selected' : ''; ?>>Oswald</option>
              <option value="Playfair Display" <?php echo $fuenteSesion === 'Playfair Display' ? 'selected' : ''; ?>>Playfair Display</option>
            </select>
          </div>

          <div class="config-campo">
            <label>Modo</label>
            <div class="modo-toggle">
              <button type="button" class="modo-btn <?php echo $modoSesion !== 'claro' ? 'activo' : ''; ?>" id="btnOscuro" onclick="setModo('oscuro')">🌙 Oscuro</button>
              <button type="button" class="modo-btn <?php echo $modoSesion === 'claro' ? 'activo' : ''; ?>" id="btnClaro" onclick="setModo('claro')">☀️ Claro</button>
            </div>
          </div>
        </div>

      </div>
      </form>
    </div>
  </div>

  <!-- boton para volver a abrir el configurador -->
  <button class="btn-editar" id="btnEditar" onclick="abrirModal()" title="Editar configuración">⚙</button>

  <!-- HEADER -->
  <header id="header">
    <div class="header-inner">
      <div class="logo">
        <img id="headerLogoImg" class="logo-img-header" src="" alt="Logo">
        <a href="#" id="headerLogoText"><?php echo htmlspecialchars($nombre_empresa); ?></a>
      </div>
      <nav id="nav">
        <a href="#quees" id="navConcepto" <?php echo !$verConcepto ? 'style="display:none"' : ''; ?>>Concepto</a>
        <a href="#hot" id="navGaleria" <?php echo !$verGaleria ? 'style="display:none"' : ''; ?>>Hot Ventas</a>
        <a href="#taller" id="navTaller" <?php echo !$verTaller ? 'style="display:none"' : ''; ?>>Taller</a>
        <a href="#contacto" id="navContacto" <?php echo !$verContacto ? 'style="display:none"' : ''; ?>>Contacto</a>
        <a href="logout.php" style="color:var(--color-principal);font-weight:600;">Cerrar sesión</a>
      </nav>
      <div class="header-icons">
        <button class="menu-btn" id="menuBtn" onclick="toggleMenu()">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
    <!-- menu movil -->
    <div class="menu-movil" id="menuMovil">
      <a href="#quees" id="menuConcepto" onclick="toggleMenu()">Concepto</a>
      <a href="#hot" id="menuGaleria" onclick="toggleMenu()">Hot Ventas</a>
      <a href="#taller" id="menuTaller" onclick="toggleMenu()">Taller</a>
      <a href="#contacto" id="menuContacto" onclick="toggleMenu()">Contacto</a>
      <a href="logout.php" style="color:var(--color-principal);font-weight:600;">Cerrar sesión</a>
    </div>
  </header>

  <!-- HERO -->
  <div class="hero-wrapper" id="heroWrapper">
    <section class="hero" id="hero">
      <div class="hero-bg" id="heroBg"></div>
      <div class="hero-inner">
        <div class="hero-content">
          <p class="hero-tag">金継ぎ × VINYL</p>
          <h1 class="hero-titulo">
            No es un producto.<br>
            <span class="hero-accent">Es Cultura.</span>
          </h1>
          <p class="hero-desc" id="heroDesc"><?php echo htmlspecialchars($descripcion); ?></p>
          <a href="#taller" class="hero-btn">Crea el tuyo</a>
        </div>
      </div>
    </section>
  </div>

  <!-- MARQUEE -->
  <div class="marquee-wrapper">
    <div class="marquee-track">
      <span>KINTSUGI × VINYL — UNIMOS MÚSICA CON ORO — CADA GRIETA CUENTA UNA HISTORIA — DOS MUNDOS, UNA PIEZA — </span>
      <span>KINTSUGI × VINYL — UNIMOS MÚSICA CON ORO — CADA GRIETA CUENTA UNA HISTORIA — DOS MUNDOS, UNA PIEZA — </span>
    </div>
  </div>

  <!-- QUIENES SOMOS -->
  <section id="quees" class="seccion-concepto" <?php echo !$verConcepto ? 'style="display:none"' : ''; ?>>
    <div class="concepto-header">
      <p class="seccion-tag">01 — El concepto</p>
      <h2 class="seccion-titulo">¿Qué es <?php echo htmlspecialchars($nombre_empresa); ?>?</h2>
    </div>
    <div class="concepto-grid">
      <div class="concepto-bloque">
        <h3>金継ぎ Kintsugi</h3>
        <p>El kintsugi es el arte japonés de reparar cerámica rota con oro o plata. En vez de esconder las grietas, las
          convierte en algo más bonito. La filosofía es que lo roto puede ser más valioso que lo original.</p>
      </div>
      <div class="concepto-bloque">
        <h3>Vinyl × Oro</h3>
        <p>Nosotros cogimos esa idea y la llevamos a los vinilos. <?php echo htmlspecialchars($nombre_empresa); ?> es
          unir dos vinilos que por separado ya son increíbles, pero juntos, unidos por una línea de oro... se convierten
          en algo único.</p>
      </div>
      <div class="concepto-bloque destacado">
        <h3>El ejemplo</h3>
        <p>Imagina <em>Thriller</em> de Michael Jackson unido con <em>Me muevo como Dios</em> de Rels B. Dos mundos, dos
          épocas, dos estilos... conectados por oro. Eso es <?php echo htmlspecialchars($nombre_empresa); ?>.</p>
      </div>
    </div>
    <div class="origen-bloque">
      <div class="origen-contenido">
        <p class="seccion-tag">El Origen</p>
        <h3>¿Dónde surgió la idea?</h3>
        <p>Todo empezó en un mercadillo de segunda mano. Encontramos dos vinilos rotos por la mitad. Uno de Pink Floyd y
          otro de Bad Bunny. Los pusimos juntos como broma... y quedó increíble. Ahí nació
          <?php echo htmlspecialchars($nombre_empresa); ?>: la idea de que la música no tiene fronteras, ni épocas, ni
          géneros. Solo necesita una línea de oro para unirse.</p>
      </div>
    </div>
  </section>

  <!-- GALERIA Y HOT VENTAS - envuelto en div para poder ocultarlo con el configurador -->
  <div id="galeriaGroup" <?php echo !$verGaleria ? 'style="display:none"' : ''; ?>>
    <section id="hot" class="seccion-hot">
      <div class="hot-header">
        <p class="seccion-tag">02 — Boutique™</p>
        <h2 class="seccion-titulo">Hot Ventas</h2>
        <p class="hot-sub">Los vinilos personalizados más vendidos de este mes</p>
      </div>
      <div class="hot-slider-wrapper">
        <button class="slider-btn slider-prev" id="sliderPrev" onclick="moverSlider(-1)">←</button>
        <div class="hot-slider" id="hotSlider">
          <?php foreach ($hot_ventas as $producto) { ?>
            <div class="producto-card">
              <div class="producto-badge">#<?php echo $producto["num"]; ?></div>
              <div class="producto-visual">
                <div class="prod-medio prod-izq"><?php echo htmlspecialchars($producto["a"]); ?></div>
                <div class="prod-oro"></div>
                <div class="prod-medio prod-der"><?php echo htmlspecialchars($producto["b"]); ?></div>
              </div>
              <div class="producto-info">
                <h3><?php echo htmlspecialchars($producto["a"]); ?> × <?php echo htmlspecialchars($producto["b"]); ?></h3>
                <p class="producto-artistas"><?php echo htmlspecialchars($producto["artistas"]); ?></p>
                <p class="producto-precio"><?php echo htmlspecialchars($producto["precio"]); ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
        <button class="slider-btn slider-next" id="sliderNext" onclick="moverSlider(1)">→</button>
      </div>
    </section>

    <section class="seccion-frase">
      <div class="frase-contenido">
        <p>Impulsamos la experiencia cultural a través de la música, el arte y el oro.</p>
        <a href="#taller" class="frase-btn">Ir al Taller</a>
      </div>
    </section>
  </div>

  <!-- TALLER -->
  <section id="taller" class="seccion-taller" <?php echo !$verTaller ? 'style="display:none"' : ''; ?>>
    <div class="taller-header">
      <p class="seccion-tag">03 — Workshop</p>
      <h2 class="seccion-titulo">El Taller</h2>
      <p class="taller-sub">Crea tu propio vinilo <?php echo htmlspecialchars($nombre_empresa); ?>. Elige dos, únelos
        con oro.</p>
    </div>
    <div class="buscador-wrap">
      <input type="text" id="buscador" placeholder="Buscar vinilo por nombre o artista...">
    </div>
    <div class="vinilos-grid" id="vinilosGrid"></div>
    <div class="seleccion-area">
      <div class="sel-box sel-a" id="seleccionA">
        <span class="sel-label">A</span>
        <p class="sel-nombre" id="nombreA">Selecciona un vinilo</p>
        <p class="sel-artista" id="artistaA"></p>
      </div>
      <div class="sel-union">
        <div class="sel-oro-line"></div>
        <button id="btnUnir" disabled onclick="unir()">UNIR CON ORO</button>
        <div class="sel-oro-line"></div>
      </div>
      <div class="sel-box sel-b" id="seleccionB">
        <span class="sel-label">B</span>
        <p class="sel-nombre" id="nombreB">Selecciona un vinilo</p>
        <p class="sel-artista" id="artistaB"></p>
      </div>
    </div>
    <div class="resultado" id="resultado" style="display:none;">
      <h3>Tu vinilo <?php echo htmlspecialchars($nombre_empresa); ?></h3>
      <div class="res-escenario">
        <div class="res-spinner" id="resSpinner">
          <div class="res-mitad res-mitad-izq" id="resMitadIzq">
            <div class="res-disco">
              <div class="res-surcos"></div>
              <div class="res-label res-label-a" id="resLabelA">A</div>
            </div>
          </div>
          <div class="res-kintsugi" id="resKintsugi">
            <div class="res-grieta res-grieta-1"></div>
            <div class="res-grieta res-grieta-2"></div>
            <div class="res-grieta res-grieta-3"></div>
          </div>
          <div class="res-mitad res-mitad-der" id="resMitadDer">
            <div class="res-disco">
              <div class="res-surcos"></div>
              <div class="res-label res-label-b" id="resLabelB">B</div>
            </div>
          </div>
        </div>
      </div>
      <p id="resultadoTexto"></p>
      <p class="resultado-precio">49,99€</p>
      <button id="btnReset" onclick="resetear()">Crear otro</button>
    </div>
  </section>

  <!-- CONTACTO / NEWSLETTER -->
  <div id="contactoGroup" <?php echo !$verContacto ? 'style="display:none"' : ''; ?>>
    <section class="seccion-newsletter" id="contacto">
      <div class="newsletter-inner">
        <h3>Únete a la newsletter de <?php echo htmlspecialchars($nombre_empresa); ?></h3>
        <p>Recibe las novedades, nuevos drops y ofertas exclusivas.</p>
        <div class="newsletter-form">
          <input type="email" placeholder="tu@email.com" id="emailInput">
          <button onclick="suscribir()">→</button>
        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <footer>
    <div class="footer-grid">
      <div class="footer-col">
        <h4 id="footerNombre"><?php echo htmlspecialchars($nombre_empresa); ?></h4>
        <p>Unimos vinilos con oro desde <?php echo $anio_fundacion; ?>.</p>
        <p>El arte japonés del kintsugi llevado a la música.</p>
      </div>
      <div class="footer-col">
        <h4>Contacto</h4>
        <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
        <a href="tel:<?php echo htmlspecialchars($telefono); ?>"><?php echo htmlspecialchars($telefono); ?></a>
        <a href="#"><?php echo htmlspecialchars($ciudad); ?></a>
      </div>
      <div class="footer-col">
        <h4>Links</h4>
        <a href="#quees" id="footerConcepto">Concepto</a>
        <a href="#hot" id="footerGaleria">Hot Ventas</a>
        <a href="#taller" id="footerTaller">Taller</a>
      </div>
      <div class="footer-col">
        <h4>Social</h4>
        <div class="footer-redes">
          <a href="#" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="#" title="TikTok">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.77a8.28 8.28 0 0 0 4.76 1.5v-3.4a4.85 4.85 0 0 1-1-.18z" />
            </svg>
          </a>
          <a href="#" title="Twitter / X">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <!-- date('Y') me lo enseñaron en clase, devuelve el año actual solo -->
      <p><?php echo htmlspecialchars($nombre_empresa); ?> © <?php echo $anio_actual; ?> — Hecho con oro</p>
    </div>
  </footer>

  <script>
    // los vinilos los tengo en php arriba y con json_encode los paso aqui al javascript
    // tardé un rato en entender como funcionaba pero al final es bastante util
    var vinilos = <?php echo json_encode($vinilos, JSON_UNESCAPED_UNICODE); ?>;

    var viniloA = null, viniloB = null, indiceA = null, indiceB = null;

    function pintarVinilos() {
      var html = "";
      for (var i = 0; i < vinilos.length; i++) {
        html += '<div class="vinilo-card" id="card' + i + '" onclick="elegir(' + i + ')">';
        html += '<div class="disco-icono">💿</div>';
        html += '<div class="vinilo-nombre">' + vinilos[i].nombre + '</div>';
        html += '<div class="vinilo-artista">' + vinilos[i].artista + '</div>';
        html += '</div>';
      }
      document.getElementById("vinilosGrid").innerHTML = html;
    }
    pintarVinilos();

    function elegir(i) {
      if (viniloA == null) {
        viniloA = vinilos[i]; indiceA = i;
        document.getElementById("card" + i).className = "vinilo-card seleccionado-a";
        document.getElementById("nombreA").innerHTML = vinilos[i].nombre;
        document.getElementById("artistaA").innerHTML = vinilos[i].artista;
      } else if (viniloB == null) {
        if (i == indiceA) { alert("No puedes elegir el mismo vinilo dos veces!"); return; }
        viniloB = vinilos[i]; indiceB = i;
        document.getElementById("card" + i).className = "vinilo-card seleccionado-b";
        document.getElementById("nombreB").innerHTML = vinilos[i].nombre;
        document.getElementById("artistaB").innerHTML = vinilos[i].artista;
        document.getElementById("btnUnir").disabled = false;
      } else {
        alert("Ya tienes dos vinilos seleccionados! Dale a UNIR CON ORO o crea otro.");
      }
    }

    document.getElementById("buscador").oninput = function () {
      var txt = this.value.toLowerCase();
      for (var i = 0; i < vinilos.length; i++) {
        var ok = vinilos[i].nombre.toLowerCase().indexOf(txt) != -1 || vinilos[i].artista.toLowerCase().indexOf(txt) != -1;
        document.getElementById("card" + i).style.display = ok ? "" : "none";
      }
    };

    function unir() {
      if (!viniloA || !viniloB) { alert("Elige dos vinilos primero!"); return; }
      document.getElementById("resLabelA").innerHTML = viniloA.nombre;
      document.getElementById("resLabelB").innerHTML = viniloB.nombre;
      document.getElementById("resultadoTexto").innerHTML = viniloA.nombre + " (" + viniloA.artista + ") × " + viniloB.nombre + " (" + viniloB.artista + ") — Unidos con oro";
      document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq";
      document.getElementById("resMitadDer").className = "res-mitad res-mitad-der";
      document.getElementById("resKintsugi").className = "res-kintsugi";
      document.getElementById("resSpinner").className = "res-spinner";
      document.getElementById("resultado").style.display = "block";
      document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
      document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq visible";
      document.getElementById("resMitadDer").className = "res-mitad res-mitad-der visible";
      document.getElementById("resKintsugi").className = "res-kintsugi visible";
    }

    function resetear() {
      if (indiceA != null) document.getElementById("card" + indiceA).className = "vinilo-card";
      if (indiceB != null) document.getElementById("card" + indiceB).className = "vinilo-card";
      viniloA = viniloB = indiceA = indiceB = null;
      document.getElementById("nombreA").innerHTML = "Selecciona un vinilo";
      document.getElementById("artistaA").innerHTML = "";
      document.getElementById("nombreB").innerHTML = "Selecciona un vinilo";
      document.getElementById("artistaB").innerHTML = "";
      document.getElementById("btnUnir").disabled = true;
      document.getElementById("resultado").style.display = "none";
      document.getElementById("buscador").value = "";
      document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq";
      document.getElementById("resMitadDer").className = "res-mitad res-mitad-der";
      document.getElementById("resKintsugi").className = "res-kintsugi";
      document.getElementById("resSpinner").className = "res-spinner";
      for (var i = 0; i < vinilos.length; i++) document.getElementById("card" + i).style.display = "";
    }

    function toggleMenu() {
      var m = document.getElementById("menuMovil");
      m.className = m.className == "menu-movil abierto" ? "menu-movil" : "menu-movil abierto";
    }

    function moverSlider(dir) {
      document.getElementById("hotSlider").scrollLeft += 300 * dir;
    }

    var headerEl = document.getElementById("header");
    var heroBgEl = document.getElementById("heroBg");
    var heroWrapEl = document.getElementById("heroWrapper");

    window.onscroll = function () {
      headerEl.style.borderBottomColor = window.scrollY > 50 ? "rgba(212,175,55,0.15)" : "rgba(255,255,255,0.06)";
      var scrollMax = heroWrapEl.offsetHeight - window.innerHeight;
      if (scrollMax > 0) {
        var prog = (window.scrollY - heroWrapEl.offsetTop) / scrollMax;
        heroBgEl.style.opacity = Math.max(0, Math.min(1, prog));
      }
    };

    function suscribir() {
      var e = document.getElementById("emailInput").value;
      if (!e || e.indexOf("@") == -1) { alert("Pon un email válido!"); }
      else { alert("Gracias por suscribirte! " + e); document.getElementById("emailInput").value = ""; }
    }

    // --- CONFIGURADOR ---

    function cerrarModal() {
      var modal = document.getElementById("modalConfig");
      modal.style.display = "none";
      document.getElementById("btnEditar").classList.add("visible");
      document.body.style.overflow = "";
    }

    function abrirModal() {
      var modal = document.getElementById("modalConfig");
      modal.style.display = "flex";
      document.getElementById("btnEditar").classList.remove("visible");
      document.body.style.overflow = "hidden";
    }

    // solo abro el modal automaticamente si NO es un POST
    // asi cuando le da a aplicar configuracion se cierra y se ve la web
    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
    window.addEventListener("load", function () {
      abrirModal();
    });
    <?php } else { ?>
    // si es POST, muestro el boton de editar para que pueda volver a abrir el modal
    window.addEventListener("load", function () {
      document.getElementById("btnEditar").classList.add("visible");
    });
    <?php } ?>

    function subirLogo(e) {
      var file = e.target.files[0];
      if (!file) return;
      var reader = new FileReader();
      reader.onload = function (ev) {
        var src = ev.target.result;
        var prev = document.getElementById("logoPreview");
        prev.src = src;
        prev.style.display = "block";
        document.getElementById("logoDropTxt").textContent = file.name;
        var headerImg = document.getElementById("headerLogoImg");
        var headerText = document.getElementById("headerLogoText");
        headerImg.src = src;
        headerImg.style.display = "inline-block";
        headerText.style.display = "none";
      };
      reader.readAsDataURL(file);
    }

    function actualizarNombre(val) {
      var nombre = val.trim() || "<?php echo htmlspecialchars($nombre_empresa, ENT_QUOTES); ?>";
      document.getElementById("headerLogoText").innerHTML = nombre;
      document.getElementById("footerNombre").innerHTML = nombre;
    }

    function actualizarDesc(val) {
      var defecto = "<?php echo htmlspecialchars($descripcion, ENT_QUOTES); ?>";
      document.getElementById("heroDesc").textContent = val || defecto;
    }

    function toggleSeccion(seccionId, navIds, visible) {
      var el = document.getElementById(seccionId);
      if (el) el.style.display = visible ? "" : "none";
      for (var i = 0; i < navIds.length; i++) {
        var n = document.getElementById(navIds[i]);
        if (n) n.style.display = visible ? "" : "none";
      }
    }

    function actualizarColor(val) {
      document.documentElement.style.setProperty("--color-principal", val);
      document.documentElement.style.setProperty("--color-principal-hover", aclarar(val, 20));
      document.getElementById("colorHex").textContent = val;
    }

    // esta funcion la busqué en internet para aclarar el color del hover
    function aclarar(hex, cantidad) {
      var r = Math.min(255, parseInt(hex.slice(1, 3), 16) + cantidad);
      var g = Math.min(255, parseInt(hex.slice(3, 5), 16) + cantidad);
      var b = Math.min(255, parseInt(hex.slice(5, 7), 16) + cantidad);
      return "#" + r.toString(16).padStart(2, "0") + g.toString(16).padStart(2, "0") + b.toString(16).padStart(2, "0");
    }

    var fuentesCargadas = { "Inter": true };

    function actualizarFuente(fuente) {
      if (!fuentesCargadas[fuente]) {
        var link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = "https://fonts.googleapis.com/css2?family=" + encodeURIComponent(fuente) + ":wght@300;400;500;600;700;800;900&display=swap";
        document.head.appendChild(link);
        fuentesCargadas[fuente] = true;
      }
      document.documentElement.style.setProperty("--fuente-texto", "'" + fuente + "', sans-serif");
    }

    function setModo(modo) {
      document.getElementById("modoHidden").value = modo;
      if (modo === "claro") {
        document.body.classList.add("modo-claro");
        document.getElementById("btnClaro").classList.add("activo");
        document.getElementById("btnOscuro").classList.remove("activo");
      } else {
        document.body.classList.remove("modo-claro");
        document.getElementById("btnOscuro").classList.add("activo");
        document.getElementById("btnClaro").classList.remove("activo");
      }
    }
  </script>
</body>

</html>