<?php
/*
 * @file               : condiciones_de_servicio.php
 * @brief              : Script para la interaccion con la tabla condiciones_de_servicio
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-23
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
if(isset($_GET['ida'])){
    $_SESSION['ida'] = $_GET['ida'];
    $aseguradoras_id = $_SESSION['ida'];
}else{
    $aseguradoras_id = $_SESSION['ida'];
}

$id = "";
//$aseguradoras_id = "";
$titulo = "";
$texto_descriptivo = "";
$datos_de_contacto_1 = "";
$datos_de_contacto_2 = "";
$texto_documentacion_requerida = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM condiciones_de_servicio WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $aseguradoras_id = $db->results[0]["aseguradoras_id"];
  $titulo = $db->results[0]["titulo"];
  $texto_descriptivo = $db->results[0]["texto_descriptivo"];
  $datos_de_contacto_1 = $db->results[0]["datos_de_contacto_1"];
  $datos_de_contacto_2 = $db->results[0]["datos_de_contacto_2"];
  $texto_documentacion_requerida = $db->results[0]["texto_documentacion_requerida"];
}

if(isset($_POST["id"])){
      $aseguradoras_id_c = GetData("aseguradoras_id", "");
      $titulo_c = GetData("titulo", "");
      $texto_descriptivo_c = GetData("texto_descriptivo", "");
      $datos_de_contacto_1_c = GetData("datos_de_contacto_1", "");
      $datos_de_contacto_2_c = GetData("datos_de_contacto_2", "");
      $texto_documentacion_requerida_c = GetData("texto_documentacion_requerida", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE condiciones_de_servicio SET  aseguradoras_id='".$aseguradoras_id_c."',titulo='".$titulo_c."',texto_descriptivo='".$texto_descriptivo_c."',datos_de_contacto_1='".$datos_de_contacto_1_c."',datos_de_contacto_2='".$datos_de_contacto_2_c."',texto_documentacion_requerida='".$texto_documentacion_requerida_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO condiciones_de_servicio ( aseguradoras_id,titulo,texto_descriptivo,datos_de_contacto_1,datos_de_contacto_2,texto_documentacion_requerida) VALUES ( '".$aseguradoras_id_c."','".$titulo_c."','".$texto_descriptivo_c."','".$datos_de_contacto_1_c."','".$datos_de_contacto_2_c."','".$texto_documentacion_requerida_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/condiciones_de_servicio/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE condiciones_de_servicio SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/condiciones_de_servicio/", "condiciones_de_servicio_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE condiciones_de_servicio SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM condiciones_de_servicio WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM condiciones_de_servicio WHERE aseguradoras_id = $aseguradoras_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Condiciones de servicio
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Condiciones de servicio '".$id."'</h3>";
        }else{
          echo "<h3>Condiciones de servicio</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<1)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input style="border-radius: 5px;" class="validate[required] large" type="hidden" name="aseguradoras_id" id="aseguradoras_id" value="<?= $aseguradoras_id?>" />
              
                    <div class="section">
                      <label>T&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
                        <script type="text/javascript">
                        $("#titulo").limit("21",".titulo");
                        </script>
                      </div>
                    </div><br/>
                
                <div class="section">
            <label>Texto descriptivo</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto_descriptivo" id="texto_descriptivo"  ><?= $texto_descriptivo?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto_descriptivo"></span></span>
                <script type="text/javascript">
                CKEDITOR.replace( "texto_descriptivo" );
//                $("#texto_descriptivo").limit("140",".texto_descriptivo");
                </script>
            </div>
          </div><br/>
                
                
          
          <div class="section">
            <label>Datos de contacto 1</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="datos_de_contacto_1" id="datos_de_contacto_1" value="<?= $datos_de_contacto_1?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="datos_de_contacto_1"></span></span>
              <script type="text/javascript">
              $("#datos_de_contacto_1").limit("74",".datos_de_contacto_1");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Datos de contacto 2</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="datos_de_contacto_2" id="datos_de_contacto_2" value="<?= $datos_de_contacto_2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="datos_de_contacto_2"></span></span>
              <script type="text/javascript">
              $("#datos_de_contacto_2").limit("74",".datos_de_contacto_2");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto documentacion requerida</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto_documentacion_requerida" id="texto_documentacion_requerida"  ><?= $texto_documentacion_requerida?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto_documentacion_requerida"></span></span>
                <script type="text/javascript">
                CKEDITOR.replace( "texto_documentacion_requerida" );
                $("#texto_documentacion_requerida").limit("140",".texto_documentacion_requerida");
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
<a class="uibutton normal" href="../../aseguradoras/view/index.php?seccion=form">Regresar</a>
      </fieldset>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Texto descriptivo</span></th>
              <th><span class="th_wrapp">Datos de contacto 1</span></th>
              <th><span class="th_wrapp">Datos de contacto 2</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto_descriptivo"],0, 50)?></td>
                  
              <td class="center" width="70px"><?= $data[$i]["datos_de_contacto_1"]?></td>
              <td class="center" width="70px"><?= $data[$i]["datos_de_contacto_2"]?></td>
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
