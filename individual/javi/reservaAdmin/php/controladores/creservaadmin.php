<?php

require_once './modelos/mreservaadmin.php';

class Creservaadmin {

    private $objMreserva;

    function __construct()
    {
        $this->objMreserva = new Mreservaadmin();
    }

    function buscarLibros($curso) {
        //VALIDAR
        
        $datos = $this->objMreserva->buscarLibros($curso);

        return $datos;
    }

}