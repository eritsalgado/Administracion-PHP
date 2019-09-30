<?php
    $id = $_GET['id'];
    include_once("conexion.php");
    $sql = $bd->prepare("DELETE 
    FROM usuarios 
    WHERE id = :id");
                    $response = $sql->execute(array("id" => $_GET['id']));
    // echo "<pre>";
    // print_r ($id);
    // echo "</pre>";
    header("Location:listado.php");
?>