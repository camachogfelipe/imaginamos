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

  <link rel="stylesheet" type="text/css" href="css/reset.css" />

  <link rel="stylesheet" type="text/css" href="css/global.css" />

  <link rel="stylesheet" type="text/css" href="css/sexyslider.css" />
  <style type="text/css">
<!--
@import url("styles_tabla.css");
-->
  </style>




<link href="style_acord/format.css" rel="stylesheet" type="text/css" />
<link href="style_acord/text.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"> </script>
<script type="text/javascript" src="includes/javascript.js"> </script>
</head>

<body class="body">


<div id="wrapcontentintecplast">

<!----------------------------HEADER INTECPLAST------------------------------------------->

<div id="topheader">

<div id="columtophead">

<div id="envmenutop">
<div id="bt_inil"><a href="contactenos.php">Contáctenos</a></div>
<div id="bt_inil"><a href="#nogo">Chat</a></div>
<div id="bt_inil"><a href="trabaje_connosotros.php">Trabaje con nosotros</a></div>
<div id="bt_coti"><a href="cotizador.php">&nbsp;Cotizador</a></div>
<div id="bt_inil"><a href="index.php">Inicio</a></div>

</div>


</div>

<div id="logointecplast"><a href="index.php"><img src="images/log.png" border="0" /></a></div>


</div>

<!---------------------------MENÚ PRINCIPAL----------------------------------------------->

<div id="envbarintecplast">


<div id="envsearch2">

<div id="btlupa"><a href="#nogo"><img src="images/btlupa.png" border="0" /></a></div>
<div id="camp2search">
  <input name="text2" type="text"  id="Buscar..." onfocus="if (this.value=='Buscar...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Buscar...';return false;}" value="Buscar..." class="transparente2" />
</div>



</div>


<div id="bt_bar"><a href="acercade_nosotros.php">ACERCA DE NOSOTROS</a></div>
<div id="menuh">
<li><a href="mercados.php" class="primero">MERCADOS</a></li>
<li><a href="productos.php" class="primero">PRODUCTOS</a></li>
<li><a href="catalogo.php" class="primero">CATÁLOGO</a></li>
<li><a href="ingenieria_productodiseno.php" >INGENIERÍA DE <br/>
    PRODUCTO Y DISEÑO</a></li>
<li><a href="responsabilidad_social.php">RESPONSABILIDAD <br/>
  SOCIAL</a></li>
</ul>
</div>

</div>
<!---------------------------FIN MENÚ PRINCIPAL----------------------------------------------->




<!----------------------------FIN HEADER INTECPLAST------------------------------------------->






<!----------------------------BANNER INTECPLAST------------------------------------------->
<!----------------------------FIN BANNER INTECPLAST------------------------------------------->





<!----------------------------CONTENIDOS INTECPLAST-------------------------------------------->





<?php 

include("lib_carrito.php"); 
?>

<? 
$_SESSION["ocarrito"]->imprime_carrito(); 
?>
<?
/*
    $arraycod=$_REQUEST['cod'];
    foreach ($arraycod as $cod){
    echo $cod."</br>";        
               
    }
*/

?>

<!--
<div id="subtit01tabs2">Cotizador </div>


 
<div id="envproductos">
<div id="sepclear">&nbsp;</div>

<div id="columderprod">
  <table width="907" id="gradient-style" summary="Meeting Results">
    <thead>
      <tr>
        <th  scope="col"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Producto</strong></th>
        <th  scope="col"><strong>Nombre del producto </strong></th>
       <th  scope="col"><strong>Referencia artículo</strong></th>
        <th  scope="col"><strong>Número de muestras </strong></th>
        <th  scope="col"><strong>Cantidad a cotizar </strong></th>
 
      </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
      <tr>
        <td rowspan="3" valign="top" style="text-align:center"><div id="columizqprod">
          <div id="thumbcolcotiza">

<div id="imgthumbcotizador"><img src="images/img_cotizador.jpg" width="130" height="72" /></div>
<div id="leftcheckcotiza"><div id="bteliminar"><a href="#nogo">&nbsp;</a></div></div>
</div>

<div id="thumbcolcotiza">

<div id="imgthumbcotizador"><img src="images/img_cotizador.jpg" width="130" height="72" /></div>
<div id="leftcheckcotiza"><div id="bteliminar"><a href="#nogo">&nbsp;</a></div></div>
</div>

<div id="thumbcolcotiza">

<div id="imgthumbcotizador"><img src="images/img_cotizador.jpg" width="130" height="72" /></div>
<div id="leftcheckcotiza"><div id="bteliminar"><a href="#nogo">&nbsp;</a></div></div>
</div>

</div></td>
        <td style="text-align:center">Producto nombre </td>
           <td style="text-align:center">123456</td>
        <td style="text-align:center" ><label>
          <select name="select4" class="selectsintec2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </label></td>
        <td style="text-align:center"><select name="select" class="selectsintec2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select></td>
      
      </tr>
      <tr>
        <td style="text-align:center">Producto nombre</td>
           <td style="text-align:center">123456</td>
        <td style="text-align:center"><select name="select2" class="selectsintec2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select></td>
        <td style="text-align:center"><select name="select3" class="selectsintec2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select></td>
      
      </tr>
      <tr>
        <td style="text-align:center">Producto nombre</td>
          <td style="text-align:center">123456</td>
        <td style="text-align:center"><select name="select" class="selectsintec2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select></td>
        <td style="text-align:center"><select name="select5" class="selectsintec2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select></td>
      
      </tr>
    </tbody>
  </table>
</div>

<div id="sepclear"></div>
-->
<div id="sepclear">&nbsp;</div><div id="envenlacecotizador">


<div id="btcontinuar"><a href="datos_contacto.php">&nbsp;</a></div>


</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>
<div id="sepclear">&nbsp;</div>

</div>


<div id="envcontprodinf">
  <div id="sepclear"></div>






</div>
<!----------------------------FIN CONTENIDOS INTECPLAST------------------------------------------->





<!----------------------------FOOTER INTECPLAST------------------------------------------->
<!----------------------------FIN FOOTER INTECPLAST------------------------------------------->
</div>


<div id="covfootintecplast2">


<div id="sepclearfootint"></div>


<div id="cajonfooter">
<div id="sepclear3"></div>
  <div id="panelsuscrip">

<div id="bt_suscrip"><a href="#nogo">&nbsp;</a></div>






<div id="campsearch">
            <input name="text" type="text"  id="Nombre..." onfocus="if (this.value=='Nombre...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Nombre...';return false;}" value="Nombre..." class="transparente" />
      </div>


<div id="campsearch2">
            <input name="text" type="text"  id="E-mail..." onfocus="if (this.value=='E-mail...'){this.value='';};return false;" onblur="if (this.value==''){this.value='E-mail...';return false;}" value="E-mail..." class="transparente" />
      </div>





</div>















<div id="envcolfoot2">
<div id="colum2credfoot"><span class="titdatos2">Datos de Contácto</span><br />
  <br />
  <span class="nombintec2">Intecplast S.A.</span><br /><br />
Calle 14 #6-54<br />
Entrada No. 1 Zona Industrial<br />
Cuesca Soacha (Cundinamarca)<br />
Tel: (57) 1 779 90 50<br />
Colombia - Suramérica
</div>
<div id="colum1crednew">
<div id="envmenufoot">
<div id="bt_footl"><a href="acercade_nosotros.php">Acerca de Nosotros </a></div>
<div id="bt_footl"><a href="#nogo">Mercados</a></div>
<div id="bt_footl"><a href="productos.php">Productos</a></div>
<div id="bt_footl"><a href="catalogo.php">Catálogo</a></div>
<div id="bt_footl"><a href="ingenieria_productodiseno.php">Ingeniería de producto y diseño</a></div>

</div>


<div id="creditsfoot">

<div id="footimaginamos"><a href="http://www.imaginamos.com" target="_blank">Diseño web: Imagin<span class="Estilo1">a</span>mos.com</a></div>
<div id="padcred">Copyright &copy; Intecplast. Todos los derechos reservados. </div></div>


<div id="creditsfoot">
<div id="bt_twitt"><a href="#nogo">&nbsp;</a></div>
<div id="bt_face"><a href="#nogo">&nbsp;</a></div>
<div id="imgiso"><img src="images/imgiso.png" width="60" height="73" /></div>
</div>


</div>


</div>

</div>
</div>

</body>
</html>
