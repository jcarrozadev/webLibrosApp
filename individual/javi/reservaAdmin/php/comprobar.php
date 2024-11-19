<?php

require_once './config/conectar.php';

$curso = $_POST['curso'];

if (empty($curso)) {

    $sql = 'SELECT 
        c.nombre AS curso, 
        l.nombre AS libro, 
        l.precio 
        FROM 
            Libros_Cursos lc
            INNER JOIN Libros l ON lc.idLibro = l.idLibro
            INNER JOIN Cursos c ON lc.idCurso = c.idCurso
        WHERE 
            lc.idCurso = '.$curso.'';

    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {

        echo 'Ha devuelto cosas';

    }
    else {
        echo 'No ha devuelto nada';
    }

} else {
    echo 'Selecciona un curso';
}