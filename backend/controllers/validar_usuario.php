<?php
    $usuario = $_POST['nombre'];
    $password = $_POST['contra'];

    echo $usuario;
    echo $password;

    //Validacion 


    //verificacion de u y p en bd
    include_once('../../database/conexion_bd_usuarios.php');

    $con = new ConexionBDUsuarios();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($conexion){
        //$sql = "SELECT * FROM usuarios WHERE Nombre_usuario = '$usuario' AND Password = '$password'";
        $u_cifrado = sha1($usuario);
        $p_cifrado = sha1($password);

        $sql = "SELECT * FROM Usuarios WHERE Nombre_usuario = '$u_cifrado' AND Password = '$p_cifrado'";


        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res)==1){
            //echo "Usuario encontrado";
            session_start();
            //echo session_id();
            $_SESSION['valida']= true;
            $_SESSION['usuario'] = $usuario;

            header('location: ../pages/menu_principal.php');
        }else{
            echo "No encontrado";
        }
    }else{
        echo "Error en la conexion";
    }
?>