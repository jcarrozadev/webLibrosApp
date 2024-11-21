<?php

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

    function buscarLibros($curso) {
        
        $sql = "SELECT 
                c.nombre AS curso,
                l.nombre AS libro,
                l.precio AS precio,
                a.nombre AS asignatura
            FROM 
                Clases cl
                INNER JOIN clases_asignaturas ca ON cl.idCurso = ca.idCurso AND cl.letraClase = ca.letraClase
                INNER JOIN Asignaturas a ON ca.idAsignatura = a.idAsignatura
                INNER JOIN Libros l ON a.idAsignatura = l.idAsignatura
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

    function obtenerClases($curso) {

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

}