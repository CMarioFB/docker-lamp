<?php
 global $array;
 // array para listado de tareas
$array = [
    [
        'id' => 1,
        'descripcion' => 'tarea de DWCS',
        'estado' => 'completada'
    ],
    [
        'id' => 2,
        'descripcion' => 'estudiar EIE',
        'estado' => 'pendiente'   
    ],
    [
        'id' => 3,
        'descripcion' => 'tarea de DAPW',
        'estado' => 'en proceso'   
    ],
    [
        'id' => 4,
        'descripcion' => 'repasar apuntes PROGRAMACIÓN',
        'estado' => 'pendiente'   
    ]

 ];

 // Filtrar el contenido de un campo
 function test_input($dato){
    $dato= trim($dato);
    $dato= stripcslashes($dato);
    $dato= htmlspecialchars($dato);
    $dato = preg_replace('/\s+/', '', $dato);
    return $dato;

   }

// Comprobar que un campo contiene información de texto válida

function texto_valido($dato) {
    $dato=text_input($dato);
    if (empty($dato)) {
        return false;
    }else{
        return true;
    }
}

// guardar tarea en array
function guardar_tarea ($id,$descripcion,$estado,$x,$array){
     
   
    $array[$x]['id'] = $id;
    $array[$x]['descripcion'] = $descripcion;
    $array[$x]['estado'] = $estado;   
    return $array;        

}

// dividir en palabras un string
function palabras_string($str){
$palabras = explode(" ",$str);
for($i = 0; $i < count($palabras); $i++) {
echo $palabras[$i],"<br />";
}
}


?>