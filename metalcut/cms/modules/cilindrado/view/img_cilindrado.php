<?php

$db->doQuery("SELECT idimg_cilindrado FROM img_cilindrado  ORDER BY idimg_cilindrado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idimg_cilindrado"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  


if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/img_cilindrado", "img_cilindrado_" . $img, "960_392_img_cilindrado_" . $img, 960, 320);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/img_cilindrado", "img_cilindrado_" . $id, "960_392_img_cilindrado_" . $id, 960, 320);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($retorno=""){
        $Erno = 2;
    }else{
      // if ($retorno["Status"] != "") {
           $sql="INSERT INTO img_cilindrado (imagen, geometria) VALUES ('" . $retorno["NameFile"] . "', '".$_POST['idgeometria']."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
        /*  } else {
           $Erno = 3;
        }*/
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE img_cilindrado SET imagen='" . $retorno["NameFile"] . "' WHERE idimg_cilindrado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {
        $Erno = 2;
        }     

}

if (empty($id)){
		$sqlTI = "SELECT DISTINCT(geometria) FROM img_cilindrado";
		$db->doQuery($sqlTI, 1);
		$geometrias = $db->results;
		foreach($geometrias as $geometria) :
			$tmp[] = "'".$geometria['geometria']."'";
		endforeach;
		$geometrias = $tmp;
		$sqlTI = "SELECT * FROM geometria WHERE idgeometria NOT IN (" . implode(",", $geometrias) . ") ORDER BY idgeometria ASC";
		$db->doQuery($sqlTI, 1);		
		$dTI = $db->results;
		$cTI = count($dTI);
    $db->doQuery("SELECT * FROM img_cilindrado ORDER BY idimg_cilindrado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
		//echo "SELECT * FROM img_cilindrado WHERE idimg_cilindrado=" . $id;
    $db->doQuery("SELECT * FROM img_cilindrado WHERE idimg_cilindrado=" . $id, 1);
    $img_cilindrado = $db->results[0];
}
?>

<!-- full width -->

<div class="header"><span><span class="ico gray window"></span>Cilindrado y Refrentado</span> </div>
<!-- End header -->
<div class="content">
  <?php if (!empty($_REQUEST['id'])){ ?>
  <a class="uibutton icon normal answer" href="index.php?seccion=img_cilindrado">Atras</a>
  <?php }else{ ?>
  <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
  <?php } ?>
  <div class="formEl_b">
    <?php if ($fil < $cTI || !empty($id)) { ?>
    <fieldset>
      <legend>
      <h1>Imagen del Porta Herramientas</h1>
      </legend>
      <form method="post" action="" name="forminterno4" id="forminterno4" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $img_cilindrado["idimg_cilindrado"] ?>" name="id" id="id">
        <div class="section">
          <?php if (!empty($img_cilindrado["imagen"])){ ?>
          <label>Imagen actual</label>
          <br />
          <br />
          <div> <img src="../../../../assets/img/img_cilindrado/<?php echo $img_cilindrado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" /> </div>
          <br />
          <?php }else{?>
          <label>Imagen </label>
          <br />
          <br />
          <?php }?>
          <label>Subir nueva imagen (196px x 246px) (.png, .jpg)</label>
          <div>
            <input type="file" name="img" id="img" />
            <input type="hidden" value="1" name="tipo" id="tipo">
          </div>
        </div>
        <?php if(isset($cTI)) : ?>
        <div class="section">
          <label>Geometr&iacute;a</label>
          <div>
            <select id="idgeometria" name="idgeometria">
              <?php if ($cTI == 1) { ?>
              <option value="<?php echo $img_cilindrado["geometria"] ?>"><?php echo $img_cilindrado["geometria"] ?></option>
              <?php } else { ?>
              <option value="">-Seleccione-</option>
              <?php
							for ($i = 0; $i < $cTI; $i++) {
								?>
              <option value="<?php echo $dTI[$i]["idgeometria"] ?>"<?php
								if ($img_cilindrado["geometria"] == $dTI[$i]["idgeometria"]) echo ' selected="selected"'; ?>><?php
                	echo $dTI[$i]["idgeometria"] ?></option>
              	<?php
								}
							}
							?>
            </select>
            <span class="f_help">Limite de caracteres 2/<span class="idmaterial"></span></span> </div>
        </div>
        <?php else : ?>
        <input type="hidden" name="idgeometria" value="<?php echo $img_cilindrado['geometria'] ?>" />
        <?php endif; ?>
        <br />
        <div><a id="submitForm4"  class="uibutton large">Guardar</a></div>
      </form>
    </fieldset>
    <?php } else { 
            
            ?>
    <label></label>
    <?php } ?>
    <br/>
    <br/>
    <br/>
    <fieldset>
      <?php if (empty($id)){ ?>
      <div class="tableName toolbar">
        <table class="display data_table2" >
          <thead>
            <tr>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Geometr&iacute;a</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php
						for ($i = 0; $i < $fil; $i++) {
							$img = $db->results[$i];
							?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><img src="../../../../assets/img/img_cilindrado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/></td>
              <td class="center"><?php echo $img['geometria'] ?></td>
              <td class="center titulo" width="100px"><?php if(($i+1) != $fil){ ?>
                <a id="<?php echo $img["idimg_cilindrado"] ?>" class="Delete uibutton special" tableToDelete="img_cilindrado" nameField="idimg_cilindrado">Eliminar</a>
                <?php } ?>
                <a class="uibutton icon edit" href="index.php?seccion=img_cilindrado&id=<?= $img["idimg_cilindrado"] ?>">Editar</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php
                }
            ?>
    </fieldset>
  </div>
</div>
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?>
<script>showError('Faltan datos ',3000);</script>
<?php
        } elseif ($valor == 1) {
            ?>
<script>showSuccess('Información ingresada',8000)</script>
<?php
        } elseif ($valor == 3) {
            ?>
<script>showError('Error al ingresar los datos',8000)</script>
<?php
        } elseif ($valor == 4) {
            ?>
<script>showError('No se puede ingresar destacado',8000)</script>
<?php
        } elseif ($valor == 5) {
            ?>
<script>showError('No selecciono imagen',8000)</script>
<?php
        }
    }
}
?>
<script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm4").click(function(){
                     $('#forminterno4').submit();
                });
            });
        </script>