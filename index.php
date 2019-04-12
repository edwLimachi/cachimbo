<!DOCTYPE html>
<html lang="en">
<head>
<title>Cachimbeada</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Epis project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/index2.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">


</head>
<body>
	
<header>
  <h1>Bienvenidos Cachimbos</h1>  
</header>
<ul id="galeria">
  <audio id= "musica" src="https://raw.githubusercontent.com/Losnen/transiciones-css/gh-pages/mp3/force.mp3" autoplay loop mute>
  </audio>
  <div>
    <button class="btn first" onclick="verificar();">CACHIMBO ELEGIDO</button>
    <?php 

    ?>
    <!-- <h1 id="content"></h1> -->
    <li id="verificado">
    </li>
  </div>

  <div>
    <button class="btn first"  onclick="verificar2();">ESTUDIANTE ELEGIDO</button>
        <li id="verificado2">
    </li>
    <li id="verificado"></li>
  </div>
  <div>
    <button class="btn first" onclick="verificar2();">SERA CACHIMBEADO?</button>
    <li><img class="std" src="https://displate.com/displates/2014-06-25/9629e6760836c928843215111cb3f980.jpg?w=280&h=392" alt="Cuadro Mona Vader"></li>
  </div>
  <div>
    <button class="btn first">ELEGIR EL CASTIGO</button>
    <li><img class="std" src="https://displate.com/displates/2015-08-23/310d5f02565fa20249282e3ece9b2c96.jpg?w=357&h=500&v=2" alt="Cuadro Mona Vader"></li>
  </div>
  
</ul>

<!-- <footer>
        <h2>Contacto</h2>
        <a href="https://github.com/Losnen"><i class="fa fa-github"></i></a>
        <a href="https://twitter.com/Losnen"><i class="fa fa-twitter"></i></a>
        <h3>Email: alu0100815146@ull.edu.es</h3>
        <h3>Samuel Ramos Barroso</h3>
</footer> -->

<!-- <button class="btn first">Button 1</button>

<button class="btn third">Button 3</button> -->


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/index.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

    <script type="text/javascript">
      function verificar(){        
        // var numal = rand(1,5);

        // var lista = [1,2,3,4,5];
        // numal = lista.sort(function() {return Math.random() - 0.5});

        var numal=numeroAleatorio(1, 5);

        function numeroAleatorio(min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }
        console.log(numal);
        //document.write(lista); // imprime por ejemplo: 7,9,1,5,2,3,6,4,8



        // echo rand(5, 15);

        $.post("php/check.php", { 'numal': numal }, function(data){

          // response = JSON.parse(data);                                                                  
          // $("#verificado").html(response[0]);  
          // $("#content").html(response[1]);  
          // $("#quantity").val(response[0]);

        $("#verificado").html(data);
        });     
      }
      function verificar2(){        
        var numal = Math.floor(Math.random()*5)   


        $.post("php/check2.php", { 'numal': numal }, function(data){

          // response = JSON.parse(data);                                                                  
          // $("#verificado").html(response[0]);  
          // $("#content").html(response[1]);  
          // $("#quantity").val(response[0]);

        $("#verificado2").html(data);
        });     
      }

      
    </script>

</body>
</html>