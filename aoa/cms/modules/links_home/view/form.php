<?php
/*
 * @file               : menu_intranet.php
 * @brief              : Script para la interaccion con la tabla menu_intranet
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-08-09
 * @author             : Felipe Camacho González
 * @generated          : Generador de modulos versión 3.7.3 
 */
 
$id = "";
      
if(isset($_POST["id"])){
	echo $link1 = GetData("link1", "");
	echo "<br>".$link2 = GetData("link2", "");
	echo "<br>".$link3 = GetData("link3", "");echo "<br>";
	
	
	$update=$db->doQuery("UPDATE menu_intranet SET link='".$link1."' WHERE id='1'", UPDATE_QUERY);
	$update=$db->doQuery("UPDATE menu_intranet SET link='".$link2."' WHERE id='2'", UPDATE_QUERY);
	$update=$db->doQuery("UPDATE menu_intranet SET link='".$link3."' WHERE id='3'", UPDATE_QUERY);
    if($update) :
	echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
	else :
	echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
	endif;
}

// Obtenemos las datos
$db->doQuery("SELECT * FROM menu_intranet ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
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
      Administraci&oacute;n de Contenidos menu Intranet
    </span>
  </div>

  <div class="content">
    <div class="formEl_b">
      <fieldset><h3>Editando menus Intranet</h3>
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=form" method="post" style="width: 1000px;">
          <input type="hidden" name="id" id="id" value="true" />
          <?php
		  $i = 1;
		  foreach($dataAll as $link) :
		  ?>
          <div class="section">
            <label><?= $link['label'] ?></label>
            <div>
              <input style="border-radius: 5px;" class="validate[url] large" type="text" name="link<?= $i ?>" id="link<?= $i ?>" value="<?= $link['link'] ?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="ciudad"></span></span>
              <script type="text/javascript">
              $("#ciudad").limit("250",".ciudad");
              </script>
            </div>
          </div>
          <?php
		  $i++;
		  endforeach;
		  ?>
          
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
