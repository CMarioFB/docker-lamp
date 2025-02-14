<?php

function calcularImpuesto($dato) {
    $impuesto=0;
    if ($dato <= 6000) $impuesto= $dato * 0.19;
    if ($dato > 6000 && $dato <= 50000) $impuesto = (6000*0.19)+ (($dato-6000)*0.21);
    if ($dato > 50000 && $dato <=200000) $impuesto = (6000*0.19)+(44000*0.21)+ (($dato-50000)*0.23);
    if ($dato > 200000) $impuesto = (6000*0.19)+(44000*0.21)+ (150000*0.23)+ (($dato-200000)*0.26);
    return $impuesto;
}

function diasEntre($fecha1,$fecha2) {
    $timestamp = (strtotime($fecha2) - strtotime($fecha1))/86400;
    if ($timestamp<0) $timestamp= -$timestamp;
    return $timestamp;

}

function importeBonificado($fecha,$importe){
    $fechaCorte= date('2006-01-19');
    $hoy= date('Y-m-d');
    if ($fecha < $fechaCorte) {
        $diasBonificados = diasEntre($fecha,$fechaCorte);
    }else{
        return 0;
        
    }
    
    $diasTotal = diasEntre($fecha,$hoy);
    $importeBonificado= ($importe * $diasBonificados) / $diasTotal;
    return $importeBonificado;
}
