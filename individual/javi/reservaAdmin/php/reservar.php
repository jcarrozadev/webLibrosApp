<?php

require_once './controladores/creservaadmin.php';

//valido

$objCreservaAdmin = new Creservaadmin();


if (isset($_POST['dni'])){

    $dni = $_POST['dni'];

    if ($objCreservaAdmin->validarDNI($dni)) {

        if (isset($_POST['nombreTutor']) && isset($_POST['correo']) && isset($_POST['nombreAlumno']) && isset($_POST['clases']) && isset($_POST['curso']) && isset($_POST['documento']) && isset($_POST['librosSeleccionados'])) {

            $nombreTutor = $_POST['nombreTutor'];
            $correo = $_POST['correo'];
            $nombreAlumno = $_POST['nombreAlumno'];
            $clase = $_POST['clases'];
            $curso = $_POST['curso']; 
            $documento = $_POST['documento'];
            $librosSeleccionados = $_POST['librosSeleccionados'];
            $costeTotal = $objCreservaAdmin->calcularCosteTotal($librosSeleccionados);

            //var_dump($dni, $nombreTutor, $correo, $nombreAlumno, $costeTotal, $curso, $clase, $documento);

            if ($objCreservaAdmin->hacerReserva($dni,$nombreTutor,$correo,$nombreAlumno,$costeTotal,$clase,$curso,$documento,$librosSeleccionados)) {
                echo "Reserva correcta";
            } else {
                echo "Reserva incorrecta";
            }

        } else {
            echo "Introduce datos correctamente";
        }

    } else {
        echo "DNI no válido.";
    }

} else {
    echo "Introduce DNI";
}
