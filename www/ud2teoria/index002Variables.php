<html> 
<head> 
   <title>Ejemplo de PHP. Variables</title> 
</head> 
<body> 
    <h2>Variables</h2>
<?php 
    $a = 1; 
    $b = 3.34; 
    $c = "Hola Mundo"; 
    echo $a."<br />".$b."<br />".$c; 
?> 
<h2>1.Tipos de datos simples</h2>
<?php
// booleanos
$mi_booleanoFalso = false;
$mi_booleanoVerdadero = true;

$mi_entero = 0x2A;
$mi_entero_2 = 3;
$mi_real = 7.4;  //real=Float
$mi_real_2 = 7.3e-1;
$edad = 34;
echo "Valor de \$edad: $edad <br />"; // La salida es: Valor de $edad: 34 
$anhos = 60;
echo "Vivió en los años {$anhos}s <br />"; // La salida es: Vivió en los años 60s
$edad = 34;
echo 'Edad: $edad'; // La salida es: Edad: $edad
$cad1 = 25;
$cad2= 0.5;
$a = 5 + $cad1;
$b = 50 * $cad2;
echo " <br /> $a, $b"; // La salida es: 30, 25
$mi_variable = Null;


$edad=25;
echo "<br/>".'$edad = '.$edad;

echo "<br/>"."$edad = ".$edad;
echo "<br/>"."\$edad = ".$edad;
?>
</body> 
</html>