 <?php 




// if ($numal == null || $numal = '') {
//  	$numal = "";
//  }else{
//  	$numal = $_POST['numal'];
//  }

 

require('connection.php');


      $conexion = getCon();
      if(isset($_POST['numal'])) $numal =strtoupper($_POST['numal']); else $numal="";
      $query = "SELECT * FROM estudiantes_cachimbos WHERE id='$numal';";
      $sexo = $conexion->query($query);

      foreach ($sexo as $indice => $row) {
      	$hola=$row['id'];
      	// $hola2=$row['nombre'];           
    }

    echo "<img class='std' src='images/".$hola.".png' >";

    // $data=array($hola3,$hola2);
    // return $data;

    

?> 
    <!--   <img class="std" src="images/team_1.jpg" >
	echo $hola; -->










