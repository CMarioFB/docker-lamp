<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--header-->
    
    <?php
        include_once('header.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <!--menu-->
            <?php
              include_once('menu.php');
            ?>
         
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Aplicación básica en PHP</h2>
                </div>

                <div class="container">
                    <p>Actualmente nos encontramos desarrollando una aplicación básica de PHP.</p>
                    <p>La aplicación consiste en de generar tareas y ver su estado validando las entradas</p>.
                    <p>Podemos crear nuevas tareas y añadirlas a las ya creadas.</p>
                    <p>Tambíen podemos ver el listado de las tareas que tenemos introducidas</p>
                </div>

            </main>
        </div>
    </div>
    <!--footer-->
    <?php
         include_once('footer.php');
    ?>
    
</body>
</html>