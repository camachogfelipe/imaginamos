<?php


    include_once './php/clases.php';
    
    $promocionDAO = new promocionDAO();
    $promocion = new promocion();
    $principal = $promocionDAO->getByPrincipal();
    $secundarias = $promocionDAO->getDiferentPrincipal();


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

<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />

<link href="css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

<!--

.Estilo1 {color: #00FFFF}

-->
#topheader {

width:965px;

height:99px;

}



#topheader02 {

width:965px;

height:99px;

margin:auto

}


.content_idiomas{
  position:absolute;
  right:0;
  top:10px;
}
.content_idiomas a{
font-family: DINMedium;
color:#000;
text-decoration:none;
}

.content_idiomas a:hover{
text-decoration:underline;
}

.btn_es{
  float:left;
  display:block;
  background: url(./img/flag_es.png) no-repeat right;
  margin-right:10px;
  padding-right:19px;
  font-size:12px;
}

.btn_en{
  float:left;
  display:block;
  background: url(./img/flag_en.png) no-repeat right;
  padding-right:19px;
  font-size:12px;
}
</style>

<link href="style_acord/format.css" rel="stylesheet" type="text/css" />

<link href="style_acord/text.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>

<script type="text/javascript" src="includes/javascript.js"> </script>

<link href="css/stylos_intecplastptoventa.css" rel="stylesheet" type="text/css" />

</head>



<body class="body">

<div id="wrapcontentintecplasttabs">

<!----------------------------HEADER INTECPLAST-------------------------------------------->


<?php include("includes/principalHeader.php"); ?>


<!----------------------------FIN HEADER INTECPLAST------------------------------------------->



<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->



<div id="subtit01tabs2">Promociones </div>


<div id="rowpromociones">


<div id="envofertames">

<div id="colrightpromform">

<div id="txttitcontactprom">Contáctenos</div>

<form action="./php/action/procesarContactoPromociones.php" method="post" name="form116" id="form116">


<div id="txtcampprom2">Nombre</div>

<div id="campprom">  <input id="nombre" name="nombre" type="text" class="transparenteprom" /></div>



<div id="txtcampprom">Mail</div>

<div id="campprom">

  <input id="email" name="email" type="text" class="transparenteprom" />

</div>

<div id="txtcampprom">Empresa</div>

<div id="campprom"><input id="empresa" name="empresa" type="text" class="transparenteprom" /></div>



<div id="txtcampprom">Comentario</div>

<div id="areprom">

  <label>

  <textarea id="comentario" name="comentario" class="transparentepromarea"></textarea>

  </label>

</div>



<div id="envbtenviarformprom">



<div ><a href="#" id="btenviarformprom">&nbsp;</a></div>
</div>
</form>
</div>


<div id="colprom">


<div id="titofertames2">Oferta del Mes </div>

<div id="contmodini2">

  <div id="imgofemes2"><img src=".<?php echo $principal->getImagen_e() ?>" height="161" width="166" /></div>

<div id="separadorsomb"><img src="images/sepprom.png" /></div>

<div id="textocajonofer2"><span class="txttitofer"><?php echo $principal->getTitulo_e() ?></span>



<p><?php echo $principal->getDescripcion_e() ?></p>



<!--<p><span class="unidadprecio"><?php echo $principal->getUnidades() ?> x <?php echo $principal->getPrecio() ?></span></p>-->

<p><span class="txtlineinf">Ref:</span><?php echo $principal->getReferencia() ?><br />
   <span class="txtlineinf">Precio Unitario:</span><?php echo $principal->getPrecio() ?><br />
   <span class="txtlineinf">Unidades:</span><?php echo $principal->getUnidades() ?></p>



</div>



<br/>

  <br />





<br/>



<div id="sepclear"></div>


</div>

<div id="footmodprom"><img src="images/footmoduloprom.png" width="577" height="20" /></div>


<div id="sepclear"></div>


    <div id="envofertasprom">

                <?php if ($secundarias>0): ?>
                <?php foreach ($secundarias as $secundaria): ?>
                    
                <div style="float:left; margin:12px;">
                <div id="colderofertasprom">

                <div id="envmodulosofertasint">

                <div id="txtminofertasprom"><?php echo $secundaria->getTitulo_e() ?><p><?php echo substr($secundaria->getDescripcion_e(),0,30) ?></p>

                  <p><span class="txtlineinf">Ref:</span> <?php echo $secundaria->getReferencia() ?><br />

                    <span class="txtlineinf">Precio Unitario:</span> <?php echo $secundaria->getPrecio() ?><br />

                    <span class="txtlineinf">Unidades:</span> <?php echo $secundaria->getUnidades() ?> <br />

                </p>

                </div>

                <div id="imgofertasprom"><img src=".<?php echo $secundaria->getImagen_e() ?>" height="79" width="80"/></div>

                <div id="sepclear"></div>


                </div>

                </div>
                </div>
                  <?php endforeach ?>  

                <?php endif ?>


    </div>
  <script>
      !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
  </script>

<script type="text/javascript">

 $(document).ready(function(){
       
          function validar_email4(valor)
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
          $("#btenviarformprom").click(function()
          {
              if($("#email").val() == '')
              {
                  alert("Ingrese un email");
              }else if(validar_email4($("#email").val()))
              {
                if ($("#nombre").val()=='') {
                  alert("Debe ingresar su nombre");
                }

                else{
                  $("#form116").submit();
                }
              }else
              {
                  alert("El email no es valido");
              }
          });
       
      });


</script>



    <a href="" onclick="window.open('promociones_terminos.php','', 'width=600, height=500, location=no, menubar=no, status=no,toolbar=no, scrollbars=no, resizable=no'); return false" style="color: #2D7EAC; text-decoration: none; font-family: sans-serif; font-weight: bold;">Condiciones y Restricciones</a>

</div>

<div id="seppromright"><img src="images/separadorformprom.png" /></div>

<div id="sepclear"></div>

</div>

</div>

<div id="tabshistoria"></div>

<div id="sepdotted"><img src="images/seplineatabs.png" width="965" height="60" /></div>


<!----------------------------FIN CONTENIDOS INTECPLAST-------------------------------------------->
</div>
<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<?php include("includes/principalFooter.php"); ?>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

</body>
</html>