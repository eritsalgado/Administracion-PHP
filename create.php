<?php 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rango = $_POST['rango'];
    // echo "<pre>";
    // print_r ($_POST);
    // echo "</pre>";
    include_once("conexion.php");
    $consulta = "INSERT INTO usuarios 
		(nombre,correo,pass,rango) 
		VALUES 
		('$nombre','$email','$password','$rango')";
		$resultado = $bd->prepare($consulta);
        $resultado->execute();
    header("Location:listado.php");
?>