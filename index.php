<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroJS Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcula_densidad(){
        var v= 20;
        var m= 1500;
        var f= 5000;
        var s=((1/2)*m*v*v)/f;
        var d=document.getElementById("resultadoA");
        d.innerHTML=s+'M';
        }
    </script>
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroJS</a></h1>
      <nav>
      <ul>
        <li><a href="index.html" class="current">Inicio</a></li>
        <li><a href=basicoJS.html>Básica</a></li>
      </ul>
      </nav>
    </header>
    <section><h1> Alumno: Genis Duran Juan Antonio </section>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Un carro de 1500kg de masa viaja a una velocidad de 20m/s. <br>
  Los frenos aplican una fuerza de 5000N,
  para frenar y detener el coche... </h2>
  <p>Descripción:</p>
  <p>Calcula la distancia de frenado del coche.</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    (1/2)*m*v*v=F*s <br>
    despejamos s : <br>
    s=((1/2)*m*v*v)/F
</section>
<section class="datos">
<h2>Datos:</h2>
   v= velocidad = 20m/s. <br>
   m= masa = 1500kg.<br>
   f= fuerza = 5000N.<br>
   s= distancia.
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La distancia de frenado del coche es:<br>
    ((1/2)*1500*20*20)/5000<br>
    </p>
    <button onclick="calcula_densidad();">Presiona para calcular</button>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
