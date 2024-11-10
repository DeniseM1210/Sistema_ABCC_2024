<?php
    include('controller_alumno.php');

    //1. obtener informacion de las cajas 
    $num_control = $_POST['caja_num_control'];
    $nombre = $_POST['nombre'];
    $primer_ap = $_POST['primer_ap'];
    $segundo_ap = $_POST['segundo_ap'];
    $edad = $_POST['edad'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];


    //2. validar datos
    $datos_correctos = false;
    if(isset($num_control) && !empty($num_control) && is_numeric($num_control)
        && isset($nombre) && !empty($nombre) && isset($primer_ap) && !empty($primer_ap)
        && isset($segundo_ap) && !empty($segundo_ap) && isset($edad) && !empty($edad) && is_numeric($edad)
        && isset($semestre) && !empty($semestre) && is_numeric($semestre)
        && isset($carrera) && !empty($carrera)){
        $datos_correctos = true;
    }

    //3. (pendiente) validar que exista previamente
    //4. mandar los datos al controlador
    if($datos_correctos){
        $alumnoDAO = new AlumnoDAO();
        $res = $alumnoDAO->agregarAlumno($num_control, $nombre, $primer_ap, $segundo_ap, $edad, $semestre, $carrera);
        if($res){
            header('location: ../pages/formulario_altas.php');
        }

    }
    //5. insertar en la bd un objeto del modelo alumno

    


?>