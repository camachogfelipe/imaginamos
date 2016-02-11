<?php
/*
 * @file               : usuarios.php
 * @brief              : Script para la interaccion con la tabla usuarios, comentarios y archivos
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-08-30
 * @author             : Felipe Camacho
 * @generated          : Generador de modulos versión 3.7.3 
 */

// Obtenemos las datos
$id = $_REQUEST['idu'];

if(isset($_POST['responder'])) :

	$id = $_REQUEST['id'];
	if(isset($_POST['responder'])) $responder = $_POST['responder'];
	
	if(isset($responder)) :
		if(isset($_FILES)) :
			$nameFile = "Respuesta_".$id."_".$cid;
			$retorno = ClassFIle::UploadFile("file", "../../../../../img/pdf", $nameFile);
			if ($retorno["Status"]=="Uploader") :
				$insert=$db->doQuery("INSERT INTO archivos (titulo, pdf, fecha, usuario) 
															VALUES ('".$titulo."', '".$retorno['NameFile']."', '".date("Y-m-d")."', '".$id."');", 
															INSERT_QUERY);
			endif;
		endif;
		if($insert) $respuesta = true;
		else $respuesta = false;
	endif;

	if($respuesta == true) :
		echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Se registro su archivo',3000) }, 1500);</script>";
	elseif($respuesta == false) :
		echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
	endif;
endif;

if(isset($_GET['idfile'])) :

	$idfile = $_REQUEST['idfile'];
	$delete=$db->doQuery("DELETE FROM archivos WHERE id='".$idfile."';", DELETE_QUERY);
	if($delete) $respuesta = true;
	else $respuesta = false;

	if($respuesta == true) :
		echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Se elimino el archivo',3000) }, 1500);</script>";
	elseif($respuesta == false) :
		echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
	endif;
endif;

$db->doQuery("SELECT * FROM archivos WHERE usuario='".$_REQUEST['idu']."' ORDER BY id DESC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script>
  function confirmar(){
    if(confirm("Esta seguro que desea realizar esta acción ?")){
      return true;
    }
    return false;
  }
</script>
<!-- Estilos Autogenerados. -->
<style>
  .delete_cus{
    width: 20px;
    height: 20px;
    background-image: url('icon_del_cus.png');
    cursor: pointer;
    position: absolute;
    top: 5px;
    right:-5px;
    z-index: 99;
  }
.SI-FILES-STYLIZED label.cabinet
{
    width: 79px;
    height: 22px;
    background: url(../../../../js/btn-choose-file.gif) 0 0 no-repeat;

    display: block;
    overflow: hidden;
    cursor: pointer;
}

.SI-FILES-STYLIZED label.cabinet input.file
{
    position: relative;
    height: 100%;
    width: auto;
    opacity: 0;
    -moz-opacity: 0;
    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
}  

</style>

<!-- full width -->
<div class="widget">
  <div class="content">
    <div class="formEl_b">
      <fieldset>
      <h3>Listado de archivos</h3>
      <a class="uibutton" href="<?= $result[0]['config_path'] ?>modules/zonasegura/usuarios/pdf/index.php?seccion=addarchivos&idu=<?= $id; ?>">Adjuntar archivo</a>
      <a class="uibutton special" href="<?= $result[0]['config_path'] ?>modules/zonasegura/usuarios/">Volver</a>
      </fieldset>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">No.</span></th>
              <th><span class="th_wrapp">Título</span></th>
              <th><span class="th_wrapp">Archivo</span></th>
              <th><span class="th_wrapp">Tipo</span></th>
              <th><span class="th_wrapp">Acción</span></th>
            </tr>
          </thead>
          <tbody>
            <?php
						if(!empty($dataAll)) :
            	$i = 1;
							foreach($dataAll as $archivo) :
						?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $archivo['id']; ?></td>
              <td class="center" width="70px"><?= $archivo['titulo']; ?></td>
              <td class="center" width="70px"><a target="_blank" href="<?= $result[0]['config_web']."img/pdf/".$archivo["pdf"]?>"><?= $archivo["pdf"]?></a></td>
              <td class="center" width="70px"><?= $archivo["fecha"]?></td>
              <td class="center" width="70px">
              	<a class="uibutton edit" href="index.php?seccion=addarchivos&id=<?= $archivo["id"]?>&idu=<?= $id ?>">Editar</a>
              	<a class="uibutton special delete" href="index.php?seccion=archivos&idfile=<?= $archivo["id"]?>&idu=<?= $id ?>">Eliminar</a>
              </td>
            </tr>
            
            <?php
            	endforeach;
						endif;
						?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <!--aquÃ­ indicamos cual formulario ha de ser validado.-->
<script>
$(".forminterno").validationEngine();
jQuery(document).ready(function() {
	jQuery(".delete").click(function(){
		if(confirm("¿Seguro desea eliminar este archivo?")) return true;
		else event.preventDefault();
	});
});
</script>
<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
</script>
<script>
//Espacio para otros ckeditors.
   //CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>

