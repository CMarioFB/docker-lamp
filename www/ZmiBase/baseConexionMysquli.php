<?php

function conecta($host, $user, $pass, $db)
{
    $conexion = new mysqli($host, $user, $pass, $db);
    return $conexion;
}

function conectaTienda()
{
    return conecta('db', 'root', 'test', 'tienda');
}

function cerrarConexion($conexion)
{
    if (isset($conexion) && $conexion->connect_errno === 0) {
        $conexion->close();
    }
}

function baseConexionMysquli()
{
    try {
        $conexion = conecta('db', 'root', 'test', null);
        
        if ($conexion->connect_error)
        {
            return [false, $conexion->error];
        }
        else
        {
            
           
            //  ******  AQUI INTRODUCIMOS LAS CONSULTAS  EN EL ELSE ********  
            // Verificar si la base de datos ya existe
            $sqlCheck = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'tienda'";
            $resultado = $conexion->query($sqlCheck);
            if ($resultado && $resultado->num_rows > 0) {
                return [false, 'La base de datos "tienda" ya existía.'];
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS tienda';
            if ($conexion->query($sql))
            {
                return [true, 'Base de datos "tienda" creada correctamente'];
            }
            else
            {
                return [false, 'No se pudo crear la base de datos "tienda".'];
            }

            //  **************  AQUI ACABA LA CONSULTA Y SEGUIMOS CON CODIGO DE LA CONEXION
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



