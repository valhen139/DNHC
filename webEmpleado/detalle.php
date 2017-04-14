<h2 style="text-align: center;"><span style="color: #008080;">DETALLE EMPLEADO</span></h2>
<ul>

<?php

$id = $_GET['id'];

$url = 'http://localhost/ApiEmpleado/employees/' . $id;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$empleados = json_decode($data ,true);

curl_close($ch);
echo '<li><span style="color: #008080;">NOMBRE:&nbsp'. $empleados["name"].'</span></li>';
echo '<li><span style="color: #008080;">EMAIL:&nbsp'.$empleados["email"].'</span></li>';
echo '<li><span style="color: #008080;">TELEFONO:&nbsp'.$empleados["phone"].'</span></li>';
echo '<li><span style="color: #008080;">DIRECCION:&nbsp'.$empleados["address"].'</span></li>';
echo '<li><span style="color: #008080;">POSICION:&nbsp'.$empleados["position"].'</span></li>';
echo '<li><span style="color: #008080;">SALARIO:&nbsp'.$empleados["salary"].'</span></li>';
echo '<li><span style="color: #008080;">SKILLS</span>';
foreach ($empleados["skills"] as $key1 => $value1) {
echo '<ul>';
echo '<li><span style="color: #008080;">'.$empleados["skills"][$key1 ]["skill"].'</span></li>';
echo'</ul>';
echo '</li>';
}
?>
</ul>
<a href="http://localhost/webEmpleado/index.php">Atras</a></td>