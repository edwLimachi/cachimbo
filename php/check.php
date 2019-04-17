 <?php 

require('connection.php');

     $conexion = getCon();
     if(isset($_POST['numal'])) $numal =strtoupper($_POST['numal']); else $numal="";
     echo "<img class='std' src='images/".$numal.".png' alt='' style='width: 265px;height: 300px;'>";

?> 










