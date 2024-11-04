<html> 
<head> 
   <title> PHP. 7.Validación de Formularios</title> 
</head> 
<body> 
    
    <h2>PHP Ejemplo de validación de Formularios2</h2>
<!-- <form method="post" action="procesar.php">  // procesado en el archivo procesar.php   -->

<form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>">  
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

echo $_POST["name"];


?>
</body> 
</html>