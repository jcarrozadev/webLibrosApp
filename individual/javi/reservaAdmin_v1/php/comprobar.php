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
        $libros = [];
        foreach ($resultado as $fila) {
            $libros[] = $fila; // resultados en array
        }

        session_start();
        $_SESSION['resultado'] = $libros; // Array de libros guardamos en sesion
        $_SESSION['curso'] = $curso; // Guardamos curso en sesion
        header("Location: ../reservaAdmin.php");
        exit;

    } else {
        // Redirigir a una página de error o mostrar un mensaje
        header("Location: ../elegirCurso.php?mensaje=No se encontraron resultados del curso seleccionado");
        exit;
    }

} else {
    // Redirigir a la página inicial con un mensaje
    header("Location: ../elegirCurso.php?mensaje=Selecciona un curso");
    exit;
}
