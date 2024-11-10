<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <form action="../controllers/procesar_busquedas.php" method="POST">
        <div class="col-8">
            <select name="filtro" id="filtro">
                <option value="">Seleccione una opcion</option>
                <option value="1">Num_Control</option>
                <option value="2">Nombre</option>
                <option value="3">Primer_Ap</option>
                <option value="4">Segundo_Ap</option>
                <option value="5">Edad</option>
                <option value="6">Semestre</option>
                <option value="7">Carrera</option>
            </select>
            <input type="text" name="caja_filtro" id="caja_filtro" placeholder="Buscar">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>

        </div>

    </form>
    <?php
        require_once('../controllers/procesar_busquedas.php');
    ?>

</body>

</html>