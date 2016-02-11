<?php
$modulo='accesorios'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : 0; 
$db->doQuery("SELECT idportafolio FROM portafolio where modulo='".$modulo."'  ORDER BY idportafolio DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idportafolio"] + 1;

$nivel_siguiente = $nivel+1; 
 

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

 $db->doQuery("SELECT * FROM portafolio WHERE idportafolio='" . $idportafoliopadre."' LIMIT 1", 1);
 $atras = $db->results[0];
 $atras_padre = $atras['idportafoliopadre'];
 $atras_nivel = $atras['nivel'];
 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_".$modulo."" . $img, "960_392_portafolio_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_".$modulo."" . $id, "960_392_portafolio_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['paso'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO portafolio(modulo,titulo,texto,imagen,paso,nivel,idportafoliopadre, orientacion) VALUES ('".$modulo."','".$titulo."','".$texto."','" . $retorno["NameFile"] . "','".$paso."','".$nivel."','".$idportafoliopadre."', '".$orientacion."')";
//         echo $sql;
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
         $sql="UPDATE portafolio SET titulo='" . $titulo . "',  texto='".$texto."', paso='".$paso."', nivel='".$nivel."', idportafoliopadre='".$idportafoliopadre."', orientacion ='".$orientacion."' WHERE idportafolio=" . $id;
//         echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE portafolio SET imagen='" . $retorno["NameFile"] . "' WHERE idportafolio=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM portafolio where modulo='".$modulo."' and nivel='".$nivel."' and idportafoliopadre='".$idportafoliopadre."' ORDER BY idportafolio ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
    $db->doQuery("SELECT * FROM portafolio WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio=" . $id, 1);
    $portafolio = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Accesorios </span>


<?php if ($nivel != 0 or !empty($id)) {
  
   if (!empty($id)) { ?>
<a style="float:right; margin-top:6px; margin-right:5px;" class="uibutton icon normal answer" href="index.php?seccion=menu&nivel=<?= $atras_nivel; ?>&name=<?= $_REQUEST['name'] ?>&idpadre=<?= $atras_padre; ?>">Atras</a>

<?php }else{ 
       if($atras_nivel == 0){
?>
    <a style="float:right; margin-top:6px; margin-right:5px;" class="uibutton icon normal answer" href="index.php?seccion=nivel&nivel=1&idpadre=1">Atras</a>
   <?php }else{ ?>
<a style="float:right; margin-top:6px; margin-right:5px;" class="uibutton icon normal answer" href="index.php?seccion=nivel&name=<?= $_REQUEST['name'] ?>&nivel=<?= $nivel; ?>&idpadre=<?= $idportafoliopadre; ?>">Atras</a>
    <?php } ?>
 <?php } ?>
 
  <?php } ?>


</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 10 and (!empty($id)) ){ ?>
            <fieldset>
                <legend><h1>Otros <?php echo $nivel ?></h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $portafolio["idportafolio"] ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo $modulo ?>" name="modulo" id="modulo">
                    <input type="hidden" value="<?php echo $nivel ?>" name="nivel" id="nivel">
                    
                    
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $portafolio["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Orientaci&oacute;n</label>
                        <div>
                            <select name="orientacion" id="orientacion">
                                <?php if($portafolio["orientacion"] == 'SI') {
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
                            <textarea name="texto" id="texto" class="large"><?php echo $portafolio["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($portafolio["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/portafolio_<?php echo $modulo.'/'.$portafolio["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                                    <?php //if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idportafolio"] ?>" class="Delete uibutton special" tableToDelete="portafolio" nameField="idportafolio">Eliminar</a> 
                                    <?php //} ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&idportafolio=<?= $img["idportafolio"] ?>&id=<?= $img["idportafolio"] ?>&nivel=<?php echo $nivel ?>&idpadre=<?= $idportafoliopadre ?>">Editar</a>
                                    <?php if ($nivel<7){ ?>
                                        
                                        <?php if ($img["paso"]=='P') {?>
                                                <a class="uibutton icon edit" href="index.php?seccion=porta_portafolio&idportafolio=<?= $img["idportafolio"] ?>&nivel=<?= $img["nivel"] ?>">Crear Portaherramienta</a>
                                        <?php }else{ 
                                             $nivel1=$img["nivel"]+1;
                                               ?>
                                                <a class="uibutton icon edit" href="index.php?seccion=nivel&nivel=<?= $nivel_siguiente ?>&name=<?= $_REQUEST['name'] ?>&idpadre=<?= $img["idportafolio"]?>">Crear SubNivel</a>
                                             <?php 
                                             } ?>
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