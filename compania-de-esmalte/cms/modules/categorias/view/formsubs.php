<?php
/*
 * @file               : subcategorias.php
 * @brief              : Script para la interaccion con la tabla subcategorias
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$categorias_id = $_GET['idc'];
$titulo = "";
$lineas_id = $_GET['idl'];      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM subcategorias WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $categorias_id = $db->results[0]["categorias_id"];
  $titulo = $db->results[0]["titulo"];
}

if(isset($_POST["id"])){
      $categorias_id_c = GetData("categorias_id", "");
      $titulo_c = GetData("titulo", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE subcategorias SET  categorias_id='".$categorias_id_c."',titulo='".$titulo_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO subcategorias ( categorias_id,titulo) VALUES ( '".$categorias_id_c."','".$titulo_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/subcategorias/", "original_" . $idinsertado, "redimension_" . $idinsertado, 174, 115);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE subcategorias SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/subcategorias/", "subcategorias_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE subcategorias SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM subcategorias WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM subcategorias WHERE categorias_id = $categorias_id ORDER BY id DESC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos subcategorias
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
          <?php
          switch ($lineas_id){
              case 1:
                  $imagenLinea = 'solucion-t1.png';
                  break;
              case 2:
                  $imagenLinea = 'solucion-t2.png';
                  break;
              case 3:
                  $imagenLinea = 'solucion-t3.png';
                  break;
          }
          $db->doQuery("SELECT * FROM categorias WHERE id = $categorias_id ORDER BY id DESC", SELECT_QUERY);
            $categorias = $db->results;
          ?>
          <div style="background: #d9012d;"><center><img src="../../../../imagenes/<?= $imagenLinea ?>"/><br /><h3 style="color: white; "><?= $categorias[0]["titulo"]?></h3></center></div>
        <?php if($id>0){
          echo "<h3>Editando subcategor&iacute;a  '".$titulo."' de '".$categorias[0]["titulo"]."' </h3>";
        }else{
          echo "<h3>Crea una Subcategor&iacute;a en '" .$categorias[0]["titulo"]. "'</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=formsubs&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input class="validate[required] large" type="hidden" name="categorias_id" id="categorias_id" value="<?= $categorias_id?>" />
              
          
          <div class="section">
              <label>T&iacute;tulo</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("20",".titulo");
              </script>
            </div>
          </div><br/>
          
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=formsubs&idl='.$lineas_id.'&idc='.$categorias_id.'">Cancelar</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          
        </form>
      </fieldset>
    <a class="uibutton normal" href="index.php?seccion=form&idl=<?= $lineas_id; ?>">Regresar</a>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">T&iacute;tulo</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=formpro&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $data[$i]["id"]?>">Productos</a><br/>
                <a class="uibutton icon edit" href="index.php?seccion=formsubs&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=formsubs&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
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
