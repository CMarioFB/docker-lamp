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
                <h2>Crear TAREAS en PHP</h2>
            </div>
                <div class="container">
                
                    <form class="mb-5" method="POST" action="nueva.php">
                    
                    <br>
                    
                        <label class="form-label" for="id">Id de la tarea:(número)</label>
                        <input  class="form-control" name="id" id="id">
                        <br><br>
                        <label for="descripcion">Descripción:</label>
                        <br>
                        <input class="form-label"  type="text" name="descripcion" id="descripcion">
                        
                        <br><br>
                        <label class="form-label" for="estado">Estado:</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="pendiente">Pendiente</option>
                            <option value="en proceso">En proceso</option>
                            <option value="completada">Completada</option>
                            
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
              include_once('footer.php');
         ?>
    
</body>
</html>