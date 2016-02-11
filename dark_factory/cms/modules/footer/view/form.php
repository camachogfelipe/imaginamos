<?php
/*
 * @file               : footer.php
 * @brief              : Script para la interaccion con la tabla footer
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-29
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$texto = "";
$direccion = "";
$telefono = "";
$email = "";
$ciudad = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM footer WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $texto = $db->results[0]["texto"];
  $direccion = $db->results[0]["direccion"];
  $telefono = $db->results[0]["telefono"];
  $email = $db->results[0]["email"];
  $ciudad = $db->results[0]["ciudad"];
}

if(isset($_POST["id"])){
      $texto_c = GetData("texto", "");
      $texto_c = str_replace("\\", '\\\\', $texto_c );
      $texto_c = str_replace("'", '\\\'', $texto_c );
      $direccion_c = GetData("direccion", "");
      $direccion_c = str_replace("\\", '\\\\', $direccion_c );
      $direccion_c = str_replace("'", '\\\'', $direccion_c );
      $telefono_c = GetData("telefono", "");
      $telefono_c = str_replace("\\", '\\\\', $telefono_c );
      $telefono_c = str_replace("'", '\\\'', $telefono_c );
      $email_c = GetData("email", "");
      $email_c = str_replace("\\", '\\\\', $email_c );
      $email_c = str_replace("'", '\\\'', $email_c );
      $ciudad_c = GetData("ciudad", "");
      $ciudad_c = str_replace("\\", '\\\\', $ciudad_c );
      $ciudad_c = str_replace("'", '\\\'', $ciudad_c );

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE footer SET  texto='".$texto_c."',direccion='".$direccion_c."',telefono='".$telefono_c."',email='".$email_c."',ciudad='".$ciudad_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO footer ( texto,direccion,telefono,email,ciudad) VALUES ( '".$texto_c."','".$direccion_c."','".$telefono_c."','".$email_c."','".$ciudad_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/footer/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE footer SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/footer/", "footer_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE footer SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM footer WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM footer ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Footer
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Footer '".$id."'</h3>";
        }else{
          echo "<h3>Footer</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<1)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>
                <script type="text/javascript">
//                CKEDITOR.replace( "texto" );
                $("#texto").limit("334",".texto");
                </script>
            </div>
          </div><br/>
                
                
          
          <div class="section">
            <label>Direcci&oacute;n</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="direccion" id="direccion" value="<?= $direccion?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="direccion"></span></span>
              <script type="text/javascript">
              $("#direccion").limit("62",".direccion");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Telefono</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="telefono" id="telefono" value="<?= $telefono?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="telefono"></span></span>
              <script type="text/javascript">
              $("#telefono").limit("31",".telefono");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Email</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="email" id="email" value="<?= $email?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="email"></span></span>
              <script type="text/javascript">
              $("#email").limit("28",".email");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Ciudad</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="ciudad" id="ciudad" value="<?= $ciudad?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="ciudad"></span></span>
              <script type="text/javascript">
              $("#ciudad").limit("30",".ciudad");
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
      </fieldset>
<?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Direccion</span></th>
              <th><span class="th_wrapp">Telefono</span></th>
              <th><span class="th_wrapp">Email</span></th>
              <th><span class="th_wrapp">Ciudad</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center" width="70px"><?= $data[$i]["direccion"]?></td>
              <td class="center" width="70px"><?= $data[$i]["telefono"]?></td>
              <td class="center" width="70px"><?= $data[$i]["email"]?></td>
              <td class="center" width="70px"><?= $data[$i]["ciudad"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <!--<a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>-->
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
