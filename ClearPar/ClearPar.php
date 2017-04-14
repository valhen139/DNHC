<?php
Class ClearPar
{


  public function __construct(){
  	
  }


  public function ValCadena($cadena){
  
    for ($i = 0; $i < strlen($cadena); $i++) {
      if (!($cadena[$i]=="(" or $cadena[$i]==")")){
        return false;
      }

    }
    return true;
  }

  public function Build ($cadena)
  {  if (!$this-> ValCadena($cadena)) {return $cadena;}

    $cadenafin = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
    if (!($cadena[$i] == "(" and $i+1==strlen($cadena))){
      if ($cadena[$i] == "(" and $cadena[$i+1] == ")") {
          $cadenafin .= $cadena[$i] . $cadena[$i+1];
          $i++;
        }
      }

    }
    	return $cadenafin;
  }

}


?>