<?php
/*
 * @file               : servicios.php
 * @brief              : Script para la interaccion con la tabla servicios
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-23
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @updater			   : Felipe Camacho
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$titulo = "";
$texto = "";
$imagen = "";
$visible_condiciones = "";
$visible_contacto = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM servicios WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $texto = $db->results[0]["texto"];
  $imagen = $db->results[0]["imagen"];
  $visible_condiciones = $db->results[0]["visible_condiciones"];
  $visible_contacto = $db->results[0]["visible_contacto"];
  $orden = $db->results[0]["orden"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $texto_c = GetData("texto", "");
      $visible_condiciones_c = GetData("visible_condiciones", "");
      $visible_contacto_c = GetData("visible_contacto", "");
	  $orden_c = GetData("orden");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE servicios SET  titulo='".$titulo_c."',texto='".$texto_c."',visible_condiciones='".$visible_condiciones_c."',visible_contacto='".$visible_contacto_c."', orden='".$orden_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO servicios ( titulo,texto,visible_condiciones,visible_contacto,orden) VALUES ( '".$titulo_c."','".$texto_c."','".$visible_condiciones_c."','".$visible_contacto_c."', '".$orden."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/servicios/", "original_" . $idinsertado, "redimension_" . $idinsertado, 400, 280);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE servicios SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        /* echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";*/
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/servicios/", "servicios_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE servicios SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM servicios WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM servicios ORDER BY orden ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Servicios
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Servicios '".$id."'</h3>";
        }else{
          echo "<h3>Servicios</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<10000)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 800px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
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
            <label>Texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="texto"></span></span>
                <script type="text/javascript">
                CKEDITOR.replace( "texto" );
                $("#texto").limit("140",".texto");
                </script>
            </div>
          </div><br/>
                
                
                
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0){
                        ?> <img src="../../../../img/servicios/<?= str_replace("original","redimension",$imagen); ?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="200"><?php
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
                          <br/><span style="color: blueviolet;">Tama&ntilde;o de la Imagen: <i>w400 x h280</i></span>
                        </div>
                    </div>
                
                
          
          <div class="section">
            <label>Visible condiciones</label>
            <div>
                
                <?php if($id>0){ 
                    if($visible_condiciones>0){
                        ?>
                        <select name="visible_condiciones" id="visible_condiciones" >
                            <option value="1" >S&iacute;</option>
                            <option value="0" >No</option>
                        </select>
                         <?php
                    }else{
                    ?>
                        <select name="visible_condiciones" id="visible_condiciones" >
                            <option value="0" >No</option>
                            <option value="1" >S&iacute;</option>
                        </select>
                
                    <?php }
                    
                    }else{
                        ?>
                        <select name="visible_condiciones" id="visible_condiciones" >
                            <option value="1" >S&iacute;</option>
                            <option value="0" >No</option>
                        </select>
                        <?php
                    } ?>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Visible contacto</label>
            <div>
              <?php if($id>0){ 
                    if($visible_contacto>0){
                        ?>
                        <select name="visible_contacto" id="visible_contacto" >
                            <option value="1" >S&iacute;</option>
                            <option value="0" >No</option>
                        </select>
                         <?php
                    }else{
                    ?>
                        <select name="visible_contacto" id="visible_contacto" >
                            <option value="0" >No</option>
                            <option value="1" >S&iacute;</option>
                        </select>
                    <?php }
                    
                    }else{
                        ?>
                        <select name="visible_contacto" id="visible_contacto" >
                            <option value="1" >S&iacute;</option>
                            <option value="0" >No</option>
                        </select>
                        <?php
                    } ?>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Orden</label>
            <div>
            	<input style="border-radius: 5px;" class="large" type="text" name="orden" id="orden" value="<?php
					if(empty($orden)) echo 0;
					else echo $orden;
				?>" />
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
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Visible condiciones</span></th>
              <th><span class="th_wrapp">Visible contacto</span></th>
              <th><span class="th_wrapp">Orden</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody id ="sortable">
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX" id="<?php echo $data[$i]["id"]?>">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 50)?></td>
                  
              <td class="center" width="70px"><img src="../../../../img/servicios/<?= str_replace("original","redimension",$data[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="100" ></td>
              <td class="center" width="70px"><?= ($data[$i]["visible_condiciones"]==1)? 'S&iacute;': 'No'; ?></td>
              <td class="center" width="70px"><?= ($data[$i]["visible_contacto"]==1)? 'S&iacute;': 'No'; ?></td>
              <td class="center" width="10px"><?= $data[$i]["orden"]; ?></td>
              <td class="center " width="100px">
                <?php  
                $db->doQuery("SELECT * FROM aseguradoras WHERE servicios_id = ".$data[$i]["id"]." ORDER BY id ASC", SELECT_QUERY);
                $aseguradoras = $db->results;
                $contaseguradoras = count($aseguradoras);
                if($contaseguradoras<1){
                ?> <a class="uibutton normal add" href="../../condiciones_del_servicio_default/view/index.php?seccion=form&idserv=<?= $data[$i]["id"]?>">Condiciones del servicio</a><br/><?php  
                }
                ?>
                <a class="uibutton icon add" href="../../aseguradoras/view/index.php?seccion=form&ids=<?= $data[$i]["id"]?>">Logos/aseguradoras</a><br/>
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
<script>

$(function() {
    $("#sortable").sortable({update: function() {
            var order = $(this).sortable("toArray");
            $.post("update.php", {order: order}, function(datos){
//                    alert(order);

            });
        }
    });
});	


</script>
  <!--Fin del Contenido del Modulo-->
</div>
