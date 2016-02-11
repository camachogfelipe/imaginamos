<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include ("../php/dao/terminosDAO.php");
include ("../php/entities/terminos.php");
$id = $_GET['id'];
$TerminosDAO = new TerminosDAO;
$terminos = $TerminosDAO->getTerminos($id);
$listaNoticias = $TerminosDAO->getTerminoses("pdftbl_terminos", "ASC");
$total = $TerminosDAO->totalTerminoses();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Terminos y condiciones<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Ver Línea
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=Terminos">Atrás</a>
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
                        <?php $pdf = $terminos->getPdf();
						if ($pdf!=null){ ?>
                        <td>
                            Pdf:<br />
                            <a href="../docpdf/<?php echo $terminos->getPdf(); ?>" target="_blank"><img src="imagenes/ver_pdf.png" width="165" height="53" /></a>
                            <!--<img src="../docpdf/<?php// echo $terminos->getPdf()?>" width="100" height="100" alt="<?php//echo $terminos->getPdf()?>"/>-->
                            
                        </td>
                        <?php }
							else{?>
                          <td>
                            Pdf:<br />
                           <span class="Estilo4">No tiene PDF asignado</span>
                            <!--<img src="../docpdf/<?php// echo $terminos->getPdf()?>" width="100" height="100" alt="<?php//echo $terminos->getPdf()?>"/>-->
                            
                        </td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td align="right">
                            <a href="menuAdmin.php?s=TerminosEditar&id=<?php echo $terminos->getId();?>"><font style="font-size:large;color:#154894">Editar</font></a>
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
