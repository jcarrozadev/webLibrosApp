<?php

class ReservaAdmin {
    private $idReserva;
    private $dni;
    private $nombreTutor;
    private $correo;
    private $nombreAlumno;
    private $documento;
    private $apta;
    private $costeTotal;
    private $idCurso;
    private $letraClase;

    public function __construct($dni, $nombreTutor, $correo, $nombreAlumno, $documento, $idCurso, $letraClase) {
        $this->dni = $dni;
        $this->nombreTutor = $nombreTutor;
        $this->correo = $correo;
        $this->nombreAlumno = $nombreAlumno;
        $this->idCurso = $idCurso;
        $this->letraClase = $letraClase;
    }

    // Métodos adicionales
    public function marcarApta() {
        $this->apta = 1;
    }

    public function mostrarResumen() {
        $estado = $this->apta ? "Apta" : "No apta";
        return "Reserva - DNI: {$this->dni}, Alumno: {$this->nombreAlumno}, Estado: {$estado}";
    }
}
