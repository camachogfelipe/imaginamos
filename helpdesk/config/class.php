<?php
/* -------------------------------------------------------------------------------------------
 * Acerca de la Clase HelpDesk
 * Fecha	: 26 Oct 2011
 * Autor	: Jose Guillermo Ortiz Hernandez
 * Version	: 1.0
 * -------------------------------------------------------------------------------------------
 */

/* Definicion de clase */
class classHelpDeskUser {
	var $iduser		= "";			// Nombre de usuario
	var $idstatus	= 0 ; 			// Estado en sala
	var $idroom		= 0 ;			// Sala
	var $pass		= ""; 			// Clave
	var $token		= 0 ;			// Token de sesion
	var $emoticons	= true ;		// Usar emoticons
	var $clearout 	= true ;		// Limpiar al salair
	var $clearprv 	= true ;		// Limpiar privados
	var $timeout	= 120; 			// Usuario time out
	var $avatar		= 0 ;			// Avatar
	var $avatarp	= "";			// Path avatar
	var $encode		= 0 ; 			// 1: Md5, Other: Sha1 		
	var $ip			= "";			// IP
	var $lastmsg	= 0	;			// Ultimo mesaje mostrado
	var $name		= "";			// Nombre real usuario
	var $email		= "";			// Direccion de e-mail
	var $admin		= 0 ;			// Si es administrador
	var $lock		= 0 ;			// si esta bloqueado
	var $activate	= "";			// Cuando activo sesion
	var $status		= 0 ; 			// 0: Sin sesion, >1: Con sesion
	var $nstatus	= "Disponible" ; 		
	var $nroom		= "General" ; 

 	
 	function classHelpDeskUser() {
		$this->token		= md5(microtime());
		$this->ip			= $_SERVER['REMOTE_ADDR'] ;		
		$this->lock			= 0;
		$this->activate		= "";
		$this->avatar		= 0;
		$this->avatarp		= "";
		$this->name			= "";
		$this->email		= "";
		$this->admin		= 0;
		$this->nroom		= 0 ; 
		$this->idstatus		= 0;
		$this->nstatus		= "Desconectado" ; 						
		$this->status		= 0;		
	}

	private function Ping() {
		$idroom			= $this->idroom;
		$time			= date('Y-m-d H:i:s');
		$sql			= sprintf("UPDATE users SET `ping`='%s', `idroom`=%s WHERE `iduser`='%s';",$time,$idroom,mysql_real_escape_string($this->iduser));
		$result 		= mysql_query($sql,HELP_DESK_LINK);	
	}

	private function EncodeEmoticons($message) {
		if($this->emoticons) {
			$sql	= sprintf("select * from emoticons;");
			$result = mysql_query($sql,HELP_DESK_LINK);
	
			if($result){
				while ($row = mysql_fetch_assoc($result)) {
					$string	 = $row["string"];
					$path 	 = $row["path"];
					$replace = sprintf("<img src=\\\"%s\\\" border=\\\"0\\\" align=\\\"absmiddle\\\">",$path) ;
					$message = str_replace($string,$replace,$message);
				}
			}
		}
		return $message;
	}
	
 	private function EncodePass($pass) {
 		$encode="";
 		switch ($this->encode) {
 			case 1:
 				$encode	= md5($pass);	
 				break;
 			default:
 				$encode	= sha1($pass);
 		}
 		return $encode;
 	}
	
	private function EncodeWeb($string) {
		$data=str_replace("\\","&#92;",htmlspecialchars(nl2br($string),ENT_QUOTES));
		return $data;
	}
 	 	
 	function UserLogIn($iduser,$pass) {
 		$this->iduser		= mysql_real_escape_string($iduser);
 		$this->pass			= $this->EncodePass(trim($pass)); 
		$this->emoticons	= $this->getParameter("UsersEmoticons","int",1)==1 ? true : false ;
		$this->clearout 	= $this->getParameter("LogsClearOut","int",1)==1 ? true : false ;
		$this->clearprv 	= $this->getParameter("LogsClearPrv","int",1)==1 ? true : false ;
 		$this->timeout		= $this->getParameter("UsersTimeOut","int",$this->timeout); 
 		$this->idroom		= $this->getParameter("DefaultIdRoom","int",$this->idroom);
		$this->nroom		= $this->getParameter("DefaultIdRoom","text",$this->nroom);
		$this->avatar		= $this->getParameter("DefaultIdAvatar","int",$this->avatar);
		$this->avatarp		= $this->getParameter("DefaultIdAvatar","text",$this->avatarp);
		$this->encode		= $this->getParameter("DefaultEncode","int",$this->encode);  		
		$this->ip			= $this->getParameter("UsersIp","int",1)==1 ? $_SERVER['REMOTE_ADDR'] : "ANONIMO" ;				

 		
		$iduser			= $this->iduser;
		$pass			= mysql_real_escape_string($this->pass);
		$time			= date('Y-m-d H:i:s');
 		$sql			= sprintf("SELECT a.*,`b`.`path`,`b`.`pathm`, `c`.`status` as `nstatus`, `d`.`name` as `nroom` FROM `users` as `a` left join `avatars` as `b` ON `a`.`idavatar`=`b`.`idavatar` LEFT JOIN `status` as `c` ON `a`.`statususer`=`c`.`idstatus` LEFT JOIN `rooms` as `d` ON `a`.`idroom`=`d`.`idroom`  WHERE `a`.`enabled`=1 AND `a`.`iduser`='%s' AND `a`.`pass`='%s'",$iduser,$pass);
		$result 		= mysql_query($sql,HELP_DESK_LINK);
		
		if($result){
			$row 			= mysql_fetch_array($result);		
	
			if(empty($row['iduser'])) {
				$this->status	= 0;
			}else{
				$sql				= sprintf("UPDATE users SET toke='%s', ip='%s', `activate`= '%s', `statususer`=1 WHERE iduser='%s';",$this->token,$this->ip,$time,$iduser);
				$result 			= mysql_query($sql,HELP_DESK_LINK);
				$this->lock			= $row['lock'];
				$this->activate		= $row['activate'];
				$this->avatar		= $row['idavatar'];
				$this->avatarp		= $row['path'];
				$this->name			= $row['name'];
				$this->email		= $row['e-mail'];
				$this->admin		= $row['admin'];
				$this->status		= 1;
				$this->nroom		= empty($row['nroom']) ? "General" : $row['nroom'] ; 
				$this->idstatus		= 1;
				$this->nstatus		= "Disponible" ; 
				
				// Notificando entrada
				$msgLogInt	= $this->getParameter("DefaultMsgLogInt","text","{login} %s inicio sesión");
				$this->setMessage("*",sprintf($msgLogInt,$this->name)) ;				
			}
		}else{
			$this->status	= 0;
		}
		
		return $this->status;
 	}
 	
 	function UserLogOut() {
 		// Registro de salida
		$iduser			= mysql_real_escape_string($this->iduser);
		$sql			= sprintf("UPDATE users SET `toke`='', `ping`='0000-00-00 00:00:00', `statususer`=0 WHERE `iduser`='%s';",$iduser);
		$result 		= mysql_query($sql,HELP_DESK_LINK);

		// Eliminando registros personales
		if($this->clearout) {
			$time			= date('Y-m-d H:i:s');
			$sql			= sprintf("DELETE FROM logs WHERE `to`='%s' or (`from`='%s' and `time`<'%s');",$iduser,$iduser,$time);
			$result 		= mysql_query($sql,HELP_DESK_LINK);		
		}
		
		// Actualizando estado
		$this->classHelpDeskUser();
				
		
		$msgLogOut	= $this->getParameter("DefaultMsgLogOut","text","{logout} %s termino sesión");
		$this->setMessage("*",sprintf($msgLogOut,$this->name)) ;
		return $this->status;
 	}	
 	
 	function UserRegister($iduser,$pass,$name,$avatar,$email) {
		$iduser			= mysql_real_escape_string($iduser);
		$passuncode		= $pass;
		$pass			= mysql_real_escape_string( $this->EncodePass($pass));  		
 		$sql			= sprintf("SELECT COUNT(iduser) AS users FROM users WHERE `iduser`='%s';",$iduser);
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
		$data			= 0;

 		if($result){
			$row 		= mysql_fetch_assoc($result);
			
			if($row['users']<=0) {
				$sql			= sprintf("INSERT INTO users (`iduser`,`pass`,`toke`,`admin`,`ip`,`lock`,`name`,`idavatar`,`e-mail`) VALUES ('%s','%s','%s',%s,'%s',%s,'%s',%s,'%s') ;",$iduser,$pass,'',0,'',0,$name,$avatar,$email);
			}else{
				$sql			= sprintf("UPDATE users SET `pass`='%s',`name`='%s',`idavatar`=%s,`e-mail`='%s' WHERE `iduser`='%s';",$pass,$name,$avatar,$email,$iduser);	
			}
			$result 		= mysql_query($sql,HELP_DESK_LINK);
 		}

		$data = $this->UserLogIn($iduser,$passuncode); 		 		
		return $data;
 	}

 	function UserUnregister($iduser,$pass) {
 		$this->iduser	= trim($iduser);
 		$this->pass		= trim($this->EncodePass($pass)); 
 		
 		
 		$sql			= sprintf("SELECT COUNT(iduser) AS users FROM users WHERE LOWER(TRIM(iduser))='%s' AND TRIM(pass)='%s';",mysql_real_escape_string($this->iduser),mysql_real_escape_string($this->pass));
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
 		if($result){
			$row 		= mysql_fetch_assoc($result);
			
			if($row['users']>=0) {
				// Eliminando registros personales
				$sql			= sprintf("DELETE FROM logs WHERE `to`='%s' or `from`='';",mysql_real_escape_string($this->iduser),mysql_real_escape_string($this->iduser));
				$result 		= mysql_query($sql,HELP_DESK_LINK);

				// Desactivando usuario
				$sql			= sprintf("UPDATE users SET `toke`='', `enabled`=0 WHERE LOWER(TRIM(iduser))='%s';",mysql_real_escape_string($this->iduser));
				$result 		= mysql_query($sql,HELP_DESK_LINK);
				$result 		= !$result ? -1 : 1 ;
				$this->status	= 0;
					
			}else{
				$result	= -3;
			}
 		}else{
 			$result	= -4;
 		}
 		
 		
		return $result;
 	}	

	function getPanic() {
		$data="";
		if($this->getParameter("UserLocationSend","int",0)==1) {
		
			$default	= "logout.php";
			$users		= $this->getParameter("UserLocationSend","query","");
			$logout		= $this->getParameter("UserLocationSend","tinyint",0);
			$logout		= $users=='*' ? $logout	 : strpos($users,$_SESSION["oUsuario"]->iduser)!==false ? $logout : 0 ;
			$location	= $this->getParameter("UserLocationSend","text",$default);
			$location	= empty($location) ? $default : $location ;
			$data		= $users=='*' ? $location : strpos($users,$_SESSION["oUsuario"]->iduser)!==false ? $location : ""  ;
			
			if($logout==1){$this->UserLogOut();}
		}

		return $data;
	}

 	function getParameter($name,$type,$default) {
 		
		$sql	= sprintf("SELECT `%s` FROM `parameters` WHERE `name`='%s' ;",$type,$name);
 		$result = mysql_query($sql,HELP_DESK_LINK);
 		$data	= $default;
 		
 		if($result){
			$row  = mysql_fetch_assoc($result);
			$data = $row[$type];
 		}
 		
 		return $data;
 	}	
	
 	function getRooms() {
		$iduser			= '%'.mysql_real_escape_string($this->iduser).'%';
		$sql			= sprintf("SELECT * FROM `rooms` WHERE `users` LIKE '%s' OR `users`='*' ;",$iduser);
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
		$icon			= $this->getParameter("DefaultIconRoom","text","");
		$format			= "<tr><td><a href=\"javascript:parent.setRoom('%s','%s');\"><img src=\"%s\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\" >&nbsp;<span id=\"room%s\">%s</span></a></td></tr>";
 		$data			= "";
 		if($result){			
 			$data .= "<table class=\"tableOptions\">";
			$data .= sprintf($format,"0","General",$icon,"0","General");
 			
 			while ($row = mysql_fetch_assoc($result)) {
 	 			$idroom		= $row["idroom"];
				$name		= $this->EncodeWeb(ucwords(strtolower($row["name"])));
				$data	   .= sprintf($format,$idroom,$name,$icon,$idroom,$name);
			}
			$data .= "</table>";
			
 		}
 		
 		
 		return $data;		
 	}		

 	function getStatus() {
		$data	= "";	
		$sql		= sprintf("SELECT * FROM `status` ;");
		$result 	= mysql_query($sql,HELP_DESK_LINK);
			
			
		if($result){
			while ($row = mysql_fetch_assoc($result)) {
				$idstatus	 	= $row["idstatus"];
				$path 	 	= $row["path"];
				$name		= $this->EncodeWeb(ucfirst(strtolower($row["status"])));
				$format	 	= "<div class=\"emoticon\"><a href=\"javascript:setStatus('%s','%s');\"><img src=\"%s\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\" alt=\"%s\"></a></div>";
				$data	   .= sprintf($format,$idstatus,$name,$path,$name);
			}
		}
					
 		return $data;
 	}		


 	function getEmoticons() {
		$data	= "";
		if($this->emoticons) {
			$available	= str_replace(",","','",$this->getParameter("UsersEmoticons","text",""));
			$separatore	= str_replace(",","','",$this->getParameter("UsersEmoticonsSeparator","text",""));
			$system		= $this->admin==1 ? "`system`>=0" : "`system`=0" ;
			
			
			$sql		= sprintf("SELECT * FROM emoticons WHERE %s AND `extra` IN ('%s') ORDER BY `extra`,`order` ;",$system,$available);
			$result 	= mysql_query($sql,HELP_DESK_LINK);
			
			
			if($result){
				while ($row = mysql_fetch_assoc($result)) {
					$string	 	= $row["string"];
					$path 	 	= $row["path"];
					$name		= $this->EncodeWeb($row["name"]);
					$separator	= "";
					$format	 	= "<div class=\"emoticon\"><a href=\"javascript:parent.setEmoticon('%s');\"><img src=\"%s\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\" alt=\"%s\"></a></div>%s";
					$data	   .= sprintf($format,$string,$path,$name,$separator);
				}
			}
			
			
 		}
		
 		return $data;
 	}	
 	
 	function getAvatars($action,$idavatar,$type) {
 		
		$type	= $this->admin > 0 ? 0 : $type ;
		$sql	= sprintf("SELECT * FROM avatars WHERE `enabled`=1 AND `type`>=%s;",$type);
 		$result = mysql_query($sql,HELP_DESK_LINK);
 		$data	= "";
 		
 		if($result){
			while ($row = mysql_fetch_assoc($result)) {
				$value	 = $row["idavatar"];
				$caption = ucfirst(strtolower($row["name"]));
				$selected= $row["idavatar"]==$idavatar ? "selected=\"selected\"" : "" ;
				$title	 = $row["path"];
				$style	 = $row["pathm"];
				$data	.= sprintf("<option value=\"%s\" id=\"imgAvatar%s\" title=\"%s\" class=\"imagebacked\" style=\"background-image: url(%s);\" %s>%s</option>",$value,$value,$title,$style,$selected,$caption);
			}
 		}
 		
 		
 		
 		return $data;
 	}
 	
 	function getUsers() {
		
		$avatar			= $this->getParameter("UsersAllAvatar","text","");
	
 		
 		$idroom			= $this->idroom;
 		$time			= date('Y-m-d H:i:s',mktime(date("H"),date("i"),0,date("n"),date("j"),date("Y"))-$this->timeout);
 		$sql			= sprintf("SELECT `a`.`iduser`, `a`.`statususer`,`a`.`name`,`b`.`pathm`, `c`.`status`, `c`.`path` as `nstatus`, `d`.`name` as `nroom` FROM `users` as `a` left join `avatars` as `b` ON `a`.`idavatar`=`b`.`idavatar` LEFT JOIN `status` as `c` ON `a`.`statususer`=`c`.`idstatus` LEFT JOIN `rooms` as `d` ON `a`.`idroom`=`d`.`idroom` WHERE `a`.`toke`<>'' AND `a`.`ping`>='%s' AND `a`.`idroom`=%s AND `a`.`statususer`>0;",$time,$idroom);
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
		$format			= "<tr><td><a href=\\\"javascript:setTo('%s','%s');\\\"><div class=\\\"nickname\\\"><img src=\\\"%s\\\" alt=\\\"%s\\\" width=\\\"16\\\" height=\\\"16\\\"  border=\\\"0\\\" align=\\\"absmiddle\\\">&nbsp;%s</div>%s</a></td></tr>";
		$data			= "";
		
 		if($result){			
 			$data .= "<table class=\\\"tableOptions\\\">";
			$data.=sprintf($format,"*","Todos los usuario",$avatar,"Todos","<b>Todos</b>","");
 			
 			while ($row = mysql_fetch_assoc($result)) {
 	 			$iduser		= $row["iduser"];
 				$nickname	= $row["name"];
				$name		= $row["name"];
				$avatar		= $row["statususer"]==1 ? $row["pathm"] : $row["nstatus"];
				$info		= is_null($row["nroom"]) ? "General" : strtolower($row["nroom"]) ;
				$info		= $row["status"]." en ".$info;
				$status	    = "<div class=\\\"nickinfo\\\">".$info."</div>";
				$data	   .= sprintf($format,$iduser,$name,$avatar,$name,$nickname,$status);
			}
			$data .= "</table>";
			
 		}
 		
 		
 		return $data;
 	}

 	function getMessage() {
 		

		// Actualizar estado
		$this->Ping();

		// Buscar mensajes
		$idroom			= $this->idroom;
		$iduser			= mysql_real_escape_string($this->iduser);
		$time			= date('Y-m-d H:i:s',mktime(date("H"),date("i"),0,date("n"),date("j"),date("Y"))-$this->timeout);
		$sql			= sprintf("SELECT * FROM logs WHERE idroom=%s AND `time`>='%s' and `idlog`>%s AND (`to`='*' or `to`='%s' or `from`='%s');",$idroom,$time,$this->lastmsg,$iduser,$iduser);
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
 		$data			= "";
 		
 		if($result){
			while ($row = mysql_fetch_assoc($result)) {
				$to		 		= str_replace(strstr($row["to"], '@'),"",$row["to"]); //$row["to"];
				$from			= str_replace(strstr($row["from"], '@'),"",$row["from"]); //$row["from"];
				$class			= $row["to"]=="*" ? "msgTitleAll" : "msgTitlePrivate" ;
				$private 		= $row["to"]=="*" ? sprintf("<span class=\\\"%s\\\"><b>%s > %s : </b></span>",$class,$from,"Todos") : sprintf("<span class=\\\"%s\\\"><b>%s > %s : </b></span>",$class,$from,$to) ;
				$time	 		= $row["time"];
				$message 		= $this->EncodeEmoticons(base64_decode($row["message"]));
				
				$data		   .= sprintf("<div class=\\\"msgBody\\\">%s<br/>%s<br/><br/></div>",$private,$message);
				$this->lastmsg	= $row["idlog"]>$this->lastmsg ? $row["idlog"] : $this->lastmsg;
			}
 		}
			
 		
 		
 		return $data;
 	}
	
	function setClear($clear) {
		$sql	= sprintf("DELETE FROM `logs` WHERE `idlog`>0;");
 		$result = mysql_query($sql,HELP_DESK_LINK);		
	}
		
	function setPanic($active) {
		$users		= "";
		
		if($active==1) {
			$sql		= sprintf("SELECT `iduser` FROM `users` ;");
			$result 	= mysql_query($sql,HELP_DESK_LINK);	
			if($result){
				while ($row = mysql_fetch_assoc($result)) {
					if(trim($row["iduser"])<>trim($this->iduser)) {
						$users.=$row["iduser"].",";
					}
				}
			}
		}
			
		$sql	= sprintf("UPDATE parameters SET `int`=%s, `tinyint`=%s, `query`='%s' WHERE `name`='UserLocationSend';",$active,$active,$users);
		$result = mysql_query($sql,HELP_DESK_LINK);	
	}
	
	function setRoom($room,$name) {
		$msgOut	= $this->getParameter("DefaultMsgOut","text","{GO} %s Cambio de sala");
		$msgInt	= $this->getParameter("DefaultMsgInt","text","{GO} %s Bienvenido a la sala");
		
		if($this->idroom<>$room) {	
			$this->setMessage("*",sprintf($msgOut,$this->name));
			$this->idroom=$room;
			$this->nroom=$name;
			$this->setMessage($this->iduser,sprintf($msgInt,$this->name));
		}
	}
	
	function setStatus($status,$name) {	
		if($this->idstatus<>$status) {	
			$msgChangStatus	= $this->getParameter("DefaultMsgChangStatus","text","{GO} %s Cambio de estado");
			$this->idstatus=$status;
			$this->nstatus=$name;
			$this->setMessage("*",sprintf($msgChangStatus,$this->name,$status));
			$iduser	= mysql_real_escape_string($this->iduser);
			$sql	= sprintf("UPDATE users SET `statususer`=%s WHERE iduser='%s';",$status,$iduser);
			$result = mysql_query($sql,HELP_DESK_LINK);			
		}
	}	
 	
 	function setMessage($to,$message) {
 		$idroom	 = $this->idroom;
 		$from	 = mysql_real_escape_string($this->iduser);
 		$ip		 = $this->ip;
 		$time	 = 'NOW()';
 		$status	 = 0 ;
 		$admin	 = 0 ;
 		$message = base64_encode($this->EncodeWeb($message)) ;
 		
 		
 		$sql			= sprintf("INSERT INTO logs (`idroom`,`to`,`from`,`ip`,`time`,`message`,`status`,`admin`) values (%s,'%s','%s','%s',%s,'%s',%s,%s);",$idroom,$to,$from,$ip,$time,$message,$status,$admin);
 		$result 		= mysql_query($sql,HELP_DESK_LINK);
 		
 	}
}


session_start();

?>