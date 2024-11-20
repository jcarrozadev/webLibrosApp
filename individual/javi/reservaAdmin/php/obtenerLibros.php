<?php

require_once './controladores/creservaadmin.php';

$curso = $_POST['curso']; 

if (isset($curso)) {

    //Obtenemos el array de libros y el curso
    /*session_start();
    $_SESSION['resultado'] = $libros; // Array de libros guardamos en sesion
    $_SESSION['curso'] = $curso; // Guardamos curso en sesion
    */

    $objCreservaAdmin = new Creservaadmin();

    $libros = $objCreservaAdmin->buscarLibros($curso);

    include '../reservaAdmin.php';

    exit;

} else {
    // Redirigir a la página inicial con un mensaje
    header("Location: ../elegirCurso.php?mensaje=Selecciona un curso");
    exit;
}
