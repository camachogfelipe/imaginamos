<?php
/*
 * @file               : pqr_registro.php
 * @brief              : Script para la interaccion con la tabla pqr_registro
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-06-23
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$nombre = "";
$cedula = "";
$direccion = "";
$email = "";
$placa = "";
$aseguradora = "";
$tipo_de_solicitud = "";
$comentarios_texto = "";
      
// Traemos datos edit
if(isset($_GET["id_edit"]) and !isset($_GET['e'])) {
  $db->doQuery("SELECT * FROM pqr_registro WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $nombre = $db->results[0]["nombre"];
  $cedula = $db->results[0]["cedula"];
  $direccion = $db->results[0]["direccion"];
  $email = $db->results[0]["email"];
  $placa = $db->results[0]["placa"];
  $aseguradora = $db->results[0]["aseguradora"];
  $tipo_de_solicitud = $db->results[0]["tipo_de_solicitud"];
  $comentarios_texto = $db->results[0]["comentarios_texto"];
}

if(isset($_POST["id"])){
  $nombre_c = GetData("nombre", "");
  $cedula_c = GetData("cedula", "");
  $direccion_c = GetData("direccion", "");
  $email_c = GetData("email", "");
  $placa_c = GetData("placa", "");
  $aseguradora_c = GetData("aseguradora", "");
  $tipo_de_solicitud_c = GetData("tipo_de_solicitud", "");
  $comentarios_texto_c = GetData("comentarios_texto", "");
  
  if( (int)$_POST["id"]>0 ) {
    $update=$db->doQuery("UPDATE pqr_registro SET  nombre='".$nombre_c."',cedula='".$cedula_c."',direccion='".$direccion_c."',email='".$email_c."',placa='".$placa_c."',aseguradora='".$aseguradora_c."',tipo_de_solicitud='".$tipo_de_solicitud_c."',comentarios_texto='".$comentarios_texto_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
	  echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
	  echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
    $insert=$db->doQuery("INSERT INTO pqr_registro ( nombre,cedula,direccion,email,placa,aseguradora,tipo_de_solicitud,comentarios_texto) VALUES ( '".$nombre_c."','".$cedula_c."','".$direccion_c."','".$email_c."','".$placa_c."','".$aseguradora_c."','".$tipo_de_solicitud_c."','".$comentarios_texto_c."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../../../../img/pqr_registro/", "original_" . $idinsertado, "redimension_" . $idinsertado, 500, 500);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE pqr_registro SET imagen='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        /* echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";*/
    }
    
    //Codigo Para Subir Archivos
    $retorno = ClassFIle::UploadFile("archivo", "../../../../img/pqr_registro/", "pqr_registro_" . $idinsertado);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE pqr_registro SET archivo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
    $db->doQuery("DELETE FROM pqr_registro WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}

// Obtenemos las datos
$db->doQuery("SELECT		pqr_registro.*, aseguradoras.titulo AS asgTitulo 
			  FROM			pqr_registro 
			  INNER JOIN	aseguradoras ON aseguradoras.id=pqr_registro.aseguradora 
			  ORDER BY		pqr_registro.id ASC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos Pqr registro
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Pqr registro '".$id."'</h3>";
        }else{
          echo "<h3>Pqr registro</h3>";
        } ?>
        
        <!-- Este fragmento de código siguiente da inicio ala limitacion de publicaciones - (Autogenerado.) -->
        <?php if((isset($_GET["id_edit"])  || count($dataAll)<0)){?>
        <!-- -->
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>Nombre</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="nombre" id="nombre" value="<?= $nombre?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Cedula</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="cedula" id="cedula" value="<?= $cedula?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Direccion</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="direccion" id="direccion" value="<?= $direccion?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Email</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="email" id="email" value="<?= $email?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Placa</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="placa" id="placa" value="<?= $placa?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Aseguradora</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="aseguradora" id="aseguradora" value="<?= $aseguradora?>" />
              
            </div>
          </div><br/>
          
          <div class="section">
            <label>Tipo de solicitud</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required] large" type="text" name="tipo_de_solicitud" id="tipo_de_solicitud" value="<?= $tipo_de_solicitud?>" />
              
            </div>
          </div><br/>
                <div class="section">
            <label>Comentarios texto</label>
            <div>
            <textarea style="border-radius: 5px;" class="validate[required]" cols="70" rows="15" name="comentarios_texto" id="comentarios_texto"  ><?= $comentarios_texto?></textarea>
                <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="comentarios_texto"></span></span>
                
            </div>
          </div><br/>
                
                
          
          <div>
            <div>
                <a class="uibutton icon add" href="../../respuestas_pqr/view/index.php?seccion=form&idpqr=<?= $id ?>">Responder</a>
              <!--<a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>-->
              <?php
              if($id>0){echo '<a class="uibutton special" href="index.php?seccion=form">Regresar</a>';}
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
            	<th><span class="th_wrapp">Fecha</span></th>
              <th><span class="th_wrapp">Nombre</span></th>
              <th><span class="th_wrapp">Cedula</span></th>
              <th><span class="th_wrapp">Direccion</span></th>
              <th><span class="th_wrapp">Email</span></th>
              <th><span class="th_wrapp">Placa</span></th>
              <th><span class="th_wrapp">Aseguradora</span></th>
              <th><span class="th_wrapp">Tipo de solicitud</span></th>
              <th><span class="th_wrapp">Comentarios texto</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
            	<td class="center" width="70px"><?= substr($data[$i]["fecha"], 0, 10)?></td>
              <td class="center" width="70px"><?= $data[$i]["nombre"]?></td>
              <td class="center" width="70px"><?= $data[$i]["cedula"]?></td>
              <td class="center" width="70px"><?= $data[$i]["direccion"]?></td>
              <td class="center" width="70px"><?= $data[$i]["email"]?></td>
              <td class="center" width="70px"><?= $data[$i]["placa"]?></td>
              <td class="center" width="70px"><?= $data[$i]["asgTitulo"]?></td>
              <td class="center" width="70px"><?= $data[$i]["tipo_de_solicitud"]?></td>
              <td class="center" width="70px"><?= substr($data[$i]["comentarios_texto"],0, 50)?></td>
                  
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=form&id_edit=<?= $data[$i]["id"]?>">Ver</a><br/>
                <?php
				switch(mb_strtolower($data[$i]['estado'])) :
					case 'recibida' :
					?>
                    <a class="uibutton icon add" href="../../respuestas_pqr/view/index.php?seccion=form&e=2&idpqr=<?= $data[$i]["id"]?>">Recibida</a><br/>
                    <?php
						break;
					case 'tramite'	:
					?>
                    <a class="uibutton icon add" href="../../respuestas_pqr/view/index.php?seccion=form&e=3&idpqr=<?= $data[$i]["id"]?>">En tramite</a><br/>
                    <?php
						break;
					case 'resuelta'	:
					?>
                    <a class="uibutton icon add" href="../../respuestas_pqr/view/index.php?seccion=form&e2=3&idpqr=<?= $data[$i]["id"]?>">Resuelta</a><br>
                    <?php
						break;
				endswitch;
				?>
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
