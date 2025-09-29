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
      <h1 class="w3-text-teal">Inteligencia Artificial</h1>
      <p>No existe un definición aceptada por todos los expertos de lo que significa la inteligencia artificial. Primero, porque es una ciencia nueva, cambiante y experimental. Y segundo, porque ni siquiera podemos definir con exactitud qué es la inteligencia humana...

        En su forma más simple, la IA es el intento de imitar la inteligencia humana usando un robot, o un software. Pero es un concepto muy vago, porque existen muchas ramificaciones. Stuart Russell y Peter Norvig diferenciaron cuatro tipos en 2009.
        
        Estos fueron sistemas que piensan como humanos, como por ejemplo las redes neuronales artificiales. Sistemas que actúan como humanos, como los robots. Sistemas que usan la lógica racional, como los sistemas expertos, y sistemas que actúan racionalmente, como los agentes inteligentes. <br>

        </p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Redes Neuronales</h1>
      <p>Las redes neuronales artificiales (también conocidas como sistemas conexionistas) son un modelo computacional evolucionado a partir de diversas aportaciones científicas que están registradas en la historia.1​ Consiste en un conjunto de unidades, llamadas neuronas artificiales, conectadas entre sí para transmitirse señales. La información de entrada atraviesa la red neuronal (donde se somete a diversas operaciones) produciendo unos valores de salida.

        Cada neurona está conectada con otras a través de unos enlaces. En estos enlaces el valor de salida de la neurona anterior es multiplicado por un valor de peso. Estos pesos en los enlaces pueden incrementar o inhibir el estado de activación de las neuronas adyacentes. Del mismo modo, a la salida de la neurona, puede existir una función limitadora o umbral, que modifica el valor resultado o impone un límite que no se debe sobrepasar antes de propagarse a otra neurona. Esta función se conoce como función de activación.
        
        Estos sistemas aprenden y se forman a sí mismos, en lugar de ser programados de forma explícita, y sobresalen en áreas donde la detección de soluciones o características es difícil de expresar con la programación convencional. Para realizar este aprendizaje automático, normalmente, se intenta minimizar una función de pérdida que evalúa la red en su total. Los valores de los pesos de las neuronas se van actualizando buscando reducir el valor de la función de pérdida. Este proceso se realiza mediante la propagación hacia atrás.
        
        El objetivo de la red neuronal es resolver los problemas de la misma manera que el cerebro humano, aunque las redes neuronales son más abstractas. Las redes neuronales actuales suelen contener desde unos miles a unos pocos millones de unidades neuronales.
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Modelos de Redes Neuronales</h1>
      <p>Los modelos de redes neuronales en la inteligencia artificial se refieren generalmente a las redes neuronales artificiales (RNA); estos son modelos matemáticos esencialmente simples que definen una función f:X→Y o una distribución más X o ambos X e Y. Pero a veces los modelos también están íntimamente asociadas con un algoritmo de aprendizaje en particular o regla de aprendizaje. Un uso común de la frase "modelo ANN" es en realidad la definición de una clase de tales funciones (donde los miembros de la clase se obtiene variando parámetros, los pesos de conexión, o específicos de la arquitectura, tales como el número de neuronas o su conectividad).
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