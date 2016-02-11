<?php
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id1"])) {
    $id1 = $_POST["id1"];
    $texto = $_POST["texto"];    
    if ($texto == '') {
        $Erno = 2;
    } else {
        
        $texto = str_replace("'", "&#39;" , $texto);
        $texto = str_replace('"', "&quot;", $texto);
        $db->doQuery("UPDATE sirius_des SET texto='" . $texto . "' WHERE idsirius_des=" . $id1, 4); 
        $Erno = 1;
    }
}

?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Sirius</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>
            <?php 
            $db->doQuery("SELECT * FROM sirius_des WHERE idsirius_des=1", 1);
            $info = $db->results[0];
            ?>
            <legend>Historia</legend>
            <div class="section"><a href="index.php?seccion=caracteristicas" id="submitForm" class="uibutton normal large">Caracteristicas</a></div>
            <div class="section"><a href="index.php?seccion=ventajas" id="submitForm" class="uibutton normal large">Ventajas</a></div>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?php echo $info["idsirius_des"]; ?>" name="id1" id="id1">
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"><?php echo $info["texto"] ?></textarea>
                        <span class="f_help">Limite de caracteres 1800/ <span class="texto"></span></span>
                    </div>
                </div>
                <br><br>                  
                <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                <p>&nbsp;</p>
            </form>

        </fieldset>
        <br><br>        
        <p>&nbsp;</p>
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