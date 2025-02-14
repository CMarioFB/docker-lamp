<?php

// voy en linea 151 y tb falta pulir creacion tabla gyms //

function conecta($host, $user, $pass, $db)
{
    $conexion = new mysqli($host, $user, $pass, $db);
    return $conexion;
}
function conectaGymPeso()
{
    return conecta('db', 'root', 'test', 'gympeso');
}

function cerrarConexion($conexion)
{
    if (isset($conexion) && $conexion->connect_errno === 0) {
        $conexion->close();
    }
}

function creaDB()
{
    try {
        $conexion = conecta('db', 'root', 'test', null);
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            // Verificar si la base de datos ya existe
            $sqlCheck = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'gympeso'";
            $resultado = $conexion->query($sqlCheck);
            if ($resultado && $resultado->num_rows > 0) {
                return [false, 'La base de datos "gympeso" ya existía.'];
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS gympeso';
            if ($conexion->query($sql))
            {
                return [true, 'Base de datos "gympeso" creada correctamente'];
            }
            else
            {
                return [false, 'No se pudo crear la base de datos "gympeso".'];
            }
        }
    }
    catch (mysqli_sql_exception $e)
    {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}


//** vamos modificando aqui ya creamos bd gympeso */


function createTablaPesos()
{
    try {
        $conexion = conectaGymPeso();
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            // Verificar si la tabla ya existe
            $sqlCheck = "SHOW TABLES LIKE 'pesos'";
            $resultado = $conexion->query($sqlCheck);

            if ($resultado && $resultado->num_rows > 0)
            {
                return [false, 'La tabla "pesos" ya existía.'];
            }

            $sql = 'CREATE TABLE `pesos` (`id` INT NOT NULL AUTO_INCREMENT , `fecha_dia` DATE
             NOT NULL , `nombre` VARCHAR(50) NOT NULL , `peso_kg` INT NOT NULL , `foto` VARCHAR(50), PRIMARY KEY (`id`)) ';
            if ($conexion->query($sql))
            {
                return [true, 'Tabla "pesos" creada correctamente'];
            }
            else
            {
                return [false, 'No se pudo crear la tabla "pesos".'];
            }
        }
    }
    catch (mysqli_sql_exception $e)
    {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}



function createTablaGyms()
{
    try {
        $conexion = conectaGymPeso();
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            // Verificar si la tabla ya existe
            $sqlCheck = "SHOW TABLES LIKE 'gyms'";
            $resultado = $conexion->query($sqlCheck);

            if ($resultado && $resultado->num_rows > 0)
            {
                return [false, 'La tabla "gyms" ya existía.'];
            }
            // TABLA SIN ACABAR DE CREAR LA FOREIGN KEY TENEMOS QUE REFERENCIARLA A LA FECHA DE PESOS //

            $sql = 'CREATE TABLE `gyms` (`id` INT NOT NULL AUTO_INCREMENT, `fecha_dia` DATE NOT NULL, `descripcion` VARCHAR(250) NOT NULL, `pasos` INT NOT NULL, `metros` INT NOT NULL,`id_usuario` INT NOT NULL, PRIMARY KEY (`id`), FOREIGN KEY (`id_usuario`) REFERENCES `pesos`(`id`))';
            if ($conexion->query($sql))
            {
                return [true, 'Tabla "gyms" creada correctamente'];
            }
            else
            {
                return [false, 'No se pudo crear la tabla "gyms".'];
            }
        }
    }
    catch (mysqli_sql_exception $e)
    {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}


// *********   creadas bd y tablas gyms y pesos *********** //

function listaTareas()
{
    try {
        $conexion = conectaTareas();

        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            $sql = "SELECT * FROM tareas";
            $resultados = $conexion->query($sql);
            $tareas = array();
            while ($row = $resultados->fetch_assoc())
            {
                $usuario = buscaUsuarioMysqli($row['id_usuario']);
                $row['id_usuario'] = $usuario['username'];
                array_push($tareas, $row);
            }
            return [true, $tareas];
        }
        
    }
    catch (mysqli_sql_exception $e) {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}

function nuevaTarea($titulo, $descripcion, $estado, $usuario)
{
    try {
        $conexion = conectaTareas();
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            $stmt = $conexion->prepare("INSERT INTO tareas (titulo, descripcion, estado, id_usuario) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $titulo, $descripcion, $estado, $usuario);

            $stmt->execute();

            return [true, 'Tarea creada correctamente.'];
        }
    }
    catch (mysqli_sql_exception $e)
    {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}

function actualizaTarea($id, $titulo, $descripcion, $estado, $usuario)
{
    try {
        $conexion = conectaTareas();
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            $sql = "UPDATE tareas SET titulo = ?, descripcion = ?, estado = ?, id_usuario = ? WHERE id = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssii", $titulo, $descripcion, $estado, $usuario, $id);

            $stmt->execute();

            return [true, 'Tarea actualizada correctamente.'];
        }
    }
    catch (mysqli_sql_exception $e)
    {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}

function borraTarea($id)
{
    try {
        $conexion = conectaTareas();

        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            $sql = "DELETE FROM tareas WHERE id = " . $id;
            if ($conexion->query($sql))
            {
                return [true, 'Tarea borrada correctamente.'];
            }
            else
            {
                return [false, 'No se pudo borrar la tarea.'];
            }
            
        }
        
    }
    catch (mysqli_sql_exception $e) {
        return [false, $e->getMessage()];
    }
    finally
    {
        cerrarConexion($conexion);
    }
}

function buscaTarea($id)
{
    $conexion = conectaTareas();

    if ($conexion->connect_error)
    {
        return [false, $conexion->error];
    }
    else
    {
        $sql = "SELECT * FROM tareas WHERE id = " . $id;
        $resultados = $conexion->query($sql);
        if ($resultados->num_rows == 1)
        {
            return $resultados->fetch_assoc();
        }
        else
        {
            return null;
        }
    }
}

function buscaUsuarioMysqli($id)
{
    $conexion = conectaTareas();

    if ($conexion->connect_error)
    {
        return [false, $conexion->error];
    }
    else
    {
        $sql = "SELECT * FROM usuarios WHERE id = " . $id;
        $resultados = $conexion->query($sql);
        if ($resultados->num_rows == 1)
        {
            return $resultados->fetch_assoc();
        }
        else
        {
            return null;
        }
    }
}