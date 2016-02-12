<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// @marionavas
// Agencia: imaginamos.com
// Bogota, Colombia, 2012
// Archivo de funciones XAJAX para el módulo de configuración del CMS
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once("../../../xajax/xajax.inc.php");
include("../../../../config/config.php");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Funcion para definir el PATH de trabajo del CMS

function menus( $formData )
{  
	$objResponse = new xajaxResponse();
	
	if($formData[namemenu] == "" or $formData[iconmenu] == "")
	
		$objResponse->script("showError('Ingrese nombre, url e ícono para el menú',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$query = "INSERT INTO cms_menu (menu_id,menu_title,menu_url,menu_icon) VALUES ('','$formData[namemenu]','modules/$formData[urlmenu]/view','$formData[iconmenu]')";
		$db->doQuery($query,INSERT_QUERY);
				
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
	}
	
	return $objResponse;
}


function menusChildren( $formData )
{  
	$objResponse = new xajaxResponse();
        
        
        if($formData[namemenu] == "" or $formData[urlmenu] == "")
            $objResponse->script("showError('Ingrese nombre, url e ícono para el menú',3000);");
	
	/*if($formData[namemenu] == "")
	
		$objResponse->script("showError('Ingrese nombre, url e ícono para el menú',3000);");*/
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$url = '';
                if($formData[urlmenu] != '')
                    $url = 'modules/' . $formData[urlmenu] . '/view';
                
		$query = "INSERT INTO cms_menu (menu_id,menu_title,menu_url,id_parent) VALUES ('','$formData[namemenu]','$url','$formData[id_parent]')";
                
		$db->doQuery($query,INSERT_QUERY);
				
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
	}
	
	return $objResponse;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Funcion para definir el la URL de la web final

function web( $formData )
{  
	$objResponse = new xajaxResponse();
	
	if($formData[web] == "http://" or $formData[web] == "")
	
		$objResponse->script("showError('Ingrese una url válida',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$query = "UPDATE cms_configuration SET config_web = '$formData[web]'";
		$db->doQuery($query,UPDATE_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Actualizando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		//$objResponse->script("showSuccess('Url actualizada correctamente',4000);");		

	}
	
	return $objResponse;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Funcion para definir el PATH de trabajo del CMS

function path( $formData )
{  
	$objResponse = new xajaxResponse();
	
	if($formData[path] == "http://" or $formData[path] == "")
	
		$objResponse->script("showError('Ingrese un PATH válido',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$query = "UPDATE cms_configuration SET config_path = '$formData[path]'";
		$db->doQuery($query,UPDATE_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Actualizando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");	

	}
	
	return $objResponse;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Funcion para agregar nuevos administradores

function emailrecipient( $formData )
{  
	$objResponse = new xajaxResponse();
	
	function passwordAssigned($lenght)
				   { 
					   $string = "[^A-Z0-9]";
					   return substr(eregi_replace($string, "", md5(rand())) .
					   eregi_replace($string, "", md5(rand())) . 
					   eregi_replace($string, "", md5(rand())), 
					   0, $lenght); 
					}
	
	if($formData[emailuser] == "" or $formData[nameuser] == "")
	
		//Mensaje si llega vacio
		$objResponse->script("showError('Ingrese un email válido y nombre de usuario',3000);");
	
	else {
		
		//Validamos la correcta escritura del email
		if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$formData[emailuser]))
			
			$objResponse->script("showError('Verifique la correcta escritura del email',4000);");
			
		else{
			
		//Hechas las validaciones de sintaxis procedemos		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		//Vamos a validar si el mail existe o no
		$query = "SELECT email_user FROM cms_user WHERE email_user = '$formData[emailuser]'";
		$db->doQuery($query,SELECT_QUERY);
		if($result = $db->results){
		
			$objResponse->script("showError('El email ya existe, verifique',4000);");				
		
		}else{
			
		//Según el ROL con el que se cree el usuario se asigna $rol y clave inicial de acceso al administrador
		if($formData[roluser] == 1)
		{
			$rol = "admin";
			$pass = passwordAssigned(7);
		}else{
			$rol = "user";
			$pass = passwordAssigned(7);			
		}

		$query = "INSERT INTO cms_user (id_user,username_user,password_user,email_user,rol_user) VALUES ('','$formData[nameuser]','".md5($pass)."','$formData[emailuser]','$rol')";
		$db->doQuery($query,INSERT_QUERY);

		//Consultamos cuál es el PATH de instalación para el CMS
		$queryPath = "SELECT config_path FROM cms_configuration WHERE config_id = '1'";
		$db->doQuery($queryPath,SELECT_QUERY);	
		$resultPath = $db->results;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Envío de email
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$recipient = $formData[emailuser];
		$subject = 'Hola '.$formData[nameuser].', estos son los datos de su nueva cuenta';
		$bodyEmail = '
		
		<table width="632" border="0" align="center" background="http://cms.imaginamos.com/images/bg/bg_mail_new_user.jpg">
		  <tr>
			<td height="522"><table width="55%" border="0" align="center">
			  <tr>
				<td>
				  <p>
				  Hola '.$formData[nameuser].', se ha creado una nueva cuenta para usted. Para ingresar haga clic en el siguiente link: <br><br>
				  <a href="'.$resultPath[0][config_path].'">'.$resultPath[0][config_path].'</a><br><br>
				  Sus datos de acceso son los siguientes:<br><br>
  				  <strong>Email:</strong><br>'.$recipient.'<br><br>
				  <strong>Su clave:</strong><br>'.$pass.'<br><br>--<br><br>
				  Guarde este correo para<br>futuras referencias
				  <p>
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
		
		mail($recipient,$subject,$bodyEmail,$headers);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		
			}
		
		}

	}
	
	return $objResponse;
}
/* XAJAX BETA // PHP UP 5.3
$xajax->register(XAJAX_FUNCTION, "path");
$xajax->register(XAJAX_FUNCTION, "video");
$xajax->register(XAJAX_FUNCTION, "emailrecipient");
$xajax->register(XAJAX_FUNCTION, "menus");
$xajax->register(XAJAX_FUNCTION, "web");
$xajax->register(XAJAX_FUNCTION, "rss");
$xajax->processRequest();
$xajax->configure('javascript URI','../../../xajax/');
$xajax->printJavascript( "../../../xajax/" );*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Registro de funciones para XAJAX sobre PHP <= 5.2.17
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$xajax = new xajax("");
$xajax->registerFunction("web");
$xajax->registerFunction("path");
$xajax->registerFunction("emailrecipient");
$xajax->registerFunction("menus");
$xajax->registerFunction("menusChildren");
$xajax->processRequest();
$xajax->printJavascript("../../../xajax/");
?>