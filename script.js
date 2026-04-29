// ======================================
// KintVinylSugi - script.js
// ======================================

// los vinilos ya vienen del php (json_encode) en el index.php
// aqui solo uso la variable "vinilos" que ya existe

// variables para guardar la seleccion
var viniloA = null;
var viniloB = null;
var indiceA = null;
var indiceB = null;

// ---- PINTAR VINILOS EN EL GRID ----
function pintarVinilos() {
    var html = "";
    for (var i = 0; i < vinilos.length; i++) {
        html = html + '<div class="vinilo-card" id="card' + i + '" onclick="elegir(' + i + ')">';
        html = html + '<div class="disco-icono">💿</div>';
        html = html + '<div class="vinilo-nombre">' + vinilos[i].nombre + '</div>';
        html = html + '<div class="vinilo-artista">' + vinilos[i].artista + '</div>';
        html = html + '</div>';
    }
    document.getElementById("vinilosGrid").innerHTML = html;
}

// llamamos a la funcion para que se pinten
pintarVinilos();

// ---- ELEGIR UN VINILO ----
function elegir(i) {
    // si no hay A todavia, lo ponemos como A
    if (viniloA == null) {
        viniloA = vinilos[i];
        indiceA = i;
        document.getElementById("card" + i).className = "vinilo-card seleccionado-a";
        document.getElementById("nombreA").innerHTML = vinilos[i].nombre;
        document.getElementById("artistaA").innerHTML = vinilos[i].artista;
        console.log("vinilo A seleccionado: " + vinilos[i].nombre);
    }
    // si ya hay A pero falta B
    else if (viniloB == null) {
        // que no sea el mismo que A
        if (i == indiceA) {
            alert("No puedes elegir el mismo vinilo dos veces!");
            return;
        }
        viniloB = vinilos[i];
        indiceB = i;
        document.getElementById("card" + i).className = "vinilo-card seleccionado-b";
        document.getElementById("nombreB").innerHTML = vinilos[i].nombre;
        document.getElementById("artistaB").innerHTML = vinilos[i].artista;
        document.getElementById("btnUnir").disabled = false;
        console.log("vinilo B seleccionado: " + vinilos[i].nombre);
    }
    // si ya hay los dos
    else {
        alert("Ya tienes dos vinilos seleccionados! Dale a UNIR CON ORO o crea otro.");
    }
}

// ---- BUSCADOR ----
function buscar() {
    var texto = document.getElementById("buscador").value.toLowerCase();

    for (var i = 0; i < vinilos.length; i++) {
        var nombre = vinilos[i].nombre.toLowerCase();
        var artista = vinilos[i].artista.toLowerCase();

        if (nombre.indexOf(texto) != -1 || artista.indexOf(texto) != -1) {
            document.getElementById("card" + i).style.display = "";
        } else {
            document.getElementById("card" + i).style.display = "none";
        }
    }
}

// cuando escribes en el buscador
document.getElementById("buscador").oninput = buscar;

// ---- UNIR CON ORO ----
function unir() {
    if (viniloA == null || viniloB == null) {
        alert("Elige dos vinilos primero!");
        return;
    }

    // poner los nombres en las labels de los discos
    document.getElementById("resLabelA").innerHTML = viniloA.nombre;
    document.getElementById("resLabelB").innerHTML = viniloB.nombre;
    document.getElementById("resultadoTexto").innerHTML = viniloA.nombre + " (" + viniloA.artista + ") × " + viniloB.nombre + " (" + viniloB.artista + ") — Unidos con oro";

    // resetear las clases de animacion primero
    document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq";
    document.getElementById("resMitadDer").className = "res-mitad res-mitad-der";
    document.getElementById("resKintsugi").className = "res-kintsugi";
    document.getElementById("resSpinner").className = "res-spinner";

    // mostrar el resultado
    document.getElementById("resultado").style.display = "block";

    // hacer scroll al resultado
    document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });

    // FASE 1: las dos mitades aparecen desde los lados y se juntan (300ms)
    setTimeout(function () {
        document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq visible";
        document.getElementById("resMitadDer").className = "res-mitad res-mitad-der visible";
        console.log("FASE 1: mitades se juntan");
    }, 300);

    // FASE 2: las grietas de oro kintsugi aparecen (1600ms)
    setTimeout(function () {
        document.getElementById("resKintsugi").className = "res-kintsugi visible";
        console.log("FASE 2: oro kintsugi aparece");
    }, 1600);

    // FASE 3: el vinilo unido empieza a girar (2300ms)
    setTimeout(function () {
        document.getElementById("resSpinner").className = "res-spinner girando";
        console.log("FASE 3: gira!");
    }, 2300);

    console.log("UNIDOS: " + viniloA.nombre + " + " + viniloB.nombre);
}

// ---- RESETEAR TODO ----
function resetear() {
    // quitar los estilos de las cards
    if (indiceA != null) {
        document.getElementById("card" + indiceA).className = "vinilo-card";
    }
    if (indiceB != null) {
        document.getElementById("card" + indiceB).className = "vinilo-card";
    }

    // resetear variables
    viniloA = null;
    viniloB = null;
    indiceA = null;
    indiceB = null;

    // resetear textos
    document.getElementById("nombreA").innerHTML = "Selecciona un vinilo";
    document.getElementById("artistaA").innerHTML = "";
    document.getElementById("nombreB").innerHTML = "Selecciona un vinilo";
    document.getElementById("artistaB").innerHTML = "";
    document.getElementById("btnUnir").disabled = true;
    document.getElementById("resultado").style.display = "none";
    document.getElementById("buscador").value = "";

    // resetear animacion
    document.getElementById("resMitadIzq").className = "res-mitad res-mitad-izq";
    document.getElementById("resMitadDer").className = "res-mitad res-mitad-der";
    document.getElementById("resKintsugi").className = "res-kintsugi";
    document.getElementById("resSpinner").className = "res-spinner";

    // mostrar todos los vinilos otra vez
    for (var i = 0; i < vinilos.length; i++) {
        document.getElementById("card" + i).style.display = "";
    }

    console.log("todo reseteado!");
}

// ---- MENU MOVIL ----
function toggleMenu() {
    var menu = document.getElementById("menuMovil");
    if (menu.className == "menu-movil abierto") {
        menu.className = "menu-movil";
    } else {
        menu.className = "menu-movil abierto";
    }
}

// ---- SLIDER DE HOT VENTAS ----
function moverSlider(direccion) {
    var slider = document.getElementById("hotSlider");
    var cantidad = 300; // pixeles que se mueve
    slider.scrollLeft = slider.scrollLeft + (cantidad * direccion);
}

// ---- HEADER Y HERO SCROLL ----
var headerElement = document.getElementById("header");
var heroBg = document.getElementById("heroBg");
var heroWrapper = document.getElementById("heroWrapper");

window.onscroll = function () {
    // cambiar el borde del header
    if (window.scrollY > 50) {
        headerElement.style.borderBottomColor = "rgba(212, 175, 55, 0.15)";
    } else {
        headerElement.style.borderBottomColor = "rgba(255, 255, 255, 0.06)";
    }

    // revelar la imagen de fondo del hero al hacer scroll
    var wrapperTop = heroWrapper.offsetTop;
    var wrapperHeight = heroWrapper.offsetHeight;
    var heroHeight = window.innerHeight;
    var scrollEnHero = window.scrollY - wrapperTop;

    var scrollMax = wrapperHeight - heroHeight;
    if (scrollMax > 0) {
        var progreso = scrollEnHero / scrollMax;
        if (progreso < 0) progreso = 0;
        if (progreso > 1) progreso = 1;
        heroBg.style.opacity = progreso;
    }
};

// ---- NEWSLETTER ----
function suscribir() {
    var email = document.getElementById("emailInput").value;
    if (email == "" || email.indexOf("@") == -1) {
        alert("Pon un email válido!");
    } else {
        alert("Gracias por suscribirte! " + email);
        document.getElementById("emailInput").value = "";
    }
}

// ---- CONFIGURADOR ----

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

// estas funciones usan las variables nombreDefecto y descDefecto
// que vienen del php en el index.php
function actualizarNombre(val) {
    var nombre = val.trim() || nombreDefecto;
    document.getElementById("headerLogoText").innerHTML = nombre;
    document.getElementById("footerNombre").innerHTML = nombre;
}

function actualizarDesc(val) {
    document.getElementById("heroDesc").textContent = val || descDefecto;
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

// esta funcion la busque en internet para aclarar el color del hover
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
    if (modo == "claro") {
        document.body.classList.add("modo-claro");
        document.getElementById("btnClaro").classList.add("activo");
        document.getElementById("btnOscuro").classList.remove("activo");
    } else {
        document.body.classList.remove("modo-claro");
        document.getElementById("btnOscuro").classList.add("activo");
        document.getElementById("btnClaro").classList.remove("activo");
    }
}
