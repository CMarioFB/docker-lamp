<html> 
<head> 
   <title> PHP. 7.Validación de Formularios</title> 
</head> 
<body> 
    <h1>7.1. Validación de formularios</h1>
    <h2>PHP Ejemplo de validación de Formularios</h2>
/* <form method="post" action="procesar.php">  // procesado en el archivo procesar.php   */
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">  // procesado mimo archivo
Nombre: <input type="text" name="name">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Website: <input type="text" name="website">
<br><br>
Comentario: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Género:
<input type="radio" name="gender" value="female">Mujer
<input type="radio" name="gender" value="male">Hombre
<input type="radio" name="gender" value="other">Other
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
/*
   $name=$_POST("name");
   echo test_input($name);
   function test_input($dato){
    $dato= trim($dato);
    $dato= stripcslashes($dato);
    $dato= htmlspecialchars($dato);
    return $dato;

   }
    */
    echo $_POST["name"];
?>
</body> 
</html>