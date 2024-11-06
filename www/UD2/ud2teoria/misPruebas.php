<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Texto sin formato</title>
</head>
<body>
   <?php
      echo "Mi primer PHP <br/>";
      echo "Mi <u>primer</u> PHP <br/>";
      echo "Parte de PHP<br />";

      function test_input($dato){
        $dato= trim($dato);
        $dato= stripcslashes($dato);
        $dato= htmlspecialchars($dato);
    
        return $dato;
    
       }
    function palabras($str){
    global $palabras;
    $palabras = explode(" ",$str);
    for($i = 0; $i < count($palabras); $i++) {
    echo $i.$palabras[$i],"<br />";
    }
    }
    global $st1;
    $st1="colorin/       colorado\%& fin.";
    echo "<br/>";
    palabras($st1);

    echo "total palabras=".count($palabras);
    echo "<hr>";
    test_input($st1);

    echo $st1;
    echo "<br/>";
    echo trim($st1);
    echo "<br/>";
    echo stripcslashes($st1);
    echo "<br/>";
    echo htmlspecialchars($st1);
    echo "<br/>";
    function prueba(){
        global $a;
         $a = 2; // referencia a variable local
        
        };
       echo $a.prueba().$a;
        






   ?>
</body>
</html>