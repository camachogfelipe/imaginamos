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
if(isset($_POST['responder'])) :

	$id = $_REQUEST['id'];
	if(isset($_REQUEST['cid'])) $cid = $_REQUEST['cid'];
	else $cid = 0;
	if(isset($_POST['responder'])) $responder = $_POST['responder'];
	
	if(isset($responder)) :
		$respuesta = GetData("texto", "");
		$insert=$db->doQuery("INSERT INTO comentarios (comentario, parent, fecha, id_usuario) 
													VALUES ('".mysql_real_escape_string($respuesta)."', '".$cid."', '".date("Y-m-d")."', '".$id."');", 
													INSERT_QUERY);
		if(isset($_FILES)) :
			$nameFile = "Respuesta_".$id."_".$cid;
			$retorno = ClassFIle::UploadFile("file", "../../../../files", $nameFile);
			if ($retorno["Status"]=="Uploader") :
				$insert=$db->doQuery("INSERT INTO archivos (nombre, tipo, id_usuario) 
															VALUES ('".$retorno['NameFile']."', 'pdf', '".$id."');", 
															INSERT_QUERY);
			endif;
		endif;
		if($insert) $respuesta = true;
		else $respuesta = false;
	endif;

	if($respuesta == true) :
		echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Se registro su respuesta',3000) }, 1500);</script>";
	elseif($respuesta == false) :
		echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
	endif;
endif;
$id = $_REQUEST['id'];
$db->doQuery("SELECT * FROM comentarios WHERE id_usuario='".$_REQUEST['id']."' ORDER BY fecha ASC", SELECT_QUERY);
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
      <h3>Listado de comentarios</h3>
      <a class="uibutton" href="index.php?seccion=addcomentario&id=<?= $id ?>">Agregar comentario</a>
      <a class="uibutton special" href="index.php">Volver</a>
      </fieldset>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">No.</span></th>
              <th><span class="th_wrapp">Comentario</span></th>
              <th><span class="th_wrapp">Respuesta de comentario</span></th>
              <th><span class="th_wrapp">fecha</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach($dataAll as $comentario) : ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $comentario['id']; ?></td>
              <td class="center" width="70px"><?= $comentario["comentario"]?></td>
              <td class="center" width="70px"><?= $comentario["parent"]?></td>
              <td class="center" width="70px"><?= $comentario["fecha"]?></td>
              <td class="center " width="100px">
                <a class="uibutton special" href="index.php?seccion=respuesta&id=<?= $id ?>&cid=<?= $comentario["id"]?>">Responder</a>
              </td>
            </tr>
            
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <!--aquÃ­ indicamos cual formulario ha de ser validado.-->
<script>
$(".forminterno").validationEngine();

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

