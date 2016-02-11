<?php
/*
 * @file               : productos.php
 * @brief              : Script para la interaccion con la tabla productos
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$subcategorias_id = $_GET['idsub'];
$categorias_id = $_GET['idc'];
$lineas_id = $_GET['idl']; 
$nombre = "";
$precio = "";
$referencia = "";
$texto_descripcion = "";
$texto_descripcion2 = "";
$imagen1 = "";
$imagen2 = "";
$imagen3 = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM productos WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $subcategorias_id = $db->results[0]["subcategorias_id"];
  $nombre = $db->results[0]["nombre"];
  $precio = $db->results[0]["precio"];
  $referencia = $db->results[0]["referencia"];
  $texto_descripcion = $db->results[0]["texto_descripcion"];
  $texto_descripcion2 = $db->results[0]["texto_descripcion2"];
  $imagen1 = $db->results[0]["imagen1"];
  $imagen2 = $db->results[0]["imagen2"];
  $imagen3 = $db->results[0]["imagen3"];
}

if(isset($_POST["id"])){
      $subcategorias_id_c = GetData("subcategorias_id", "");
      $nombre_c = GetData("nombre", "");
      $precio_c = GetData("precio", "");
      $referencia_c = GetData("referencia", "");
      $texto_descripcion_c = GetData("texto_descripcion", "");
      $texto_descripcion2_c = GetData("texto_descripcion2", "");
      $imagen1_c = GetData("imagen1", "");
      $imagen2_c = GetData("imagen2", "");
      $imagen3_c = GetData("imagen3", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE productos SET  subcategorias_id='".$subcategorias_id_c."',nombre='".$nombre_c."',precio='".$precio_c."',referencia='".$referencia_c."',texto_descripcion='".$texto_descripcion_c."',texto_descripcion2='".$texto_descripcion2_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO productos ( subcategorias_id,nombre,precio,referencia,texto_descripcion,texto_descripcion2) VALUES ( '".$subcategorias_id_c."','".$nombre_c."','".$precio_c."','".$referencia_c."','".$texto_descripcion_c."','".$texto_descripcion2_c."');", INSERT_QUERY);
    //echo "INSERT INTO productos ( subcategorias_id,nombre,precio,referencia,texto_descripcion,texto_descripcion2) VALUES ( '".$subcategorias_id_c."','".$nombre_c."','".$precio_c."','".$referencia_c."','".$texto_descripcion_c."','".$texto_descripcion2_c."');";
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/productos/", "original1_" . $idinsertado, "redimension1_" . $idinsertado, 220, 208);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE productos SET imagen1='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    $retorno = ClassFIle::UploadImagenFile("img2", "../../../../img/productos/", "original2_" . $idinsertado, "redimension2_" . $idinsertado, 410, 292);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE productos SET imagen2='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    $retorno = ClassFIle::UploadImagenFile("img3", "../../../../img/productos/", "original3_" . $idinsertado, "redimension3_" . $idinsertado, 288, 362);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE productos SET imagen3='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/productos/", "productos_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE productos SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM productos WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM productos  WHERE subcategorias_id = $subcategorias_id ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Productos
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
          ?>
          <div style="background: #d9012d;"><center><img src="../../../../imagenes/<?= $imagenLinea ?>"/><br /><h3 style="color: white; "><?= $categorias[0]["titulo"]?> --> <?= $subcategorias[0]["titulo"]?></h3></center></div>
        <?php if($id>0){
          echo "<h3>Editando el registro '".$id."'</h3>";
        }else{
          echo "<h3>Crea un registro</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=formpro&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          <input class="validate[required] large" type="hidden" name="subcategorias_id" id="subcategorias_id" value="<?= $subcategorias_id?>" />
             
             
          
          <div class="section">
            <label>Nombre</label>
            <div>
              <input class="validate[required] large" type="text" name="nombre" id="nombre" value="<?= $nombre?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="nombre"></span></span>
              <script type="text/javascript">
              $("#nombre").limit("52",".nombre");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Precio</label>
            <div>
              <input class="validate[required] large" type="text" name="precio" id="precio" value="<?= $precio?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="precio"></span></span>
              <script type="text/javascript">
              $("#precio").limit("15",".precio");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Referencia</label>
            <div>
              <input class="validate[required] large" type="text" name="referencia" id="referencia" value="<?= $referencia?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="referencia"></span></span>
              <script type="text/javascript">
              $("#referencia").limit("36",".referencia");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto Principal</label>
            <div>
            <textarea class="validate[required]" cols="60" rows="15" name="texto_descripcion" id="texto_descripcion"  ><?= $texto_descripcion?></textarea>
            </div>
          </div><br/>
                
                
                <div class="section">
            <label>Texto Especificacion</label>
            <div>
            <textarea class="validate[required]" cols="60" rows="15" name="texto_descripcion2" id="texto_descripcion2"  ><?= $texto_descripcion2?></textarea>
            </div>
          </div><br/>
                
                
                
                <div class="section">
                <label>Imagen Muestra</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/productos/<?= $imagen1 ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen W220 x H208</span>
                        </div>
                    </div>
                
                
                
                <div class="section">
                <label>Imagen </label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/productos/<?= $imagen2 ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img2" id="img2" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img2" id="img2"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen W410 x H292</span>
                        </div>
                    </div>
                
                
                
                <div class="section">
                <label>Imagen especificaciones</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/productos/<?= $imagen3 ?>" width="200"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <label class="cabinet"> 
                            <input type="file" name="img3" id="img3" class="file"/> 
                            </label>
                            <?php  
                        }else{
                         ?>
                         <label class="cabinet"> 
                         <input class="validate[required] file" type="file" name="img3" id="img3"/>
                         </label><?php
                        }
                        ?>
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen W288 x H362</span>
                        </div>
                    </div>
                
                
          
          <div>
            <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=formpro&idl='.$lineas_id.'&idc='.$categorias_id.'&idsub='.$subcategorias_id.'">Cancelar</a>';}
              ?>
            </div>
          </div>
          <p>&nbsp;</p>
          <a class="uibutton normal" href="index.php?seccion=formsubs&idl=<?=$lineas_id?>&idc=<?=$categorias_id?>">Regresar</a>
        </form>
      </fieldset>

      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Nombre</span></th>
              <th><span class="th_wrapp">Precio</span></th>
              <th><span class="th_wrapp">Referencia</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Texto Esp.</span></th>
              <th><span class="th_wrapp">Muestra</span></th>
              <th><span class="th_wrapp">Detalle</span></th>
              <th><span class="th_wrapp">Especificaci&oacute;n</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["nombre"]?></td>
              <td class="center" width="70px"><?= $data[$i]["precio"]?></td>
              <td class="center" width="70px"><?= $data[$i]["referencia"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto_descripcion"],0, 10)?>..</td>
                  
              <td class="center" width="70px"><?= substr($data[$i]["texto_descripcion2"],0, 10)?>..</td>
                  
              <td class="center" width="70px"><img src="../../../../img/productos/<?= $data[$i]["imagen1"]?>" width="100" ></td>
              <td class="center" width="70px"><img src="../../../../img/productos/<?= $data[$i]["imagen2"]?>" width="100" ></td>
              <td class="center" width="70px"><img src="../../../../img/productos/<?= $data[$i]["imagen3"]?>" width="100" ></td>
              <td class="center " width="100px">
                <a class="uibutton icon add" href="index.php?seccion=formproitems&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&idp=<?= $data[$i]["id"]?>">Items</a><br/>
                <a class="uibutton icon edit" href="index.php?seccion=formpro&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&id_edit=<?= $data[$i]["id"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=formpro&idl=<?= $lineas_id ?>&idc=<?= $categorias_id ?>&idsub=<?= $subcategorias_id ?>&id_del=<?= $data[$i]["id"]?>&confirm=<?= base64_encode(md5($data[$i]["id"])) ?>">x Eliminar</a>
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
