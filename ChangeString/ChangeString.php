<?php
Class ChangeString
{

  private $alfabeto  = array();

  public function __construct(){

    $this->alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");  	
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
  {  
    $ncadena = "";
    $caracter = "";
    $clave = 0;
 
    for ($i = 0; $i < strlen($cadena); $i++) {
    
    $caracter = strtolower($cadena[$i]);
    $clave = array_search($caracter, $this->alfabeto);
    if ($clave !== FALSE)
    {   if ($clave === 26)
    	{
    	$ncadena .= $this->alfabeto[0];
    	} else {
    		$ncadena .= $this->alfabeto[$clave + 1];
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