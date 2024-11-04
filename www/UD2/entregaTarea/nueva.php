<div class="container-fluid">
            <h1>Nueva Formularios</h1>
            <br />
                    
            
            <?php

                
                    include ('utils.php');
                $id="";
                $idError="";
              
               
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               /* $bebida = $_POST['id'];
                $cantidad = $_POST['estado'];
                $precio = 0;
                */
                if(empty($_POST["id"])){
                    $idError= "El campo Id de la tarea es obligatorio";
                }else{
                    $id=test_input($_POST["id"]);
                }
                echo $idError;
                echo $id;
                
                $x = count($array);
                $array[$x]['id'] = intval(test_input($_POST['id']));
                $array[$x]['descripcion'] = test_input($_POST['descripcion']);
                $array[$x]['estado'] = test_input($_POST['estado']);
               
                if (is_integer($array[$x]['id'])){
                    include_once('listaTareas.php');
                }else{
                    echo "id no es un número";
                    /*unset($array); */
                    include_once('nuevaForm.php');
                }
                
                /*
                echo var_dump($array);

                echo '<pre>';
                print_r($array);
                echo '</pre>';
                */
                
            }
            /*
            include_once('listaTareas.php');
            */
            ?>
            
            <a href="nuevaForm.php" class="btn btn-info">Volver</a>

        </div>  