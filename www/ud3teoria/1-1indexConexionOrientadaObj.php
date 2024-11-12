<?php

// *** MYSQL Orientado a Objetos *** //
//1. Crear la conexión 
$conexion = new mysqli('db', 'root', 'test', 'colegio');
//2. Comprobar la conexión
$error = $conexion->connect_errno;
if($error !=null){
    die('Fallo en la conexión: ' . $conexion->connect_error . ', con numero ' . $error . '.<br>');
}
echo 'Conexión correcta Orientada Objetos<br>';
//3. Cerrar la conexión
$conexion->close();
?>