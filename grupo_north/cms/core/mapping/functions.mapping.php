<?php
//////////////////////////////////////////////////////////////////////////////////////////
//FUNCIONES PARA MAPPING DEL FRONT END
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
/// Corte de texto sin cortar palabras completas
	function shortText($text, $limit)
	{
		$text = substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '...';
		return $text;
	}
        
        function dividircadena($cadena,$pos){
            $size = strlen($cadena);
            if(!$size%2==0){
                $size+1;
            }
            $mitad = $size / 2;
            $result = substr($cadena,0,$mitad);
            $result2 = substr($cadena,$mitad,$size);
            if($pos == 2){
                return $result2;
            }else{
                return $result;
               }
        }
//////////////////////////////////////////////////////////////////////////////////////////	
	
?>