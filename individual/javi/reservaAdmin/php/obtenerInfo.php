<?php

require_once './controladores/creservaadmin.php';

$curso = $_POST['curso']; 

if (isset($curso)) {

    $objCreservaAdmin = new Creservaadmin();

    $libros = $objCreservaAdmin->buscarLibros($curso);
    $clases = $objCreservaAdmin->obtenerClases($curso);
    $tutores = $objCreservaAdmin->obtenerTutor();

    include '../reservaAdmin.php';

    exit;

} else {
    // Redirigir a la página inicial con un mensaje
    header("Location: ../elegirCurso.php?mensaje=Selecciona un curso");
    exit;
}
