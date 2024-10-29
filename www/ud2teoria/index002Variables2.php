<html> 
<head> 
   <title>Ejemplo de PHP. Variables2</title> 
</head> 
<body> 
    <h1>Variables - Strings</h1>
    <h2>2. Strings</h2>
<?php
echo "<h3>Comillas simples</h3/>";
echo 'esta é unha cadea simple';
echo '<br />';
echo 'Arnold dixo unha vez: "I\'ll be back"';
echo '<br />';
echo 'Eliminaches \'C:\\*.*\'?';
echo '<br />';
echo 'Eliminaches C:\*.*?';
echo '<br />';
echo 'Aquí non vai \n unha nova liña';
echo '<br />';
echo 'As variables non se $expanden $tampoco';
echo '<br />';

echo "<h3>Comillas dobles  -  NO FUNCIONAN</h3/>";
echo "esta é unha cadea dobre <br/>";
echo "Nova \n liña";  // no funciona
echo "Retorno de carro"."\r";
echo "Tabulación horizontal";

echo "<h3>Funciones para el manejo de cadenas</h3/>";
echo strlen("12345"),"<br />";
echo '<br />';
$palabras = explode(" ","Isto é unha proba");
for($i = 0; $i < count($palabras); $i++) {
echo $palabras[$i],"<br />";
}
echo '<br />';
// Os strings compórtanse como arrays de letras
$frase = "Xoana ten un can";
for($i = 0; $i < strlen($frase); $i++) {
echo $frase[$i],"<br />";
}
echo '<br />';
$resultado = sprintf("8x5 = %d <br />", 8*5);
echo $resultado,"<br />";
echo substr("Devolve unha subcadea doutra", 9, 3);
echo "<br /><br />";
if( chop("Cadea \n\n ") == "Cadea" ) {
echo "As cadeas son Iguais";
}
echo "<br /><br />";
echo strpos("Busca a palabra dentro da frase", "palabra");
echo "<br /><br />";
echo str_replace("verde", "vermello", "Un peixe de cor verde, como verde é o prao.");
echo '<br />';

echo "<h3>Operadores de ejecución</h3>";
$resultado=`ls -la`;
echo $resultado;

echo "<h3>Operadores de cadenas</h3>";
$a = "Hola ";
$b = "Que tal";
echo $a.$b;



?>
</body> 
</html>