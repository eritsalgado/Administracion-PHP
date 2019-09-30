<?php 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rango = $_POST['rango'];
    $id = $_POST['id'];
    // echo "<pre>";
    // print_r ($_POST);
    // echo "</pre>";
    include_once("conexion.php");
    $sql = $bd->prepare("UPDATE usuarios SET 
    `nombre`=:nombre,
       `correo`=:correo,
       `pass`=:pass,
       `rango`=:rango
       WHERE `id`=:id");  

       $response = $sql->execute(array(
           "id"            => $id,
           "nombre"         => $nombre,
           "correo"     => $email,
           "pass"      => $password,
           "rango"       => $rango
           ));
    header("Location:listado.php");
?>