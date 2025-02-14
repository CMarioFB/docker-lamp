<?php
function conecta($host, $user, $pass, $db)
{
    $conexion = new mysqli($host, $user, $pass, $db);
    return $conexion;
}
function conectaTareas()
{
    return conecta('db', 'root', 'test', 'dbase1');
}

function cerrarConexion($conexion)
{
    if (isset($conexion) && $conexion->connect_errno === 0) {
        $conexion->close();
    }
}


function crearDBase1() {
    try {
        //1. Crear la conexión sin indicar BD
        $conexion = new mysqli('db', 'root', 'test');
        // echo 'Conexión correcta<br>';
    
        //3. Crear base de datos
        $sql = 'CREATE DATABASE dbase1';
        if ($conexion->query($sql)) {
            echo '<div class="alert alert-success" role="alert">';
            echo 'Base de datos creada correctamente <br>';
           
        }
        else {
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Error creando la base de datos: ' . $conexion->error . '<br>';
            
        }
        
    }
    catch (mysqli_sql_exception $e) {
        //2. Gestionar el error si hubiera
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Error en la conexión: ' . $e->getMessage() . '<br>';
    }
    finally {
        // Cerrar la conexión si se estableció
        if (isset($conexion) && $conexion->connect_errno === 0) {
            $conexion->close();
          //  echo 'Conexión cerrada.';
        }
    }
    echo '</div>';
}



function crearPersonas(){
    try {
        //1. Crear la conexión sin indicar BD
        $conexion = new mysqli('db', 'root', 'test','dbase1');
        // echo 'Conexión correcta<br>';
    
        //3. Crear tabla personas
        $sql = 'CREATE TABLE personas(
            id INT(6) AUTO_INCREMENT PRIMARY KEY, 
            nombre VARCHAR(30) NOT NULL, 
            edad INT(2)
        )';
        if ($conexion->query($sql)) {
            echo '<div class="alert alert-success" role="alert">';
            echo 'tabla personas creada correctamente <br>';
           
        }
        else {
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Error creando la tabla: ' . $conexion->error . '<br>';
        }
        
    }
    catch (mysqli_sql_exception $e) {
        //2. Gestionar el error si hubiera
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Error en la conexión: ' . $e->getMessage() . '<br>';
    }
    finally {
        // Cerrar la conexión si se estableció
        if (isset($conexion) && $conexion->connect_errno === 0) {
            $conexion->close();
          //  echo 'Conexión cerrada.';
        }
    }
    echo '</div>';
}

function crearOpciones(){
    try {
        //1. Crear la conexión sin indicar BD
        $conexion = new mysqli('db', 'root', 'test','dbase1');
        // echo 'Conexión correcta<br>';
    
        //3. Crear tabla opciones
        $sql = 'CREATE TABLE opciones(
            id INT(6) AUTO_INCREMENT PRIMARY KEY, 
            opcion VARCHAR(30) NOT NULL, 
            compania VARCHAR(50) NOT NULL,
            id_persona INT (2) NOT NULL,
            FOREIGN KEY (`id_persona`) REFERENCES `personas`(`id`)

        )';
        if ($conexion->query($sql)) {
            echo '<div class="alert alert-success" role="alert">';
            echo 'tabla opciones creada correctamente <br>';
           
        }
        else {
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Error creando la tabla: ' . $conexion->error . '<br>';
        }
        
    }
    catch (mysqli_sql_exception $e) {
        //2. Gestionar el error si hubiera
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Error en la conexión: ' . $e->getMessage() . '<br>';
    }
    finally {
        // Cerrar la conexión si se estableció
        if (isset($conexion) && $conexion->connect_errno === 0) {
            $conexion->close();
          //  echo 'Conexión cerrada.';
        }
    }
    echo '</div>';
}




?>