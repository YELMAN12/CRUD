<?php

$servidor = "localhost";

$usuario = "root";

$clave = "";

$baseDatos = "inventario_ti";

$conexion = new mysqli($servidor, $usuario, $clave, $baseDatos);

if ($conexion->connect_error) {

die("Error de conexión: " . $conexion->connect_error);

}

?>