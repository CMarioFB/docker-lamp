<?php

function conexionPDO (){

    $servername = 'db';
    $username = 'root';
    $password = 'test';
    $dbname = 'dbase1';
    
    
      $conPDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      //  Forzar excepciones
      $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conPDO;
}






















?>