<?php
$modulo='fresado'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null; 
$db->doQuery("SELECT idportafolio_fresado FROM portafolio_fresado where modulo='".$modulo."' and nivel='".$nivel."'   ORDER BY idportafolio_fresado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idportafolio_fresado"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 
$paso=!empty($_POST['paso']) ? $_POST['paso'] : null; 
$orientacion=!empty($_POST['orientacion']) ? $_POST['orientacion'] : null; 

if ($nivel=='0'){
    $idportafoliopadre=$id.'xxx';  
}else{
     $idportafoliopadre=!empty($_REQUEST['idpadre']) ? $_REQUEST['idpadre'] : 0; 
}

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_fresado_".$modulo."" . $img, "960_392_portafolio_fresado_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_fresado_".$modulo."" . $id, "960_392_portafolio_fresado_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['paso'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO portafolio_fresado(modulo,titulo,texto,imagen,paso,nivel,idportafoliopadre, orientacion) VALUES ('".$modulo."','".$titulo."','".$texto."','" . $retorno["NameFile"] . "','".$paso."','".$nivel."','".$idportafoliopadre."', '".$orientacion."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == ""  && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE portafolio_fresado SET titulo='" . $titulo . "',  texto='".$texto."', paso='".$paso."', nivel='".$nivel."', idportafoliopadre='".$idportafoliopadre."', orientacion ='".$orientacion."'  WHERE idportafolio_fresado=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE portafolio_fresado SET imagen='" . $retorno["NameFile"] . "' WHERE idportafolio_fresado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM portafolio_fresado where modulo='".$modulo."' and nivel='".$nivel."' and idportafoliopadre='".$idportafoliopadre."'  ORDER BY idportafolio_fresado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM portafolio_fresado WHERE idportafolio_fresado=" . $id;
    $db->doQuery("SELECT * FROM portafolio_fresado WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio_fresado=" . $id, 1);
   // echo "SELECT * FROM portafolio_fresado WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio_fresado=" . $id;
    $portafolio_fresado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Accesorios </span>
</div><!-- End header -->
<div class="content">
    <a class="uibutton icon normal answer" href="index.php?seccion=menu&idportafolio_fresado=<?=$idportafolio ?>&nivel=<?=$nivel ?>&idpadre=<?= $idportafoliopadre ?>">Atras</a>
    
    <div class="formEl_b">
        <?php if ($fil < 10) { ?>
            <fieldset>
                <legend><h1>Otros <?php echo $nivel ?></h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $portafolio_fresado["idportafolio_fresado"] ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo $modulo ?>" name="modulo" id="modulo">
                    <input type="hidden" value="<?php echo $nivel ?>" name="nivel" id="nivel">
                    
                    
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $portafolio_fresado["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Orientaci&oacute;n</label>
                        <div>
                            <select name="orientacion" id="orientacion">
                                <?php if($portafolio_fresado["orientacion"] == 'SI') {
                                    ?>
                                <option value="SI" selected="selected">SI</option>
                                <option value="NO">NO</option>
                                <?php
                                } else {
                                    ?>
                                <option value="SI">SI</option>
                                <option value="NO" selected="selected">NO</option>
                                <?php
                                } ?>
                                
                            </select>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $portafolio_fresado["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($portafolio_fresado["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/portafolio_<?php echo $modulo.'/'.$portafolio_fresado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
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
                            <?php if ($nivel<7){ ?>
                           <select id="paso" name="paso">
				<option value="">-Seleccionar-</option>
				<option value="P">Portaherramientas</option>
				<option value="S">Subnivel</option>
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
                    <div>
                        <a id="submitForm"  class="uibutton large">Guardar</a>
                    </div>
                </form>
            </fieldset>
        <?php } else { 
            
            ?>
            <label></label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Titulo</span></th>
                            <th><span class="th_wrapp">Orientaci&oacute;n</span></th>
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
                            //print_r($img);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["titulo"] ?></td>
                                <td><?php echo $img["orientacion"] ?></td>
                                <td><?php echo $img["texto"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/portafolio_<?php echo $modulo ?>/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                 <td><?php echo $img["nivel"] ?></td>
                                <td class="center idtitulo" width="100px">
                                    <a id="<?php echo $img["idportafolio_fresado"] ?>" class="Delete uibutton special" tableToDelete="portafolio_fresado" nameField="idportafolio_fresado">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idportafolio_fresado"] ?>&nivel=<?php echo $nivel ?>&idpadre=<?= $_REQUEST['idpadre'] ?>">Editar</a>
                                    <?php if ($nivel<7){ ?>
                                        
                                        <?php if ($img["paso"]=='P') {?>
                                                <a class="uibutton icon edit" href="index.php?seccion=porta_portafolio_fresado&idportafolio_fresado=<?= $img["idportafolio_fresado"] ?>&nivel=<?= $img["nivel"] ?>">Crear Portaherramienta</a>
                                        <?php }else{ 
                                             $nivel1=$img["nivel"]+1;
                                            ?>
                                                <a class="uibutton icon edit" href="index.php?seccion=nivel&idportafolio_fresado=<?= $img["idportafolio_fresado"] ?>&nivel=<?= $nivel1 ?>&idpadre=<?= $img["idportafolio_fresado"]?>">Crear SubNivel</a>
                                        <?php } ?>
                                   <?php } ?>
                                </td>
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
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>