<?php
include('../../database/conexion_bd_escuela.php');
    class AlumnoDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = new ConexionBDEscuela(); 
        }

        // ---- metodos abcc ----

        //Altas
        public function agregarAlumno($nc, $nombre, $primer_ap, $segundo_ap, $edad, $semestre, $carrera){
            $sql = "INSERT INTO Alumnos VALUES('$nc', '$nombre', '$primer_ap', '$segundo_ap', $edad, $semestre, '$carrera')";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //Bajas
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM Alumnos WHERE Num_Control = '$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //Cambios
        public function actualizarAlumno($nc, $nombre, $primer_ap, $segundo_ap, $edad, $semestre, $carrera){
            $sql = "UPDATE Alumnos SET Nombre = '$nombre', Primer_ap = '$primer_ap', Segundo_ap = '$segundo_ap',
                    Edad = '$edad', Semestre = '$semestre', Carrera = '$carrera' WHERE Num_Control = '$nc'";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        //Consultas
        public function mostrarAlumnos($filtro){
            $sql = "SELECT * FROM Alumnos";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }

        public function mostrarAlumnosFiltro($filtro){
            $res = mysqli_query($this->conexion->getConexion(), $filtro);
            return $res;
        }
    }
?>