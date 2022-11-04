<?php
$servername = "localhost";
$database = "mydb";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="SELECT * FROM `emple` ";
$sentencia=$con->prepare($sql);
$sentencia->execute();
$resultado=$sentencia->fetchAll();

print_r($resultado);

?>