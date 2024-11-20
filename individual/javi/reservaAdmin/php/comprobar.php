<?php

require_once './config/conectar.php';

$curso = $_POST['curso']; 

if (isset($curso)) {

    $sql = "SELECT 
                c.nombre AS curso,
                l.nombre AS libro,
                l.precio AS precio,
                a.nombre AS asignatura
            FROM 
                Clases cl
                INNER JOIN clases_asignaturas ca ON cl.idCurso = ca.idCurso AND cl.letraClase = ca.letraClase
                INNER JOIN Asignaturas a ON ca.idAsignatura = a.idAsignatura
                INNER JOIN Libros l ON a.idAsignatura = l.idAsignatura
                INNER JOIN Cursos c ON cl.idCurso = c.idCurso
            WHERE 
                cl.idCurso = '$curso'
            ORDER BY 
                l.nombre;
            ";

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
        $_SESSION['curso'] = $curso;
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
