<?php


		include_once './../php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $articulo = new articulo();
    $articulo = $articuloDAO->getById(27);


?>
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
</style>
<link href="css/stylos_intecplast.css" rel="stylesheet" type="text/css" />
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



<script type="text/javascript">

 $(document).ready(function(){
       
          function validar_email3(valor)
          {
              // creamos nuestra regla con expresiones regulares.
              var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
              // utilizamos test para comprobar si el parametro valor cumple la regla
              if(filter.test(valor))
                  return true;
              else
                  return false;
          }
          // cuando presionamos el boton verificar
          $("#submitformContactenos").click(function()
          {
              if($("#email").val() == '')
              {
                alert("Enter an email");
              }else if(validar_email3($("#email").val()))
              {
                if ($("#nombre").val()=='') {
                  alert("You must enter your name");
                }
                else if ($("#comentario").val()=='') {
                  alert("You must enter your Comments");
                }

                else{
                  $("#form2").submit();
                }
              }else
              {
                alert("The email is not valid");
              }
          });
       
      });


</script>


</head>

<body class="body">


<div id="wrapcontentintecplasttabs">

<!----------------------------HEADER INTECPLAST-------------------------------------------->


<?php include("includes/principalHeader.php"); ?>


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->


<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->


<div id="subtit01tabs2">Contact Us</div>

<div id="rowmapas">

<div id="colimgcontacto">

<div id="envimgcontacto"><img src="./..<?php echo $articulo->getImagen_i() ?>" /></div>
<div id="textobotcontacto"><?php echo $articulo->getDescripcion_i() ?></div>
</div>
<form action="./php/action/procesarContacto.php" method="post" name="form2" id="form2">

<div id="envofertames">

<div id="colformcontactenos">

<div id="txtcontacto1">Name</div>

<div id="campcontactenos"><input id="nombre" name="nombre" type="text" class="transparentecontactenos" value=""/></div>

<div id="txtcampcontactoseg">Mail</div>

<div id="campcontactenos"><input id="email" name="email" type="email" class="transparentecontactenos" value=""/></div>

<div id="txtcampcontactoseg">Company</div>

<div id="campcontactenos"><input id="empresa" name="empresa" type="text" class="transparentecontactenos" value=""/></div>
<div id="txtcampcontactoseg">Comment</div>
<div id="arecontactenos">
  <label>
  <textarea id="comentario" name="comentario" class="transparentecontactarea"></textarea>
  </label>
</div>

  <div id="sepclear"></div>
<div id="envbtenviarformcontacto">

<div id="btenviarformprom"><a href="#" id="submitformContactenos">&nbsp;</a></div>

</div>
</form>
<div id="sepclear3"></div>
</div>

<div id="sepclear2"></div>

<div id="sepclear"></div>

</div>

</div>

<div id="rowmapas">

<div id="sepdotted"></div>
 </div>

<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>