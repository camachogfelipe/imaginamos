<?php
/*
 * @file               : ubicacion.php
 * @brief              : Script para la interaccion con la tabla ubicacion
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-26
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 * @Asistente Coordenadas Adaptación al CMS: Héctor Fernández.
 */
$id = "";
$titulo = "";
$direccion = "";
$texto = "";
$coordenadas = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM ubicacion WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $titulo = $db->results[0]["titulo"];
  $direccion = $db->results[0]["direccion"];
  $texto = $db->results[0]["texto"];
  $coordenadas = $db->results[0]["coordenadas"];
}

if(isset($_POST["id"])){
      $titulo_c = GetData("titulo", "");
      $direccion_c = GetData("direccion", "");
      $texto_c = GetData("texto", "");
      $coordenadas_c = GetData("coordenadas", "");

  if( (int)$_POST["id"]>0 ){
    $update=$db->doQuery("UPDATE ubicacion SET  titulo='".$titulo_c."',direccion='".$direccion_c."',texto='".$texto_c."',coordenadas='".$coordenadas_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
      //iniciamos limitador.
      $db->doQuery("SELECT * FROM ubicacion ORDER BY id ASC", SELECT_QUERY);
      $ubilimit = $db->results;
      $countUbi = count($ubilimit);
      if($countUbi<40){
          
                $insert=$db->doQuery("INSERT INTO ubicacion ( titulo,direccion,texto,coordenadas) VALUES ( '".$titulo_c."','".$direccion_c."','".$texto_c."','".$coordenadas_c."');", INSERT_QUERY);
                $idinsertado=$db->getLastId();
                if($insert){
                 echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
                }else{
                echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
                }
          
      }else{
          echo "<script type='text/javascript'>setTimeout(function(){showError('Ya alcanzó el límite máximo de sedes permitidas.',3000) }, 1500);</script>";
      }
      
      
    
  }
  
  
    //Codigo Para Subir Imagenes 
//    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/ubicacion/", "original_" . $idinsertado, "redimension_" . $idinsertado, 174, 115);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE ubicacion SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
//         echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
//    }
//    
//    //Codigo Para Subir Archivos
//    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/ubicacion/", "ubicacion_" . $idinsertado);
//    if ($retorno["Status"]=="Uploader"){
//    $db->doQuery("UPDATE ubicacion SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM ubicacion WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM ubicacion ORDER BY id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos &iquest;D&oacute;nde Estamos?
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando '".$titulo."'</h3>";
        }else{
          echo "<h3>A&ntilde;ade una Sede</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
              <label>Nombre Sede / T&iacute;tulo</label>
            <div>
              <input class="validate[required] large" type="text" name="titulo" id="titulo" value="<?= $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("23",".titulo");
              </script>
            </div>
          </div><br/>
          
          <div class="section">
            <label>Direccion</label>
            <div>
              <input class="validate[required] large" type="text" name="direccion" id="direccion" value="<?= $direccion?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="direccion"></span></span>
              <script type="text/javascript">
              $("#direccion").limit("28",".direccion");
              </script>
            </div>
          </div><br/>
                <div class="section">
            <label>Texto</label>
            <div>
            <textarea class="validate[required]" cols="71" rows="15" name="texto" id="texto"  ><?= $texto?></textarea>
            </div>
          </div><br/>
                
                
          
          <div class="section">
            <label>Coordenadas</label>
            <div>
              <input class="validate[required] large" type="text" name="coordenadas" id="coordenadas" value="<?= $coordenadas?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="coordenadas"></span></span>
              <script type="text/javascript">
              $("#coordenadas").limit("140",".coordenadas");
              </script>
              <a class="uibutton " id="asistente">Asistente Coordenadas</a>
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
<fieldset id="asistentemapa" style="display: none;">
    <!--Asistente Coordenadas Adaptación al CMS: Héctor Fernández.-->
    <h3>Asistente para obtenci&oacute;n de coordenadas</h3>
     
     <form name="form_mapa" action="#" onsubmit=" showAddress(this.address.value, this.zoom.value=parseFloat(this.zoom.value)); return false">

         <div class="section">
             <label>Direcci&oacuten a buscar: </label>
             <div>
                 <input id="dirsearch" type="text" name="address" value="" class="large" />
                 <span class="f_help">Escriba aqu&iacute; la direcci&oacute; a buscar Ejemplo: <span style="color: blueviolet">Carrera 142 # 111b - 35, Bogot&aacute;, Colombia</span></span>
                  <input type="hidden" size="1" name="zoom" value=15 />
        <input class="uibutton" type="submit" value="Ver" /></p>
             </div>
            
         </div>
         <div class="section">
             <label style="color: #06F;">Coordenadas Obtenidas: </label>
             <div>
                <p style="font-size: 10px;font-family: verdana;font-weight: bold;"><input style="border: solid #06F 1px" type="text" name="coordenadas" value="" class="large" /></p> 
                <span class="f_help">Copie las coordenadas obtenidas en el campo:<span style="color: blueviolet"> Coordenadas.</span></span>
                <a class="uibutton " id="asistentecerrar">Cerrar Asistente</a>
             </div>
         </div>
      </form>
             <div class="section">
                 <label>Mapa:</label>
                 <center><div style="width: 700px; border-width: 1px; border-style: solid; border-color: #979797; padding:8px 8px 8px 8px;" ><div id="map" style="width: 700px; height: 500px"></div></div></center>
             </div>
 		<form name="form_mapa_1" action="#" onclick=" showAddress(this.address.value, 15); return false">

 		</form>
        </fieldset>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">T&iacute;tulo</span></th>
              <th><span class="th_wrapp">Direcci&oacute;n</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Coordenadas</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["direccion"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["texto"],0, 200)?></td>
                  
              <td class="center" width="70px"><?= $data[$i]["coordenadas"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon add" href="index.php?seccion=formitems&id_ubicacion=<?= $data[$i]["id"]?>">Items</a><br/>
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
$('#asistente').click(function(){
    $('#asistentemapa').fadeIn();
    $('#dirsearch').focus();
});
$('#asistentecerrar').click(function(){
    $('#asistentemapa').fadeOut();
    $('#coordenadas').focus()
});
</script>
<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
</script>
<script>
   //CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
