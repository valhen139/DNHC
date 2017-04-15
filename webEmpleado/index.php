<html> 
 <title>HTML with PHP</title>
 <body>
<h2 style="text-align: center;"><span style="color: #33cccc;"><strong>EMPLEADOS</strong></span></h2>
<p>&nbsp;</p>
<table style="height: 40px;" border="1" width="599" align="center">
<tbody>
<tr>
<td style="text-align: center;">Nombre</td>
<td style="text-align: center;">E-Mail</td>
<td style="text-align: center;">Posicion</td>
<td style="text-align: center;">Salario</td>
<td style="text-align: center;">Editar</td>
</tr>
<?php



$url = 'http://localhost/ApiEmpleado/employees';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$empleados = json_decode($data ,true);

curl_close($ch);

foreach ($empleados as $key1 => $value1) {
     echo '<tr>';
 		echo '<td style="text-align: center;">' . $empleados[$key1]["name"] . '</td>';
 		echo '<td style="text-align: center;">' . $empleados[$key1]["email"] . '</td>';
 		echo '<td style="text-align: center;">' . $empleados[$key1]["position"] . '</td>';
 		echo '<td style="text-align: center;">' . $empleados[$key1]["salary"] . '</td>';
 		echo '<td style="text-align: center;"><a href="../webEmpleado/detalle.php?id='.$empleados[$key1]["id"] .'">Ir</a></td>';
 	 echo '<tr>';
}
?>
</tbody>
</table>

 </body>
 </html>