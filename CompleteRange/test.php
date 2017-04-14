<?php

include("./CompleteRange.php");

$Completa = new CompleteRange();

$arreglo = array(1,10,20, "m");

echo "Entrada: \n";
print_r ($arreglo);

echo "  Salida: \n";

print_r ($Completa->Build($arreglo));

?>