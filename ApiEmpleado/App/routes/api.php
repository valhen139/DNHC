<?php

$app->get("/employees/", function() use($app)
{ 
	$employee = getEmployee();
 
	echo json_encode($employee, JSON_PRETTY_PRINT);

});

$app->get("/employees/:id", function($id) use($app)
{ 
	$employee = getEmployeeId($id);
 
	echo json_encode($employee, JSON_PRETTY_PRINT);

});

$app->get("/employee/Salario", function() use($app)
{ 
	$salIni = $app->request()->get('salIni');
	$salFin = $app->request()->get('salFin');
	$xml = new DOMDocument();
	$xml = getEmployeeSalario($salIni, $salFin);
	echo $xml;

});

?>