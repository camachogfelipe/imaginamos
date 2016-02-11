
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
body{
	width:80%;
	margin:auto;
	background-image:none;
}

</style>
<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>






<script type="text/javascript">

 $(document).ready(function(){
       
          // cuando presionamos el boton verificar
          $("#submitformContactenosSmall").click(function()
          {
              if($("#identificacion").val() == '')
              {
                  alert("Ingrese un email");
              }
               
                else{
                  $("#form180").submit();
                }
              
          });
       
      });


</script>



</head>

<body>


<!----------------------------HEADER INTECPLAST-------------------------------------------->


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->


<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->




<form action="./php/action/procesarRecordarClave.php" method="post" target="_self"  name="form180" id="form180">

<div id="envofertames">

<div id="colformcontactenos">
<?php if ($_GET['mail']): ?>
  
<div id="txtcontacto1">Your password has been sent to email:<br/><?php echo $_GET['mail'] ?></div>

<?php endif ?>

<?php if ($_GET['error']): ?>
  
<div id="txtcontacto1">The ID entered does not exist in our database</div>

<?php endif ?>
<div id="txtcontacto1"></div>
<div id="txtcontacto1">Enter your identification</div>

<div id="campcontactenos"><input id="identificacion" name="identificacion" type="text" class="transparentecontactenos" /></div>


  <div id="sepclear"></div>
<div id="envbtenviarformcontacto">

<div id="btenviarformprom"><a href="#" id="submitformContactenosSmall">&nbsp;</a></div>

</div>
</form>
<div id="sepclear3"></div>

</body>
</html>