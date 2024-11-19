<?php

require_once './config/conectar.php';

$curso = intval($_POST['curso']); // Convierte el valor a entero

if (isset($curso)) {

    $sql = "SELECT 
        c.nombre AS curso, 
        l.nombre AS libro, 
        l.precio 
        FROM 
            Libros_Cursos lc
            INNER JOIN Libros l ON lc.idLibro = l.idLibro
            INNER JOIN Cursos c ON lc.idCurso = c.idCurso
        WHERE 
            lc.idCurso = $curso";

    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        // Procesar el resultado si es necesario
        $datos = [];
        foreach ($resultado as $fila) {
            $datos[] = $fila; // Guardar resultados en un array
        }

        // Redirigir con datos usando una sesión o un query string
        session_start();
        $_SESSION['resultado'] = $datos;
        header("Location: ../2reservaAdmin.php");
        exit;

    } else {
        // Redirigir a una página de error o mostrar un mensaje
        header("Location: ../reservaAdmin.php?mensaje=No se encontraron resultados del curso seleccionado");
        exit;
    }

} else {
    // Redirigir a la página inicial con un mensaje
    header("Location: ../reservaAdmin.php?mensaje=Selecciona un curso");
    exit;
}
