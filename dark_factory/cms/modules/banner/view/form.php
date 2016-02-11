<?php
/*
 * @file               : banner.php
 * @brief              : Script para la interaccion con la tabla banner
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$subtitulo = "";
$fecha = "";
$pais = "";
$edad = "";
$texto = "";
$link = "";
$imagen = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM banner WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $subtitulo = $db->results[0]["subtitulo"];
  $fecha = $db->results[0]["fecha"];
  $pais = $db->results[0]["pais"];
  $edad = $db->results[0]["edad"];
  $texto = $db->results[0]["texto"];
  $link = $db->results[0]["link"];
  $imagen = $db->results[0]["imagen"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $titulo_c = str_replace("\\", '\\\\', $titulo_c );
      $titulo_c = str_replace("'", '\\\'', $titulo_c );
      $subtitulo_c = GetData("subtitulo", "");
      $subtitulo_c = str_replace("\\", '\\\\', $subtitulo_c );
      $subtitulo_c = str_replace("'", '\\\'', $subtitulo_c );
      $fecha_c = GetData("fecha", "");
      $fecha_c = str_replace("\\", '\\\\', $fecha_c );
      $fecha_c = str_replace("'", '\\\'', $fecha_c );
      $pais_c = GetData("pais", "");
      $pais_c = str_replace("\\", '\\\\', $pais_c );
      $pais_c = str_replace("'", '\\\'', $pais_c );
      $edad_c = GetData("edad", "");
      $edad_c = str_replace("\\", '\\\\', $edad_c );
      $edad_c = str_replace("'", '\\\'', $edad_c );
      $texto_c = GetData("texto", "");
      $texto_c = str_replace("\\", '\\\\', $texto_c );
      $texto_c = str_replace("'", '\\\'', $texto_c );
      $link_c = GetData("link", "");
      $link_c = str_replace("\\", '\\\\', $link_c );
      $link_c = str_replace("'", '\\\'', $link_c );
  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE banner SET  titulo='".$titulo_c."',subtitulo='".$subtitulo_c."',fecha='".$fecha_c."',pais='".$pais_c."',edad='".$edad_c."',texto='".$texto_c."',link='".$link_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO banner ( titulo,subtitulo,fecha,pais,edad,texto,link) VALUES ( '".$titulo_c."','".$subtitulo_c."','".$fecha_c."','".$pais_c."','".$edad_c."','".$texto_c."','".$link_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/banner/", "original_" . $idinsertado, "redimension_" . $idinsertado, 1349, 570);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE banner SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/banner/", "banner_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE banner SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM banner WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Eliminado',3000) }, 1500);</script>";
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Banner
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Banner '".$id."'</h3>";
        }else{
          echo "<h3>Banner</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<5)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
                    <div class="section">
                      <label>T&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
                        <script type="text/javascript">
                        $("#titulo").limit("29",".titulo");
                        </script>
                      </div>
                    </div><br/>
                
                    <div class="section">
                      <label>Subt&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="subtitulo" id="subtitulo" value="<?= $subtitulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="subtitulo"></span></span>
                        <script type="text/javascript">
                        $("#subtitulo").limit("28",".subtitulo");
                        </script>
                      </div>
                    </div><br/>
                
                    <div class="section">
                      <label>Fecha</label>
                      <div>
                        <input onkeypress="return false;" onpaste="return false" onkeypress="return false;" onpaste="return false;" class="validate[required] large" type="text" name="fecha" id="fecha" value="<?= $fecha?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="fecha"></span></span>
                        <script type="text/javascript">
                        $("#fecha").datepicker({dateFormat: 'yy-mm-dd'});
                        $("#fecha").limit("10",".fecha");
                        </script>
                      </div>
                    </div><br/>
                
          
          <div class="section">
            <label>Pais</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="pais" id="pais" value="<?= $pais?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="pais"></span></span>
              <script type="text/javascript">
              $("#pais").limit("10",".pais");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Edad</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required, custom[number] large" type="text" name="edad" id="edad" value="<?= $edad?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="edad"></span></span>
              <script type="text/javascript">
              $("#edad").limit("2",".edad");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>
                <script type="text/javascript">
//                CKEDITOR.replace( "texto" );
                $("#texto").limit("272",".texto");
                </script>
            </div>
          </div><br/>
                
                
          
          <div class="section">
            <label>Link</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required,custom[url]] large" type="text" name="link" id="link" value="<?= $link?>" />
            </div>
          </div><br/>
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/banner/<?= str_replace("original","redimension",$imagen); ?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la Imagen: <i>1349 x 570</i></span>
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
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Subtitulo</span></th>
              <th><span class="th_wrapp">Fecha</span></th>
              <th><span class="th_wrapp">Pais</span></th>
              <th><span class="th_wrapp">Edad</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Link</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["subtitulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["fecha"]?></td>
              <td class="center" width="70px"><?= $data[$i]["pais"]?></td>
              <td class="center" width="70px"><?= $data[$i]["edad"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center" width="70px"><?= $data[$i]["link"]?></td>
              <td class="center" width="70px"><img src="../../../../img/banner/<?= str_replace("original","redimension",$data[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="100" ></td>
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
