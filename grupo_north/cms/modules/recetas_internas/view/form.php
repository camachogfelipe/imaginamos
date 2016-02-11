<?php
/*
 * @file               : recetas_internas.php
 * @brief              : Script para la interaccion con la tabla recetas_internas
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$subtitulo = "";
$titulo_inferior = "";
$imagen = "";
$ingredientes = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM recetas_internas WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $subtitulo = $db->results[0]["subtitulo"];
  $titulo_inferior = $db->results[0]["titulo_inferior"];
  $imagen = $db->results[0]["imagen"];
  $ingredientes = $db->results[0]["ingredientes"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $subtitulo_c = GetData("subtitulo", "");
      $titulo_inferior_c = GetData("titulo_inferior", "");
      $ingredientes_c = GetData("ingredientes", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE recetas_internas SET  titulo='".$titulo_c."',subtitulo='".$subtitulo_c."',titulo_inferior='".$titulo_inferior_c."',ingredientes='".$ingredientes_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO recetas_internas ( titulo,subtitulo,titulo_inferior,ingredientes) VALUES ( '".$titulo_c."','".$subtitulo_c."','".$titulo_inferior_c."','".$ingredientes_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/recetas_internas/", "original_" . $idinsertado, "redimension_" . $idinsertado, 1000, 396);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE recetas_internas SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/recetas_internas/", "recetas_internas_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE recetas_internas SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM recetas_internas WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM recetas_internas ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Recetas
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Receta '".$titulo."'</h3>";
        }else{
          echo "<h3>Crea Una Receta</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>Titulo</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("53",".titulo");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Subtitulo</label>
            <div>
              <input class="validate[required] large" type="text" name="subtitulo" id="subtitulo" value="<?= $subtitulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="subtitulo"></span></span>
              <script type="text/javascript">
              $("#subtitulo").limit("80",".subtitulo");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
              <label>T&iacute;tulo (Preparaci&oacute;n)</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo_inferior" id="titulo_inferior" value="<?= $titulo_inferior?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo_inferior"></span></span>
              <script type="text/javascript">
              $("#titulo_inferior").limit("25",".titulo_inferior");
              </script>
            </div>
          </div><br/>
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/recetas_internas/<?= $imagen ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen 1000 x 396</span>
                        </div>
                    </div>
                
                
          
          <div class="section">
            <label>Ingredientes</label>
            <div>
              <textarea class="validate[required]" cols="70" rows="15" name="ingredientes" id="ingredientes"  ><?= $ingredientes?></textarea>
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
      </fieldset>

      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Subtitulo</span></th>
              <th><span class="th_wrapp">Titulo_inferior</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Ingredientes</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["subtitulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["titulo_inferior"]?></td>
              <td class="center" width="70px"><img src="../../../../img/recetas_internas/<?= $data[$i]["imagen"]?>" width="100" ></td>
              <td class="center" width="70px"><?= substr($data[$i]["ingredientes"],0,50)?></td>
              <td class="center " width="100px">
                <a class="uibutton icon add" href="index.php?seccion=formpasos&idr=<?= $data[$i]["id"]?>">Pasos</a><br/>
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
</script>
<script>
   CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
