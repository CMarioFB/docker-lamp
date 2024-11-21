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

               
                /*
                echo $id;
                echo $descripcion;
                echo $estado;
                echo "Error=".$Error;
                */

                $x = count($array);
                /*
                $array[$x]['id'] = $id;
                $array[$x]['descripcion'] = $descripcion;
                $array[$x]['estado'] = $estado;
                */

                $array=guardar_tarea($id,$descripcion,$estado,$x,$array);
                
                /*
                $x = count($array);
                $array[$x]['id'] = test_input($_POST['id']);
                $array[$x]['descripcion'] = test_input($_POST['descripcion']);
                $array[$x]['estado'] = test_input($_POST['estado']);
                */
                /*
                if (is_integer($array[$x]['id'])){
                    include_once('listaTareas.php');
                }else{
                    echo "id no es un número";
                    unset($array); 
                    include_once('nuevaForm.php');
                }
                */
               
                
                 /*
                 echo var_dump($array);
                echo '<pre>';
                print_r($array);
                echo '</pre>';
                */
                
            }
            if (empty($Error)) {
                include_once('listaTareas.php');  
            }else{
                echo "<h2>$Error</h2>";
            }
            /* include_once('listaTareas.php'); */
            
            ?>
            
            <a href="nuevaForm.php" class="btn btn-info">Volver</a>

        </div>  