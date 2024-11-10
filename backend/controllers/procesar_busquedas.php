<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    
        require_once('../pages/menu_principal.php');
        require_once('../pages/consultas.php');
    ?>
</body>

</html>

<?php
    include_once('controller_alumno.php');

    if(isset($_POST['filtro']) || isset($_POST['filtro'])){
        $filtro = $_POST['filtro'];
        $busqueda = $_POST['caja_filtro'];
    }else{
        $filtro = 0;
    }

    $alumnoDAO = new AlumnoDAO();
    if($filtro == 1){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Num_Control LIKE '$busqueda%'");
    }else if($filtro == 2){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Nombre LIKE '$busqueda%'");
    }else if($filtro == 3){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Primer_Ap LIKE '$busqueda%'");
    }else if($filtro == 4){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Segundo_Ap LIKE '$busqueda%'");
    }else if($filtro == 5){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Edad LIKE '$busqueda%'");
    }else if($filtro == 6){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Semestre LIKE '$busqueda%'");
    }else if($filtro == 7){
        $datos = $alumnoDAO->mostrarAlumnosFiltro("SELECT * FROM Alumnos WHERE Carrera LIKE '$busqueda%'");
    }else{
        $datos = $alumnoDAO->mostrarAlumnos("x");
    }

    echo '<div class="container">';

    if(mysqli_num_rows($datos)>0){
        echo'<table class="table">';
        echo'<thead class="thead-dark">
        <tr>
            <th scope="col"> Num. Control </th>
            <th scope="col"> Nombre </th>
            <th scope="col"> Apellido Paterno </th>
            <th scope="col"> Apellido Materno </th>
            <th scope="col"> Edad </th>
            <th scope="col"> Semestre </th>
            <th scope="col"> Carrera </th>
            <th scope="col"> Acciones </th>
        </tr>
        </thead>';

        while($fila = mysqli_fetch_assoc($datos)){
            printf(
                "<tr> <td>" . $fila['Num_Control'] . "</td>
                <td>" . $fila['Nombre'] . "</td>
                <td>" . $fila['Primer_Ap'] . "</td>
                <td>" . $fila['Segundo_Ap'] . "</td>
                <td>" . $fila['Edad'] . "</td>
                <td>" . $fila['Semestre'] . "</td>
                <td>" . $fila['Carrera'] . "</td>
                <td>    

                     
                
                "
            );

            printf("
                <a class='btn btn-lg btn-primary' href='detalles.php?nc=%s&nombre=%s&primerAp=%s&
                    segundoAp=%s&edad=%d&semestre=%d&carrera=%s'>
                    <i class='bi bi-info-circle-fill'></i>
                </a>
            ",  $fila['Num_Control'], $fila['Nombre'], $fila['Primer_Ap'], $fila['Segundo_Ap'],
            $fila['Edad'], $fila['Semestre'],$fila['Carrera'] );

            printf("
                <a class='btn btn-lg btn-success' href='formulario_cambios.php?nc=%s&nombre=%s&primerAp=%s&
                    segundoAp=%s&edad=%d&semestre=%d&carrera=%s'>
                    <i class='bi bi-pencil-square'></i>
                </a>
            ", $fila['Num_Control'], $fila['Nombre'], $fila['Primer_Ap'], $fila['Segundo_Ap'],
            $fila['Edad'], $fila['Semestre'],$fila['Carrera'] );

            printf("
                <a class='btn btn-lg btn-danger' href='../controllers/procesar_bajas.php?nc=%s'>
                    <i class='bi bi-trash'></i>
                </a>
            ", $fila['Num_Control']);

            printf("</td>");
        }
        echo'</table>';
    }else{
        echo"Tabla vacia";
    }
?>