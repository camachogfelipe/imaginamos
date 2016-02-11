<?php
/*
 * @file               : subscribe.php
 * @brief              : Script para la interaccion con la tabla subscribe
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$nombre = "";
$email = "";
$blog = "";
$trailers = "";
$industry = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM subscribe WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $nombre = $db->results[0]["nombre"];
  $email = $db->results[0]["email"];
  $blog = $db->results[0]["blog"];
  $trailers = $db->results[0]["trailers"];
  $industry = $db->results[0]["industry"];
}

if(isset($_POST["id"])){
      $nombre_c = GetData("nombre", "");
      $email_c = GetData("email", "");
      $blog_c = GetData("blog", "");
      $trailers_c = GetData("trailers", "");
      $industry_c = GetData("industry", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE subscribe SET  nombre='".$nombre_c."',email='".$email_c."',blog='".$blog_c."',trailers='".$trailers_c."',industry='".$industry_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO subscribe ( nombre,email,blog,trailers,industry) VALUES ( '".$nombre_c."','".$email_c."','".$blog_c."','".$trailers_c."','".$industry_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/subscribe/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE subscribe SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/subscribe/", "subscribe_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE subscribe SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM subscribe WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Eliminado',3000) }, 1500);</script>";
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM subscribe ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Subscribe
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>RSS </h3>";
        }else{
          echo "<h3>RSS</h3>";
        } ?>
          
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<0)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>Nombre</label>
            <div>
                <label><?= $nombre?></label>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="nombre" id="nombre" value="<?= $nombre?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Email</label>
            <div>
                <label><?= $email?></label>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="email" id="email" value="<?= $email?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Suscrito a Blog: </label>
            <div>
                <?php  echo  ($blog>0)? '<label>S&iacute;</label>': '<label>No</label>'; ?>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="blog" id="blog" value="<?= $blog?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Suscrito a Trailers</label>
            <div>
                <?php  echo  ($trailers>0)? '<label>S&iacute;</label>': '<label>No</label>'; ?>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="trailers" id="trailers" value="<?= $trailers?>" />
             
            </div>
          </div><br/>
          
          <div class="section">
            <label>Suscrito a Industry</label>
            <div>
                <?php  echo  ($industry>0)? '<label>S&iacute;</label>': '<label>No</label>'; ?>
              <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="industry" id="industry" value="<?= $industry?>" />
              
            </div>
          </div><br/>
          
          <div>
            <div>
              <!--<a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>-->
              <?php
              if($id>0){echo '<a class="uibutton normal" href="index.php?seccion=form">Regresar</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          
        </form>
<!-- fin de formulariom con límite de publicaciones -->
<?php } ?>        
<!-- -->
      </fieldset>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Nombre</span></th>
              <th><span class="th_wrapp">Email</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["nombre"]?></td>
              <td class="center" width="70px"><?= $data[$i]["email"]?></td>
              
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Ver</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
<?php } ?>
    </br>
        <a class="uibutton icon confirm answer" href="export.php">Descargar datos</a>
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

