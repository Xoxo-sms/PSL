<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "colegio";

$conn == mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("Conexion fallida" .mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Nombre de Usuario: " . $row["usuario"]. "Contraseña: " $row["contraseña"]. "<br>"; 
    }
}else{
    echo "0 resultado";
}

header('Location: Inicio.html');
?>