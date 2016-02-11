<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $texto = $_POST["texto"];
    if ($texto == '') {
        $Erno = 2;
    } else {
        $texto = str_replace("'", "&#39;" , $texto);
        $texto = str_replace('"', "&quot;", $texto);
        $db->doQuery("UPDATE bienvenida_sirius SET texto='" . $texto . "' WHERE idbienvenida_sirius=" . $id, 4);
        $Erno = 1;
    }
}

$db->doQuery("SELECT * FROM bienvenida_sirius WHERE idbienvenida_sirius=1", 1);
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

                <input type="hidden" value="<?= $desta["idbienvenida_sirius"] ?>" name="id" id="id">                
                <div class="section">
                    <label>Texto </label>
                    <div>
                        <textarea name="texto" id="texto" class="large"> <?php echo $desta["texto"] ?></textarea>
                        <span class="f_help">
                            Limite de caracteres 250/
                            <span class="texto"></span></span>
                    </div>
                </div>
            </form>
        </fieldset>

        <p>&nbsp;</p>

        <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>

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