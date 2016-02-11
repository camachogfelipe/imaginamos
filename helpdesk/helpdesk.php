<?php 
	include('header.php');
	
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk</title>

<?php include("links.php"); ?>

<script type="text/javascript">
	setInterval(callServer,<?php print(INTERVALO_CALL_SERVER); ?>);
	callServer();	
</script>
</head>
<body>
<form action="helpdeskquery.php?action=3" method="post" enctype="multipart/form-data" name="frmWrite" target="ifrInsert" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <th width="600" align="left" valign="middle" nowrap class="title"><b>
      <a href="profile.php" target="_self">
      <img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" width="32" height="32" border="0" align="absmiddle">&#8250;&#8250;&nbsp;<?php print($_SESSION["oUsuario"]->name); ?></a>&nbsp;
      <?php if($_SESSION["oUsuario"]->admin>=1) {print("<a href='home.php'>&#8250;&#8250;&nbsp;Home</a>"); } ?>
      </b></th>
      <th align="center" valign="middle" nowrap class="title"><a href="logout.php">&#8250;&#8250;&nbsp;Cerrar sesi&oacute;n</a></th>
    </tr>
    
<tr>
      <td align="center" valign="middle"><div class="marco"><div id="panelInfo">
<table border="0" cellspacing="0" cellpadding="0" style="width:98%; height:100%;">
          <tr>
            <td width="145"><strong>IP</strong></td>
            <td><?php print($_SESSION["oUsuario"]->ip); ?></td>
          </tr>
          <tr>
            <td width="145"><strong>Inicio sesi&oacute;n</strong></td>
            <td><?php print($_SESSION["oUsuario"]->activate); ?></td>
          </tr>
          <tr>
            <td width="145"><strong>&Uacute;ltimo mensaje recibido</strong></td>
            <td><span id='update'>-Ninguno-</span></td>
          </tr>
        </table></div>
      </div></td>
      <td align="center">
      <div class="marco">
      	<div id="panelStatus">
        	<table class="tableOptions"><tr><td><img src="images/16x16/system/document_properties.png" width="16" height="16" border="0" align="absmiddle">&nbsp;<span id="nstatus" class="nameStatus"><?php printf("<b>%s</b>",ucfirst(strtolower($_SESSION["oUsuario"]->nstatus))); ?></span></td></tr></table>
			<?php printf("%s",$_SESSION["oUsuario"]->getStatus()); ?>
         </div>
      </div></td>
    </tr>    
    <tr>
      <td width="600" valign="top" nowrap><div class="marco"><div id="panelMessages"></div></div></td>
      <td align="center" valign="top">
      	<div class="marco">
        	<div id="panelRooms">
            	<table class="tableOptions"><tr>
            	  <td><img src="images/16x16/system/group.png" width="16" height="16" border="0" align="absmiddle">&nbsp;<span id="nroom" class="nameStatus"><?php printf("<b>%s</b>",ucwords(strtolower($_SESSION["oUsuario"]->nroom))); ?></span></td></tr></table>
				<?php printf("%s",$_SESSION["oUsuario"]->getRooms()); ?>
             </div>
            <div id="panelUsers"></div>            
        </div></td>
    </tr>
    <tr>
      <td align="center" valign="middle" nowrap><div class="marco"><div id="write"><table width="95%" border="0" cellpadding="0" cellspacing="4">
          <tr>
            <td width="10%" align="right" valign="middle" class="Titulo">Para</td>
            <td width="80%"><input type="hidden" id="to" name="to" value="*"/>
                <span id="lblTo" style="font-weight: bold">Todos los usuarios</span></td>
          </tr>
          <tr>
            <td width="10%" align="right" valign="middle" class="Titulo">Mensaje</td>
            <td width="80%" class="border"><input name="message" type="text"  id="message" value="" style="width:100%;" autocomplete="off"><script type="text/javascript">setInit(); </script></td>
          </tr>
      </table></div></div></td>
      <td nowrap><div class="marco"><div id="emoticons"><?php printf("%s",$_SESSION["oUsuario"]->getEmoticons()); ?></div>
      </div></td>
    </tr>
  </table>
</form>
<iframe name="ifrInsert" src="helpdeskquery.php" id="ifrInsert" height="0" width="0" frameborder="0">Su nabvegador no soporta iframe</iframe>
</body>
</html>