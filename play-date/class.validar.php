<?php
require_once("./cms/core/class/db.class.php");
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

        if (empty($_POST['nombre']) or empty($_POST['usuario']) or empty($_POST['pass']) or empty($_POST['email']) ) {
            
          echo '<script>setTimeout(\'alert("Porfavor ingrese todos los datos");\',400);</script>';
            
        }elseif(Validar::valida_correo($_POST['email']) == false){
            echo '<script>setTimeout(\'alert("Ingrese un correo valido.");\',400);</script>';
        }else
            {
           
          //print_r($_POST);
          $body = '
          <center>
          <img src="imagenes/icono-elefante.png"></center>
          <br><br><br><br>
          <b>Nombre y Apellido :</b> : ' . utf8_decode($_POST["nombre"]) . ' <br>
          
          <b>usuario :</b> : ' . utf8_decode($_POST["usuario"]) . ' <br>
          <b>Contraseña :</b> : ' . $_POST["pass"] . ' <br>
          <b>E-mail :</b> : ' . $_POST["email"] . ' <br>
          
          <b>Fecha de envio </b>: ' . date("Y-m-d H:i:s") . '<br>';
          $email = $_POST['email'];
          $asunto = utf8_decode("Datos Acceso Play Date");
          $cCorreo = new Correo();
          $cCorreo->SendEmail($email, $asunto, $body);
           $db = new Database();
           $db->connect();
          $db->doQuery("INSERT INTO cms_registro(id_registro, nombre_registro, usuario_registro, pass_registro,email_registro)VALUES(NULL,'".mysql_real_escape_string($_POST['nombre'])."','".mysql_real_escape_string($_POST['usuario'])."','".mysql_real_escape_string(md5($_POST['pass']))."','".mysql_real_escape_string($_POST['email'])."')", INSERT_QUERY);
          echo '<script>setTimeout(\'alert("Datos enviados correctamente");\',400);</script>';
          
        }
    }
			
public function enviar_email2() {
        //print_r($_POST);

        if (empty($_POST['nombre']) or empty($_POST['direccion']) or empty($_POST['telefono']) or empty($_POST['email']) ) {
            
          echo '<script>setTimeout(\'alert("Porfavor ingrese todos los datos");\',400);</script>';
            
        }elseif(Validar::valida_correo($_POST['email']) == false){
            echo '<script>setTimeout(\'alert("Ingrese un correo valido.");\',400);</script>';
        }else
            {
           
          //print_r($_POST);
          $body = '
          <center>
          <img src="imagenes/icono-elefante.png"></center>
          <br><br><br><br>
          <b>Nombre y Apellido :</b> : ' . utf8_decode($_POST["nombre"]) . ' <br>
          
          <b>Direccion :</b> : ' . utf8_decode($_POST["direccion"]) . ' <br>
          <b>Telefono :</b> : ' . utf8_decode($_POST["telefono"]) . ' <br>
          <b>E-mail :</b> : ' . $_POST["email"] . ' <br>
          <b>Comentario :</b> : ' . utf8_decode($_POST["coment"]) . ' <br>
          <b>Fecha de envio </b>: ' . date("Y-m-d H:i:s") . '<br>';
          $email = 'sebastian.ballesteros@imaginamos.com.co';
          $asunto = utf8_decode("Comentario Play Date");
          $cCorreo = new Correo();
          $cCorreo->SendEmail($email, $asunto, $body);
           $db = new Database();
           $db->connect();
     
          echo '<script>setTimeout(\'alert("Datos enviados correctamente");\',400);</script>';
          
        }
    }		
		
		
		
	
	
	}


?>