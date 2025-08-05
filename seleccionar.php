<?php
include_once 'CRUD.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM productos WHERE id = " . $id;

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $producto = mysqli_fetch_assoc($resultado);

        echo "<h1>Producto Encontrado</h1>";
        echo "<strong>ID:</strong> " . $producto['id'] . "<br>";
        echo "<strong>Nombre:</strong> " . $producto['nombre'] . "<br>";
        echo "<strong>Descripción:</strong> " . $producto['descripcion'] . "<br>";
        echo "<strong>Precio:</strong> " . $producto['precio'] . "<br>";
                echo "<strong>Marca:</strong> " . $producto['marca'] . "<br>";
        echo "<strong>Modelo:</strong> " . $producto['modelo'] . "<br>";

    } else {
        echo "No se encontró un producto con el ID " . $id;
    }
} else {
    echo "Por favor, especifica un ID en la URL (ej: ?id=1)";
}

mysqli_close($conexion);
?>