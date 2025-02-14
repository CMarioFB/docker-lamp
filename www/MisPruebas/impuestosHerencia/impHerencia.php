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
                <li>
                    <a href="index.php">Inicio</a>
                 </li>
                <li>
                    <a href="impHerencia.php">Impuestos</a>
                </li>

            </ul>
        </nav>
    </header>
    <?php
        include ('utils.php');

        $hoy= date('Y-m-d');
        
        $fechaCorte= date('2006-01-19');

        echo $fechaCorte . '<br>';
        echo $hoy . '<br>';


        $nombre1 = $_POST['nombre1'];
        $fecha1 = $_POST['fecha1'];
        $nombre2 = $_POST['nombre2'];
        $fecha2 = $_POST['fecha2'];
        $importe = $_POST['importe'];
        $deduciones = $_POST['deduciones'];
        $porcentaje = $_POST['porcentaje'];
 
        // Calculamos el importe que corresponde a cada parte
        $importe= $importe - $deduciones;
        $importe = ($importe * $porcentaje) / 100;
        $importe = $importe / 2;

        // Importe a bonificar parte 1
        /*
        $diasBonificados1= diasEntre($fecha1,$fechaCorte);
        $diasTotal1= diasEntre($fecha1,$hoy);
        $importeBonificado1= ($importe * $diasBonificados1) / $diasTotal1;
        */

        
        $importeBonificado1 = importeBonificado($fecha1,$importe);
        $importe1= $importe-$importeBonificado1;
        $impuesto1=calcularImpuesto($importe1);

        $importeBonificado2 = importeBonificado($fecha2,$importe);
        $importe2=$importe - $importeBonificado2;
        $impuesto2=calcularImpuesto($importe2);


        echo 'el importe por cada fallec es ='.$importe.'<br>';

        $impuesto= calcularImpuesto($importe);

        echo "el impuesto de $importe es =".$impuesto.'<br>';

        echo $fecha1.'   '.$fecha2.'<br>';
        
        echo "dias entre $fecha1 y $hoy = ". diasEntre($fecha1, $hoy).'<br>';

        echo "dias entre $fecha2 y $hoy = ". diasEntre($fecha2, $hoy).'<br>';


        echo '<div class="table-responsive">';
                            echo '<table class="table table-bordered table-striped">';
                            echo '<thead class="table-success">';
                            echo '<tr>';
                            echo '<th>Nombre</th>';
                            echo '<th>Fecha fallec</th>';
                            echo '<th>Importe</th>';
                            echo '<th>ImporteBonificado</th>';
                            echo '<th>ImporteTributario</th>';
                            echo '<th>Impuesto</th>';
                            echo '<th></th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                        /*
                            // Recorrer y mostrar cada donante
                            foreach ($donantes as $donante) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars_decode($donante['nombre']) . '</td>';
                                echo '<td>' . htmlspecialchars_decode($donante['apellidos']) . '</td>';
                                echo '<td>' . htmlspecialchars_decode($donante['edad']) . '</td>';
                                echo '<td>' . htmlspecialchars_decode($donante['grupo_sanguineo']) . '</td>';
                                echo '<td>' . htmlspecialchars_decode($donante['codigo_postal']) . '</td>';
                                echo '<td>' . htmlspecialchars_decode($donante['telefono_movil']) . '</td>';
                                echo '<td>';
                                echo '<a class="btn btn-sm btn-outline-success me-2" href="donacionForm.php?id=' . $donante['id'] . '" role="button">Donar</a>';
                                echo '<a class="btn btn-sm btn-outline-primary me-2" href="donaciones.php?id=' . $donante['id'] . '" role="button">Donaciones</a>';
                                echo '<a class="btn btn-sm btn-outline-danger" href="donanteBorrar.php?id=' . $donante['id'] . '" role="button">Borrar</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        */
                            echo '<tr>';
                                echo '<td>' . $nombre1 . '</td>';
                                echo '<td>' . $fecha1 . '</td>';
                                echo '<td>' . (int) $importe . '</td>';
                                echo '<td>' . (int) $importeBonificado1 . '</td>';
                                echo '<td>' . (int) $importe1 . '</td>';
                                echo '<td>' . (int) calcularImpuesto($importe1) . '</td>';
                                echo '<td>';
                                echo '</td>';
                            echo '</tr>';

                            echo '<tr>';
                                echo '<td>' . $nombre2 . '</td>';
                                echo '<td>' . $fecha2 . '</td>';
                                echo '<td>' . (int) $importe . '</td>';
                                echo '<td>' . (int) $importeBonificado2 . '</td>';
                                echo '<td>' . (int) $importe2 . '</td>';
                                echo '<td>' . (int) calcularImpuesto($importe2) . '</td>';
                                echo '<td>';
                                echo '</td>';
                            echo '</tr>';


                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';


    echo '<br>'.'<p>'.'Total impuesto a pagar '. (int) ($impuesto1+$impuesto2).'</p>';

    ?>

    
</body>
</html>










