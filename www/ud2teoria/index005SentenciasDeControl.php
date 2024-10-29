<html> 
<head> 
   <title>Ejemplo de PHP. Sentencias de Control</title> 
</head> 
<body> 
    <h1>5. Sentencias de Control</h1>
    <h2>Condicionales</h2>
<?php
echo "<h3>Sentencia if-else</h3>";
$a=5;
$b=6;
if ($a > $b) {
    $resultado = "A es más grande que B";
    } else {
    $resultado = "B es más grande que A";
    }
echo $resultado."<br/>";    
?>
</body> 
</html>