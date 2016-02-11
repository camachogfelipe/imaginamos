<? session_start();
    Include_once 'cms/core/mapping/front.mapping.php'; 
    if(!isset($_SESSION['id_chat'])){
      $nombre="Usuario";
      $_SESSION['name']=$nombre ;
      $_SESSION['id_chat']=chatAsignar($nombre);
      $id_chat=$_SESSION['id_chat'];
    }else{
        $nombre1=$_SESSION['name'];
        $id_chat=$_SESSION['id_chat'];    
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<title>MBA Breton</title><link rel="stylesheet" href="css/styles.css" type="text/css"/>

	<script type="text/javascript" src="js/lib/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


<link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="css/reset.css" />

  <link rel="stylesheet" type="text/css" href="css/global.css" />

  <link rel="stylesheet" type="text/css" href="css/sexyslider.css" />
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>

<body class="body">


<table width="834" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF"><table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="bg_headchat"><table width="834" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20">&nbsp;</td>
            <td class="text_login"><strong> <?=$_SESSION['name'];?></strong></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="brd_amp">
              <td width="10">&nbsp;</td>
              <td valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <table width="600" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                        <div class="scrollable2" id="chatbox">
                           
                        </div>
                    </td>
                  </tr>
                </table>
                <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="bg_bts_chat"></td>
  </tr>
</table></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="bg_barratextochat"><table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="7"><img src="images/sep.png" width="834" height="7" /></td>
              </tr>
            <tr>
              <td width="10">&nbsp;</td>
              <td width="200" class="text_1"></td>
              <td width="10">&nbsp;</td>
              <td valign="bottom"><label>
                <input name="usermsg" id="usermsg" type="text" class="campo_chat" />
              </label></td>
              <td width="8">&nbsp;</td>
              <td width="83"><div id="btenviar" ><a href="#nogo">&nbsp;</a></div></td>
              <td width="8">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

<script>
$(document).ready(function(){
    setInterval (cargar, 2500)
    $("#btenviar").click(function(){
        var mensaje=$("#usermsg").val()
        if(mensaje!=""){
            var idchat=<?=$id_chat; ?>;
            var datos_form="idchat="+idchat+"&mns="+mensaje
            $.ajax({
                type: "POST",
                url:"mnschat.php",
                processData: false,
                data: datos_form,
                async: false,
                beforeSend: function(){
                },
                success: function(msg){
                    $("#usermsg").attr("value", "");
                    $("#chatbox").load("mnschat1.php", {idchat:idchat,activo:2}, function(){});
                }
            });
        }else alert("NO puede enviar campos en blanco")
    });
    function cargar(){
        var idchat=<?=$id_chat; ?>;
        $("#chatbox").load("mnschat1.php", {idchat:idchat}, function(){});
    }
});
</script>
</body>
</html>