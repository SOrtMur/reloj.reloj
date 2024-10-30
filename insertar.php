<?php 
  include_once "../config.php";
	
  if (isset($_POST['Enviar'])){
		$conex = new mysqli($host,$user,$password,$db);
		if(isset($_POST[''])){
			$apellido1 = $_POST['Apellido1']; 
		}
		if(isset($_POST['Apellido2']) && filter_var($_POST['Apellido2'],FILTER_SANITIZE_STRING)){
			$apellido2 = $_POST['Apellido2']; 
		}
  $consulta = "insert into alumnos values ('$nombre','$apellido1','$apellido2','$dni');";
  
  if($conex->query($consulta)){
			echo "Insertado correctamente.";
		} else {
			echo "Error en la inserción.<br>";
			echo $consulta;
			echo $conex->error;
		}
  $conex->close();
?>
