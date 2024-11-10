<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
        require_once('menu_principal.php');
    ?>
    <form action="../controllers/procesar_altas.php" method="POST">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="num_control">Num. Control</label>
                    <input type="text" class="form-control" id="caja_num_control" name="caja_num_control"
                        placeholder="Numero de control">
                </div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="primer_ap">Primer Apellido</label>
                <input type="text" class="form-control" id="primer_ap" name="primer_ap" placeholder="Primer Apellido">
            </div>
            <div class="form-group">
                <label for="segundo_ap">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundo_ap" name="segundo_ap"
                    placeholder="Segundo Apellido">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="semestre">Semestre</label>
                <input type="text" class="form-control" id="semestre" name="semestre" placeholder="Semestre">
            </div>
            <div class="form-group">
                <label for="carrera">Carrera</label>
                <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Carrera">
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

    </form>
</body>

</html>