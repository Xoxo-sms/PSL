<?php
if (!empty($_POST["Login"])){
    if (empty($_POST["username"]) and empty($_POST["password"])){
        echo"los campos estan vacios";
    }else {
        $usuario=$_POST["username"];
        $clave=$_POST["password"];
        $sql=$conexion->query(" SELECT * FROM login where user='$usuario' and pass='$clave' ");
            if ($datos=$sql->fetch_object()) {
                header("location:inicio.php");
            } else {
                echo"acceso denegado";
            }
        
    }
}
?>