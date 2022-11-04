<?php
$servername = "localhost";
$database = "Emple";
$username = "postgres";
$password = "12345";
$puerto = "5432";

//  $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
try {
    //code...
    $con = new PDO("pgsql:host=$servername;port=$puerto;dbname=$database",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Correcto";
} catch (\Throwable $th) {
    //throw $th;
    echo "Error";
}


$sql="SELECT nombre, id FROM public.emple;";
$sentencia=$con->prepare($sql);
$sentencia->execute();
$resultado=$sentencia->fetchAll();

print_r($resultado);



?>