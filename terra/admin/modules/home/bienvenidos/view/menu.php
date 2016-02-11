<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {
        //print_r(GetData("texto"));    exit;
        $db->doQuery("UPDATE bienvenidos SET texto='" . GetData("texto") . "',titulo='" . GetData("titulo") . "' WHERE id=" . $id, 4);
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM bienvenidos WHERE id=" . $id, 1);
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
            HOME >> BIENVENIDOS >> EDITANDO 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3><?php echo ($id == 0) ? "" : "Editando Texto de bienvenida" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 47 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agrega tu texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 562 / <span class="texto"></span></span>
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
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Bienvenidos agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Bienvenidos editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo').limit("47", ".titulo");
    $('#texto').limit("562", ".texto");
</script>