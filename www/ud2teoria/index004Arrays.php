<html> 
<head> 
   <title>Ejemplo de PHP. Variables2</title> 
</head> 
<body> 
    <h1>4. Arrays</h1>
    <h2>Modos de creación</h2>
<?php
echo "<h3>Usando la síntaxis de corchetes</h3/>";

$datos = ['casa', 'coche', 'gato'];
$datos[0]='azucar';
foreach ($datos as $d){
echo $d.' ';
}

echo "<h3>Si queremos hacer una matriz asociativa del tipo clave-valor</h3/>";

// clave puede ser un 'integer' o 'string'
// valor puede ser cualquiera valor
$datos = [
    'propietario' => 'Antonio',
    'domicilio' => 'Santiago de Compostela',
    'idade' => 45
    ];
    print_r($datos);
    foreach ($datos as $d){
        echo "</br>".$d.' ';
        }

echo "<h3>Usando la construcción array()</h3/>";
// clave pode ser un 'integer' ou 'string'
// valor pode ser calquera valor
$matriz = array("negocio" => "bar", 12 => true);
echo $matriz["negocio"]; // bar
echo $matriz[12]; // 1
//Así, otra forma de inicializar el arreglo $productos 
$productos = array("Azúcar", "Aceite", "Arroz");

echo "<h3>Borrar un valor usando unset()</h3/>";
//Borrar un valor
unset($productos[2]);
print_r($productos);
$productos[2]="Pepsi-cola";
print_r($productos);

echo "<h3>Mostrar el contenido de la matriz</h3>";
echo "<h4>Para mostrar el contenido de la matriz products con el bucle for <h4/>";
// Cando se trata dun array simple que non é asociativo.
$produtos[0]="Azùcar";
$produtos[1] = "Aceite";
$produtos[2] = "Arroz";

for ($i = 0; $i < 3; $i++) {
    echo $produtos[$i] . "<br />";
    }

echo "<h4>con el bucle foreach <h4/>";
foreach($produtos as $p){
    echo $p."<br />";
}
 
echo "<h4>con el bucle foreach en un array asociativo<h4/>";
    
foreach($datos as $key => $value){
    echo $key."=".$value."<br />";
}

echo "el propietario de esta vivienda es = {$datos["propietario"]}<br/>";

echo "<h4>con var_dump() imprimimos todos los datos <h4/>";
var_dump($datos);
echo "<h4>con print_r() mostramos solo el contenido <h4/>";
print_r($datos);
?>
</body> 
</html>