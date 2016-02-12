<?php
session_start();
//Evita presentar contenidos sin el login debido
include("../../../security/secure.php");
//Carga las funciones generales en XAJAX para la actualización de contenidos
include("../model/xajax.php");
//Carga conexión e interacción con la base de datos
include("../../../core/class/db.class.php");
include("../model/consultas.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
//Clase para el armado de la tabla de administradores
include("../model/tables.class.php");
$htmlFormTableUser = new Tables($db);
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
       <?php 
	   if (isset($_GET['erno']))
	   {
		$erno = $_GET['erno'];
			if (!intval($erno))
			{
				?>
				<script language="javascript" type="text/javascript">
				window.location.href = 'index.php';
				</script>
				<?php	
			}
			else
			{
				if ($erno==1)
				{
					?>
                    <script language="javascript" type="text/javascript">
					$(document).ready(function(){
					document.getElementById('info').innerHTML = 'Item creado correctamente!<br />';
					$("#info").fadeIn(300).delay(800).slideUp(3000);
					})
					</script>
                    <?php
				}
				if ($erno==2)
				{
					?>
                    <script language="javascript" type="text/javascript">
					$(document).ready(function(){
					document.getElementById('info').innerHTML = 'Problemas al grabar!';
					$("#info").fadeIn(300).delay(800).slideUp(3000);
					})
					</script>
                    <?php
				}
				if ($erno==3)
				{
					?>
                    <script language="javascript" type="text/javascript">
					$(document).ready(function(){
					document.getElementById('info').innerHTML = 'Debe completar todos los campos!';
					$("#info").fadeIn(300).delay(800).slideUp(3000);
					})
					</script>
                    <?php
				}
				
			}
		}
	   ?>
        </head>
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
                        <div class="header"><span><span class="ico gray shadow access_point"></span>Proyectos</span>
					</div><!-- End header -->	
                        <div class="content">

					  
                    <div class="formEl_b">
        
                    <fieldset>
                        <div id="info" style="color: green; font-size: 20px;"></div>  
                        <div id="info2" style="color: red; font-size: 20px;"></div>    
                    <?php echo $htmlFormTableUser->printTableLinks($_GET[idService]); ?>
                    </fieldset>
                    <div>
                     <?php 
					 $Consultas = new Consultas;
					 $total = $Consultas->total('link');
					 //echo $total.' total';
                                if ($total<7)
                                {
                                ?>
                                <a href="Add.php" class="uibutton">Agregar Nuevo</a>
                                <?php
                                }
                                ?>
                     </div> 
                    </div>
							
                        </div><!-- End content -->
                      
                    </div><!-- End full width -->
                        
					
                </div> <!--// End inner -->
                
              </div> <!--// End content -->
              
             
              
                    
<?php if($_GET['Erno'] == 1){?>
              <script>
                document.getElementById('info').innerHTML = 'Item creado correctamente!<br />';
		$("#info").fadeIn(1000).delay(1000).slideUp(3000);
              </script>
<?php } ?>  
</body>
    <script type="text/javascript" language="javascript">
$('#texto').limit('270','.texto');
</script>
<script type="text/javascript" language="javascript">
function destacar(idp){
    $.post('../controller/destacar.php', { id: idp } , function(datos) {
            if(datos=='No puedes destacar m&aacute;s de 5 links'){
                showSuccess(' '+datos+' ',3000);
            }else{
                showSuccess(' '+datos+' ',3000);
                setTimeout(function(){document.getElementById(idp+'des').innerHTML = '<a id="'+idp+'qui" class="uibutton normal" onclick="quitar('+idp+')">Quitar de destacados</a><br /><img src="star.png" width="32" />';},500);
                //document.getElementById(idp+'des').innerHTML = '<a id="'+idp+'qui" class="uibutton normal" onclick="quitar('+idp+')">Quitar de destacados</a><br /><img src="star.png" width="16" />';
                //$('#'+idp+'des').empty().html()='<a id="'+idp+'qui" class="uibutton normal" onclick="quitar('+idp+')">Quitar de destacados</a><br /><img src="star.png" width="16" />';
                //setTimeout(function(){reloadPage(window.location.href='index.php?');},2000);
            }
                
            });
}
function quitar(idp){
    $.post('../controller/quitar.php', { id: idp } , function(datos) {
                showSuccess(' '+datos+' ',3000);
                setTimeout(function(){document.getElementById(idp+'qui').innerHTML = '<div id="'+idp+'des"><a id="'+idp+'" class="uibutton" onclick="destacar('+idp+')">Destacar</a></div>';},500);
                
            });
}
</script>
</html>