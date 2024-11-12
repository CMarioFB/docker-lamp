<?php
try {
    //1. Crear la conexión sin indicar BD
    $conexion = new mysqli('db', 'root', 'test');
    echo 'Conexión correcta<br>';
    //3. Crear base de datos
    $sql = 'CREATE DATABASE myDBoo';
    if ($conexion->query($sql)) {
    echo 'Base de datos creada correctamente <br>';
    }
    else {
    echo 'Error creando la base de datos: ' . $conexion->error . '<br>';
    }
    }
    catch (mysqli_sql_exception $e) {
    //2. Gestionar el error si hubiera
    echo 'Error en la conexión: ' . $e->getMessage() . '<br>';
    }
    finally {
    // Cerrar la conexión si se estableció
    if (isset($conexion) && $conexion->connect_errno === 0) {
    $conexion->close();
    echo 'Conexión cerrada.';
    }
    }
    






?>