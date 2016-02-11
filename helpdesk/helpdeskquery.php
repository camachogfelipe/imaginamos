<?php
	include('header.php');
	@$action=$_GET['action']; settype($action,'integer');
	
	switch ($action) {
	    case 1: // Recuperar usuarios y mensajes
			try {
				$panic=$_SESSION["oUsuario"]->getPanic();
				if(!empty($panic)) printf("location.href=\"%s\";\n",$panic);
				
				if(empty($panic)) {
					// Recuperar usuarios
					$users=$_SESSION["oUsuario"]->getUsers();
					if(!empty($users)) printf("setUsers(\"%s\");\n",$users);
					
					// Recuperar mensajes					
					$msgs=$_SESSION["oUsuario"]->getMessage();
					if(!empty($msgs)) printf("setMessage(\"%s\",\"%s\");\n",$_SESSION["oUsuario"]->lastmsg+1,$msgs);
				}
				
			} catch(Exception $e) {
    			 printf("setMessage(GetNumUnico(),\"Error: %s\");\n",$e->getMessage());
			}
			
			// Control
			printf("/* Actualizado %s */",date("r"));
			break;
			
		case 2:	// Cambiar de sala
			@$room=$_GET['room']; settype($room,'integer');
			@$name=$_GET['name']; settype($name,'string');
			$_SESSION["oUsuario"]->setRoom($room,$name);						
	        break;
				
	    case 3: // Enviar mensaje
			@$to=$_POST['to']; settype($to,'string'); $to=empty($to) ? "*" : $to ; 
			@$message=$_POST['message']; settype($message,'string');$message=trim($message);
			
			// Creando mensaje		
			if(!empty($to) && !empty($message)) $_SESSION["oUsuario"]->setMessage($to,$message);

			// Limpiando mensaje
			printf("\t<script type=\"text/javascript\"> parent.setInit(); </script>\n");		
	        break;

		case 4: // Cambiar de estado
			@$status=$_GET['status']; settype($status,'integer');
			@$name=$_GET['name']; settype($name,'string');
			$_SESSION["oUsuario"]->setStatus($status,$name);			
	        break;
	}
?>
