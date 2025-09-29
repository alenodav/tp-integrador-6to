<!DOCTYPE html>
<html lang="en">
<title>Rabbits - Find what you like</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-theme-l1">Rabbits</a>
    <a href="sobre_nosotros.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sobre Nosotros</a>
    <a href="contacto.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contacto</a>
    <a href="donaciones.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Donaciones</a>
    <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">Login</a>
    <a href="register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">Register</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="criptomonedas.html">Criptomonedas</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="blockchain.html">Blockchain</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="seguridad_informatica.html">Seguridad Informatica</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="inteligencia_artificial.html">Inteligencia Artificial</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="finanzas.html">Finanzas</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="frontend.html">FrontEnd</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="backend.html">BackEnd</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="nft.html">NFT</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">FrontEnd</h1>
      <p>Se relaciona con todo lo que ven las personas, esto incluye el diseño (bien sea UI o UX) y ciertos lenguajes.

        Además, destaca por su característica funcional, pues sirve para que el usuario entre e interactúe con cualquier sitio. Motivo por el que debe cumplir con altos estándares de usabilidad y estética.
        
        Podemos decir que el Front-end es la capa que se encuentra por encima del Back-end, ya que comprende menús desplegables, imágenes, íconos, colores, elementos gráficos, animaciones y, sin lugar a dudas, mejora la experiencia de navegación en el lado delantero o frontal.
        
        Quienes desarrollan el Front-end son responsables del código orientado a la inmersión del sujeto en el sitio. Para lograrlo los expertos deben conocer tres idiomas esenciales:
        
        Javascript;
        CSS;
        HTML.
        Así como estar familiarizados con frameworks como:
        
        Foundation;
        Bootstrap;
        AngularJS; 
        Ember JS;
        Backbone.<br>

        </p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Ejemplo Front-end</h1>
      <p>Los componentes que se encuentran en la parte frontal del sistema son los siguientes:

        pruebas de usabilidad y accesibilidad;
        lenguajes de diseño y marcado como HTML, CSS y JavaScript;
        diseño gráfico y herramientas de edición de imágenes;
        posicionamiento en buscadores o SEO;
        rendimiento web y compatibilidad del navegador.
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Labores Diarias</h1>
      <p>Traducir diseños a lenguaje de programación.
        Asegurarse que el tiempo de carga de la página web sea corto.
        Escribir código mantenible.
        Asegurar que la página web soporta múltiples navegadores.
      </p>
    </div>
  </div>

  
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>s

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Rabbits Corp<br></h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Creada por Bazan Omar y Gomez David</p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>