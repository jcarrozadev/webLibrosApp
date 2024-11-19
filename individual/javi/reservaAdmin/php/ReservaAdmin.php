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

    // Getters
    public function getIdReserva() {
        return $this->idReserva;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNombreTutor() {
        return $this->nombreTutor;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getNombreAlumno() {
        return $this->nombreAlumno;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function isApta() {
        return $this->apta;
    }

    public function getFechaReserva() {
        return $this->fechaReserva;
    }

    public function getCosteTotal() {
        return $this->costeTotal;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function getLetraClase() {
        return $this->letraClase;
    }

    // Setters
    public function setApta($apta) {
        $this->apta = $apta;
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
