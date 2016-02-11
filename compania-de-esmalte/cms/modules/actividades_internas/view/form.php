<?php
/*
 * @file               : actividades_internas.php
 * @brief              : Script para la interaccion con la tabla actividades_internas
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$fecha = "";
$texto = "";
$imagen = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM actividades_internas WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $fecha = $db->results[0]["fecha"];
  $texto = $db->results[0]["texto"];
  $imagen = $db->results[0]["imagen"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $fecha_c = GetData("fecha", "");
      $texto_c = GetData("texto", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE actividades_internas SET  titulo='".$titulo_c."',fecha='".$fecha_c."',texto='".$texto_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
                        $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/actividades_internas/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 330);
                        if ($retorno["Status"]=="Uploader"){
                        $db->doQuery("UPDATE actividades_internas SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
                             //echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
                        }
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
      //iniciamos Limitador.
      $db->doQuery("SELECT * FROM actividades_internas ORDER BY id ASC", SELECT_QUERY);
        $limitAct = count($db->results);
        if($limitAct<10){
            //insertamos
                $insert=$db->doQuery("INSERT INTO actividades_internas ( titulo,fecha,texto) VALUES ( '".$titulo_c."','".$fecha_c."','".$texto_c."');", INSERT_QUERY);
                $idinsertado=$db->getLastId();
                if($insert){
                    //Codigo Para Subir Imagenes 
                        $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/actividades_internas/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 330);
                        if ($retorno["Status"]=="Uploader"){
                        $db->doQuery("UPDATE actividades_internas SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
                             //echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
                        }
                echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
                }else{
                echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
                }
            
            
        }else{
            echo "<script type='text/javascript'>setTimeout(function(){showError('Ya ha alcanzado el límite de actividades posibles',3000) }, 1500);</script>";
        }
      
    
    
    
    
  }
  
    
    
    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/actividades_internas/", "actividades_internas_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE actividades_internas SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM actividades_internas WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM actividades_internas ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos actividades_internas
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Actividad '".$titulo."'</h3>";
        }else{
          echo "<h3>Crea una Actividad</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>T&iacute;tulo</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("17",".titulo");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Fecha</label>
            <div>
              <input onkeypress="return false" onPaste="return false" class="validate[required] large" type="text" name="fecha" id="fecha" value="<?= $fecha?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="fecha"></span></span>
              <script type="text/javascript">
              $("#fecha").limit("16",".fecha");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea class="validate[required]" cols="60" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
            </div>
          </div><br/>
                
                
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/actividades_internas/<?= $imagen ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen 500 x 330</span>
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
      </fieldset>

      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
                <th><span class="th_wrapp">T&iacute;tulo</span></th>
              <th><span class="th_wrapp">Fecha</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["fecha"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center" width="70px"><img src="../../../../img/actividades_internas/<?= $data[$i]["imagen"]?>" width="100" ></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>
  <!--aquí indicamos cual formulario ha de ser validado.-->
<script>
$(".forminterno").validationEngine();

</script>
<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
$("#fecha").datepicker({dateFormat: 'yy-mm-dd'})
</script>
<script>
   CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
