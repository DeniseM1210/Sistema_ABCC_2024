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
        include('../controllers/controller_alumno.php')
    ?>

    <form action="../controllers/procesar_cambios.php" method="POST">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="num_control">Num. Control</label>
                    <?php
                        echo '<input type="text" class="form-control" id="caja_num_control" name="caja_num_control"
                        value="'.$_GET["nc"].'">'
                    ?>
                    
                </div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <?php
                    echo '<input type="text" class="form-control" id="nombre" name="nombre" value = "'.$_GET["nombre"].'">'
                ?>
                
            </div>
            <div class="form-group">
                <label for="primer_ap">Primer Apellido</label>
                <?php
                    echo '<input type="text" class="form-control" id="primer_ap" name="primer_ap" value="'.$_GET["primerAp"].'">'
                ?>
                
            </div>
            <div class="form-group">
                <label for="segundo_ap">Segundo Apellido</label>
                <?php
                    echo '<input type="text" class="form-control" id="segundo_ap" name="segundo_ap"
                    value="'.$_GET["segundoAp"].'">'
                ?>
                
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <?php
                    echo '<input type="text" class="form-control" id="edad" name="edad" value="'.$_GET["edad"].'">'
                ?>
                
            </div>
            <div class="form-group">
                <label for="semestre">Semestre</label>
                <?php
                    echo '<input type="text" class="form-control" id="semestre" name="semestre" value="'.$_GET["semestre"].'">'
                ?>
                
            </div>
            <div class="form-group">
                <label for="carrera">Carrera</label>
                <?php
                    echo '<input type="text" class="form-control" id="carrera" name="carrera" value="'.$_GET["carrera"].'">'
                ?>
                
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    </form>
</body>

</html>