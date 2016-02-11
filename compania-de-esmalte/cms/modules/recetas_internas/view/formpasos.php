<?php
/*
 * @file               : recetas_pasos.php
 * @brief              : Script para la interaccion con la tabla recetas_pasos
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$recetas_internas_id = $_GET['idr'];
$descripcion = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM recetas_pasos WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $recetas_internas_id = $db->results[0]["recetas_internas_id"];
  $descripcion = $db->results[0]["descripcion"];
}

if(isset($_POST["id"])){
      $recetas_internas_id_c = GetData("recetas_internas_id", "");
      $descripcion_c = GetData("descripcion", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE recetas_pasos SET  recetas_internas_id='".$recetas_internas_id_c."',descripcion='".$descripcion_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO recetas_pasos ( recetas_internas_id,descripcion) VALUES ( '".$recetas_internas_id_c."','".$descripcion_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/recetas_pasos/", "original_" . $idinsertado, "redimension_" . $idinsertado, 174, 115);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE recetas_pasos SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/recetas_pasos/", "recetas_pasos_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE recetas_pasos SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
    }
    
    /*
     * Funciones Para Validar Extensiones De Archivos
     * UploadFilePdf   (Archivo PDF)
     * UploadFileWord  (Archivo WORD)
     */
}

// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM recetas_pasos WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM recetas_pasos WHERE recetas_internas_id = $recetas_internas_id ORDER BY id ASC", SELECT_QUERY);
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
      <span class="ico gray wizard"></span>
      Administraci&oacute;n de Contenidos Procedimientos - Instrucciones 
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
       <?php 
       $db->doQuery("SELECT * FROM recetas_internas WHERE id = $recetas_internas_id ORDER BY id ASC", SELECT_QUERY);
        $recetastitle = $db->results;
       
       ?>
        <?php if($id>0){
          echo "<h3>Procedimientos para '".$recetastitle[0]['titulo']."'</h3>";
        }else{
          echo "<h3>A&ntilde;ade un paso para '".$recetastitle[0]['titulo']."'</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=formpasos&idr=<?= $recetas_internas_id ?>" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input class="validate[required] large" type="hidden" name="recetas_internas_id" id="recetas_internas_id" value="<?= $recetas_internas_id?>" />
              
          <div class="section">
            <label>Descripcion</label>
            <div>
              <input class="validate[required] large" type="text" name="descripcion" id="descripcion" value="<?= $descripcion?>" />
             
            </div>
          </div><br/>
          
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=formpasos&idr='.$recetas_internas_id.'">Cancelar</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          <a class="uibutton normal" href="index.php?seccion=form">Regresar</a>
        </form>
      </fieldset>
 <?php if(!isset($_GET["id_edit"])): ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Nº</span></th>
              <th><span class="th_wrapp">Descripcion</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><b><?= ($i+1); ?></b></td>
              <td class="center" width="70px"><?= $data[$i]["descripcion"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=formpasos&idr=<?= $recetas_internas_id ?>&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=formpasos&idr=<?= $recetas_internas_id ?>&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
<?php endif; ?>
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
   CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
