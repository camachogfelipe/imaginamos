<?php 
	include('header.php');
	
	// RECUPERANDO VALORES
	$inform		= "";
	
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}else{			
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			@$seleccionados=implode("','",$_POST["aopciones"]); settype($seleccionados,'string');
			@$guardar=$_POST["guardar"]; settype($guardar,'integer');
			@$eliminar=$_POST["eliminar"]; settype($eliminar,'integer');	
			@$adatos=$_POST["adatos"];
			
			// Eliminar resgitros marcados
			if ($eliminar==1) {
				// Eliminando usuario
				$sql=sprintf("DELETE FROM `users` WHERE `iduser` IN ('%s');",$seleccionados);
				$result=mysql_query($sql,HELP_DESK_LINK);	

				// Eliminando logs
				$sql=sprintf("DELETE FROM `logs` WHERE `to` IN ('%s') OR `from` IN ('%s') ;",$seleccionados,$seleccionados);
				$result=mysql_query($sql,HELP_DESK_LINK);	
			}
			
			// Guardando cambios
			if($guardar==1) {
				if (!empty($adatos)) {
					foreach($adatos as $key=>$value) {
						$iduser	= (isset($value['iduser'])) ? $value['iduser'] : "";
						$name	= (isset($value['name'])) ? $value['name'] : "";
						$admin	= (isset($value['admin'])) ? $value['admin'] : 0;
						$lock	= (isset($value['lock'])) ? $value['lock'] : 0;
						$enabled= (isset($value['enabled'])) ? $value['enabled'] : 0;
						
						if($iduser==HELP_DESK_ADMIN  or $iduser==HELP_DESK_MODER) {
							//
						} else {
							setUserInfo($iduser,$name,$admin,$lock,$enabled);
						}
					}
				}
			}
		}
	}
	
	function setUserInfo($iduser,$name,$admin,$lock,$enabled) {
		$sql	= sprintf("UPDATE `users` SET `admin`=%s,`lock`=%s,`enabled`=%s WHERE `iduser`='%s';",$admin,$lock,$enabled,$iduser);	
		$result 		= mysql_query($sql,HELP_DESK_LINK);
	}

	function setInputText($id,$key,$value,$readonly) {
		$readonly = $readonly==1 ? "" : "readonly=\"readonly\"" ;
		$value	 = sprintf("<input id=\"textfield\" name=\"adatos[%s][%s]\" %s type=\"text\" value=\"%s\" style=\"%s\">",$id,$key,$readonly,$value,"width:100%");
		return $value;
	}
	
	function setUserType($id,$key,$option) {
		$type =sprintf("<select id=\"select\" name=\"adatos[%s][%s]\" style=\"%s\">",$id,$key,"width:100%");
		$selected=array("","","");
		$selected[$option]="selected=\"selected\" ";
		$type.=sprintf("<option value=\"0\" %s>Usuario</option>",$selected[0]);
		$type.=sprintf("<option value=\"1\" %s>Administrador</option>",$selected[1]);
		$type.=sprintf("<option value=\"2\" %s>Moderador</option>",$selected[2]);
		$type.="</select>";
		
		return $type;
	}

	function setYesNo($id,$key,$option) {
		$type =sprintf("<select id=\"select\" name=\"adatos[%s][%s]\" style=\"%s\">",$id,$key,"width:100%");
		$selected=array("","","");
		$selected[$option]="selected=\"selected\" ";
		$type.=sprintf("<option value=\"0\" %s>No</option>",$selected[0]);
		$type.=sprintf("<option value=\"1\" %s>Si</option>",$selected[1]);
		$type.="</select>";
		
		return $type;
	}	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Users</title>

<?php include("links.php"); ?>

<script type="text/javascript">
function eliminar(){
	var answer = confirm("¿Esta seguro de eliminar los registros marcados?");
	if (answer){
		document.forms[0].eliminar.value=1;
		document.forms[0].submit();		
	} else {
		alert("No se eliminaran los registros")
	}
}

function guardar(){
	var answer = confirm("¿Esta seguro de guardar las modificaciones?");
	if (answer){
		document.forms[0].guardar.value=1;
		document.forms[0].submit();		
	} else {
		alert("No se han guardado las modificaciones")
	}
}
</script>

</head>
<body>
<form action="parameters.users.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title"><b><a href="profile.php" target="_self"><img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" width="32" height="32" border="0" align="absmiddle">&#8250;&#8250;&nbsp;<?php print($_SESSION["oUsuario"]->name); ?></a>&nbsp;
          <?php if($_SESSION["oUsuario"]->admin>=1) {print("<a href='home.php'>&#8250;&#8250;&nbsp;Home</a>"); } ?>
      </b></td>
    </tr>
    <tr>
      <td align="left" valign="top"><div class="marco">

          <table width="100%" cellpadding="2" cellspacing="2">
            
            
            <tr>
              <td class="TituloGrupo">Usuarios</td>
              </tr>
            <tr>
              <td class="Titulo">&nbsp;</td>
            </tr>
            <tr>
              <td class="marco">
              <div class="panelScroll">
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <tr class="Titulo">
                    <td width="16" align="left" valign="middle">&nbsp;</td>
                    <td width="200" align="left" valign="middle">Usuario</td>
                    <td align="left" valign="middle">Nombre</td>
                    <td width="120" align="center" valign="middle">Tipo</td>
                    <td width="60" align="center" valign="middle">Bloqueado</td>
                    <td width="60" align="center" valign="middle">Activo</td>
                  </tr>
<?php
$sql="SELECT * FROM `users` ORDER BY `admin`,`iduser` ";
$count = "SELECT COUNT(iduser) FROM `users` ";

//LIMITE DE LA CONSULTA
$result=mysql_query($count,HELP_DESK_LINK);	
list($total) = mysql_fetch_row($result);
		
//CONSULTANDO LISTA
$result=mysql_query($sql,HELP_DESK_LINK);
$registro=0;
while($row = mysql_fetch_array($result)) 
{
	$delete = ($row["iduser"]==HELP_DESK_ADMIN  or $row["iduser"]==HELP_DESK_MODER) ? "<td><!-- %s --></td>" : "<td><input type='checkbox' name='aopciones[]' value='%s' /></td>" ;
	printf("<tr>");
	printf($delete,$row["iduser"]);
	printf("<td>%s</td>",setInputText($registro,"iduser",$row["iduser"],0));
	printf("<td>%s</td>",setInputText($registro,"name",$row["name"],0));
	printf("<td>%s</td>",setUserType($registro,"admin",$row["admin"]));
	printf("<td>%s</td>",setYesNo($registro,"lock",$row["lock"]));
	printf("<td>%s</td>",setYesNo($registro,"enabled",$row["enabled"]));
	printf("</tr>\n");
	$registro+=1;
}
mysql_free_result($result);
?>                         
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </div></td>
            </tr>
            <tr>
              <td class="TituloGrupo"><span style="color:#FF0000;"><?php print($inform); ?>&nbsp;
                <input name="eliminar" type="hidden" id="eliminar" value="0">
                <input name="guardar" type="hidden" id="guardar" value="0">
              </span></td>
            </tr>
            <tr>
              <td align="right"><table border="0" cellspacing="2" cellpadding="0">
                <tr>
                  <td width="32" height="32"><a href="javascript:guardar();"><img src="images/32x32/system/save.png" alt="Guardar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32"><a href="parameters.users.php"><img src="images/32x32/system/update.png" alt="Actualizar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32">&nbsp;</td>
                  <td width="32" height="32"><a href="javascript: eliminar();"><img src="images/32x32/system/delete.png" alt="Actualizar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32">&nbsp;</td>
                  <td width="32" height="32"><a href="home.php"><img src="images/32x32/system/home.png" alt="Guardar" width="32" height="32" border="0" align="absmiddle"></a></td>
                </tr>
            </table></td>
              </tr>
          </table>
        </div>
</td>
    </tr>
  </table>
</form>
</body>
</html>