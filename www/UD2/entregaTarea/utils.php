<?php
/*
$tareas=[
    [1,"cama","acabada"],
    [2,"barrer","no  iniciada"],
    [3,"frega suelos","no iniciada"],
    [4,"cocinar","en proceso"]
];
*/  global $array;
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

 function test_input($dato){
    $dato= trim($dato);
    $dato= stripcslashes($dato);
    $dato= htmlspecialchars($dato);

    return $dato;

   }

function palabras_string($str){
$palabras = explode(" ",$str);
for($i = 0; $i < count($palabras); $i++) {
echo $palabras[$i],"<br />";
}
}


function prueba($dato){
    $dato= $dato." => prueba";
    return $dato;
}




?>