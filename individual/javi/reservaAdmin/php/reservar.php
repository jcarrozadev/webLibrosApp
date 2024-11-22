<?php

require_once './controladores/creservaadmin.php';
require_once 'ReservaAdmin.php';


//valido
$dni = $_POST['dni'];
$nombreTutor = $_POST['nombreTutor'];
$correo = $_POST['correo'];
$nombreAlumno = $_POST['nombreAlumno'];
$clase = $_POST['clases'];
$curso = $_POST['curso']; 

//LIBROS

$documento = $_POST['documento'];

$objReserva = new ReservaAdmin($dni,$nombreTutor,$correo,$nombreAlumno,$documento,$curso,$clase);

