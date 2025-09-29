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
      <h1 class="w3-text-teal">Blockchain</h1>
      <p>El blockchain o cadena de bloques es un tipo de red que su distribución facilita el desarrollo de tecnologías como la criptomoneda y lo conocido como internet del valor.El blockchain, es una tecnología que nos ofrece la posibilidad de crear un libro de contabilidad que se distribuye mediante una red de ordenadores sin tener la necesidad de contar con un servidor o base de datos central.Por este motivo, el poder de cómputo que presentan los nodos en la red se utiliza para introducir información y para protegerla frente a la realización de modificaciones que no han sido autorizadas. Como consecuencia, el blockchain ofrece la posibilidad de alcanzar niveles de seguridad muy elevados si lo comparamos con otras tecnologías. <br>

        </p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">¿Cómo funciona la tecnología blockchain?</h1>
      <p>EPara que la tecnología blockchain funcione se necesita crear un software específico para la misma. El software permite que los ordenadores generen una red que funciona con el blockchain de manera distribuida. Como sucede en el caso del software de Bitcoin y otras criptomonedas. De forma general, el software presenta un carácter abierto y protegido mediante licencias de software libre. Esto indica que son público, transparentes y que se pueden utilizar, revisar y realizar contribuciones por cualquier persona.Al no contar con una base de datos ni servidos localizado, a la red blockchain se le atribuye la característica de ser una red distribuida. Lo que esto significa es que la información se encuentra replicada en todos los ordenadores del mundo que se encuentren conectados a la misma blockchain. Más del 50% de los ordenadores que forman la red blockchain no sean de la misma persona o empresa, se puede decir que la red se encuentra descentralizada. Con todo esto podemos afirmar que no tiene un centro de emisión, control o poder.La red blockchain solo es una base de datos en la que se puede leer y escribir nuevos registros. Todo esto sin poder realizar modificaciones en lo que ya existe. Los registros se encuentran guardados en ella de tal forma que se encuentran vinculados mediante una función matemática muy avanzada. Esto hace imposible que se pueda incluir algo que no sea coherente con el resto de registros que se encuentran incluidos.</b>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">¿Cómo se construye un blockchain?</h1>
      <p>Un bloque es un conjunto de transacciones confirmadas que incluyen información adicional que se ha incluido en la cadena de bloques. Cada bloque que forma parte de la cadena se encuentra formado por:<br> código alfanumérico que se encuentran enlazado al bloque anterior.Un paquete de transacciones.Otro código alfanumérico que se encuentra enlazado al bloque siguiente.El bloque en proceso intenta averiguar con cálculos el tercer punto que hemos indicado. El código que sigue unas determinadas reglar para ser válido y solo se puede sacar probando sin parar.
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