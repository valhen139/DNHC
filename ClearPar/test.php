<?php

include("./ClearPar.php");

$Cambia = new ClearPar();

$cadena = "())()(()((()))()()(()()))))(()()(";

echo "    Entrada: ";
echo $cadena;
echo "  Salida: ";

echo $Cambia->Build($cadena);

?>