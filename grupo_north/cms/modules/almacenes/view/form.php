<?php
/*
 * @file               : actividades_internas.php
 * @brief              : Script para la interaccion con la tabla actividades_internas
 * @version            : 3.7.3
 * @ultima_modificacion: 2013-04-27
 * @author             : Ruben Dario Cifuentes Torres
 * @updater            : Héctor Fernández
 * @updater            : José David Betancur
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
$nombre= "";
$logo = "";
$link = "";

// Traemos datos edit
if(isset($_GET["id_edit"])){
  $db->doQuery("SELECT * FROM sedes WHERE id=".(int)$_GET["id_edit"], SELECT_QUERY);
  $id = $db->results[0]["id"];
  $nombre = $db->results[0]["nombre"];
  $logo = $db->results[0]["logo"];
  $link = $db->results[0]["link"];
}

if(isset($_POST["id"])){
	$nombre_c = GetData("nombre", "");
	$logo_c = GetData("logo", "");
	$link_c = GetData("link", "");

  if( (int)$_POST["id"]>0 ){
		$update=$db->doQuery("UPDATE sedes SET  nombre='".$nombre_c."',logo='".$logo_c."',link='".$link_c."' WHERE id=".(int)$_POST["id"], UPDATE_QUERY);
    $idinsertado=$_POST["id"];
    if($update){
			$retorno = ClassFIle::UploadImagenFile("img", "../../../../img/logos_sedes/", "original_" . $idinsertado, "redimension_" . $idinsertado, 220, 208);
			if ($retorno["Status"]=="Uploader"){
				$db->doQuery("UPDATE sedes SET logo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
				echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
			}
			echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
		}else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }else{
      //iniciamos Limitador.
      $db->doQuery("SELECT * FROM sedes ORDER BY id ASC", SELECT_QUERY);
			$limitAct = count($db->results);
			if($limitAct<10){
				//insertamos
				$insert=$db->doQuery("INSERT INTO sedes (nombre,logo,link) VALUES ( '".$nombre_c."','".$logo_c."','".$link_c."');", INSERT_QUERY);
				$idinsertado=$db->getLastId();
				if($insert){
					//Codigo Para Subir Imagenes 
					$retorno = ClassFIle::UploadImagenFile("img", "../../../../img/logos_sedes/", "original_" . $idinsertado, "redimension_" . $idinsertado, 220, 208);
					if ($retorno["Status"]=="Uploader"){
						$db->doQuery("UPDATE sedes SET logo='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
						/*echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";*/
					}
					echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
				}else{
					echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
				}
			}else{
				echo "<script type='text/javascript'>setTimeout(function(){showError('Ya ha alcanzado el límite de actividades posibles',3000) }, 1500);</script>";
			}
		}
}
// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
	if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
		$db->doQuery("DELETE FROM sedes WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
	}
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM sedes ORDER BY id DESC", SELECT_QUERY);
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
      Administraci&oacute;n de Contenidos de almacenes de cadenas
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <?php if($id>0){
          echo "<h3>Editando Almacen de Cadena '".$nombre."'</h3>";
        }else{
          echo "<h3>Crea un Almacen de Cadena</h3>";
        } ?>
        
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="<?= $id?>" />
          
          <div class="section">
            <label>Nombre</label>
            <div>
              <input class="validate[required] large" type="text" name="nombre" id="titulo" value="<?= $nombre?>" />
            </div>
          </div><br/>

          <div class="section">
            <label>Link</label>
            <div>
              <input class="validate[required,custom[url]] large" type="text" name="link" id="titulo" value="<?= $link?>" />
            </div>
          </div><br/>

                                    
                <div class="section">
                <label>Imagen</label>
                        <div>
                        <?php if($id>0 and !empty($logo)){
                        ?> <img src="../../../../img/logos_sedes/<?= $logo ?>" width="220"><?php
                        } ?>
                        <?php
                        if ($id>0){
                        ?>
                            <input type="hidden" name="logo" id="logo" value="<?= $logo ?>"/>
                            <?php  
                        }
                         ?>
                         <label class="cabinet"> 
                         <input class="<?php if(empty($logo)) : ?>validate[required] <?php endif; ?> file" type="file" name="img" id="img"/>
                         </label>
                        <br/><span style="color: blueviolet;">Tama&ntilde;o de la imagen: 220 x 208 pixeles</span>
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

      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
                <th><span class="th_wrapp">Nombre</span></th>
              <th><span class="th_wrapp">Link</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["nombre"]?></td>
              <td class="center" width="70px"><?= $data[$i]["link"]?></td>
                  
              <td class="center" width="70px"><img src="../../../../img/logos_sedes/<?= $data[$i]["logo"]?>" width="100" ></td>
              <td class="center " width="100px">
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
$("#fecha").datepicker({dateFormat: 'yy-mm-dd'})
</script>
<script>
   CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
</div>
