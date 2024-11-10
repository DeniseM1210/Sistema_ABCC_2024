<?php
    include('controller_alumno.php');

    $alumnoDAO = new AlumnoDAO();

    var_dump($_GET['nc']);
    
    if($alumnoDAO->eliminarAlumno($_GET['nc'])){
        //echo "Exito";
        header('location: ../pages/consultas.php');
    }else{
        echo "No funciono xd";
    }
    

?>