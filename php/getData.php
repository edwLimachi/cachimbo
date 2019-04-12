
<?php 

include("connection.php");
$conexion = getCon();

if(isset($_POST["id"]) 
 ):?>
	<?php
	$id=$_POST["id"];	
	
?>

<?php
  
  $query = "SELECT * FROM buzon where id=$id";
  $suscripcion = $conexion->query($query);
  
  foreach ($suscripcion as $indice => $row) {
    $mensaje=$row['mensaje'];
  ?>
    
  <?php
  	echo $mensaje;
    }                
 ?>

<?php else:			
?>
<?php endif; ?>