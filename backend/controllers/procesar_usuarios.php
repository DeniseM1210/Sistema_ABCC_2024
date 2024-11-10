<?php
    include('controller_usuario.php');

    $usuario = $_POST['nombre'];
    $contra = $_POST['contra'];


    $datos_correctos = false;
    if(isset($usuario) && !empty($usuario) && isset($contra) && !empty($contra) ){
        $datos_correctos = true;
    }

    if($datos_correctos){
        $usuarioDAO = new UsuarioDAO();
        $res = $usuarioDAO->agregarUsuario($usuario, $contra);
        if($res){
            header('Location: ../pages/login.php');
        }
    }
?>