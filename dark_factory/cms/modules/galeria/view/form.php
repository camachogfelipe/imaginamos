<?php
/*
 * @file               : galeria.php
 * @brief              : Script para la interaccion con la tabla galeria
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
if(isset($_GET['idi'])){
    $_SESSION['idi']  = $_GET['idi'];
    $item_id = $_SESSION['idi'];
}else{
    $item_id = $_SESSION['idi'];
}
$id = "";
//$item_id = "";
$imagen = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM galeria WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $item_id = $db->results[0]["item_id"];
  $imagen = $db->results[0]["imagen"];
}

if(isset($_POST["id"])){
      $item_id_c = GetData("item_id", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE galeria SET  item_id='".$item_id_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO galeria ( item_id) VALUES ( '".$item_id_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/galeria/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE galeria SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/galeria/", "galeria_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE galeria SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM galeria WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Eliminado',3000) }, 1500);</script>";
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM galeria WHERE item_id = $item_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Galeria
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Galeria '".$id."'</h3>";
        }else{
          echo "<h3>Galeria</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<15)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="item_id" id="item_id" value="<?= $item_id?>" />
              
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/galeria/<?= str_replace("original","redimension",$imagen); ?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img" id="img" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img" id="img"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la Imagen: <i>500 x 500</i></span>
                        </div>
                    </div>
                
                
          
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
        <a class="uibutton normal" href="../../item/view/index.php?seccion=form">Regresar</a>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><img src="../../../../img/galeria/<?= str_replace("original","redimension",$data[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="100" ></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
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
