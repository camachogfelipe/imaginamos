<?php 
	include('header.php');
	
	// RECUPERANDO VALORES
	$inform		= "";
	
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}else{			
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			@$seleccionados=implode(",",$_POST["aopciones"]); settype($seleccionados,'string');
			@$guardar=$_POST["guardar"]; settype($guardar,'integer');
			$sql	= sprintf("UPDATE `parameters` SET `int`=1, `tinyint`=1, `query`='%s' WHERE `name`='UserLocationSend';",$seleccionados);	
			$result = mysql_query($sql,HELP_DESK_LINK);
		}
	}
	
	function setInputText($id,$key,$value,$readonly) {
		$readonly = $readonly==1 ? "" : "readonly=\"readonly\"" ;
		$value	 = sprintf("<input id=\"textfield\" name=\"adatos[%s][%s]\" %s type=\"text\" value=\"%s\" style=\"%s\">",$id,$key,$readonly,$value,"width:100%");
		return $value;
	}
	
	$users		= $_SESSION["oUsuario"]->getParameter("UserLocationSend","query","");
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Lock Users</title>

<?php include("links.php"); ?>

<script type="text/javascript">
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
<form action="parameters.lockusers.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
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
              <td class="TituloGrupo">Expulsar usuarios</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="marco">
              <div class="panelScroll">
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <tr class="Titulo">
                    <td width="16" align="left" valign="middle">&nbsp;</td>
                    <td width="200" align="left" valign="middle">Usuario</td>
                    <td align="left" valign="middle">Nombre</td>
                    </tr>
<?php
$sql="SELECT * FROM `users` WHERE `admin`=0 ";
$count = "SELECT COUNT(iduser) FROM `users` WHERE `admin`=0 ";
$select="";

//LIMITE DE LA CONSULTA
$result=mysql_query($count,HELP_DESK_LINK);	
list($total) = mysql_fetch_row($result);
		
//CONSULTANDO LISTA
$sql=$sql.$select;								
$result=mysql_query($sql,HELP_DESK_LINK);
$registros=0;
while($row = mysql_fetch_array($result)) 
{
	$checked=strpos($users,$row["iduser"])!==false ? "checked" : "" ;	
	printf("<tr>");
	printf("<td><input type='checkbox' name='aopciones[]' value='%s' %s/></td>",$row["iduser"],$checked);
	printf("<td>%s</td>",setInputText($registros,"iduser",$row["iduser"],0));
	printf("<td>%s</td>",setInputText($registros,"name",$row["name"],0));
	printf("</tr>\n");
	$registros+=1;
}
mysql_free_result($result);
?>                         
                  <tr>
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
                  <td width="32" height="32"><a href="javascript:guardar();"><img src="images/32x32/system/userlock.png" alt="Guardar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32"><a href="parameters.lockusers.php"><img src="images/32x32/system/update.png" alt="Actualizar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32">&nbsp;</td>
                  <td width="32" height="32">&nbsp;</td>
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