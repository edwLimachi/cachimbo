<?php
	function getCon(){
		$conexion = new mysqli("localhost", "root", "", "cachimbo_bd_2019")
		or die ("No se establecio la conexion");

		//Estableciendo la fecha actual
     	date_default_timezone_set('America/Lima');
		
		return $conexion;
	}
 ?>