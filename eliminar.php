<?php
include_once 'CRUD.php';

$id = $_POST['id'];
$id = intval($id);

$sql = "DELETE FROM productos WHERE id = $id";

if (mysqli_query($conexion, $sql)) {

    if (mysqli_affected_rows($conexion) > 0) {

        echo "Producto eliminado correctamente.";
    } else {

        echo "El producto con ID $id no existe o ya ha sido eliminado.";
    }
} else {

    echo 'Hubo un error en la consulta: ' . mysqli_error($conexion);
}

mysqli_close($conexion);
?>