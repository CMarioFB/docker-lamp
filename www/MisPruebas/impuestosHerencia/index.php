<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Datos Impuestos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Simulador Impuestos Herencia</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="impHerencia.php">Impuestos</a></li>
            </ul>
        </nav>
    </header>
    
    <br>
    <form action="impHerencia.php" method="post">
        <div> 
            <label for="nombre1" class="form-label">Nombre1</label>
            <input type="text" name="nombre1" id="nombre1">
            
        </div>
         
        <div>
            <label for="fecha1" class="form-label">Fecha1 fallec</label>
            <input type="date" class="form-control" id="fecha1" name="fecha1" value="<?php echo date('1981-06-08'); ?>" required>
        </div>
        <div> 
            <label for="nombre2" class="form-label">Nombre2</label>
            <input type="text" name="nombre2" id="nombre2">
            
        </div>
        <div>
            <label for="fecha2" class="form-label">Fecha2 fallec</label>
            <input type="date" class="form-control" id="fecha2" name="fecha2" value="<?php echo date('1986-03-28'); ?>" required>
        </div>
        <div>
            <label for="importe" class="form-label">Importe</label>
            <input type="number" class="form-control" id="importe" name="importe" required>
        </div>
        <div>
            <label for="deduciones" class="form-label">Deduciones</label>
            <input type="number" class="form-control" id="deduciones" name="deduciones" required>
        </div>
        <div>
            <label for="porcentaje" class="form-label">Porcentaje</label>
            <input type="double" class="form-control" id="porcentaje" name="porcentaje" required>
        </div>
        
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</body>
</html>