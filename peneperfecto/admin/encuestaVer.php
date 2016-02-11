<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$id = $_GET['a'];
$encuestaDAO = new encuestaDAO();
$encuesta = new encuesta();
$encuesta = $encuestaDAO->getById($id);

$encuestaresDAO = new encuestaresDAO();
$total = $encuestaresDAO->total();

if($total == 0)
    $total = 1;

?>

<div class="titulos">
    <div class="titulos_texto1">ENCUESTA<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->

<div class="contenido_fondo">
<div class="subcontenido">
<div class="subtitulos">
<table width="700">
<tr>
<td>

    VER ENCUESTA 

</td>
<td align="right">
<a href="menuAdmin.php?s=encuesta">Atr&aacute;s</a>
</td>
</tr>
</table>

<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
</div>
</div>
<div class="subcontenido2">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td></td>
</tr>
</table>
<div id="buscador">
<div class="rowElem"></div>
</div>
<div class="enunciados"></div>
<table border="0" align="center" width="700">

<tr>
    <td>
      <br/>
      <h3>Pregunta: </h3>
      <p><?=$encuesta->getpregunta() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Opci&oacute;n 1: <?=(($encuestaresDAO->totalo(1)*100)/$total) ?>% - <?=$encuestaresDAO->totalo(1); ?> votos</h3>
      <p><?=$encuesta->geto1() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Opci&oacute;n 2: <?=(($encuestaresDAO->totalo(2)*100)/$total) ?>% - <?=$encuestaresDAO->totalo(2); ?> votos</h3>
      <p><?=$encuesta->geto2() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Opci&oacute;n 3: <?=(($encuestaresDAO->totalo(3)*100)/$total) ?>% - <?=$encuestaresDAO->totalo(3); ?> votos</h3>
      <p><?=$encuesta->geto3() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Opci&oacute;n 4: <?=(($encuestaresDAO->totalo(4)*100)/$total) ?>% - <?=$encuestaresDAO->totalo(4); ?> votos</h3>
      <p><?=$encuesta->geto4() ?></p>
    </td>
</tr>

<tr>
<td align="right">
    <a href="menuAdmin.php?s=encuestaEdit&a=<?=$encuesta->getid() ?>">
<font style="font-size:large;color:#154894">Editar</font></a>
</td>
</tr>
</table>

</div>
</div>
<!-- FIN SUBCONTENIDO -->
<!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
