<?php

require_once './config/conectar.php';

$curso = $_POST['curso'];

if (empty($curso)) {

    

} else {
    echo 'Selecciona un curso';
}