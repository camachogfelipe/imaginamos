<?php
$modulo='carburo'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null; 

if (empty($nivel)) $nivel=0;
$db->doQuery("SELECT idportafolio_carburo FROM portafolio_carburo where modulo='".$modulo."' and nivel='".$nivel."' ORDER BY idportafolio_carburo DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idportafolio_carburo"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 
$paso=!empty($_POST['paso']) ? $_POST['paso'] : null; 

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
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_".$modulo."" . $img, "960_392_portafolio_carburo_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/portafolio_".$modulo."", "portafolio_".$modulo."" . $id, "960_392_portafolio_carburo_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['paso'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO portafolio_carburo(modulo,titulo,texto,imagen,paso,nivel,idportafoliopadre) VALUES ('".$modulo."','".$titulo."','".$texto."','" . $retorno["NameFile"] . "','".$paso."','".$nivel."','".$idportafoliopadre."')";
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
         $sql="UPDATE portafolio_carburo SET titulo='" . $titulo . "',  texto='".$texto."', paso='".$paso."', nivel='".$nivel."', idportafoliopadre='".$idportafoliopadre."' WHERE idportafolio_carburo=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE portafolio_carburo SET imagen='" . $retorno["NameFile"] . "' WHERE idportafolio_carburo=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
  //  $db->doQuery("SELECT * FROM portafolio_carburo where modulo='".$modulo."' and nivel='".$nivel."'   and idportafoliopadre='".$idportafoliopadre."'  ORDER BY idportafolio_carburo ASC", 1);
     $db->doQuery("SELECT * FROM portafolio_carburo where modulo='".$modulo."' and nivel='".$nivel."'   ORDER BY idportafolio_carburo ASC", 1);
     
//   echo "SELECT * FROM portafolio_carburo where modulo='".$modulo."' and nivel='".$nivel."'   ORDER BY idportafolio_carburo ASC";
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM portafolio_carburo WHERE idportafolio_carburo=" . $id;
    $db->doQuery("SELECT * FROM portafolio_carburo WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio_carburo=" . $id, 1);
//    echo "SELECT * FROM portafolio_carburo WHERE modulo='".$modulo."' and nivel='".$nivel."'   and idportafolio_carburo=" . $id;
    $portafolio_carburo = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Carburado</span>
</div><!-- End header -->
<div class="content">
     <?php if (($nivel != 0) or (!empty($id)) ) { ?>
         <?php if ($nivel == 1) { ?>
          <a class="uibutton icon normal answer" href="index.php?seccion=menu&idportafolio_crburado=<?=$idportafolio ?>&nivel=<?=$nivel ?>&idpadre=<?= $idportafoliopadre ?>">Atras</a>
          <?php }else{ ?>
         <a class="uibutton icon normal answer" href="index.php?seccion=menu&idportafolio_crburado=<?=$idportafolio ?>&nivel=<?=$nivel ?>&idpadre=<?= $idportafoliopadre ?>">Atras</a>
          
          <?php } ?>
         
    <?php } ?>
    <div class="formEl_b">
        <?php if (($fil < 10) and (($nivel == 0) and (!empty($id))) ) { ?>

            <fieldset>

               <?php if($nivel == 0){ ?>
                <legend><h1>Carburo Solido</h1></legend>
              <?php }else{ ?>
                <legend><h1>Otros <?php echo $nivel ?></h1></legend>
              <?php } ?>  
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $portafolio_carburo["idportafolio_carburo"] ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo $modulo ?>" name="modulo" id="modulo">
                    <input type="hidden" value="<?php echo $nivel ?>" name="nivel" id="nivel">
                    
                    
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $portafolio_carburo["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $portafolio_carburo["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($portafolio_carburo["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/portafolio_<?php echo $modulo.'/'.$portafolio_carburo["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
        <?php if (empty($id)){ ?>
        <fieldset>
      
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
                            //print_r($img);
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["titulo"] ?></td>
                                <td><?php echo $img["texto"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/portafolio_<?php echo $modulo ?>/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                 <td><?php echo $img["nivel"] ?></td>
                                <td class="center idtitulo" width="100px">
                                    <?php if($nivel != 0){ ?>
                                       <a id="<?php echo $img["idportafolio_carburo"] ?>" class="Delete uibutton special" tableToDelete="portafolio_carburo" nameField="idportafolio_carburo">Eliminar</a> 
                                    <?php  } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idportafolio_carburo"] ?>&nivel=<?php echo $nivel ?>&idpadre=<?= $_REQUEST['idpadre'] ?>">Editar</a>
                                    <?php if ($nivel<7){ ?>
                                        
                                        <?php if ($img["paso"]=='P') {?>
                                                <a class="uibutton icon edit" href="index.php?seccion=porta_portafolio_carburo&idportafolio_carburo=<?= $img["idportafolio_carburo"] ?>&nivel=<?= $img["nivel"] ?>">Crear Portaherramienta</a>
                                        <?php }else{ 
                                             $nivel1=$img["nivel"]+1;
                                            ?>
                                                <a class="uibutton icon edit" href="index.php?seccion=nivel&idportafolio_carburo=<?= $img["idportafolio_carburo"] ?>&nivel=<?= $nivel1 ?>&idpadre=<?= $img["idportafolio_carburo"]?>">Crear SubNivel</a>
                                        <?php } ?>
                                   <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>
           
         </fieldset>
          <?php
                }
            ?>
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