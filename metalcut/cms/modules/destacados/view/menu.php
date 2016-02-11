<?php

$db->doQuery("SELECT iddestacados FROM destacados  ORDER BY iddestacados DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["iddestacados"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$link=!empty($_POST['link']) ? $_POST['link'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/destacados", "destacados_" . $img, "960_392_destacados_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/destacados", "destacados_" . $id, "960_392_destacados_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['link']=="" && $_POST['texto']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO destacados(titulo,link,texto,imagen) VALUES ('".$titulo."','".$link."','".$texto."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['link']==""  && $_POST['texto']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE destacados SET titulo='" . $titulo . "', link='".$link."', texto='".$texto."' WHERE iddestacados=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE destacados SET imagen='" . $retorno["NameFile"] . "' WHERE iddestacados=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM destacados ORDER BY iddestacados ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM destacados WHERE iddestacados=" . $id;
    $db->doQuery("SELECT * FROM destacados WHERE iddestacados=" . $id, 1);
    $destacados = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Destacados</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 4) { ?>
            <fieldset>
                <legend><h1>Destacados</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $destacados["iddestacados"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $destacados["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 18/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Link</label>
                        <div>
                            <input type="text" name="link" id="link" class="medium" value="<?php echo $destacados["link"] ?>">
                            <!--<span class="f_help">Limite de caracteres 60/<span class="link"></span></span>-->
                        </div>
                    </div>                  
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $destacados["texto"] ?></textarea>
                          <span class="f_help">Limite de caracteres 42/<span class="texto"></span></span>  
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($destacados["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/destacados/<?php echo $destacados["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (126px x 126px) (.png, .jpg)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
                        </div>
                    </div> 
                    <br />
                    <div><a id="submitForm"  class="uibutton large">Guardar</a></div>
                </form>
            </fieldset>
        <?php } else { 
            
            ?>
            <label>Ya existen los 4 Destacados permitidos</label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Titulo</span></th>
                            <th><span class="th_wrapp">Link</span></th>
                            <th><span class="th_wrapp">Texto</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
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
                                <td><?php echo $img["link"] ?></td>
                                <td><?php echo $img["texto"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/destacados/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["iddestacados"] ?>" class="Delete uibutton special" tableToDelete="destacados" nameField="iddestacados">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["iddestacados"] ?>">Editar</a>
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