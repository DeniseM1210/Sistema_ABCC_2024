<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require_once('menu_principal.php');
        include('../controllers/controller_alumno.php')
    ?>

    <section class="bg-light p-2 p-md-3 p-xl-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h4 class="text-center">Detalles</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12">
                                    <label><strong>Num_Control: </strong>    </label>
                                    <?php
                                        echo '<label> ' . $_GET["nc"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Nombre: </strong> </label>
                                    <?php
                                        echo '<label> ' . $_GET["nombre"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Primer Apellido: </strong> </label>
                                    <?php
                                        echo '<label> ' . $_GET["primerAp"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Segundo Apellido </strong>: </label>
                                    <?php
                                        echo '<label> ' . $_GET["segundoAp"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Edad: </strong> </label>
                                    <?php
                                        echo '<label> ' . $_GET["edad"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Semestre: </strong> </label>
                                    <?php
                                        echo '<label> ' . $_GET["semestre"] . '  </label>'
                                    ?>
                                    <br>
                                    <label for=""><strong>Carrera: </strong> </label>
                                    <?php
                                        echo '<label> ' . $_GET["carrera"] . '  </label>'
                                    ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>