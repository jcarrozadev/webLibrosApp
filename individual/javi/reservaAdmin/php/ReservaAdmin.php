<?php

class ReservaAdmin {
    private $idReserva;
    private $dni;
    private $nombreTutor;
    private $correo;
    private $nombreAlumno;
    private $documento;
    private $apta;
    private $fechaReserva;
    private $costeTotal;
    private $fechaRegistro;
    private $idCurso;
    private $letraClase;

    public function __construct($dni, $nombreTutor, $correo, $nombreAlumno, $documento, $fechaReserva, $costeTotal, $fechaRegistro, $idCurso, $letraClase, $esAdministrador = false) {
        $this->dni = $dni;
        $this->nombreTutor = $nombreTutor;
        $this->correo = $correo;
        $this->nombreAlumno = $nombreAlumno;
        $this->documento = $documento;
        $this->fechaReserva = $fechaReserva;
        $this->costeTotal = $costeTotal;
        $this->fechaRegistro = $fechaRegistro;
        $this->idCurso = $idCurso;
        $this->letraClase = $letraClase;

        // Si la reserva la crea un administrador, se marca como apta automáticamente
        $this->apta = $esAdministrador ? 1 : 0;
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
