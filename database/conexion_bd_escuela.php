
<?php
/*
    Funciones MSQLi

    Funciones PDO 
        Permiten cambiar la conectividad a diversos gestores de bd
*/
    class ConexionBDEscuela{
        private $conexion;
        private $host = "localhost:3306";
        private $usuario = "root";
        private $password = "";
        private $bd = "BD_escuela_web_2024";
        //hosting
        //private $host = "sql202.infinityfree.com";
        //private $usuario = "if0_37251731";
        //private $password = "vhTp8Gp8lpCv65";
        //private $bd = "if0_37251731_BD_escuela_web_2024";

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