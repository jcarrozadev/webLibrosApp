<?php

use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;

class Mreservaadmin {

    private $conexion;

    function __construct()
    {
        require_once './config/configDB.php';

        //Conecta con la base de datos del servidor($conexión)
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); //Conecta con la base de datos
        $this->conexion->set_charset("utf8"); //Usa juego caracteres UTF8
        //Desactivar errores
        $controlador = new mysqli_driver();
        $controlador->report_mode = MYSQLI_REPORT_OFF;
    }

    public function buscarLibros($curso) {
        
        $sql = "SELECT 
                    c.nombre AS curso,
                    cl.letraClase AS clase,
                    a.nombre AS asignatura,
                    l.nombre AS libro,
                    l.precio AS precio,
                    l.isbn AS isbn,
                    e.nombre AS editorial
                FROM 
                    Clases cl
                    INNER JOIN clases_asignaturas ca ON cl.idCurso = ca.idCurso AND cl.letraClase = ca.letraClase
                    INNER JOIN Asignaturas a ON ca.idAsignatura = a.idAsignatura
                    INNER JOIN Libros l ON a.idAsignatura = l.idAsignatura
                    INNER JOIN Editoriales e ON l.idEditorial = e.idEditorial
                    INNER JOIN Cursos c ON cl.idCurso = c.idCurso
                WHERE 
                    cl.idCurso = '$curso'
                ORDER BY 
                    l.nombre;
                ";

            $resultado = $this->conexion->query($sql);

            if ($resultado && $resultado->num_rows > 0) {
                // Procesar el resultado si es necesario
                $libros = [];
                foreach ($resultado as $fila) {
                    $libros[] = $fila; // resultados de libros en array
                }

                return $libros;
            }

    }

    public function obtenerClases($curso) {

        $sql = "SELECT * FROM clases WHERE idCurso = '$curso'";

        $resultado = $this->conexion->query($sql);

        if ($resultado && $resultado->num_rows > 0) {
            // Procesar el resultado si es necesario
            $clases = [];
            foreach ($resultado as $fila) {
                $clases[] = $fila; // resultados de clase en array
            }

            return $clases;
        }

    }

    public function obtenerTutor() {

        $sql = "SELECT * FROM Tutores";

        $resultado = $this->conexion->query($sql);

        if ($resultado && $resultado->num_rows > 0) {
            $tutores = [];
            foreach($resultado as $fila) {
                $tutores[] = $fila;
            }

            return $tutores;
        }

    }

    public function guardarReservaLibros($idReserva, $isbnLibros) {
        if (!empty($isbnLibros)) {
            foreach ($isbnLibros as $isbn) {
                $sqlLibros = "INSERT INTO reserva_libros (idReserva, isbn, entregado) 
                              VALUES ('$idReserva', '$isbn', 0);";
                $this->conexion->query($sqlLibros); // Ejecutamos la consulta para cada libro
            }
        }
    }

    public function hacerReserva($dni,$nombreTutor,$correo,$nombreAlumno,$costeTotal,$clase,$curso,$documento,$libros) {

        $apta = 1;
        $fechaActual = date("Y-m-d"); // Obtiene la fecha actual en formato "año-mes-día"
    
        $sql = "INSERT INTO Reservas (dni, nombreTutor, correo, nombreAlumno, documento, apta, fecha_reserva, coste_total, fecha_registro, idCurso, letraClase)
                VALUES 
                        ('$dni', '$nombreTutor', '$correo', '$nombreAlumno', '$documento', $apta, '$fechaActual', $costeTotal, '$fechaActual', '$curso', '$clase');";
    
        $this->conexion->query($sql);
    
        if ($this->conexion->affected_rows > 0) {

            $idReserva = $this->conexion->insert_id;

            $this->guardarReservaLibros($idReserva, $libros);

            return true;
        }
        return false;
    }

}