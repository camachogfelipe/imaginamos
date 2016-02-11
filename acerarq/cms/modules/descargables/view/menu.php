<?php
// Validamos si hizo post y desea subir una imagen
$db->doQuery("SELECT idderechos FROM descargables ORDER BY iddescargables DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["iddescargables"] + 1;
if (isset($_POST["id"])) {
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    if($titulo == "" || $texto == ""){
        $Erno =2;
    }else{
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/descargables", "descargables_" . $img, "170_100_descargables_" . $img, 170, 100);
        $retorno2 = ClassFile::UploadFile("archivo", "../../../../assets/img/descargables/archivos");
        if ($retorno2["Status"] == "Uploader") {
            if ($retorno["Status"] == "Uploader") {
                $db->doQuery("INSERT INTO descargables(titulo,texto,imagen,archivo) VALUES ('" . $titulo . "','" . $texto . "','" . $retorno["NameFile"] . "','".$retorno2["NameFile"]."')", 2);
                $Erno = 1;
            } else {
                $Erno = 3;
            }
        }else{
            $Erno = 3;
        }
       
    }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM descargables ORDER BY iddescargables ASC", 1);
$fil = $db->rows;
?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Descargables</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>
           <?php if ($fil < 40) { ?>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu" class="medium" value="">
                        <span class="f_help">Limite de caracteres 25/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto Descriptivo</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"></textarea>
                        <span class="f_help">Limite de caracteres 127/<span class="texto"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Imagen</label>
                    <label>Subir nueva imagen (170px x 100px) (.jpg - .png)</label>
                    <div>
                        <input type="file" name="img" id="img" />
                    </div>
                </div> 
                <div class="section">
                    <label>Archivo </label>
                    <label>Archivo Formato (Pdf)</label>
                    <div>
                        <input type="file" name="archivo" id="archivo" />
                    </div>
                </div> 
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>

        </fieldset>
        <?php } else { ?>
            <label>Ya existen las 40 Items permitidos</label><?php } ?>
        <p>&nbsp;</p>
        <fieldset>
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Titulo</div></th>	
                            <th><div class="th_wrapp">Imagen</div></th>
                    <th><div class="th_wrapp">Acciones</div></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i <= $fil - 1; $i++) {
                            $data = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td class="center" width="70px"><?php echo $data["titulo"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/descargables/<?php echo $data["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center" width="100px">
                                    <a class="uibutton"   href="index.php?seccion=descargables&id=<?php echo $data["iddescargables"] ?>">Editar</a>
                                    <a id="<?php echo $data["iddescargables"] ?>" class="Delete uibutton special" tableToDelete="descargables" nameField="iddescargables">Eliminar</a>
                                </td>  
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </div>
</div>
<!--Fin del Contenido del Modulo-->
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
            ?><script>showError('Max. 727 caracteres en el texto Descriptivo',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>