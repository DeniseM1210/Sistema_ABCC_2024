<?php
include('../../database/conexion_bd_usuarios.php');

    class UsuarioDAO{
        private $conexion;

        public function __CONSTRUCT(){
            $this->conexion = new ConexionBDUsuarios();
        }

        public function agregarUsuario($usu, $contra){
            $sql = "INSERT INTO Usuarios VALUES(sha1('$usu'), sha1('$contra'));";
            $res = mysqli_query($this->conexion->getConexion(), $sql);
            return $res;
        }
    }

?>