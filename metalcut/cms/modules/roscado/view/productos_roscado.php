<?php
$nivel = !empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null;
$db->doQuery("SELECT idproductos_roscado FROM productos_roscado  ORDER BY idproductos_roscado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idproductos_roscado"] + 1;
$idroscado = $_REQUEST['idroscado'];

$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : null;
$titulo = !empty($_POST['titulo']) ? $_POST['titulo'] : null;
$texto = !empty($_POST['texto']) ? $_POST['texto'] : null;

$titulo = str_replace("'", "&#39;", $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;", $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)) {
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/productos_roscado", "productos_roscado_" . $img, "960_392_productos_roscado_" . $img, 960, 392);
} else {
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/productos_roscado", "productos_roscado_" . $id, "960_392_productos_roscado_" . $id, 960, 392);
}
$retorno["Status"] = !empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])) {
    if ($_POST['titulo'] == "" && $_POST['texto'] == "" && $retorno = "") {
        $Erno = 2;
    } else {
        if ($retorno["Status"] == "Uploader") {
            $sql = "INSERT INTO productos_roscado(idroscado,titulo,texto,imagen) VALUES ('" . $idroscado . "','" . $titulo . "','" . $texto . "','" . $retorno["NameFile"] . "')";
            // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
        } else {
            $Erno = 3;
        }
    }
} else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])) {
    if ($_POST['titulo'] == "" && $_POST['texto'] == "") {
        $Erno = 2;
    } else {
        $sql = "UPDATE productos_roscado SET titulo='" . $titulo . "',  texto='" . $texto . "' WHERE idproductos_roscado=" . $id;
        // echo $sql;
        $db->doQuery($sql, 4);
        $Erno = 1;

        if ($retorno["Status"] == "Uploader") {
            $sql1 = "UPDATE productos_roscado SET imagen='" . $retorno["NameFile"] . "' WHERE idproductos_roscado=" . $id;
            //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {
            
        }
    }
}
$db->doQuery("SELECT * FROM roscado WHERE idroscado=" . $idroscado, 1);
$roscado = $db->results[0];
if (empty($id)) {
    $db->doQuery("SELECT * FROM productos_roscado ORDER BY idproductos_roscado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)) {
    //   echo "SELECT * FROM productos_roscado WHERE idproductos_roscado=" . $id;
    $db->doQuery("SELECT * FROM productos_roscado WHERE idproductos_roscado=" . $id, 1);
    $productos_roscado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Roscado</span>
</div><!-- End header -->
<div class="content">
    <?php if (!empty($_REQUEST['id'])) { ?>
        <a class="uibutton icon normal answer" href="index.php?seccion=productos_roscado&idroscado=<?= $idroscado ?>">Atras</a>
    <?php } else { ?>
        <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
    <?php } ?>

    <div class="formEl_b">
        <?php if ($fil < 2) { ?>
            <fieldset>
                <legend><h1>Productos</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $productos_roscado["idproductos_roscado"] ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo $idroscado ?>" name="idroscado" id="idroscado">

                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $productos_roscado["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 17/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $productos_roscado["texto"] ?></textarea>

                        </div>
                    </div>
                    <div class="section">
                        <?php if (!empty($productos_roscado["imagen"])) { ?> 
                            <label>Imagen actual</label> <br /><br />
                            <div>
                                <img src="../../../../assets/img/productos_roscado/<?php echo $productos_roscado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                            </div>
                            <br />
                        <?php } else { ?>
                            <label>Imagen </label><br /><br />
                        <?php } ?>                      
                        <label>Subir nueva imagen (196px x 246px) (.png, .jpg)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
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
            <?php if (empty($id)) { ?>
                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><span class="th_wrapp">Titulo</span></th>
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
                                    <td><?php echo $img["texto"] ?></td>
                                    <td class="center" width="70px">
                                        <img src="../../../../assets/img/productos_roscado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                    </td>


                                    <td class="center idtitulo" width="100px">
                                        <a id="<?php echo $img["idproductos_roscado"] ?>" class="Delete uibutton special" tableToDelete="productos_roscado" nameField="idproductos_roscado">Eliminar</a> 
                                        <a class="uibutton icon edit" href="index.php?seccion=productos_roscado&idroscado=<?= $idroscado ?>&id=<?= $img["idproductos_roscado"] ?>">Editar</a>
        <?php if ($nivel < 7) { ?>

            <?php if ($roscado["paso"] == 'P') { ?>

                                                <?php if ($i == 0) { ?>
                                                    <a class="uibutton icon edit" href="index.php?seccion=porta_roscado_interno&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Crear Portaherramienta</a>
                                                    <a class="uibutton icon edit" href="index.php?seccion=img_roscado&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Imagen Portaherramienta</a>
                                                <?php } ?>
                                                <?php if ($i == 1) { ?>
                                                    <a class="uibutton icon edit" href="index.php?seccion=porta_roscado_externo&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Crear Portaherramienta</a>
                                                    <a class="uibutton icon edit" href="index.php?seccion=img_roscado&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Imagen Portaherramienta</a>
                                                <?php } ?>
                                            <?php
                                            } else {
                                                $nivel1 = $roscado["nivel"] + 1;
                                                ?>
                                                <a class="uibutton icon edit" href="index.php?seccion=nivel&idroscado=<?= $roscado["idroscado"] ?>&nivel=<?= $nivel1 ?>&idpadre=<?= $roscado["idroscado"] ?>">Crear SubNivel</a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>

        <!--                                <td class="center idtitulo" width="100px">
        <?php if (($i + 1) != $fil) { ?>
                <a id="<?php echo $img["idproductos_roscado"] ?>" class="Delete uibutton special" tableToDelete="productos_roscado" nameField="idproductos_roscado">Eliminar</a> 
                                    <?php } ?>
            <a class="uibutton icon edit" href="index.php?seccion=productos_roscado&idroscado=<?= $idroscado ?>&id=<?= $img["idproductos_roscado"] ?>">Editar</a>
                                    <?php if ($i == 0) { ?>
                <a class="uibutton icon edit" href="index.php?seccion=porta_roscado_interno&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Crear Portaherramienta</a>
                <a class="uibutton icon edit" href="index.php?seccion=img_roscado&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Imagen Portaherramienta</a>
                                    <?php } ?>
        <?php if ($i == 1) { ?>
                <a class="uibutton icon edit" href="index.php?seccion=porta_roscado_externo&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Crear Portaherramienta</a>
                <a class="uibutton icon edit" href="index.php?seccion=img_roscado&idproductos_roscado=<?= $img["idproductos_roscado"] ?>&idroscado=<?= $idroscado ?>">Imagen Portaherramienta</a>
                                    <?php } ?>
        </td>-->
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
            ?><script>showError('Faltan datos ', 3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada', 8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos', 8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado', 8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen', 8000)</script>
            <?php
        }
    }
}
?>