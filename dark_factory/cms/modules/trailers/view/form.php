<?php
/*
 * @file               : trailers.php
 * @brief              : Script para la interaccion con la tabla trailers
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$genero = "";
$imagen = "";
$release_year = "";
$director = "";
$producer = "";
$url = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM trailers WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $genero = $db->results[0]["genero"];
  $imagen = $db->results[0]["imagen"];
  $release_year = $db->results[0]["release_year"];
  $director = $db->results[0]["director"];
  $producer = $db->results[0]["producer"];
  $url = $db->results[0]["url"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $titulo_c = str_replace("\\", '\\\\', $titulo_c );
      $titulo_c = str_replace("'", '\\\'', $titulo_c );
      $genero_c = GetData("genero", "");
      $genero_c = str_replace("\\", '\\\\', $genero_c );
      $genero_c = str_replace("'", '\\\'', $genero_c );
      $release_year_c = GetData("release_year", "");
      $release_year_c = str_replace("\\", '\\\\', $release_year_c );
      $release_year_c = str_replace("'", '\\\'', $release_year_c );
      $director_c = GetData("director", "");
      $director_c = str_replace("\\", '\\\\', $director_c );
      $director_c = str_replace("'", '\\\'', $director_c );
      $producer_c = GetData("producer", "");
      $producer_c = str_replace("\\", '\\\\', $producer_c );
      $producer_c = str_replace("'", '\\\'', $producer_c );
      $url_c = GetData("url", "");
         
         preg_match("#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#",$url_c, $url);
if(isset($url[2]) && $url[2] != ""){

     $url = $url[2];

}

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE trailers SET  titulo='".$titulo_c."',genero='".$genero_c."',release_year='".$release_year_c."',director='".$director_c."',producer='".$producer_c."',url='".$url."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO trailers ( titulo,genero,release_year,director,producer,url) VALUES ( '".$titulo_c."','".$genero_c."','".$release_year_c."','".$director_c."','".$producer_c."','".$url."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/trailers/", "original_" . $idinsertado, "redimension_" . $idinsertado, 480, 711);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE trailers SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/trailers/", "trailers_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE trailers SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM trailers WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM trailers ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Trailers
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Trailers '".$id."'</h3>";
          $urlresto='http://www.youtube.com/watch?v=';
        }else{
            $urlresto='';
          echo "<h3>Trailers</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<100)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
                    <div class="section">
                      <label>T&iacute;tulo</label>
                      <div>
                        <input style="border-radius: 5px;" class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
                        <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
                        <script type="text/javascript">
                        $("#titulo").limit("84",".titulo");
                        </script>
                      </div>
                    </div><br/>
                
          
          <div class="section">
            <label>Genero</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="genero" id="genero" value="<?= $genero?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="genero"></span></span>
              <script type="text/javascript">
              $("#genero").limit("13",".genero");
              </script>
            </div>
          </div><br/>
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/trailers/<?= str_replace("original","redimension",$imagen); ?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la Imagen: <i>160 x 245</i></span>
                        </div>
                    </div>
                
                
          
          <div class="section">
            <label>Release year</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="release_year" id="release_year" value="<?= $release_year?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="release_year"></span></span>
              <script type="text/javascript">
              $("#release_year").limit("4",".release_year");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Director</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="director" id="director" value="<?= $director?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="director"></span></span>
              <script type="text/javascript">
              $("#director").limit("21",".director");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Producer</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="producer" id="producer" value="<?= $producer?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="producer"></span></span>
              <script type="text/javascript">
              $("#producer").limit("18",".producer");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Url de v&iacute;deo</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required,custom[url]] large" type="text" name="url" id="url" value="<?= $urlresto.$url?>" />
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
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Genero</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Release year</span></th>
              <th><span class="th_wrapp">Director</span></th>
              <th><span class="th_wrapp">Producer</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["genero"]?></td>
              <td class="center" width="70px"><img src="../../../../img/trailers/<?= str_replace("original","redimension",$data[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="100" ></td>
              <td class="center" width="70px"><?= $data[$i]["release_year"]?></td>
              <td class="center" width="70px"><?= $data[$i]["director"]?></td>
              <td class="center" width="70px"><?= $data[$i]["producer"]?></td>
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
