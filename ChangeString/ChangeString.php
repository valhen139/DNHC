<?php
Class ChangeString
{


  public function __construct(){
  	
  }


   public function Mayusculas($ncadena, $ocadena){

   	$fcadena= "";
   for ($i = 0; $i < strlen($ncadena); $i++) {
    
	   	if ( ctype_upper ($ocadena[$i])){
	      
	   		$fcadena .= strtoupper($ncadena[$i]);
	   	} else {
	   		$fcadena .= $ncadena[$i];

	   	}
   	}
   	return $fcadena;
   }
  

  public function Build ($cadena)
  {  $alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    $ncadena = "";
    $caracter = "";
    $clave = 0;
 
    for ($i = 0; $i < strlen($cadena); $i++) {
    
    $caracter = strtolower($cadena[$i]);
    $clave = array_search($caracter, $alfabeto);
    if ($clave !== FALSE)
    {   if ($clave === 26)
    	{
    	$ncadena .= $alfabeto[0];
    	} else {
    		$ncadena .= $alfabeto[$clave + 1];
    	}
    } else {

    	$ncadena .= $caracter;
    }
    	
    }
    	$fcadena = $this->Mayusculas($ncadena, $cadena);
    	return $fcadena;
  }

}


?>