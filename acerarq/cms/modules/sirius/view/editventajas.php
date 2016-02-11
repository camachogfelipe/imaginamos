<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $texto = $_POST["texto"];
    if($texto == "" ){
        $Erno = 2;
    }else{
    $texto = str_replace("'", "&#39;" , $texto);
    $texto = str_replace('"', "&quot;", $texto);
    $db->doQuery("UPDATE ventajas_sirius SET texto='".$texto."' WHERE idventajas_sirius=" . $id, 4);

    
    $Erno = 1;
    }
}
$info="SELECT * FROM ventajas_sirius WHERE idventajas_sirius=" . $id;
$db->doQuery($info, SELECT_QUERY);
$data = $db->results[0];
?>
<div class="header">
    <span>
        <span class="ico gray window"></span>Item </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php?seccion=ventajas">Atr&aacute;s</a>
        <fieldset>
            <legend>Editando Item</legend>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data["idventajas_sirius"]; ?>" name="id" id="id">
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto1" class="large"><?php echo $data["texto"]; ?></textarea>
                        <span class="f_help">Limite de caracteres 85/<span class="texto1"></span></span>
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>

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
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>