<?php
//  *** PDO ***//

$servername = 'db';
$username = 'root';
$password = 'test';
$dbname = 'colegio';

try {
  // 1. Conexion a base de datos
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //  2. Forzar excepciones
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Conexión correcta PDO';
} catch(PDOException $e) {
  echo 'Fallo en conexión: ' . $e->getMessage();
}
//3. Cierre de conexión
$conn = null;
?>