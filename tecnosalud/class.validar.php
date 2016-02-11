<?php
require_once("Correo.class.php");
class Validar{
	
	public static function valida_correo($email){
    	$mail_correcto = 0;
    	//compruebo unas cosas primeras
    	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       		if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          	//miro si tiene caracter .
          		if (substr_count($email,".")>= 1){
             	//obtengo la terminacion del dominio
             	$term_dom = substr(strrchr ($email, '.'),1);
             	//compruebo que la terminaci?n del dominio sea correcta
             		if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                	$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                	$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                		if ($caracter_ult != "@" && $caracter_ult != "."){
                   		$mail_correcto = 1;
               		 }
             	  }
         	   }
       		}
          }
            if ($mail_correcto)
             	return true;
            else
            	return false;
            }
			
public function enviar_email() {
        //print_r($_POST);

        if (empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['pais']) or empty($_POST['ciudad']) or empty($_POST['email']) or empty($_POST['telefono'])) {
            
          echo '<script>setTimeout(\'alert("Porfavor ingrese todos los datos");\',400);</script>';
            
        }elseif(Validar::valida_correo($_POST['email']) == false){
            echo '<script>setTimeout(\'alert("Ingrese un correo valido.");\',400);</script>';
        }else
            {
           
          //print_r($_POST);
          $body = '
          <center>
          <img src="imagenes/logo-header.png"></center>
          <br><br><br><br>
          <b>Nombre :</b> : ' . utf8_decode($_POST["nombre"]) . ' <br>
          <b>Apellido :</b> : ' . utf8_decode($_POST["apellido"]) . ' <br>
          <b>Pais :</b> : ' . utf8_decode($_POST["pais"]) . ' <br>
          <b>Ciudad :</b> : ' . $_POST["ciudad"] . ' <br>
          <b>E-mail :</b> : ' . $_POST["email"] . ' <br>
          <b>Telefono : </b>: ' . $_POST["telefono"] . ' <br>
          <b>Asunto : </b>: ' . $_POST["asunto"] . ' <br>
          <b>Mensaje : </b>: ' . $_POST["mensaje"] . ' <br>
          <b>Fecha de envio </b>: ' . date("Y-m-d H:i:s") . '<br>';
          $asunto = utf8_decode("Contáctenos");
          $cCorreo = new Correo();
          $cCorreo->SendEmail("sebastian.ballesteros@imaginamos.com.co", $asunto, $body);
          echo '<script>setTimeout(\'alert("Datos enviados correctamente");\',400);</script>';
        }
    }
			
		
		
		
		
	
	
	}


?>