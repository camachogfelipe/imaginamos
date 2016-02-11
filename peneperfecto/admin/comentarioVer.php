<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$id = $_GET['a'];
$comentarioDAO = new comentarioDAO();
$comentario = new comentario();
$comentario = $comentarioDAO->getById($id);

$ventaDAO = new ventaDAO();
$venta = $ventaDAO->getById($comentario->getventa());

?>

<div class="titulos">
    <div class="titulos_texto1">COMENTARIO<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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

    VER COMENTARIO 

</td>
<td align="right">
<a href="menuAdmin.php?s=comentario">Atr&aacute;s</a>
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
      <h3># Ref Usuario: </h3>
      <p><?=$comentario->getventa() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Nombre y Apellidos </h3>
      <p><?=$venta->getnombre().' '.$venta->getapellido() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Fecha: </h3>
      <p><?=$comentario->getfecha() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Comentario: </h3>
      <p><?=$comentario->getcomentario() ?></p>
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
