<?php
/*
 * @file               : banner.php
 * @brief              : Script para la interaccion con la tabla banner
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-06
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : HÃ©ctor FernÃ¡ndez
 * @updater            : JosÃ© David Betancur
 * @generated          : Generador de modulos versiÃ³n 3.7.3 
 */
 
$id = "";
$imagen = "";
$texto = "";

// Traemos datos edit
if(isset($_GET["idimagen"])){
  $db->doQuery("SELECT * FROM imagen_somos WHERE idimagen=".(int)$_GET["idimagen"], SELECT_QUERY);
  $id = $db->results[0]["idimagen"];
  $imagen = $db->results[0]["imagen"];
  $texto = $db->results[0]["texto"];
}



if(isset($_POST["idhome"])){
//      $nombre_c = GetData("texto", "");

//  if( (int)$_POST["idhome"]>0 ){
//    $update=$db->doQuery("UPDATE home SET  texto='".$nombre_c."' WHERE idhome=".(int)$_POST["idhome"], UPDATE_QUERY);
    $idinsertado=$_POST["idhome"];
//    if($update){
//    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
//    }else{
//     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
//    }
//  }else{
//    $insert=$db->doQuery("INSERT INTO home (texto) VALUES ( '".$nombre_c."');", INSERT_QUERY);
//    $idinsertado=$db->getLastId();
//    if($insert){
//     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
//    }else{
//    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
//    }
//  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../imagenes", "original_" . $idinsertado, "redimension_" . $idinsertado, 940, 300);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE imagen_somos SET imagen='".$retorno["NameFile"]."' WHERE idimagen=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
}

// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM home WHERE idhome=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM home ORDER BY idhome ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<!--funciÃ³n que pide la confirmaciÃ³n para eliminar (Auto Generado).-->
<script>
  function confirmar(){
    if(confirm("EstÃ¡ seguro que desea realizar esta acciÃ³n ?")){
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
<?php 
    if($id>0){
?>
<div class="widget">

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php 
          echo "<h3>Edición Home</h3>";
        }else{
          
        } ?>
        
        <!-- Este fragmento de cÃ³digo siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php // if((isset($_GET["id_edit"])  || count($dataAll)<9)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=imagen&idimagen=1" method="post" style="width: 900px;">
          <input type="hidden" name="idhome" id="id" value="<?php echo $id?>" />
          
          
           
                
                
                        <div>
                        <?php // if($id>0){
                            ?>
                            <label>Imagen</label><br>    
                            <img src="../imagenes/<?php echo $imagen; ?>" width="600"><br><br><?php
//                        } ?>
                        <?php
//                        if ($id>0){ 
                        ?>
                            <br>
                            <br>
                            <br>
                            <label class="cabinet"> 
                            <input type="file" name="img" id="img" class="file" /> 
                            </label>
                            <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>940 x 300</i></span>
                            <?php 
//                        }else{
                         ?>
<!--                         <label class="cabinet"> -->
<!--                         <input class="validate[required] file" type="file" name="img" id="img"/>-->
                        <!-- </label>--><?php
//                        }
                        ?>
                          
                        </div>
                    
                
                
          <?php 
//            if($id>0){
          ?>
          <br>
          <br>
          <br>
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <a class="uibutton special" href="index.php?seccion=somos">Volver</a>
              <?php
//              echo '<a class="uibutton special" href="index.php?seccion=banner">Volver</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          
        </form>
<!-- fin de formulariom con lÃ­mite de publicaciones -->
<?php // } ?>        
<!-- -->
      </fieldset>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        
      </div>
<?php } ?>
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

