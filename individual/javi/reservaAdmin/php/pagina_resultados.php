<?php
session_start();

if (isset($_SESSION['resultado'])) {
    $resultado = $_SESSION['resultado'];
    foreach ($resultado as $fila) {
        echo "Curso: " . $fila['curso'] . "<br>";
        echo "Libro: " . $fila['libro'] . "<br>";
        echo "Precio: " . $fila['precio'] . "<br><br>";
    }

    // Limpiar la sesión si ya no necesitas los datos
    unset($_SESSION['resultado']);
} else {
    echo "No hay datos para mostrar.";
}
