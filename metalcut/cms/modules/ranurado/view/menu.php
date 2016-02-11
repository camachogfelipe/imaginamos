<?php
$modulo='ranurado'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : NULL; 
$db->doQuery("SELECT idranurado FROM ranurado WHERE modulo='".$modulo."' and nivel='".$nivel."' ORDER BY idranurado DESC", 1);
$limit = $db->results[0];
if(!empty($limit['idranurado'])) $img = $limit["idranurado"] + 1;
else $img = 2;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 
$paso=!empty($_POST['paso']) ? $_POST['paso'] : null;
$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if ($nivel=='0'){
    $idportafoliopadre=$id.'xxx';  
}else{
     $idportafoliopadre=!empty($_REQUEST['idpadre']) ? $_REQUEST['idpadre'] : 0; 
}

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/ranurado", "ranurado_" . $img, "960_392_ranurado_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/ranurado", "ranurado_" . $id, "960_392_ranurado_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['paso'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO ranurado(modulo,titulo,texto,imagen,paso,nivel,idportafoliopadre) VALUES ('".$modulo."','".$titulo."','".$texto."','" . $retorno["NameFile"] . "','".$paso."','".$nivel."','".$idportafoliopadre."')";
          // echo $sql;
            $db->doQuery($sql, 2);
						$id = NULL;
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == ""  && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE ranurado SET titulo='" . $titulo . "',  texto='".$texto."', paso='".$paso."', nivel='".$nivel."', idportafoliopadre='".$idportafoliopadre."' WHERE idranurado=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
				 $id = NULL;
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE ranurado SET imagen='" . $retorno["NameFile"] . "' WHERE idranurado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
	//echo "SELECT * FROM ranurado  where modulo='".$modulo."' and nivel='".$nivel."' and idportafoliopadre='".$idportafoliopadre."' ORDER BY idranurado ASC";
    $db->doQuery("SELECT * FROM ranurado  where modulo='".$modulo."' and nivel='".$nivel."' and idportafoliopadre='".$idportafoliopadre."' ORDER BY idranurado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
		//echo "SELECT * FROM ranurado WHERE idranurado=" . $id;
    $db->doQuery("SELECT * FROM ranurado WHERE idranurado=" . $id, 1);
    $ranurado = $db->results[0];
		$ranurado['id'] = $ranurado['idranurado'];
}
else {
	$ranurado = array(
		"idranurado" => $_GET['idranurado'],
		"nivel" => $nivel,
		"idportafoliopadre" => $_GET['idpadre'],
	);
}
?>

<!-- full width -->

<div class="header"><span><span class="ico gray window"></span>Ranurado y Corte</span> </div>
<!-- End header -->
<div class="content"> <a class="uibutton icon normal answer" href="../../ranurado/view/">Atras</a>
  <div class="formEl_b">
    <?php if (!empty($nivel) and $nivel <= 8) { ?>
    <fieldset>
      <legend>
      <h1>Ranurado y Corte</h1>
      </legend>
      <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $ranurado["id"] ?>" name="id" id="id">
        <input type="hidden" value="<?php echo $ranurado["idranurado"] ?>" name="idranurado" id="idranurado">
        <input type="hidden" value="<?php echo $ranurado["nivel"] ?>" name="nivel" id="nivel">
        <input type="hidden" value="<?php echo $ranurado["idportafoliopadre"] ?>" name="idpadre" id="idpadre">
        <div class="section">
          <label>Titulo</label>
          <div>
            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $ranurado["titulo"] ?>">
            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span> </div>
        </div>
        <div class="section">
          <label>Texto</label>
          <div>
            <textarea name="texto" id="texto" class="large"><?php echo $ranurado["texto"] ?></textarea>
          </div>
        </div>
        <div class="section">
          <?php if (!empty($ranurado["imagen"])){ ?>
          <label>Imagen actual</label>
          <br />
          <br />
          <div> <img src="../../../../assets/img/ranurado/<?php echo $ranurado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" /> </div>
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
        <div class="section">
          <label>Paso Siguiente</label>
          <div>
            <?php if ($nivel<=8){ ?>
            <select id="paso" name="paso">
              <option value="">-Seleccionar-</option>
              <option value="P"<?php echo ($ranurado['paso'] == "P")?' selected':"" ?>>Portaherramientas</option>
              <option value="S"<?php echo ($ranurado['paso'] == "S")?' selected':"" ?>>Subnivel</option>
            </select>
            <?php }else{ ?>
            <select id="paso" name="paso">
              <option value="">-Seleccionar-</option>
              <option value="P">Portaherramientas</option>
            </select>
            <?php } ?>
          </div>
        </div>
        <br />
        <div> <a id="submitForm"  class="uibutton large">Guardar</a> 
          <!--<a href="index.php?seccion=img_ranurado"  class="uibutton large">Imagen Porta Herramienta</a>--> 
          
        </div>
      </form>
    </fieldset>
    <?php } else { 
            
            ?>
    <label></label>
    <?php } ?>
    <div>
      <?php if($nivel < 1) : ?>
      <a href="index.php?seccion=img_ranurado"  class="uibutton large">Imagen Porta Herramienta</a>
      <?php endif; ?>
    </div>
    <br/>
    <br/>
    <br/>
    <fieldset>
      <?php if (empty($id)){ ?>
      <div class="tableName toolbar">
        <table class="display data_table2" >
          <thead>
            <tr>
              <th><span class="th_wrapp">Titulo</span></th>
              <th><span class="th_wrapp">Texto</span></th>
              <th><span class="th_wrapp">Imagen</span></th>
              <th><span class="th_wrapp">Nivel</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
            <tr class="odd gradeX">
              <td><?php echo $img["titulo"] ?></td>
              <td><?php echo $img["texto"] ?></td>
              <td class="center" width="70px"><img src="../../../../assets/img/ranurado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/></td>
              <td><?php echo $img["nivel"] ?></td>
              <td class="center idtitulo" width="100px"><a id="<?php echo $img["idranurado"] ?>" class="Delete uibutton special" tableToDelete="ranurado" nameField="idranurado">Eliminar</a> <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idranurado"] ?>&nivel=<?php echo $nivel ?>&idpadre=<?= $_REQUEST['idpadre'] ?>">Editar</a>
                <?php if ($nivel<7){ ?>
                <?php if ($img["paso"]=='P') {?>
                <a class="uibutton icon edit" href="index.php?seccion=porta_ranurado&idranurado=<?= $img["idranurado"] ?>&nivel=<?= $img["nivel"] ?>">Crear Portaherramienta</a>
                <?php }else{
									$nivel1=$img["nivel"]+1;
								?>
                <a class="uibutton icon edit" href="index.php?seccion=nivel&idranurado=<?= $img["idranurado"] ?>&nivel=<?= $nivel1 ?>&idpadre=<?= $img["idranurado"]?>">Crear SubNivel</a>
                <?php } ?>
                <?php } ?></td>
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
