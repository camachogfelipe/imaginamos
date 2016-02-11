<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
include("../model/consultas.php");
include '../define.php';
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
//Clase para el armado de la tabla de administradores
include("../model/tables.class.php");
$htmlFormTableUser = new Tables($db);
$id_chat=4;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	        
        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

      	<!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files--> 
        
        <link type="text/css" rel="stylesheet" href="css/style.css" />
		<!--you can use this packed script and jQuery-->
		<!--<script type='text/javascript' src='js/jquery-1.7.min.js'></script>-->
		<!--<script type="text/javascript" src="js/upload.packed.js"></script>-->
		
		<!--or below scripts-->
		<script type='text/javascript' src='js/upload.min.js'></script>
		<script type='text/javascript' src='js/swfobject.js'></script>
		<script type='text/javascript' src='js/myupload.js'></script>
       
        </head>
<style>
  .scrollable1 { 
    width: 400px; 
    height: 160px; 
    overflow: auto;
    border: 1px solid #E6E3E3;
}   
 .scrollable2 { 
    width: 550px; 
    height: 160px; 
    overflow: auto;
    border: 1px solid #E6E3E3;
    margin-right: 50px;
}
</style>
        <body class="dashborad">
        <div id="alertMessage" class="error"></div>
		<!-- Header -->
        <div id="header">
                <div id="account_info">
                    <?php include("../../../menu/administrator.php"); ?>
                </div>
            </div><!-- End Header -->
			<div id="shadowhead"></div>

              <div id="left_menu">
                    <ul id="main_menu" class="main_menu">
						<?php include("../../../menu/index.php"); ?>
                    </ul>
              </div>
            
              <div id="content">
                <div class="inner">
					<div class="topcolumn">
						<div class="logo"></div>
                            <ul id="shortcut">
								<?php include("../../../menu/icons.php"); ?>
                            </ul>
					</div>
                    <div class="clear"></div>
                    
					<!-- full width -->
                    <div class="widget">
                        <div class="header"><span><span class="ico gray window"></span>Chat</span>
					</div><!-- End header -->	
                        <div class="content">

					  
                    <div class="formEl_b">
                        
        
<fieldset>
<table>
    <tr>
        <td>Conversacion</td>
        <td>Usuarios</td>
    </tr>
    <tr>
    <td><div class="scrollable2" id="chatbox"></div></td>
    <td><div class="scrollable1" id="chatbox2"></div></td>
    </tr>
    <tr>
        <td>
            Mensaje: <input name="usermsg" id="usermsg" type="text" class="large" />
            <div id="btenviar" ><a href="#nogo">Enviar</a></div>
        </td>
        <td>Usuarios</td>
    </tr>

</table>
</fieldset>
                      
                    </div>
							
                        </div><!-- End content -->
                    </div><!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
<script>
$(document).ready(function(){
    setInterval(cargar1, 2500);    
    var idchat=0;  
    $(".chat_click").live('click',function(){
        idchat=$(this).attr("data-id");
        setInterval(cargar, 2500);    
    });
    $("#btenviar").click(function(){
        var mensaje=$("#usermsg").val()
        if(mensaje!=""){
            var datos_form="idchat="+idchat+"&usua=2&mns="+mensaje
            $.ajax({
                type: "POST",
                url:"../../../../mnschat.php",
                processData: false,
                data: datos_form,
                async: false,
                beforeSend: function(){
                },
                success: function(msg){
                    $("#usermsg").attr("value", "");
                    $("#chatbox").load("../../../../mnschat1.php", {idchat:idchat}, function(){});
                }
            });
        }else alert("NO puede enviar campos en blanco")
    });
    function cargar(){
        $("#chatbox").load("../../../../mnschat1.php", {idchat:idchat,activo:1}, function(){});
        cargar1();
    }
    function cargar1(){
        $("#chatbox2").load("../../../../mnschat2.php", {}, function(){});
    }
});
</script>          
              
</body>
</html>