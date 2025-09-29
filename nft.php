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
      <h1 class="w3-text-teal">Tecnologia NFT</h1>
      <p>Un NFT o Non Fungible Token por sus siglas en inglés, es un token o vale digital que es único e irrepetible, básicamente se define como un coleccionable digital que es verificado por medio de una cadena de bloques (blockchain), para que un video, imagen, película, canción, audio, URL o cualquier otro tipo de archivo digital, pueda autenticarse o catalogarse como “original”.

        En Derecho, el término fungible se refiere a cosas o bienes que son intercambiables y deben consumirse para su uso. Sin embargo, si existe algo que no sea fungible, quiere decir que tiene unas propiedades únicas, por lo que no puede ser intercambiado, reemplazado o copiado.<br>

        </p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Ejemplo</h1>
      <p>Supongamos que eres fan de un pintor famoso de tu país y próximamente se celebrará una subasta de sus pinturas originales. La persona que ofrezca la mayor cantidad de dinero será la poseedora de las pinturas originales, y por más que curiosos, piratas o comerciantes repliquen las pinturas para ganar algo de dinero con sus ventas, ninguna será “la original”, es decir, nunca habrá sido pintada en el mismo lienzo que la original, ni con los mismas utensilios, mezcla de colores o pinceles que la original, ni tendrá los detalles, olores, textura o características que la hicieron inicialmente llamativa. Lo mismo ocurre con los NFTs pero en formato digital, los interesados ofrecen una suma de dinero determinada para catalogarse como dueños únicos de algunas piezas o archivos digitales, que por más que sean copiados, no tendrán las características únicas del archivo digital, lo que le otorga un gran valor a estos archivos y son la razón por la que se invierten miles o millones de dólares en la compra de NFTs.

        Estos tokens digitales no son tangibles y representan un activo o certificado de propiedad activos de los objetos o archivos de interés.
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">NFTs famosos</h1>
      <p>El Gif de Nyan Cat, famoso meme creado en 2011 sobre un gato con cuerpo de galleta volando, se vendió por más de US$500.000.
        La subasta de una obra de arte digital realizada por la casa Christie’s recaudó US$69 millones. Esta pieza fue creada por el artista Mike Winkelmann, también conocido como Beeple.
        Jack Dorsey, uno de los creadores de la popular red social Twitter, vendió su primer “tweet” por un valor superior a los US$ 2.9 millone
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
  </div>

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