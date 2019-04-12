    <?php
/*    session_start();

    if (isset($_SESSION['usuario'])) {
    */

     include("connection.php");
     $conexion = getCon(); 

     $correo = $_POST['correo'];
     $fecha=date("Y-m-d");     

     $insertar = "insert into suscripcion (correo, fecha) values ('$correo','$fecha')";

     $resultado =mysqli_query($conexion, $insertar);
     
     //or die("error al insertar datos");         
     // echo "true";
     // $resultado=="true";
     // return $resultado;

     // if ($resultado==true) {        
        
     // }else{

     // }

    ?>
