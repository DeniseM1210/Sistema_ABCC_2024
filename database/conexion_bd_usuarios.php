<?php
/*
    Funciones MSQLi

    Funciones PDO 
        Permiten cambiar la conectividad a diversos gestores de bd
*/
    class ConexionBDUsuarios{
        private $conexion;
        private $host = "localhost:3306";
        private $usuario = "root";
        private $password = "";
        private $bd = "usuarios_bd_escuela";
        //hosting
        //private $host = "sql202.infinityfree.com";
        //private $usuario = "if0_37251731";
        //private $password = "vhTp8Gp8lpCv65";
        //private $bd = "if0_37251731_usuarios_bd_escuela";

        public function __construct(){
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->password, $this->bd);

            if(!$this->conexion)
                die("Error en conexion bd" . mysqli_connect_error());
        }

        public function getConexion(){
            return $this->conexion;
        }
    }

?>