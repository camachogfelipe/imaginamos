<?php
/*
 * @file               : actividades.php
 * @brief              : Script para la interaccion con la tabla actividades
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$descripcion = "";
$link = "";
$descripcion2 = "";
$link2 = "";
$descripcion3 = "";
$link3 = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM actividades WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $descripcion = $db->results[0]["descripcion"];
  $link = $db->results[0]["link"];
  $descripcion2 = $db->results[0]["descripcion2"];
  $link2 = $db->results[0]["link2"];
  $descripcion3 = $db->results[0]["descripcion3"];
  $link3 = $db->results[0]["link3"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $descripcion_c = GetData("descripcion", "");
      $link_c = GetData("link", "");
      $descripcion2_c = GetData("descripcion2", "");
      $link2_c = GetData("link2", "");
      $descripcion3_c = GetData("descripcion3", "");
      $link3_c = GetData("link3", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE actividades SET  titulo='".$titulo_c."',descripcion='".$descripcion_c."',link='".$link_c."',descripcion2='".$descripcion2_c."',link2='".$link2_c."',descripcion3='".$descripcion3_c."',link3='".$link3_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO actividades ( titulo,descripcion,link,descripcion2,link2,descripcion3,link3) VALUES ( '".$titulo_c."','".$descripcion_c."','".$link_c."','".$descripcion2_c."','".$link2_c."','".$descripcion3_c."','".$link3_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
//    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/actividades/", "original_" . $idinsertado, "redimension_" . $idinsertado, 174, 115);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE actividades SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
//         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
//    }
//    
//    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/actividades/", "actividades_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE actividades SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
//    }
    
    /*
     * Funciones Para Validar Extensiones De Archivos
     * UploadFilePdf   (Archivo PDF)
     * UploadFileWord  (Archivo WORD)
     */
}

// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM actividades WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM actividades ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Actividades Home
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3> '".$titulo."'</h3>";
        }else{
          echo "<h3>Actividades</h3>";
        } ?>
         <?php if($id>0){ ?>
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
              <label>T&iacute;tulo</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("23",".titulo");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Descripcion</label>
            <div>
              <input class="validate[required] large" type="text" name="descripcion" id="descripcion" value="<?= $descripcion?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="descripcion"></span></span>
              <script type="text/javascript">
              $("#descripcion").limit("114",".descripcion");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Link</label>
            <div>
              <input class="validate[required,custom[url]] large" type="text" name="link" id="link" value="<?= $link?>" />
            </div>
          </div><br/>
          
          <div class="section">
            <label>Descripcion2</label>
            <div>
              <input class="validate[required] large" type="text" name="descripcion2" id="descripcion2" value="<?= $descripcion2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="descripcion2"></span></span>
              <script type="text/javascript">
              $("#descripcion2").limit("108",".descripcion2");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Link2</label>
            <div>
              <input class="validate[required,custom[url]] large" type="text" name="link2" id="link2" value="<?= $link2?>" />
            </div>
          </div><br/>
          
          <div class="section">
            <label>Descripcion3</label>
            <div>
              <input class="validate[required] large" type="text" name="descripcion3" id="descripcion3" value="<?= $descripcion3?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="descripcion3"></span></span>
              <script type="text/javascript">
              $("#descripcion3").limit("84",".descripcion3");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Link3</label>
            <div>
              <input class="validate[required,custom[url]] large" type="text" name="link3" id="link3" value="<?= $link3?>" />
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
           <?php } ?>
      </fieldset>
  <?php if(!isset($_GET["id_edit"])): ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Descripcion</span></th>
              <th><span class="th_wrapp">Link</span></th>
              <th><span class="th_wrapp">Descripcion2</span></th>
              <th><span class="th_wrapp">Link2</span></th>
              <th><span class="th_wrapp">Descripcion3</span></th>
              <th><span class="th_wrapp">Link3</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["descripcion"],0,50)?></td>
              <td class="center" width="70px"><?= $data[$i]["link"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["descripcion2"],0,50)?></td>
              <td class="center" width="70px"><?= $data[$i]["link2"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["descripcion3"],0,50)?></td>
              <td class="center" width="70px"><?= $data[$i]["link3"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <!--<a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>-->
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
