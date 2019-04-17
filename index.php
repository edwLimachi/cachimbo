 <?php 

require('php/connection.php');
    $conexion = getCon();
    
    if(isset($_GET['variable1'])) $variable1 =strtoupper($_GET['variable1']); else $variable1="";
    echo $variable1;

?> 


<!DOCTYPE html>
<html lang="en">
<head>
<title>Cachimbeada</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Epis project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap.css"> -->
<link rel="stylesheet" type="text/css" href="styles/index2.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">

<script type="text/javascript" src="js/TweenMax.min.js"></script>
<script type="text/javascript" src="js/Winwheel.min.js"></script>

<style type="text/css">
  a:link
    {
    text-decoration:none;
    }
</style>


</head>
<body>
	
<header>
  <div class="container_heaader">
    <div class="container_imagen1">
      <div class="container_imagen11">
        <img class="logo" src="images/computacion.jpg">  
      </div>      
    </div>

    <div class="titulo">
      <h1>Bienvenidos Cachimbos</h1>      
    </div>

    <div class="container_imagen1">
      <div class="container_imagen11">
        <img class="logo2" src="images/vigil.jpg">  
      </div>      
    </div>
    
  </div>

</header>
<ul id="galeria">
  <div class="container_cuadro">      
    <button class="btn first" onclick="verificar();">CACHIMBO ELEGIDO</button>    
    <li id="verificado">
      <img class='std' src='images/anonimato_cachimbo.jpg' alt='' style='width: 265px;height: 300px;'>
    </li>
  </div>
  <div class="container_cuadro">      
    <button class="btn first"  onclick="verificar2();">ESTUDIANTE ELEGIDO</button>
    <li id="verificado2">
      <img class='std' src='images/anonymous.jpg' alt='' style='width: 265px;height: 300px;'>
    </li>
  </div>
  <div class="container_ruleta">      
    <button class="btn first" onclick="miRuleta.startAnimation();" >NO QUIERE, PRESIONE LA RULETA!!</button>
    <li>      
      <canvas id="canvas" height="400" width="400"></canvas>
    </li>
  </div>
  <div class="container_castigo">      
    <a href="index3.html"><button class="btn first" >VOLVER</button></a>
    <li>
      <table class="table">                     
        <tbody>
          <tr>
            <td id="uno">1- Vestirse de Mujer</td>                               
          </tr>
          <tr>
            <td id="dos">2- Maquillaje, por una chica vendada</td>                          
          </tr>
          <tr>
            <td id="tres">3- Depilación</td>                                        
          </tr>
          <tr>
            <td id="cuatro">4- Tomar Mezcla</td>                         
          </tr>
          <tr>
            <td id="cinco">5- Harina en la Cabeza</td>                               
          </tr>
          <tr>
            <td id="seis">6- Pastel en la Cara</td>                               
          </tr>
          <tr>
            <td id="siete">7- Huevo en la Cabeza</td>                               
          </tr>                                               
        </tbody>
      </table>
    </li>
  </div>
<!--   <div>
    <a href="index3.html"><button class="btn first"  onclick="verificar2();">VOLVER</button></a>
  </div> -->
  
</ul>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/index.js"></script>
<!-- <script src="styles/bootstrap4/popper.js"></script> -->
<script src="styles/bootstrap4/bootstrap.min.js"></script>


    <script type="text/javascript">
      function verificar(){        

        var numal=numeroAleatorio(1, 30);

        function numeroAleatorio(min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }

        console.log(numal);
        
        $.post("php/check.php", { 'numal': numal }, function(data){
          $("#verificado").html(data);
        });     
      }

      function verificar2(){        

        var numal=numeroAleatorio(100, 105);

        function numeroAleatorio(min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }

        $.post("php/check2.php", { 'numal': numal }, function(data){

        $("#verificado2").html(data);
        });     
      }

          var miRuleta= new Winwheel({
            'numSegments': 7,
            'outerRadius': 170,
            'segments':[

              { 'fillStyle': '#f1c40f', 'text': '1'},
              { 'fillStyle': '#2ecc71', 'text': '2'},
              { 'fillStyle': '#e67e22', 'text': '3'},
              { 'fillStyle': '#e74c3c', 'text': '4'},
              { 'fillStyle': '#8e44ad', 'text': '5'},
              { 'fillStyle': '#008537', 'text': '6'},
              { 'fillStyle': '#7D4B03', 'text': '7'},
              // { 'fillStyle': '#004DEE', 'text': '8'},
            ],
            'animation':{
              'type': 'spinToStop',
              'duration': 5,
              'callbackFinished': 'Mensaje()',
              'callbackAfter': 'dibujarIndicador()'
            }

          });
          dibujarIndicador();
               function Mensaje() {
                   var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
                    //alert("Elemento seleccionado:" + SegmentoSeleccionado.text + "!");
                    console.log(SegmentoSeleccionado.text);
                   var number=SegmentoSeleccionado.text;
                   switch (number) {
                     case "1":
                       document.getElementById("uno").style.background = "black";                       
                       document.getElementById("uno").style.color = "white";                       
                       break;
                     case "2":
                       document.getElementById("dos").style.background = "black";                       
                       document.getElementById("dos").style.color = "white";
                       break;
                     case "3":
                       document.getElementById("tres").style.background = "black";                       
                       document.getElementById("tres").style.color = "white"; 
                       break;
                     case "4":
                       document.getElementById("cuatro").style.background = "black";                       
                       document.getElementById("cuatro").style.color = "white";                       
                       break;
                     case "5":
                       document.getElementById("cinco").style.background = "black";                       
                       document.getElementById("cinco").style.color = "white";                       
                       break;
                     case "6":
                       document.getElementById("seis").style.background = "black";                       
                       document.getElementById("seis").style.color = "white";
                       break;
                     case "7":
                       document.getElementById("siete").style.background = "black";                       
                       document.getElementById("siete").style.color = "white"; 
                       break;                       
                   }

                   //Reinicio de la ruleta
                   miRuleta.stopAnimation(false);
                   miRuleta.rotationAngle = 0;
                   miRuleta.draw();
                   dibujarIndicador();                   

             }
               function dibujarIndicador() {
                    var ctx = miRuleta.ctx;
                    ctx.strokeStyle = 'navy';     
                    ctx.fillStyle = 'black';     
                    ctx.lineWidth = 2;
                    ctx.beginPath();             
                    ctx.moveTo(170, 0);          
                    ctx.lineTo(230, 0);          
                    ctx.lineTo(200, 40);
                    ctx.lineTo(171, 0);
                    ctx.stroke();                
                    ctx.fill();                  
             }

      
    </script>

</body>
</html>