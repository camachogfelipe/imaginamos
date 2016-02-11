<?php
////////////////////////////////////////////////////////
//@marionavas
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////////////////////////////
session_start();
////////////////////////////////////////////////////////
include("../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
$email = $_POST['emailRecipient'];
$db->doQuery("SELECT email_user FROM cms_user WHERE email_user = '".mysql_real_escape_string($email)."'",SELECT_QUERY);

    if($result = $db->results)
		{
		
		$data = TRUE; // Se logró el LOGIN
	
		function passwordAssigned($lenght)
				   { 
					   $string = "[^A-Z0-9]";
					   return substr(eregi_replace($string, "", md5(rand())) .
					   eregi_replace($string, "", md5(rand())) . 
					   eregi_replace($string, "", md5(rand())), 
					   0, $lenght); 
					}		
		
		$newPassword = passwordAssigned(7);
		
		//Consultamos cuál es el PATH de instalación para el CMS
		$queryPath = "SELECT config_path FROM cms_configuration WHERE config_id = '1'";
		$db->doQuery($queryPath,SELECT_QUERY);	
		$resultPath = $db->results;
		
		$recipient = $email;
		$subject = 'Le hemos enviado su nueva clave';
		$bodyEmail = '
		
		<table width="632" border="0" align="center" background="http://cms.imaginamos.com/images/bg/bg_mail_new_user.jpg">
		  <tr>
			<td height="522"><table width="55%" border="0" align="center">
			  <tr>
				<td>

				  Su email de ingreso:<br>
				  '.$email.'<br><br>
				  Su nueva clave es la siguiente:<br><br>
				  <h2>'.$newPassword.'</h2><br>
				  Haga clic en el siguiente enlace para ingresar al CMS<br>
				  '.$resultPath[0][config_path].'<br><br>
				  Si pierde u olvida esta clave,<br>puede solicitar una nueva repetiendo<br>este mismo proceso.
				  <br><br>
				  Cordialmente,<br>Staff <a href="http://imaginamos.com" target="_blank">imaginamos.com</a>
				  <br><br>
				  
				  </td>
			  </tr>
			</table></td>
		  </tr>
		</table>
		
		';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= "From: imaginamos.com<cms@imaginamos.com>" . "\r\n";
		
		if(mail($recipient,$subject,$bodyEmail,$headers))
			{			
				$db->doQuery("UPDATE cms_user SET password_user = '".md5($newPassword)."' WHERE email_user = '".mysql_real_escape_string($email)."'",UPDATE_QUERY);
			}
	
		}
	else
		$data = FALSE; //No se logró el LOGIN
		
	echo $data;
////////////////////////////////////////////////////////
?>