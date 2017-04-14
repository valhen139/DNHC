<?php
Class DBEmpleados
{


  public function __construct(){
  	
  }


   public function getEmpleados(){

    $json = file_get_contents('App/datos/employees.json');

    $json_data = json_decode($json,true);
   	return $json_data;
   }
  
   public function getEmpleadoId($id){

    $json = file_get_contents('App/datos/employees.json');

    $json_data = json_decode($json,true);

    foreach ($json_data as $key1 => $value1) {
      if($json_data[$key1]["id"] == $id){
        return($json_data[$key1]);
    }
   }
 }

 public function getEmpleadoSalario($SalIni, $SalFin){

    $json = file_get_contents('App/datos/employees.json');
    $json_filtrado = array();

    $json_data = json_decode($json,true);

    foreach ($json_data as $key1 => $value1) {
      $SalarioStr = str_replace("$", "", $json_data[$key1]["salary"]);
      $SalarioStr1 = str_replace(",", "", $SalarioStr);
      $SalarioNum = floatval($SalarioStr1);
      $Ini = floatval($SalIni);
      $Fin = floatval($SalFin);
      if($SalarioNum >= $Ini and $SalarioNum<=$Fin){
        array_push ($json_filtrado, $json_data[$key1]);
    }
   }
   return $json_filtrado;
 }
  

}


?>