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
                    
                    <div class="table">
                    <h2>Lista de tareas</h2>
<table class="table table-striped table-hover">
<thead class="thead">
<tr>
<th>Identificador</th>
<th>Descripción</th>
<th>Estado</th>
</tr>
</thead>
<tbody>
<?php 

include_once('utils.php');


for ($i=0; $i<count($array); $i++) {
    echo "<tr>";
        echo "<td>".$array[$i]['id']."</td>";
        echo "<td>".$array[$i]['descripcion']."</td>";
        echo "<td>".$array[$i]['estado']."</td>";
    echo "</tr><br/>";
}
?>
</tbody>
</table>


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