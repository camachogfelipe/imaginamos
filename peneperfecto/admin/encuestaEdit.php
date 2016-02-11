<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;

$id = $_GET['a'];
$encuestaDAO = new encuestaDAO();
$encuesta = new encuesta();
$encuesta = $encuestaDAO->getById($id);

?>

<div class="titulos">
    <div class="titulos_texto1">ENCUESTA<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->

<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
<div class="subcontenido">

<div class="subtitulos">
<table width="700">
<tr>
<td>
    MODIFICAR ENCUESTA
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
    <table border="0" align="center" width="400" cellspacing="4">
        <?php if( isset($_GET['error1']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['error10']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">El tipo de archivo no es valido</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">ENCUESTA, agregado correctamente</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['ok2']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">ENCUESTA, modificado correctamente</td>
            </tr>
        <?php }?>
    </table>

<div id="buscador">
<div class="rowElem"></div>
</div>
<div class="enunciados"></div>
<table border="0" align="center" width="700" cellspacing="4" >
<tr>
<td>

<form action="./../php/action/encuestaEdit.php" method="post" enctype="multipart/form-data">
<table width="500">

<tr>
    <td>
        <span class="Estilo3">Pregunta:</span><br />
        <input type="text" name="pregunta" value="<?=$encuesta->getpregunta() ?>" size="40">
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Opci&oacute;n 1:</span><br />
        <input type="text" name="o1" value="<?=$encuesta->geto1() ?>" size="40">
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Opci&oacute;n 2:</span><br />
        <input type="text" name="o2" value="<?=$encuesta->geto2() ?>" size="40">
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Opci&oacute;n 3:</span><br />
        <input type="text" name="o3" value="<?=$encuesta->geto3() ?>" size="40">
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Opci&oacute;n 4:</span><br />
        <input type="text" name="o4" value="<?=$encuesta->geto4() ?>" size="40">
    </td>
</tr>
<tr>
<td align="right">
<input type="hidden" name="id" value="<?=$id ?>">
<input type="submit" value="Guardar">
</td>
</tr>

</table>
</form>
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
