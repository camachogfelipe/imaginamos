<?php
/*
 * @file               : descripcion_oficina.php
 * @brief              : Script para la interaccion con la tabla descripcion_oficina
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-23
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
if(isset($_GET['idc'])){
    $_SESSION['idc'] = $_GET['idc'];
    $oficinas_id = $_SESSION['idc'];
}else{
    $oficinas_id = $_SESSION['idc'];
}
$id = "";
//$oficinas_id = "";
$titulo = "";
$linea1 = "";
$linea2 = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM descripcion_oficina WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $oficinas_id = $db->results[0]["oficinas_id"];
  $titulo = $db->results[0]["titulo"];
  $linea1 = $db->results[0]["linea1"];
  $linea2 = $db->results[0]["linea2"];
}

if(isset($_POST["id"])){
      $oficinas_id_c = GetData("oficinas_id", "");
      $titulo_c = GetData("titulo", "");
      $linea1_c = GetData("linea1", "");
      $linea2_c = GetData("linea2", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE descripcion_oficina SET  oficinas_id='".$oficinas_id_c."',titulo='".$titulo_c."',linea1='".$linea1_c."',linea2='".$linea2_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO descripcion_oficina ( oficinas_id,titulo,linea1,linea2) VALUES ( '".$oficinas_id_c."','".$titulo_c."','".$linea1_c."','".$linea2_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/descripcion_oficina/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE descripcion_oficina SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/descripcion_oficina/", "descripcion_oficina_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE descripcion_oficina SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM descripcion_oficina WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM descripcion_oficina WHERE oficinas_id = $oficinas_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Descripcion oficina
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Descripcion oficina '".$id."'</h3>";
        }else{
          echo "<h3>Descripcion oficina</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<100)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="oficinas_id" id="oficinas_id" value="<?= $oficinas_id?>" />
              
                    <div class="section">
                      <label>T&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
                        <script type="text/javascript">
                        $("#titulo").limit("79",".titulo");
                        </script>
                      </div>
                    </div><br/>
                
          
          <div class="section">
            <label>Linea1</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="linea1" id="linea1" value="<?= $linea1?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="linea1"></span></span>
              <script type="text/javascript">
              $("#linea1").limit("50",".linea1");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Linea2</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="linea2" id="linea2" value="<?= $linea2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="linea2"></span></span>
              <script type="text/javascript">
              $("#linea2").limit("50",".linea2");
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
        <a class="uibutton special" href="../../oficinas/view/index.php?seccion=form">Regresar</a>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Linea1</span></th>
              <th><span class="th_wrapp">Linea2</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["linea1"]?></td>
              <td class="center" width="70px"><?= $data[$i]["linea2"]?></td>
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
