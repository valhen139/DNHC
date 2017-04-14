<?php

include("./ChangeString.php");

$Cambia = new ChangeString();

$cadena = "**Casa 52";

echo "    Entrada: ";
echo $cadena;
echo "  Salida: ";

echo $Cambia->Build($cadena);

?>