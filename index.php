<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Ejemplos con Funciones y Estructuras de Control</h2>

    <?php    
    require_once("repositorio.php");

    echo "<h3>Ejercicio 1</h3>";
    $resultado = transformar("Un texto");
    echo $resultado;

    $totalFactura = calcularTotal(100,5,0.21);
    echo "<h4>El total de la factura es ".$totalFactura."€(IVA incluido)</h4>";
    $totalFactura2 = calcularTotal2(100,5,"normal");
    echo "<h4>El total de la factura es ".$totalFactura2."€(IVA incluido)</h4>";

    $mensajeResultado = manipularString("En un lugar de la mancha");
    echo $mensajeResultado;

    echo "<br>";

    $letraMayuscula = primeraMayuscula("me llamo juan");
    echo $letraMayuscula;

    echo "<br>";

    $cadenaReemplazada = reemplazar("a","e");
    echo $cadenaReemplazada;

    echo "<br>";

    $añoBisiesto=bisiesto(2024);
    echo $añoBisiesto;

    echo "<br>";

    info();

    echo "<br>";

    //$numPrimo = numeroPrimo(100);
    //echo $numPrimo;

    ?>
    


</body>
</html>
