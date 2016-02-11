<?php session_start();
//if( !isset($_SESSION['chatAdmin']) ){
//    header("location: ./index.php");
//    exit;
//}
include("fckeditor/fckeditor.php") ;
?>
                    <div class="titulos">
                      <div class="titulos_texto1">Chat<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Entrar al chat
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

      <table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">

      </table>

      <iframe src="chat-admin/Adminindex.php?cat=<?php echo $_GET['cat'] ?>" width="700" height="400"></iframe>
      
    </div>
  </div>
  <!-- FIN SUBCONTENIDO -->
  <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>