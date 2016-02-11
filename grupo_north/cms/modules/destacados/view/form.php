<?php
/*
 * @file               : destacados.php
 * @brief              : Script para la interaccion con la tabla destacados
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo1 = "";
$titulo2 = "";
$imagen = "";
$imagen1 = "";
$imagen2 = "";
$imagen3 = "";
$link = "";
$link_2 = "";
$link_3 = "";
      
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM destacados WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo1 = $db->results[0]["titulo1"];
  $titulo2 = $db->results[0]["titulo2"];
  $imagen = $db->results[0]["imagen"];
  $imagen1 = $db->results[0]["imagen1"];
  $imagen2 = $db->results[0]["imagen2"];
  $imagen3 = $db->results[0]["imagen3"];
  $link = $db->results[0]["link"];
  $link_2 = $db->results[0]["link_2"];
  $link_3 = $db->results[0]["link_3"];
}

if(isset($_POST["id"])){
      $titulo1_c = GetData("titulo1", "");
      $titulo2_c = GetData("titulo2", "");
      $imagen1_c = GetData("imagen1", "");
      $imagen2_c = GetData("imagen2", "");
      $imagen3_c = GetData("imagen3", "");
      $link_c = GetData("link", "");
      $link_2_c = GetData("link_2", "");
      $link_3_c = GetData("link_3", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE destacados SET  titulo1='".$titulo1_c."',titulo2='".$titulo2_c."',link='".$link_c."',link_2='".$link_2_c."',link_3='".$link_3_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO destacados ( titulo1,titulo2) VALUES ( '".$titulo1_c."','".$titulo2_c."','".$link_c."','".$link_2_c."','".$link_3_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/destacados/", "original_" . $idinsertado, "redimension_" . $idinsertado, 1000, 460);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE destacados SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',1500) }, 1500);</script>";
    }
    $retorno = ClassFIle::UploadImagenFile("img1", "../../../../img/destacados/", "original1_" . $idinsertado, "redimension1_" . $idinsertado, 600, 280);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE destacados SET imagen1='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',1500) }, 3000);</script>";
    }
    $retorno = ClassFIle::UploadImagenFile("img2", "../../../../img/destacados/", "original2_" . $idinsertado, "redimension2_" . $idinsertado, 400, 280);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE destacados SET imagen2='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',1500) }, 4500);</script>";
    }
    $retorno = ClassFIle::UploadImagenFile("img3", "../../../../img/destacados/", "original3_" . $idinsertado, "redimension3_" . $idinsertado, 1000, 180);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE destacados SET imagen3='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',1500) }, 6000);</script>";
    }
    
    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/destacados/", "destacados_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE destacados SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM destacados WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM destacados ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Destacados
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Destacados</h3>";
        }else{
          echo "<h3>Destacados</h3>";
        } ?>
        <?php if($id>0){ ?>
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>Titulo Superior</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo1" id="titulo1" value="<?= $titulo1?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo1"></span></span>
              <script type="text/javascript">
              $("#titulo1").limit("15",".titulo1");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Titulo Inferior</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo2" id="titulo2" value="<?= $titulo2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo2"></span></span>
              <script type="text/javascript">
              $("#titulo2").limit("15",".titulo2");
              </script>
            </div>
          </div><br/>
                
                <div class="section">
                <label>Imagen Fondo</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/destacados/<?= $imagen ?>" width="200"><?php
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
                          <br/><span style="color: #0073ea;">Tama&ntilde;o de la imagen 1000 x 460</span>
                        </div>
                    </div>
                
                
                
                <div class="section">
                <label>Imagen Superior Izquierda</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/destacados/<?= $imagen1 ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img1" id="img1" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img1" id="img1"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: #0073ea;">Tama&ntilde;o de la imagen W600 x H280</span>
                        </div>
                    </div>
                    <div class="section">
                    <label>Link Imagen Superior Izquierda</label>
                    <div>
                    <input class="validate[required,custom[url]] large" type="text" name="link" id="link" value="<?= $link?>" />
                    </div>
                    </div><br/>
                
                
                <div class="section">
                <label>Imagen Superior Derecha</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/destacados/<?= $imagen2 ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img2" id="img2" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img2" id="img2"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: #0073ea;">Tama&ntilde;o de la imagen W400 x H280</span>
                        </div>
                    </div>
                    <div class="section">
                    <label>Link Imagen Superior Derecha</label>
                    <div>
                    <input class="validate[required,custom[url]] large" type="text" name="link_2" id="link_2" value="<?= $link_2?>" />
                    </div>
                    </div><br/>
                
                
                <div class="section">
                <label>Imagen inferior</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/destacados/<?= $imagen3 ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img3" id="img3" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img3" id="img3"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: #0073ea;">Tama&ntilde;o de la imagen W1000 x H180</span><br/>
                        </div>
                    </div><br/>
                    <div class="section">
                    <label>Link Imagen inferior</label>
                    <div>
                    <input class="validate[required,custom[url]] large" type="text" name="link_3" id="link_3" value="<?= $link_3?>" />
                    </div>
                    </div><br/>
                    
                    
                    <div class="section">
                        <label> Se recomienda cargar imagenes en formato <span style="color: #0073ea;">PNG</span></label>
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
              <th><span class="th_wrapp">Titulo1</span></th>
              <th><span class="th_wrapp">Titulo2</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Imagen1</span></th>
              <th><span class="th_wrapp">Imagen2</span></th>
              <th><span class="th_wrapp">Imagen3</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo1"]?></td>
              <td class="center" width="70px"><?= $data[$i]["titulo2"]?></td>
              <td class="center" width="70px"><img src="../../../../img/destacados/<?= $data[$i]["imagen"]?>" width="100" ></td>
              <td class="center" width="70px"><img src="../../../../img/destacados/<?= $data[$i]["imagen1"]?>" width="100" ></td>
              <td class="center" width="70px"><img src="../../../../img/destacados/<?= $data[$i]["imagen2"]?>" width="100" ></td>
              <td class="center" width="70px"><img src="../../../../img/destacados/<?= $data[$i]["imagen3"]?>" width="100" ></td>
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
