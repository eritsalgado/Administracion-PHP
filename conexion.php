<?php
$host_bd = "localhost";
 $basededatos_bd = "biblioteca";
 $usuario_bd = "root";
 $password_bd = "";
 $puerto_bd = "3306";
try{
//PDO = PhP Database Object
    $bd = new PDO
            ("mysql:host=".$host_bd.";
                dbname=".$basededatos_bd.";
                port=".$puerto_bd.";
                charset=utf8",
            $usuario_bd, $password_bd);

    $bd-> setAttribute
                (PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
// para comentar rapido 
    // echo "<br>Conexion lista<br>";

}catch(PDOException $e){

    echo "<br>Ocurrio un error ->" . $e->getMessage();

}
?>