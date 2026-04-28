<?php
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
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --color-principal: #d4af37;
      --color-principal-hover: #e8c84a;
      --fuente-texto: 'Inter', 'Segoe UI', Arial, sans-serif;

      --bg-body: #000;
      --bg-card: #0a0a0a;
      --bg-card-2: #111;
      --bg-header: rgba(0, 0, 0, 0.9);
      --border: rgba(255, 255, 255, 0.06);
      --txt-1: #fff;
      --txt-2: #888;
      --txt-3: #666;
      --txt-4: #555;
      --txt-5: #444;
      --txt-6: #333;
    }

    /* modo claro - lo añadi cuando aprendi las variables css */
    body.modo-claro {
      --bg-body: #f5f4f0;
      --bg-card: #ebebeb;
      --bg-card-2: #e0dfd9;
      --bg-header: rgba(245, 244, 240, 0.95);
      --border: rgba(0, 0, 0, 0.08);
      --txt-1: #111;
      --txt-2: #555;
      --txt-3: #777;
      --txt-4: #888;
      --txt-5: #aaa;
      --txt-6: #bbb;
    }

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: var(--fuente-texto);
      background-color: var(--bg-body);
      color: var(--txt-1);
      line-height: 1.6;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* === MODAL DEL CONFIGURADOR === */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 99999;
      background: rgba(0, 0, 0, 0.85);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .modal-overlay.oculto {
      display: none;
    }

    .modal-caja {
      background: #1a1a1a;
      border: 2px solid var(--color-principal);
      width: 100%;
      max-width: 960px;
      max-height: 90vh;
      overflow-y: auto;
    }

    .modal-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 22px 36px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .modal-head-izq {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .modal-badge {
      background: var(--color-principal);
      color: #000;
      font-size: 0.6em;
      font-weight: 800;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 4px 10px;
    }

    .modal-titulo {
      font-size: 1em;
      font-weight: 700;
      color: #fff;
    }

    .modal-subtitulo {
      font-size: 0.75em;
      color: #666;
      margin-top: 2px;
    }

    .modal-btn-ver {
      padding: 11px 28px;
      background: var(--color-principal);
      color: #000;
      border: none;
      font-weight: 700;
      font-size: 0.85em;
      letter-spacing: 0.5px;
      cursor: pointer;
      font-family: var(--fuente-texto);
      white-space: nowrap;
    }

    .modal-btn-ver:hover {
      background: var(--color-principal-hover);
    }

    .config-cuerpo {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }

    .config-grupo {
      padding: 28px 40px;
      border-right: 1px solid var(--border);
    }

    .config-grupo:last-child {
      border-right: none;
    }

    .config-grupo-tit {
      font-size: 0.62em;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: var(--color-principal);
      margin-bottom: 20px;
    }

    .config-campo {
      margin-bottom: 16px;
    }

    .config-campo label {
      display: block;
      font-size: 0.72em;
      color: var(--txt-2);
      margin-bottom: 6px;
      font-weight: 500;
    }

    .config-campo input[type="text"],
    .config-campo textarea,
    .config-campo select {
      width: 100%;
      padding: 9px 12px;
      background: var(--bg-card-2);
      border: 1px solid var(--border);
      color: var(--txt-1);
      font-family: var(--fuente-texto);
      font-size: 0.83em;
      outline: none;
      resize: none;
    }

    .config-campo input[type="text"]:focus {
      border-color: var(--color-principal);
    }

    .config-campo textarea:focus {
      border-color: var(--color-principal);
    }

    .config-campo select:focus {
      border-color: var(--color-principal);
    }

    .config-campo textarea {
      height: 65px;
    }

    .config-campo select option {
      background: #111;
    }

    .logo-drop {
      border: 1px dashed #555;
      padding: 14px;
      text-align: center;
      cursor: pointer;
    }

    body.modo-claro .logo-drop {
      border-color: #999;
    }

    .logo-drop:hover {
      border-color: var(--color-principal);
    }

    .logo-drop input[type="file"] {
      width: 100%;
      font-size: 0.75em;
      margin-bottom: 8px;
      cursor: pointer;
    }

    .logo-drop img {
      max-height: 42px;
      max-width: 100%;
      display: none;
      margin: 0 auto 6px;
    }

    .logo-drop p {
      font-size: 0.72em;
      color: var(--txt-3);
    }

    .check-item {
      display: block;
      margin-bottom: 14px;
      cursor: pointer;
    }

    .check-item input[type="checkbox"] {
      width: 15px;
      height: 15px;
      accent-color: var(--color-principal);
      cursor: pointer;
      margin-right: 8px;
    }

    .check-item span {
      font-size: 0.85em;
      color: var(--txt-2);
    }

    .color-wrap {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .color-wrap input[type="color"] {
      width: 45px;
      height: 35px;
      border: 1px solid var(--border);
      background: var(--bg-card-2);
      cursor: pointer;
      padding: 2px;
    }

    .color-hex {
      font-size: 0.8em;
      color: var(--txt-2);
      font-family: monospace;
    }

    .modo-toggle {
      display: flex;
      border: 1px solid var(--border);
    }

    .modo-btn {
      width: 50%;
      padding: 8px 12px;
      background: transparent;
      border: none;
      color: var(--txt-3);
      font-size: 0.78em;
      font-weight: 500;
      cursor: pointer;
      font-family: var(--fuente-texto);
    }

    .modo-btn.activo {
      background: var(--color-principal);
      color: #000;
      font-weight: 700;
    }

    /* boton para volver a abrir el configurador */
    .btn-editar {
      position: fixed;
      bottom: 28px;
      right: 28px;
      z-index: 1500;
      width: 48px;
      height: 48px;
      background: var(--color-principal);
      color: #000;
      border: none;
      border-radius: 50%;
      font-size: 1.2em;
      cursor: pointer;
      display: none;
    }

    .btn-editar.visible {
      display: block;
    }

    .btn-editar:hover {
      background: var(--color-principal-hover);
    }

    /* === HEADER === */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
      background-color: var(--bg-header);
      border-bottom: 1px solid var(--border);
    }

    .header-inner {
      max-width: 1400px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 40px;
    }

    .logo a {
      font-size: 1.2em;
      font-weight: 700;
      color: var(--txt-1);
    }

    .logo .tm {
      font-size: 0.6em;
      color: var(--color-principal);
    }

    .logo-img-header {
      max-height: 34px;
      max-width: 130px;
      display: none;
    }

    nav {
      display: flex;
      gap: 32px;
    }

    nav a {
      font-size: 0.85em;
      font-weight: 400;
      color: var(--txt-3);
    }

    nav a:hover {
      color: var(--txt-1);
    }

    .header-icons {
      display: none;
    }

    .menu-btn {
      background: none;
      border: none;
      cursor: pointer;
      padding: 5px;
    }

    .menu-btn span {
      display: block;
      width: 22px;
      height: 2px;
      background-color: var(--txt-1);
      margin-bottom: 4px;
    }

    .menu-movil {
      display: none;
      padding: 20px 40px 30px;
      border-top: 1px solid var(--border);
    }

    .menu-movil a {
      display: block;
      font-size: 1.1em;
      color: var(--txt-2);
      margin-bottom: 15px;
    }

    .menu-movil a:hover {
      color: var(--txt-1);
    }

    .menu-movil.abierto {
      display: block;
    }

    /* === HERO === */
    .hero-wrapper {
      height: 200vh;
      position: relative;
    }

    .hero {
      position: sticky;
      top: 0;
      height: 100vh;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('hero-bg.png');
      background-size: cover;
      background-position: center;
      opacity: 0;
      z-index: 1;
    }

    .hero-inner {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      align-items: center;
      padding: 0 40px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .hero-content {
      max-width: 700px;
    }

    .hero-tag {
      font-size: 0.8em;
      color: var(--color-principal);
      text-transform: uppercase;
      margin-bottom: 24px;
      font-weight: 500;
    }

    .hero-titulo {
      font-size: 5.5em;
      font-weight: 800;
      line-height: 1.05;
      margin-bottom: 24px;
    }

    .hero-accent {
      color: var(--color-principal);
    }

    .hero-desc {
      font-family: var(--fuente-texto);
      font-size: 1.1em;
      color: var(--txt-2);
      margin-bottom: 40px;
      line-height: 1.7;
      max-width: 440px;
    }

    .hero-btn {
      display: inline-block;
      padding: 14px 36px;
      background-color: var(--color-principal);
      color: #000;
      font-weight: 600;
      font-size: 0.9em;
    }

    .hero-btn:hover {
      background-color: var(--color-principal-hover);
    }

    /* === MARQUEE === */
    .marquee-wrapper {
      overflow: hidden;
      background-color: var(--color-principal);
      padding: 14px 0;
    }

    .marquee-track {
      display: flex;
      white-space: nowrap;
    }

    .marquee-track span {
      color: #000;
      font-size: 0.8em;
      font-weight: 700;
      text-transform: uppercase;
      padding-right: 10px;
    }

    .seccion-tag {
      font-size: 0.75em;
      color: var(--color-principal);
      text-transform: uppercase;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .seccion-titulo {
      font-size: 3em;
      font-weight: 800;
      margin-bottom: 16px;
    }

    /* === CONCEPTO === */
    .seccion-concepto {
      max-width: 1200px;
      margin: 0 auto;
      padding: 100px 40px;
    }

    .concepto-header {
      margin-bottom: 60px;
    }

    .concepto-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin-bottom: 80px;
    }

    .concepto-bloque {
      background-color: var(--bg-card);
      border: 1px solid var(--border);
      padding: 40px 30px;
    }

    .concepto-bloque:hover {
      border-color: var(--color-principal);
    }

    .concepto-bloque h3 {
      font-size: 1.1em;
      font-weight: 600;
      margin-bottom: 16px;
      color: var(--color-principal);
    }

    .concepto-bloque p {
      font-family: var(--fuente-texto);
      color: var(--txt-2);
      font-size: 0.95em;
      line-height: 1.7;
    }

    .concepto-bloque.destacado {
      background-color: var(--color-principal);
      border-color: var(--color-principal);
    }

    .concepto-bloque.destacado h3 {
      color: #000;
    }

    .concepto-bloque.destacado p {
      color: #333;
    }

    .concepto-bloque.destacado em {
      font-weight: 600;
    }

    .origen-bloque {
      background-color: var(--bg-card);
      border: 1px solid var(--border);
      padding: 60px;
      border-left: 4px solid var(--color-principal);
    }

    .origen-bloque .seccion-tag {
      margin-bottom: 12px;
    }

    .origen-bloque h3 {
      font-size: 1.8em;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .origen-bloque p {
      font-family: var(--fuente-texto);
      color: var(--txt-2);
      font-size: 1em;
      line-height: 1.8;
      max-width: 700px;
    }

    /* === HOT VENTAS === */
    .seccion-hot {
      padding: 100px 40px;
      background-color: var(--bg-card);
    }

    .hot-header {
      max-width: 1200px;
      margin: 0 auto 50px;
    }

    .hot-sub {
      color: var(--txt-3);
      font-size: 0.95em;
    }

    .hot-slider-wrapper {
      max-width: 1400px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .hot-slider {
      display: flex;
      gap: 20px;
      overflow-x: auto;
      padding: 20px 0;
    }

    .slider-btn {
      width: 44px;
      height: 44px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--txt-1);
      font-size: 1.1em;
      cursor: pointer;
    }

    .slider-btn:hover {
      border-color: var(--color-principal);
    }

    .producto-card {
      min-width: 280px;
      background-color: var(--bg-card-2);
      border: 1px solid var(--border);
      padding: 30px 24px;
      position: relative;
      cursor: pointer;
    }

    .producto-card:hover {
      border-color: var(--color-principal);
    }

    .producto-badge {
      position: absolute;
      top: 16px;
      right: 16px;
      font-size: 0.7em;
      font-weight: 700;
      color: var(--color-principal);
    }

    .producto-visual {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 24px;
      padding: 20px 0;
    }

    .prod-medio {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.5em;
      font-weight: 600;
      text-align: center;
      padding: 8px;
      color: #ccc;
      text-transform: uppercase;
    }

    .prod-izq {
      background: #1a1a1a;
      clip-path: inset(0 50% 0 0);
      margin-right: -2px;
    }

    .prod-der {
      background: #2a2a2a;
      clip-path: inset(0 0 0 50%);
      margin-left: -2px;
    }

    .prod-oro {
      width: 4px;
      height: 80px;
      background: var(--color-principal);
      z-index: 2;
    }

    .producto-info h3 {
      font-size: 0.95em;
      font-weight: 600;
      margin-bottom: 6px;
      line-height: 1.4;
    }

    .producto-artistas {
      color: var(--txt-3);
      font-size: 0.8em;
      margin-bottom: 12px;
    }

    .producto-precio {
      color: var(--color-principal);
      font-size: 1.1em;
      font-weight: 700;
    }

    /* === FRASE CTA === */
    .seccion-frase {
      background-color: var(--color-principal);
      padding: 100px 40px;
      text-align: center;
    }

    .frase-contenido p {
      font-size: 2.2em;
      font-weight: 700;
      color: #000;
      max-width: 700px;
      margin: 0 auto 30px;
      line-height: 1.2;
    }

    .frase-btn {
      display: inline-block;
      padding: 14px 36px;
      background-color: #000;
      color: var(--color-principal);
      font-weight: 600;
      font-size: 0.9em;
    }

    .frase-btn:hover {
      background-color: #111;
    }

    /* === TALLER === */
    .seccion-taller {
      max-width: 1200px;
      margin: 0 auto;
      padding: 100px 40px;
    }

    .taller-header {
      margin-bottom: 50px;
    }

    .taller-sub {
      color: var(--txt-3);
      font-size: 0.95em;
    }

    .buscador-wrap {
      margin-bottom: 30px;
    }

    #buscador {
      width: 100%;
      padding: 16px 20px;
      font-size: 0.95em;
      font-family: var(--fuente-texto);
      border: 1px solid var(--border);
      background-color: var(--bg-card);
      color: var(--txt-1);
      outline: none;
    }

    #buscador:focus {
      border-color: var(--color-principal);
    }

    #buscador::placeholder {
      color: var(--txt-5);
    }

    .vinilos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
      gap: 12px;
      margin-bottom: 50px;
      max-height: 420px;
      overflow-y: auto;
      padding: 10px;
      border: 1px solid var(--border);
      background-color: var(--bg-card);
    }

    .vinilo-card {
      background-color: var(--bg-card-2);
      border: 1px solid var(--border);
      padding: 16px 12px;
      text-align: center;
      cursor: pointer;
    }

    .vinilo-card:hover {
      border-color: var(--color-principal);
    }

    .vinilo-card .disco-icono {
      font-size: 1.8em;
      margin-bottom: 8px;
    }

    .vinilo-card .vinilo-nombre {
      font-size: 0.78em;
      font-weight: 600;
      margin-bottom: 4px;
      color: var(--txt-1);
    }

    .vinilo-card .vinilo-artista {
      font-size: 0.7em;
      color: var(--txt-3);
    }

    .vinilo-card.seleccionado-a {
      border-color: var(--color-principal);
      background-color: #1a1710;
    }

    .vinilo-card.seleccionado-b {
      border-color: #f5d76e;
      background-color: #1a1710;
    }

    .seleccion-area {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30px;
      margin-bottom: 40px;
    }

    .sel-box {
      background-color: var(--bg-card);
      border: 1px solid var(--border);
      padding: 30px 35px;
      min-width: 220px;
      text-align: center;
      position: relative;
    }

    .sel-label {
      position: absolute;
      top: 12px;
      left: 16px;
      font-size: 0.65em;
      font-weight: 700;
      color: var(--color-principal);
    }

    .sel-a {
      border-color: var(--color-principal);
    }

    .sel-b {
      border-color: #f5d76e;
    }

    .sel-nombre {
      font-weight: 600;
      font-size: 0.95em;
      margin-bottom: 4px;
    }

    .sel-artista {
      color: var(--txt-3);
      font-size: 0.8em;
    }

    .sel-union {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
    }

    .sel-oro-line {
      width: 3px;
      height: 30px;
      background: var(--color-principal);
    }

    #btnUnir {
      padding: 14px 28px;
      background: var(--color-principal);
      color: #000;
      border: none;
      font-family: var(--fuente-texto);
      font-size: 0.8em;
      font-weight: 700;
      cursor: pointer;
    }

    #btnUnir:hover:not(:disabled) {
      background: var(--color-principal-hover);
    }

    #btnUnir:disabled {
      background: var(--bg-card-2);
      color: var(--txt-4);
      cursor: not-allowed;
    }

    .resultado {
      text-align: center;
      padding: 50px 40px;
      background-color: var(--bg-card);
      border: 1px solid var(--color-principal);
      overflow: hidden;
    }

    .resultado h3 {
      font-size: 1.5em;
      font-weight: 700;
      color: var(--color-principal);
      margin-bottom: 30px;
    }

    .res-escenario {
      text-align: center;
      margin-bottom: 30px;
      height: 220px;
    }

    .res-spinner {
      position: relative;
      width: 200px;
      height: 200px;
      margin: auto;
    }

    .res-mitad {
      position: absolute;
      top: 0;
      width: 100px;
      height: 200px;
      overflow: hidden;
      opacity: 0;
    }

    .res-mitad-izq {
      left: 0;
    }

    .res-mitad-der {
      right: 0;
    }

    .res-mitad.visible {
      opacity: 1;
    }

    .res-disco {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: #111;
      border: 10px solid #222;
      position: relative;
    }

    .res-mitad-izq .res-disco {
      position: absolute;
      left: 0;
      top: 0;
    }

    .res-mitad-der .res-disco {
      position: absolute;
      right: 0;
      top: 0;
    }

    .res-surcos {
      position: absolute;
      top: 35px;
      left: 35px;
      width: 110px;
      height: 110px;
      border: 2px solid #333;
      border-radius: 50%;
    }

    .res-label {
      position: absolute;
      top: 60px;
      left: 60px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      font-size: 0.5em;
      font-weight: 700;
      text-align: center;
      padding: 12px 4px 4px 4px;
      color: #fff;
      text-transform: uppercase;
      overflow: hidden;
    }

    .res-label-a {
      background: #8b4513;
    }

    .res-label-b {
      background: #2c1d4e;
    }

    .res-kintsugi {
      position: absolute;
      top: 0;
      left: 98px;
      width: 6px;
      height: 200px;
      background: var(--color-principal);
      opacity: 0;
    }

    .res-kintsugi.visible {
      opacity: 1;
    }

    .res-grieta {
      display: none;
    }

    #resultadoTexto {
      color: var(--txt-2);
      font-size: 1em;
      margin-bottom: 8px;
    }

    .resultado-precio {
      color: var(--color-principal);
      font-size: 1.4em;
      font-weight: 700;
      margin-bottom: 20px;
    }

    #btnReset {
      padding: 12px 30px;
      background: transparent;
      color: var(--txt-1);
      border: 1px solid var(--border);
      font-family: var(--fuente-texto);
      font-size: 0.85em;
      font-weight: 500;
      cursor: pointer;
    }

    #btnReset:hover {
      border-color: var(--color-principal);
    }

    /* === NEWSLETTER === */
    .seccion-newsletter {
      padding: 80px 40px;
      background-color: var(--bg-card);
      border-top: 1px solid var(--border);
    }

    .newsletter-inner {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }

    .newsletter-inner h3 {
      font-size: 1.4em;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .newsletter-inner>p {
      color: var(--txt-3);
      font-size: 0.9em;
      margin-bottom: 30px;
    }

    .newsletter-form {
      display: flex;
      border: 1px solid var(--border);
    }

    .newsletter-form input {
      width: 100%;
      padding: 14px 20px;
      background: transparent;
      border: none;
      color: var(--txt-1);
      font-family: var(--fuente-texto);
      font-size: 0.9em;
      outline: none;
    }

    .newsletter-form input::placeholder {
      color: var(--txt-5);
    }

    .newsletter-form button {
      padding: 14px 24px;
      background-color: var(--color-principal);
      border: none;
      color: #000;
      font-size: 1.1em;
      font-weight: 700;
      cursor: pointer;
    }

    .newsletter-form button:hover {
      background-color: var(--color-principal-hover);
    }

    /* === FOOTER === */
    footer {
      border-top: 1px solid var(--border);
      padding: 0;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 40px;
    }

    .footer-col h4 {
      font-size: 0.8em;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--txt-1);
      margin-bottom: 16px;
    }

    .footer-col p {
      display: block;
      color: var(--txt-4);
      font-size: 0.85em;
      margin-bottom: 8px;
    }

    .footer-col a {
      display: block;
      color: var(--txt-4);
      font-size: 0.85em;
      margin-bottom: 8px;
    }

    .footer-col a:hover {
      color: var(--color-principal);
    }

    .footer-redes {
      display: flex;
      gap: 14px;
    }

    .footer-redes a {
      color: var(--txt-4);
      display: flex;
    }

    .footer-redes a:hover {
      color: var(--color-principal);
    }

    .footer-bottom {
      text-align: center;
      padding: 20px 40px;
      border-top: 1px solid var(--border);
    }

    .footer-bottom p {
      color: var(--txt-6);
      font-size: 0.75em;
    }
  </style>
</head>

<body>

  <!-- MODAL CONFIGURADOR -->
  <div class="modal-overlay oculto" id="modalConfig">
    <div class="modal-caja">
      <div class="modal-head">
        <div class="modal-head-izq">
          <span class="modal-badge">Config</span>
          <div>
            <div class="modal-titulo">Personaliza tu web</div>
            <div class="modal-subtitulo">Los cambios se aplican en tiempo real en la web de abajo</div>
          </div>
        </div>
        <button class="modal-btn-ver" onclick="cerrarModal()">Ver mi web →</button>
      </div>

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
            <input type="text" id="inputNombre" placeholder="<?php echo htmlspecialchars($nombre_empresa); ?>"
              oninput="actualizarNombre(this.value)">
          </div>

          <div class="config-campo">
            <label for="inputDesc">Descripción (hero)</label>
            <textarea id="inputDesc" placeholder="<?php echo htmlspecialchars($descripcion); ?>"
              oninput="actualizarDesc(this.value)"></textarea>
          </div>
        </div>

        <!-- grupo 2: que secciones se ven -->
        <div class="config-grupo">
          <p class="config-grupo-tit">Secciones visibles</p>
          <p style="font-size:0.72em;color:var(--txt-3);margin-bottom:18px;">Solo se muestran las secciones marcadas</p>

          <label class="check-item">
            <input type="checkbox" id="chkConcepto" checked
              onchange="toggleSeccion('quees', ['navConcepto','menuConcepto','footerConcepto'], this.checked)">
            <span>Quiénes somos</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkGaleria" checked
              onchange="toggleSeccion('galeriaGroup', ['navGaleria','menuGaleria','footerGaleria'], this.checked)">
            <span>Galería / Hot Ventas</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkTaller" checked
              onchange="toggleSeccion('taller', ['navTaller','menuTaller','footerTaller'], this.checked)">
            <span>Taller</span>
          </label>
          <label class="check-item">
            <input type="checkbox" id="chkContacto" checked
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
              <input type="color" id="colorPicker" value="#d4af37" oninput="actualizarColor(this.value)">
              <span class="color-hex" id="colorHex">#d4af37</span>
            </div>
          </div>

          <div class="config-campo">
            <label for="fontSelect">Fuente de párrafos</label>
            <select id="fontSelect" onchange="actualizarFuente(this.value)">
              <option value="Inter">Inter</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Raleway">Raleway</option>
              <option value="Roboto">Roboto</option>
              <option value="Lato">Lato</option>
              <option value="Poppins">Poppins</option>
              <option value="Oswald">Oswald</option>
              <option value="Playfair Display">Playfair Display</option>
            </select>
          </div>

          <div class="config-campo">
            <label>Modo</label>
            <div class="modo-toggle">
              <button class="modo-btn activo" id="btnOscuro" onclick="setModo('oscuro')">🌙 Oscuro</button>
              <button class="modo-btn" id="btnClaro" onclick="setModo('claro')">☀️ Claro</button>
            </div>
          </div>
        </div>

      </div>
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
        <a href="#quees" id="navConcepto">Concepto</a>
        <a href="#hot" id="navGaleria">Hot Ventas</a>
        <a href="#taller" id="navTaller">Taller</a>
        <a href="#contacto" id="navContacto">Contacto</a>
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
  <section id="quees" class="seccion-concepto">
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
  <div id="galeriaGroup">
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
  <section id="taller" class="seccion-taller">
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
  <div id="contactoGroup">
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

    window.addEventListener("load", function () {
      abrirModal();
    });

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