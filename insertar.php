<?php 
  include_once "../config.php";
	
  if (isset($_POST['Enviar'])){
	$conex = new mysqli($host,$user,$password,$db);
	if(isset($_POST['nombre'])){
		$apellido1 = $_POST['nombre']; 
	}
	if(isset($_POST['edad'])){
		$apellido2 = $_POST['edad']; 
	}
  $consulta = "insert into alumnos values ('$nombre','$edad');";
  
  if($conex->query($consulta)){
	echo "Insertado correctamente.";
} else {
	echo "Error en la inserción.<br>";
	echo $consulta;
	echo $conex->error;
}
  $conex->close();
?>
