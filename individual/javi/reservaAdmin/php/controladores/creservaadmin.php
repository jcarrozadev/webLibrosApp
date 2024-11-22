<?php

require_once './modelos/mreservaadmin.php';

class Creservaadmin {

    private $objMreserva;

    function __construct()
    {
        $this->objMreserva = new Mreservaadmin();
    }

    public function buscarLibros($curso) {
        
        $datos = $this->objMreserva->buscarLibros($curso);

        return $datos;
        
    }

    public function obtenerClases($curso) {

        $clases = $this->objMreserva->obtenerClases($curso);

        return $clases;

    }

    public function obtenerTutor() {

        $tutores = $this->objMreserva->obtenerTutor();

        return $tutores;
        
    }

    public function validarDNI($dni) {

        $dni = strtoupper(trim($dni)); // Eliminar espacios o caracteres no válidos
        
        if (!preg_match('/^[0-9]{8}[A-Z]$/', $dni)) { // Comprobar formato (8 dígitos + 1 letra)
            return false;
        }
        
        // Calcular la letra correcta
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $numeros = intval(substr($dni, 0, 8));
        $letraCorrecta = $letras[$numeros % 23];
        
        return $dni[8] === $letraCorrecta; // Comparar la letra del DNI
    }

    
    public function hacerReserva($dni,$nombreTutor,$correo,$nombreAlumno,$costeTotal,$curso,$clase,$documento,$libros) {
        
        if ($this->objMreserva->hacerReserva($dni,$nombreTutor,$correo,$nombreAlumno,$costeTotal,$curso,$clase,$documento,$libros)) {
            return true;
        }
        return false;

    }

    public function calcularCosteTotal($libros) {
        $coste = 0;
        foreach ($libros as $libro) {
            $coste += $libro['precio']; // Asume que el precio de cada libro está disponible
        }
        return $coste;
    }

}