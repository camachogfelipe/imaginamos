<?php
$cat = (int)$_GET["cat"];
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    if($titulo == "" || $texto == "" ){
        $Erno = 2;
    }else{
    $titulo = str_replace("'", "&#39;" , $titulo);
    $titulo = str_replace('"', "&quot;", $titulo);
    $texto = str_replace("'", "&#39;" , $texto);
    $texto = str_replace('"', "&quot;", $texto);
    $db->doQuery("UPDATE subcategoria_obras SET titulo='" . $titulo . "',texto='".$texto."' WHERE idsubcategoria_obras=" . $id, 4);   
    $Erno = 1;
    }
}
$info="SELECT * FROM subcategoria_obras WHERE idsubcategoria_obras=" . $id;
$db->doQuery($info, SELECT_QUERY);
$data = $db->results[0];
?>
<div class="header">
    <span>
        <span class="ico gray window"></span>Servicio </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php?seccion=servicios&cat=<?php echo $cat ?>">Atr&aacute;s</a>
        <fieldset>
            <legend>Editando Servicio</legend>
            <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data["idsubcategoria_obras"]; ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu2" class="medium" value="<?php echo $data["titulo"]; ?>">
                        <span class="f_help">Limite de caracteres 17/<span class="titu2"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"><?php echo $data["texto"] ?></textarea>
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm2" onclick="$('#forminterno2').submit();" class="uibutton normal large">Guardar</a></div>

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