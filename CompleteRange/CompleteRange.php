<?php
Class CompleteRange
{


  public function __construct(){
  	
  }


  public function ValArreglo($arreglo){
    $tam = count($arreglo);
    for ($i = 0; $i < $tam; $i++) {
      if (!is_int($arreglo[$i])){
        return false;
      }

    }
    return true;
  }

  public function Build ($arreglo)
  {  if (!$this-> ValArreglo($arreglo)) {return $arreglo;}

    $arreglocomp = array();
     $tam = count($arreglo);
    for ($i = 0; $i < $tam; $i++) {

      if ($i + 1 ==  $tam){
          array_push ($arreglocomp, $arreglo[$i]);

      }else{
        $falta = $arreglo[$i +1] - $arreglo[$i];
        if ($falta > 1){

          for ($j = 0; $j<$falta; $j++){

            array_push ($arreglocomp, $arreglo[$i] + $j);
          }

        }else{

          array_push ($arreglocomp, $arreglo[$i]);
        }
      
    	}
    }
    	return $arreglocomp;
  }

}


?>