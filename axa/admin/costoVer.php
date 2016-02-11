<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include ("../php/dao/costoDAO.php");
include ("../php/entities/costo.php");
$id = $_GET['id'];
$id = base64_decode($id);
$costoDAO = new costoDAO;
$costo = $costoDAO->getcosto($id);
$listaNoticias = $costoDAO->getcostoes("idtbl_costos", "ASC");
$total = $costoDAO->totalcostoes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Costos<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Ver Nombre costo
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=costo">Atrás</a>
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
      <table border="0" align="center" width="700" border="0" cellspacing="4" cellpadding="4">
                    <tr>
                        <td>
                            Costo:<br />
                            <span class="Estilo4"><?php echo $costo->getDescripciontbl_costos();?></span>
                        </td>
                    </tr>
                    
                     <tr>
                        <td align="right">
                            <a href="menuAdmin.php?s=costoEditar&id=<?php echo base64_encode($costo->getIdtbl_costos());?>"><font style="font-size:large;color:#154894">Editar</font></a>
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
