<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$id = $_GET['a'];
$conparenosDAO = new conparenosDAO();
$conparenos = new conparenos();
$conparenos = $conparenosDAO->getById($id);

?>

<div class="titulos">
    <div class="titulos_texto1">COMPARENOS<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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

    VER COMPARENOS 

</td>
<td align="right">
<a href="menuAdmin.php?s=conparenos">Atr&aacute;s</a>
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
      <h3>Nombre Caracteristica: </h3>
      <p><?=$conparenos->getcaracteristica() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>PENE PERFECTO: </h3>
      <p><?=$conparenos->getpp() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>OTRO: </h3>
      <p><?=$conparenos->getotro() ?></p>
    </td>
</tr>

<tr>
<td align="right">
    <a href="menuAdmin.php?s=conparenosEdit&a=<?=$conparenos->getid() ?>">
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
