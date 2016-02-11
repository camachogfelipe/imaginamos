<?php
/*
 * @file               : banner.php
 * @brief              : Script para la interaccion con la tabla banner
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
$texto = "";
$imagen = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM banner WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo1 = $db->results[0]["titulo1"];
  $titulo2 = $db->results[0]["titulo2"];
  $texto = $db->results[0]["texto"];
  $imagen = $db->results[0]["imagen"];
}

if(isset($_POST["id"])){
      $titulo1_c = GetData("titulo1", "");
      $titulo2_c = GetData("titulo2", "");
      $texto_c = GetData("texto", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE banner SET  titulo1='".$titulo1_c."',titulo2='".$titulo2_c."',texto='".$texto_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
        
        //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/banner/", "original_" . $idinsertado, "redimension_" . $idinsertado, 612, 456);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE banner SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         //echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 3000);</script>";
    }
        
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
      //colsulta para  iniciar el limitador
      $db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
     $bannerlimit = $db->results;
     $countbanner = count($bannerlimit);
      if($countbanner<5){
          //si existen menos de 5 banners procedemos a insertar.
     $insert=$db->doQuery("INSERT INTO banner ( titulo1,titulo2,texto) VALUES ( '".$titulo1_c."','".$titulo2_c."','".$texto_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/banner/", "original_" . $idinsertado, "redimension_" . $idinsertado, 612, 456);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE banner SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         //echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 3000);</script>";
    }
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
          
      }else{
          // si existen 5 o más banner  enviamos mensaje de límite
          echo "<script type='text/javascript'>setTimeout(function(){showError('Ya ha alcanzado el límite de publicaciones',3000) }, 500);</script>";
      }
     
   
    
    
    
  }
    
    
    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/banner/", "banner_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE banner SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM banner WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
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
          echo "<h3>Inserta Banner</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
              <label>Titulo <small style="color: blueviolet;" >Superior en el banner.</small></label>
            <div>
              <input class="validate[required] large" type="text" name="titulo1" id="titulo1" value="<?= $titulo1?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo1"></span></span>
              <script type="text/javascript">
              $("#titulo1").limit("10",".titulo1");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Titulo <small style="color: blueviolet;" >Inferior en el banner.</small></label>
            <div>
              <input class="validate[required] large" type="text" name="titulo2" id="titulo2" value="<?= $titulo2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo2"></span></span>
              <script type="text/javascript">
              $("#titulo2").limit("10",".titulo2");
              </script>
            </div>
          </div><br/>
           <div class="section">
               <label>Descripci&oacute;n: <small style="color: blueviolet;" >Se recomienda un texto corto y sin estilizar</small></label>
            <div>
            <textarea class="validate[required]" cols="75" rows="10" name="texto" id="texto"  ><?= $texto?></textarea>
            <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>
            <script type="text/javascript">
              $("#texto").limit("110",".texto");
              </script>
            </div>
          </div><br/>
                
                
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/banner/<?= $imagen ?>" width="200"><?php
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
                          <br/><span style="color: blue;">Tama&ntilde;o de la imagen W612 x H456</span>
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
 <?php if(!isset($_GET["id_edit"])): ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Superior</span></th>
              <th><span class="th_wrapp">Inferior</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo1"]?></td>
              <td class="center" width="70px"><?= $data[$i]["titulo2"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?>...</td>
                  
              <td class="center" width="70px"><img src="../../../../img/banner/<?= $data[$i]["imagen"]?>" width="100" ></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=form&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
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
   //CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
