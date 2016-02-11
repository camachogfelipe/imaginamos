<?php
/*
 * @file               : item.php
 * @brief              : Script para la interaccion con la tabla item
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
if(isset($_GET['idc'])){
    $_SESSION['idc']  = $_GET['idc'];
    $categorias_id = $_SESSION['idc'];
}else{
    $categorias_id = $_SESSION['idc'];
}
 $lineas_id = $_SESSION['idl'];
 $db->doQuery("SELECT * FROM lineas WHERE id = $lineas_id ORDER BY id ASC", SELECT_QUERY);
$lineas = $db->results;
$linea = $lineas[0]["nombre_de_linea"];

$db->doQuery("SELECT * FROM categorias WHERE id = $categorias_id ORDER BY id ASC", SELECT_QUERY);
$cat = $db->results;
$cate = $cat[0]["categoria"];

$id = "";
//$categorias_id = "";
$titulo = "";
$texto = "";
$url = "";
$imagen = "";
$link = "";
$texto_mapa = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM item WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $categorias_id = $db->results[0]["categorias_id"];
  $titulo = $db->results[0]["titulo"];
  $texto = $db->results[0]["texto"];
  $url = $db->results[0]["url"];
  $imagen = $db->results[0]["imagen"];
  $link = $db->results[0]["link"];
  $texto_mapa = $db->results[0]["texto_mapa"];
}

if(isset($_POST["id"])){
      $categorias_id_c = GetData("categorias_id", "");
      $titulo_c = GetData("titulo", "");
      $titulo_c = str_replace("\\", '\\\\', $titulo_c );
      $titulo_c = str_replace("'", '\\\'', $titulo_c );
      $texto_c = GetData("texto", "");
      $texto_c = str_replace("\\", '\\\\', $texto_c );
      $texto_c = str_replace("'", '\\\'', $texto_c );
      $url_c = GetData("url", "");
         
         preg_match("#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#",$url_c, $url);
if(isset($url[2]) && $url[2] != ""){

     $url = $url[2];

}
      $link_c = GetData("link", "");
      $texto_mapa_c = GetData("texto_mapa", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE item SET  categorias_id='".$categorias_id_c."',titulo='".$titulo_c."',texto='".$texto_c."',url='".$url."',link='".$link_c."',texto_mapa='".$texto_mapa_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO item ( categorias_id,titulo,texto,url,link,texto_mapa) VALUES ( '".$categorias_id_c."','".$titulo_c."','".$texto_c."','".$url."','".$link_c."','".$texto_mapa_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/item/", "original_" . $idinsertado, "redimension_" . $idinsertado, 425, 222);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE item SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/item/", "item_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE item SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM item WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Eliminado',3000) }, 1500);</script>";
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM item WHERE categorias_id = $categorias_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Item de <?= $linea ?>/<?= $cate ?>
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Item '".$id."'</h3>";
          $restourl = 'http://www.youtube.com/watch?v=';
        }else{
            $restourl = '';
          echo "<h3>Item</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<100)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="categorias_id" id="categorias_id" value="<?= $categorias_id?>" />
              
                    <div class="section">
                      <label>T&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: 105 / <span class="titulo"></span></span>
                        <script type="text/javascript">
                        $("#titulo").limit("105",".titulo");
                        </script>
                      </div>
                    </div><br/>
                
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
                <!--<span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>-->
                <script type="text/javascript">
//                CKEDITOR.replace( "texto" );
//                $("#texto").limit("140",".texto");
                </script>
            </div>
          </div><br/>
                
                
          
          <div class="section">
            <label>Url</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required,custom[url]] large" type="text" name="url" id="url" value="<?= $restourl.$url?>" />
            </div>
          </div><br/>
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/item/<?= str_replace("original","redimension",$imagen); ?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la Imagen: <i>425 x 222</i></span>
                        </div>
                    </div>
                
                
          <?php if($lineas[0]["id"] == 2){ ?>
          <div class="section">
            <label>Link</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required,custom[url]] large" type="text" name="link" id="link" value="<?= $link?>" />
            </div>
          </div><br/>
          
                <div class="section">
            <label>mapa</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto_mapa" id="texto_mapa"  ><?= $texto_mapa?></textarea>
                <!--<span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto_mapa"></span></span>-->
                <script type="text/javascript">
//                CKEDITOR.replace( "texto_mapa" );
//                $("#texto_mapa").limit("140",".texto_mapa");
                </script>
            </div>
          </div><br/>
                
          <?php } ?>
          
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
        <a class="uibutton normal" href="../../categorias/view/index.php?seccion=form">Regresar</a>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Url</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center" width="70px"><?= $data[$i]["url"]?></td>
              <td class="center" width="70px"><img src="../../../../img/item/<?= str_replace("original","redimension",$data[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="100" ></td>
               
              <td class="center " width="100px">
                <a class="uibutton icon add" href="../../galeria/view/index.php?seccion=form&idi=<?= $data[$i]["id"]?>">Add Pictures</a><br/>
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
