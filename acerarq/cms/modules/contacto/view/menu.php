<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $texto = $_POST["texto"];
    $mapa = $_POST["mapa"];
    if ($texto == '' || $mapa == '') {
        $Erno = 2;
    } else {
        $db->doQuery("UPDATE contacto_des SET texto='" . $texto . "',mapa='".$mapa."' WHERE idcontacto_des=" . $id, 4);        
        $Erno = 1;
    }
}

$db->doQuery("SELECT * FROM contacto_des WHERE idcontacto_des=1", 1);
$info = $db->results[0];
?>

<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>
        Informacion Contacto
    </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>

            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?= $info["idcontacto_des"] ?>" name="id" id="id">
                <div class="section">
                    <label>Texto Descriptivo</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"> <?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 70/<span class="texto"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Mapa Etiqueta Iframe
                        <small>width="368" height="378"</small>
                    </label>
                    <div>
                        <textarea name="mapa" id="mapa" class="large"><?php echo $info["mapa"] ?></textarea>
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