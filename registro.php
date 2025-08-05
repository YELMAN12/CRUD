<?php

include 'CRUD.php';

$nombre= $_POST['nombre'];

$descripcion =$_POST['descripcion'];

$precio =$_POST['precio'];

$stock = $_POST['stock'];

$marca = $_POST['marca'];

$modelo = $_POST['modelo'];

$a= "INSERT INTO productos (nombre, descripcion, precio, stock, marca, modelo) VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$marca', '$modelo')";

if ($conexion->query($a)){

echo "Registro agregado correctamente.<br><br>";

} else {

die("Error al agregar el registro: " . $conexion->error);
}
?>