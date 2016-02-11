<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>INTECPLAST S.A.</title>
<style type="text/css">
<!--

-->
</style>

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #00FFFF}
-->
</style>







<link href="style_acord/format.css" rel="stylesheet" type="text/css" />
<link href="style_acord/text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>




        <link rel="stylesheet" type="text/css" href="../admin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script>
                !window.jQuery && document.write('<script src="js/jquery-1.4.3.min.js"><\/script>');
        </script>
        <script type="text/javascript" src="../admin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="../admin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

  <script type="text/javascript">
            var j = jQuery.noConflict();
            j(document).ready(function() {
  
                j(".activator").fancybox({
                    'width'             : '6',
                    'height'            : '2',
                    'autoScale'         : false,
                    'transitionIn'      : 'elastic',
                    'transitionOut'     : 'elastic',
                    'type'              : 'iframe'
                });
                
            });

        </script>




<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
</head>

<body class="body">


<div id="wrapcontentintecplasttabs">
<!----------------------------HEADER INTECPLAST-------------------------------------------->


<?php include("includes/principalHeader.php"); ?>


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->


<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->






<div id="subtit01tabs2">Quotation<br />
    <br />
      Contact details</div>

<div id="sepclear2"></div>

<div id="rowpromociones">


<form id="form8" name="form8" method="post" action="./php/action/procesarDatosCliente.php?action=registrado">

<div id="colrightpromform">
<div id="txttitcontactpromdatos">Have an account </div>
<div id="txtcampprom2">Identification</div>
<div id="campprom">  <input name="identificacion2" id="identificacion2" type="text" class="transparenteprom" /></div>

<div id="txtcampprom">Password</div>
<div id="campprom">
  <input name="pass" id="pass" type="password" class="transparenteprom" />
</div>
<div id="txtcampprom"><a href="recordarClave.php" class="activator" id="activator">¿Forgot Password? </a></div>
<div id="sepclear3"></div>


<div id="btenviarformprom"><a href="javascript:void(document.form8.submit())">&nbsp;</a></div>



</div>
</form>



<div id="envformdatoscotiza">	<?php include "form_datoscontacto.php"; ?></div>
<div id="seppromright"><img src="images/separadorformprom.png" /></div>






<div id="sepclear"></div>


</div>








</div>




<div id="tabshistoria"></div>




<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>