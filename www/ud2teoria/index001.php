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
   ?>
   <ul>
   <?php
      // Bucle para 10 iteraciones
      for ($i=0; $i<10; $i++) {
         echo "<li>Línea ".$i."</li>";
      }
   ?>
   </ul>
</body>
</html>