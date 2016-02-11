<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;

$id = $_GET['a'];
$resultadosDAO = new resultadosDAO();
$resultados = new resultados();
$resultados = $resultadosDAO->getById($id);

?>

<div class="titulos">
    <div class="titulos_texto1">RESULTADOS<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
    MODIFICAR RESULTADOS
</td>
<td align="right">
    <a href="menuAdmin.php?s=resultados">Atr&aacute;s</a>
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
                <td class="EstiloGreen" colspan="2">RESULTADOS, agregado correctamente</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['ok2']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">RESULTADOS, modificado correctamente</td>
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

<form action="./../php/action/resultadosEdit.php" method="post" enctype="multipart/form-data">
<table width="500">

<tr>
    <td>
        <span class="Estilo3">Titulo:</span><br />
        <input type="text" name="titulo" value="<?=$resultados->gettitulo() ?>" size="40">
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Banner:</span><br />
      <img src="./..<?=$resultados->getbanner() ?>" width="425" height="203">
<br/>
        <input type="file" name="banner"><br>
        <span style="font-size:small;">
        tama&ntilde;o recomendado 950 x 405 px
        </span>
        
    </td>
</tr>
<tr>
    <td>
        <span class="Estilo3">Texto:</span><br />
        <?php
            $oFCKeditor_l = new FCKeditor('texto') ;
            $oFCKeditor_l->BasePath = 'fckeditor/';
            $oFCKeditor_l->Width  = '600' ;
            $oFCKeditor_l->Height = '400' ;
            $oFCKeditor_l->Value = ''.$resultados->gettexto();
            $oFCKeditor_l->Create() ;
        ?>
        
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
