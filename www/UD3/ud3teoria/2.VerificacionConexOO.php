<?php
// el siguiente código comprobaría el establecimiento de una conexión con la base de datos
// “colegio” y finaliza la ejecución si se produce algún error

//1. Crear la conexión usamos  @ igual en los 3 tipos de conexion
@$conexion = new mysqli('db', 'root', 'test', 'colegio');
//2. Comprobar la conexión
$error = $conexion->connect_errno;
if($error !=null){
    die('Fallo en la conexión: ' . $conexion->connect_error . ', con numero ' . $error);
}
echo 'Conexión correcta';
//3. Cerrar la conexión
$conexion->close();





// =======================================================================================

//el operador de control de errores @ cambió y no suprime ciertos errores como “Unknown database”,
// por lo que es recomendable usar bloques try-catch

try {
    //1. Crear la conexión 
    $conexion = new mysqli('db', 'root', 'test', 'myDB');
    echo 'Conexión correcta';
} catch (mysqli_sql_exception $e) {
    //2. Gestionar el error si hubiera
    echo 'Error en la conexión: ' . $e->getMessage();
} finally {
    // Cerrar la conexión si se estableció
    if (isset($conexion) && $conexion->connect_errno === 0) {
        $conexion->close();
    }
}