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
              include('header.php');
         ?>
    <div class="container-fluid">
        <div class="row">
            <!--menu-->
            <?php
              include('menu.php');
         ?>
         
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Aplicación TAREAS en PHP</h2>
                </div>
                <div class="container">
                
                    <form class="mb-5" method="POST" action="nueva.php">
                    <label class="form-label" for="tarea">Formulario para generar tareas</label>
                    <br>
                    <!--
                    <div class="mb-3">
                    <label class="form-label">...</label>
                    <input class="form-control">
                    </div>
                    -->


                        <label class="form-label" for="tarea">Selecciona una tarea:</label>
                        <input name="tarea" id="tarea">
                        <br><br>
                        <label for="descripcion">Descripción:</label>
                        <br>
                        <textarea name="descripcion" rows="5" cols="40"></textarea>
                        <br><br>
                        <label for="estado">Estado:</label>
                        <select class="form-select" id="tarea" name="tarea" required>
                            <option value="sin comenzar">Sin comenzar</option>
                            <option value="en tramite">En trámite</option>
                            <option value="acabada">Acabada</option>
                            
                        </select>
                        
                        <br><br>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <br>
                    </form>

                </div>
            </main>
        </div>
    </div>
    <!--footer-->
    <?php
              include('footer.php');
         ?>
    
</body>
</html>