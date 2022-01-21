<?php

function transformar($dato){//Paso de argumento por valor

    return $dato." transformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal = $unidades * $precio;
    $cuotaIva = $subtotal * $iva;
    $total = $subtotal + $cuotaIva;
    
    return $total;
}

function calcularTotal2($unidades, $precio, $tipoOperacion){
    $subtotal = $unidades * $precio;
    $cuotaIva = 0;

    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    } elseif($tipoOperacion=="reducido") {
        $cuotaIva=$subtotal*0.1;
    } else {
        $cuotaIva=$subtotal*0.4;
    }

    $total = $subtotal + $cuotaIva;
    return $total;
}



function manipularString($mensaje){
    return "En mayúsculas ".strtoupper($mensaje);
}

function primeraMayuscula($dato){
    return ucfirst($dato);
}

function reemplazar($valorBuscado,$valorReemplazar){
    $cadena = "en un lugar de la mancha";
    return str_replace($valorBuscado,$valorReemplazar,$cadena);
}

function mostrarMes($fecha){
    //envias la fecha y retornas el mes en castellano
    //getdate($timestamp = month());//
}

function info(){
    return phpinfo(INFO_GENERAL);
}

function numeroPrimo($numero){
    //retorna si el número introducido es primo o no
    //return gmp_prob_prime($numero);
}

function bisiesto($año){
    return checkdate(2, 29,($año==null) ? date('Y') : $año);
}