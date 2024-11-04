<div class="container-fluid">
            <h1>Nueva Formularios</h1>
            <br />
                    
            
            <?php

                
                    include ('utils.php');
                $id=$descripcion=$estado="";
                $idError=$descripcionError=$estadoError="";
                $Error="";
               
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               
                if(empty($_POST["id"])){
                    $idError= "El campo Id de la tarea es obligatorio";
                    $Error= $idError;
                }else{
                    $id=test_input($_POST["id"]);
                }
                if(empty($_POST["descripcion"])){
                    $descripcionError= "El campo descripcion de la tarea es obligatorio";
                    $Error=$Error.$descripcionError;
                }else{
                    $descripcion=test_input($_POST["descripcion"]);
                }
                if(empty($_POST["estado"])){
                    $estadoError= "El campo estado de la tarea es obligatorio";
                    $Error=$Error.$estadoError;
                }else{
                    $estado=test_input($_POST["estado"]);
                }
                

                $x = count($array);
               
                $array=guardar_tarea($id,$descripcion,$estado,$x,$array);
                                
            }
            if (empty($Error)) {
                include_once('listaTareas.php');  
            }else{
                echo "<h2>$Error</h2>";
            }
            
            
            ?>
            
            <a href="nuevaForm.php" class="btn btn-info">Volver</a>

        </div>  