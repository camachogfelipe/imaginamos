<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    $link = $_POST["link"];
    if ($titulo == '' || $texto == '' || $link == '') {
        $Erno = 2;
    } else {
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $texto = str_replace("'", "&#39;" , $texto);
        $texto = str_replace('"', "&quot;", $texto);
        $db->doQuery("UPDATE bienvenida SET titulo='" . $titulo . "',texto='" . $texto . "',link='" .$link."' WHERE idbienvenida=" . $id, 4);
        $Erno = 1;
    }
}

$db->doQuery("SELECT * FROM bienvenida WHERE idbienvenida=1", 1);
$desta = $db->results[0];
?>

<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>
        Informacion Bienvenida
    </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>

            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?= $desta["idbienvenida"] ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu" class="medium" value="<?php echo $desta["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 11/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto" class="large"> <?php echo $desta["texto"] ?></textarea>
                        <span class="f_help">
                            Limite de caracteres 252/
                            <span class="texto"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Link</label>
                    <div>
                        <input type="text" name="link" id="link" class="medium" value="<?php echo $desta["link"] ?>">
                    </div>
                </div>
            </form>
        </fieldset>

        <p>&nbsp;</p>

        <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>

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
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>