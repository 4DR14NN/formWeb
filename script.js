// ======================================
// KintVinylSugi - script.js
// ======================================

// todos los vinilos que hay disponibles
var vinilos = [
    { nombre: "Thriller", artista: "Michael Jackson" },
    { nombre: "Me muevo como Dios", artista: "Rels B" },
    { nombre: "Abbey Road", artista: "The Beatles" },
    { nombre: "Un Verano Sin Ti", artista: "Bad Bunny" },
    { nombre: "The Dark Side of the Moon", artista: "Pink Floyd" },
    { nombre: "MOTOMAMI", artista: "Rosalía" },
    { nombre: "Nevermind", artista: "Nirvana" },
    { nombre: "El Madrileño", artista: "C. Tangana" },
    { nombre: "Back in Black", artista: "AC/DC" },
    { nombre: "YHLQMDLG", artista: "Bad Bunny" },
    { nombre: "Rumours", artista: "Fleetwood Mac" },
    { nombre: "Vida Cómoda", artista: "Quevedo" },
    { nombre: "OK Computer", artista: "Radiohead" },
    { nombre: "Bohemian Rhapsody", artista: "Queen" },
    { nombre: "Hotel California", artista: "Eagles" },
    { nombre: "El Último Tour Del Mundo", artista: "Bad Bunny" },
    { nombre: "Wish You Were Here", artista: "Pink Floyd" },
    { nombre: "Las Que No Iban a Salir", artista: "Bad Bunny" },
    { nombre: "Led Zeppelin IV", artista: "Led Zeppelin" },
    { nombre: "Donde Quiero Estar", artista: "Quevedo" },
    { nombre: "Born to Run", artista: "Bruce Springsteen" },
    { nombre: "Híbrido", artista: "Duki" },
    { nombre: "The Wall", artista: "Pink Floyd" },
    { nombre: "Sin Miedo (del Amor y Otros Demonios)", artista: "Kali Uchis" },
    { nombre: "Appetite for Destruction", artista: "Guns N' Roses" },
    { nombre: "Cosmogonía", artista: "Víctor Jara" },
    { nombre: "Master of Puppets", artista: "Metallica" },
    { nombre: "KG0516", artista: "Karol G" },
    { nombre: "A Night at the Opera", artista: "Queen" },
    { nombre: "Salvavida de Hielo", artista: "Rels B" },
    { nombre: "In Utero", artista: "Nirvana" },
    { nombre: "Cuando Me Siento Bien", artista: "Rels B" },
    { nombre: "Purple Rain", artista: "Prince" },
    { nombre: "Mañana Será Bonito", artista: "Karol G" },
    { nombre: "The Joshua Tree", artista: "U2" },
    { nombre: "Afrodisíaco", artista: "Rauw Alejandro" },
    { nombre: "Paranoid", artista: "Black Sabbath" },
    { nombre: "Vice Versa", artista: "Rauw Alejandro" },
    { nombre: "Highway to Hell", artista: "AC/DC" },
    { nombre: "Bzrp Music Sessions", artista: "Bizarrap" },
    { nombre: "Sticky Fingers", artista: "The Rolling Stones" },
    { nombre: "Nadie Sabe Lo Que Va a Pasar Mañana", artista: "Bad Bunny" },
    { nombre: "Sgt. Pepper's", artista: "The Beatles" },
    { nombre: "DeBí TiRAR MáS FOToS", artista: "Bad Bunny" },
    { nombre: "Blonde on Blonde", artista: "Bob Dylan" },
    { nombre: "Cachita", artista: "Rels B" },
    { nombre: "Ziggy Stardust", artista: "David Bowie" },
    { nombre: "Leyendas", artista: "Myke Towers" },
    { nombre: "Let It Be", artista: "The Beatles" },
    { nombre: "Mientras No Nos Vemos", artista: "Omar Montes" },
];

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
    // calculamos cuanto hemos scrolleado dentro del hero-wrapper
    var wrapperTop = heroWrapper.offsetTop;
    var wrapperHeight = heroWrapper.offsetHeight;
    var heroHeight = window.innerHeight;
    var scrollEnHero = window.scrollY - wrapperTop;

    // la imagen se revela entre 0 y la mitad del wrapper extra
    var scrollMax = wrapperHeight - heroHeight;
    if (scrollMax > 0) {
        var progreso = scrollEnHero / scrollMax;
        // limitar entre 0 y 1
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
