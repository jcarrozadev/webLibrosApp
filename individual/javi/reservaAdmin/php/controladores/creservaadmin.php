<?php

require_once './modelos/mreservaadmin.php';

class Creservaadmin {

    private $objMreserva;

    function __construct()
    {
        $this->objMreserva = new Mreservaadmin();
    }

    function buscarLibros($curso) {
        
        $datos = $this->objMreserva->buscarLibros($curso);

        return $datos;
        
    }

    function obtenerClases($curso) {

        $clases = $this->objMreserva->obtenerClases($curso);

        return $clases;

    }

    function obtenerTutor() {

        $tutores = $this->objMreserva->obtenerTutor();

        return $tutores;
        
    }

}