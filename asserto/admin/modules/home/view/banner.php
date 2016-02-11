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
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM home WHERE idhome=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["idhome"];
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
    $retorno = ClassFIle::UploadImagenFile("img", "../imagenes", "original_" . $idinsertado, "redimension_" . $idinsertado, 114, 196);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE home SET imagen='".$retorno["NameFile"]."' WHERE idhome=".$idinsertado, UPDATE_QUERY);
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
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<9)){?>
        <!-- -->
        <?php if ($id>0){

              ?>
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=banner&id_edit=1" method="post" style="width: 900px;">
          <input type="hidden" name="idhome" id="id" value="<?= $id?>" />
          
          
                <?php
                
          }
                ?>
                <div class="section">
                
                        <div>
                        <?php if($id>0){
                            ?>
                            <label>Imagen</label><br>    
                            <img src="../imagenes/<?php echo $imagen; ?>" width="200"><br><br><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img" id="img" class="file" /> 
                            </label>
                            <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>114 x 196</i></span>
                            <?php 
                        }else{
                         ?>
<!--                         <label class="cabinet"> -->
<!--                         <input class="validate[required] file" type="file" name="img" id="img"/>-->
                        <!-- </label>--><?php
                        }
                        ?>
                          
                        </div>
                    </div>
                
                
          <?php 
            if($id>0){
          ?>
        
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              echo '<a class="uibutton special" href="index.php?seccion=banner">Volver</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          
        </form>
<!-- fin de formulariom con lÃ­mite de publicaciones -->
<?php } ?>        
<!-- -->
      </fieldset>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><img src="../imagenes/<?php echo $data[$i]["imagen"]; ?>" width="100" ></td>
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=banner&id_edit=<?= $data[$i]["idhome"]?>">Editar</a><br/>
                <a class="uibutton special" href ="index.php?seccion=item&idhome=<?= $data[$i]["idhome"]?>"> Agregar Item </a>
              </td>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
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

