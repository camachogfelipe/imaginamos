<?php
/*
 * @file               : items_productos.php
 * @brief              : Script para la interaccion con la tabla items_productos
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$productos_id = $_GET['idp'];
$subcategorias_id = $_GET['idsub'];
$categorias_id = $_GET['idc'];
$lineas_id = $_GET['idl'];
$titulo = "";
$texto_contenido = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM items_productos WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $productos_id = $db->results[0]["productos_id"];
  $titulo = $db->results[0]["titulo"];
  $texto_contenido = $db->results[0]["texto_contenido"];
}

if(isset($_POST["id"])){
      $productos_id_c = GetData("productos_id", "");
      $titulo_c = GetData("titulo", "");
      $texto_contenido_c = GetData("texto_contenido", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE items_productos SET  productos_id='".$productos_id_c."',titulo='".$titulo_c."',texto_contenido='".$texto_contenido_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO items_productos ( productos_id,titulo,texto_contenido) VALUES ( '".$productos_id_c."','".$titulo_c."','".$texto_contenido_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/items_productos/", "original_" . $idinsertado, "redimension_" . $idinsertado, 174, 115);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE items_productos SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/items_productos/", "items_productos_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE items_productos SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM items_productos WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM items_productos  WHERE productos_id = $productos_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Items De especificaci&oacute;n.
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
          $db->doQuery("SELECT * FROM subcategorias WHERE id = $subcategorias_id ORDER BY id DESC", SELECT_QUERY);
            $subcategorias = $db->results;
          $db->doQuery("SELECT * FROM productos WHERE id = $productos_id ORDER BY id DESC", SELECT_QUERY);
            $prods = $db->results;
          ?>
          <div style="background: #d9012d;"><center><img src="../../../../imagenes/<?= $imagenLinea ?>"/><br /><h3 style="color: white; "><?= $categorias[0]["titulo"]?> --> <?= $subcategorias[0]["titulo"]?> --> <?= $prods[0]["nombre"]?> </h3></center></div>
        <?php if($id>0){
          echo "<h3>Editando el registro '".$id."'</h3>";
        }else{
          echo "<h3>Crea un registro</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=formproitems&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&idp=<?= $productos_id ?>" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input class="validate[required] large" type="hidden" name="productos_id" id="productos_id" value="<?= $productos_id?>" />
              
          
          <div class="section">
              <label>Especificaci&oacute;n</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("140",".titulo");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Detalle</label>
            <div>
            <textarea class="validate[required]" cols="60" rows="15" name="texto_contenido" id="texto_contenido"  ><?= $texto_contenido?></textarea>
            </div>
          </div><br/>
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=formproitems&idl='.$lineas_id.'&idc='.$categorias_id.'&idsub='.$subcategorias_id.'&idp='.$productos_id.'">Cancelar</a>';}
              ?>
            </div>
              <a class="uibutton normal" href="index.php?seccion=formsubs&idl=<?=$lineas_id?>&idc=<?=$categorias_id?>&idsub=<?= $subcategorias_id  ?>">Regresar</a>
          </div>
          <p>&nbsp;</p>
          
        </form>
      </fieldset>
 <?php if(!isset($_GET["id_edit"])): ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=formproitems&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&idp=<?= $productos_id ?>&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=formproitems&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&idp=<?= $productos_id ?>&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
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
   CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
