<?php
/*
 * @file               : respuestas_pqr.php
 * @brief              : Script para la interaccion con la tabla respuestas_pqr
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-23
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */

if(isset($_GET['e']) and $_GET['e'] == 2) :
	$pqr_registro_id = $_GET['idpqr'];
	$insert = $db->doQuery("INSERT INTO respuestas_pqr ( pqr_registro_id , texto) 
						  VALUES ( '".$pqr_registro_id."','EN TRÁMITE');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
	if($insert) :
		$insert = $db->doQuery("UPDATE pqr_registro SET estado='tramite' WHERE id='".$pqr_registro_id."';", INSERT_QUERY);
		echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Cambio de estado realizado',3000) }, 1500);</script>";
	else :
		echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
	endif;
elseif (isset($_GET['idpqr']) and !isset($_GET['e']) and !isset($_SESSION['idpqr'])) :
  $_SESSION['idpqr']  = $_GET['idpqr'];
  $pqr_registro_id = $_SESSION['idpqr'];
elseif(isset($_SESSION['idpqr'])) :
  $pqr_registro_id = $_SESSION['idpqr'];
elseif(isset($_REQUEST['idpqr'])) :
  $pqr_registro_id = $_REQUEST['idpqr'];
endif;

$id = "";
//$pqr_registro_id = "";
$texto = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"]) and !isset($_GET['e'])){
  $db->doQuery("SELECT * FROM respuestas_pqr WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $pqr_registro_id = $db->results[0]["pqr_registro_id"];
  $texto = $db->results[0]["texto"];
}

if(isset($_POST["pqr_registro_id"])){
	$pqr_registro_id_c = GetData("pqr_registro_id", "");
	if(empty($pqr_registro_id_c)) $pqr_registro_id_c = $_POST['pqr_registro_id'];
	$texto_c = GetData("texto", "");

	if( (int)$_POST["id"]>0 and isset($_POST['update'])){
		$update=$db->doQuery("UPDATE respuestas_pqr SET pqr_registro_id='".$pqr_registro_id_c."',texto='".$texto_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
		$idinsertado=$_POST["id"];
		if($update){
			echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
			$db->doQuery("SELECT nombre, email FROM pqr_registro WHERE id=".(int)$pqr_registro_id_c, SELECT_QUERY);
			$nombre = $db->results[0]['nombre'];
			$email = $db->results[0]['email'];
			$asunto = utf8_decode("Respuesta a su PQR con código ".$pqr_registro_id_c);
			$body= '<p class="texto_doc" style="text-align: center;">
					<p>Sr(a) '.$nombre.'</p>
					'.$texto_c.'
					</p>';
			$asunto = utf8_decode("PQR");
			$cCorreo = new Correo();
			$cCorreo->SendEmail($email, $asunto, $body);
		}else{
			echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
		}
	}else{
		$insert=$db->doQuery("INSERT INTO respuestas_pqr ( pqr_registro_id,texto) VALUES ( '".$pqr_registro_id_c."','".$texto_c."');", INSERT_QUERY);
		$idinsertado=$db->getLastId();
		if($insert){
			$insert = $db->doQuery("UPDATE pqr_registro SET estado='resuelta' WHERE id='".$pqr_registro_id."';", INSERT_QUERY);
			$db->doQuery("SELECT nombre, email FROM pqr_registro WHERE id=".(int)$pqr_registro_id_c, SELECT_QUERY);
			$nombre = $db->results[0]['nombre'];
			$email = $db->results[0]['email'];
			$asunto = utf8_decode("Respuesta a su PQR con código ".$pqr_registro_id_c);
			$body= '<p class="texto_doc" style="text-align: center;">
					<p>Sr(a) '.$nombre.'</p>
					'.$texto_c.'
					</p>';
			$cCorreo = new Correo();
			$cCorreo->SendEmail($email, $asunto, $body);
			echo "<script type='text/javascript'>setTimeout(function(){showSuccess('La PQR se ha resuelto',3000) }, 1500);</script>";
		}else{
			echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
		}
	}
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/respuestas_pqr/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE respuestas_pqr SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        /* echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";*/
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/respuestas_pqr/", "respuestas_pqr_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE respuestas_pqr SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
    }
    
    /*
     * Funciones Para Validar Extensiones De Archivos
     * UploadFilePdf   (Archivo PDF)
     * UploadFileWord  (Archivo WORD)
     */
}
elseif(isset($pqr_registro_id)) $id = $pqr_registro_id;

// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM respuestas_pqr WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}
// Obtenemos las datos
$db->doQuery("SELECT * FROM respuestas_pqr WHERE pqr_registro_id = $pqr_registro_id ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<!--función que pide la confirmación para eliminar (Auto Generado).-->
<script>
  function confirmar(){
    if(confirm("Está seguro que desea realizar esta acción ?")){
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
  <div class="header">
    <span>
      <span class="ico gray sphere"></span>
      Administraci&oacute;n de Contenidos Respuestas pqr
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Respuestas pqr '".$id."'</h3>";
        }else{
          echo "<h3>Respuestas pqr</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"]) || (isset($_GET['e']) and $_GET['e'] == 3))){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <?php if(isset($_GET["id_edit"])) : ?><input type="hidden" name="update" id="update" value="true" /><?php endif; ?>
          <?php if(isset($_GET["e"])) : ?><input type="hidden" name="e" id="e" value="<?= $_REQUEST['e'] ?>" /><?php endif; ?>
          <?php if(isset($_GET["idpqr"])) : ?><input type="hidden" name="idpqr" id="idpqr" value="<?= $_REQUEST['idpqr'] ?>" /><?php endif; ?>
          
          <div class="section">
            <label>Pqr registro id</label>
            <div>
              <label><?= $pqr_registro_id ?></label>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="pqr_registro_id" id="pqr_registro_id" value="<?= $pqr_registro_id?>" />
              <a style="float:right" class="uibutton special" href="<?= $result[0][config_path]."modules/pqr_registro/view/" ?>">Regresar</a>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>
                <script type="text/javascript">
                CKEDITOR.replace( "texto" );
//                $("#texto").limit("30",".texto");
                </script>
            </div>
          </div><br/>
                
                
          
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=form">Cancelar</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          
        </form>
<!-- fin de formulariom con límite de publicaciones -->
<?php } ?>        
<!-- -->
      </fieldset>
<?php if((isset($_POST['e']) and $_POST['e'] == 3 and isset($_POST['texto'])) || 
				 (!isset($_GET["id_edit"]) and isset($_GET['e']) and isset($_GET['idpqr'])) || 
				 (isset($_GET['e2']) and $_GET['e2'] == 3)
				 ){ ?>
      <div class="tableName">
      	<a class="uibutton special" href="<?= $result[0][config_path]."modules/pqr_registro/view/" ?>">Regresar</a>
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center " width="100px">
              <?php if($data[$i]["texto"] != "EN TRÁMITE" and $data[$i]["texto"] != "REGISTRADA") : ?>
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
              <?php endif; ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
<?php } ?>
    </div>

  </div>
  <!--aquí indicamos cual formulario ha de ser validado.-->
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
