<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        $id = 1;
    } else {

        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $texto = strip_tags($texto, '<br><p><a><h1><h2><h3><h4><h5><h6><font>');
      
        $db->doQuery("UPDATE textos SET texto='" . $texto . "' WHERE id=" . $id, 4);
       
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM textos WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
    $(function() {
        $('#forminterno').validationEngine();
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            QUIENES SOMOS >> CALIFORNIA >> EDITANDO 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">                     
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
                        </div>
                    </div>
                    <p>&nbsp;</p>                        
                </form>        
            </fieldset>
            <p>&nbsp;</p>
            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
        </div>
    </div>
    <!--Fin del Contenido del Modulo-->
</div>
<script>
    cambiar(<?php echo $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {

    if ($val == 7) {
        ?><script>showError('Formato imagen (PNG - JPG)',3000);</script>
        <?php
    } elseif ($val == 1) {
        ?><script>showSuccess('Agregado correctamente',8000)</script>
        <?php
    } elseif ($val == 2) {
        ?><script>showSuccess('Editado correctamente',8000)</script>
        <?php
    }
}
?>
<script type="text/javascript" language="javascript">   
    $('#texto').cleditor();
   
</script>