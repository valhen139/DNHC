<?php

include("./DBEmpleados.php");

$Completa = new DBEmpleados();



print_r ($Completa->getEmpleadoSalario(1000, 2000));

?>