
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
       
          function validar_email80(valor)
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
          $("#submitformContactenosSmall").click(function()
          {
              if($("#email").val() == '')
              {
                  alert("Ingrese un email");
              }else if(validar_email80($("#email").val()))
              {
                if ($("#nombre").val()=='') {
                  alert("Debe ingresar su nombre");
                }
                else if ($("#comentario").val()=='') {
                  alert("Debe ingresar sus comentarios ");
                }

                else{
                  $("#form80").submit();
                }
              }else
              {
                  alert("El email no es valido");
              }
          });
       
      });


</script>



</head>

<body>


<!----------------------------HEADER INTECPLAST-------------------------------------------->


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->


<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->



<form action="./php/action/procesarContactoSmall.php" method="post" target="_top"  name="form80" id="form80">

<div id="envofertames">

<div id="colformcontactenos">

<input type="hidden" id="codigoProducto" name="codigoProducto" value="<?php echo $_GET['codigo'] ?>">
<div id="txtcontacto1">Nombre</div>

<div id="campcontactenos"><input id="nombre" name="nombre" type="text" class="transparentecontactenos" /></div>

<div id="txtcampcontactoseg">Mail</div>

<div id="campcontactenos"><input id="email" name="email" type="text" class="transparentecontactenos" /></div>

<div id="txtcampcontactoseg">Teléfono</div>

<div id="campcontactenos"><input id="telefono" name="telefono" type="text" class="transparentecontactenos" /></div>

<div id="txtcampcontactoseg">Ciudad</div>

<div id="campcontactenos"><input id="ciudad" name="ciudad" type="text" class="transparentecontactenos" /></div>

<div id="txtcampcontactoseg">Empresa</div>

<div id="campcontactenos"><input id="empresa" name="empresa" type="text" class="transparentecontactenos" /></div>
<div id="txtcampcontactoseg">Comentario</div>
<div id="arecontactenos">
  <label>
  <textarea id="comentario" name="comentario" class="transparentecontactarea"></textarea>
  </label>
</div>

  <div id="sepclear"></div>
<div id="envbtenviarformcontacto">

<div id="btenviarformprom"><a href="#" id="submitformContactenosSmall">&nbsp;</a></div>

</div>
</form>
<div id="sepclear3"></div>

</body>
</html>