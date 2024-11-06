<html> 
<head> 
   <title>Ejemplo de PHP. Variables1</title> 
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

// conversión entre tipos
echo "<br/><h3>Conversión entre tipos</h3>";
$mi_entero = 3;
$mi_real = 2.3;
$resultado = $mi_entero + $mi_real;
// La variable $resultado es de tipo real
echo $resultado."<br/>";
echo gettype($resultado)."<br/>";
$resultado = $mi_entero + (int) $mi_real;
// La variable $mi_real se convierte a entero (valor 2) antes de sumarse.
// La variable $resultado es de tipo entero (valor 5)
echo $resultado."<br/>";
echo gettype($resultado)."<br/>";
echo "<br/><h3>Comprobación/cambiar/eleminar tipo de una variable</h3>";
echo "gettype($resultado)=".gettype($resultado)."<br/>";

$a="3";
echo '$a="3"';
echo '   gettype($a)='.gettype($a)."<br/>";
echo ' settype($a, "entero")'."<br/>";
/* $b=3.4; REPASAR ESTO FALLA.
settype($b,"entero");
settype( $var = 25, $type = 'entero' );
echo '   gettype($var)='.gettype($var)."<br/>";
*/
// eliminar una variable
$nome="Sabela";
unset($nome);
echo 'esta vacía $nome  empty($nome) ='.empty($nome)."<br/>";
echo 'esta definida $nome  isset($nome) = '.isset($nome)."<br/>";
echo 'esta vacía $a  empty($a) ='.empty($a)."<br/>";
echo 'esta definida $a ='.isset($a)."<br/>";

?>
</body> 
</html>