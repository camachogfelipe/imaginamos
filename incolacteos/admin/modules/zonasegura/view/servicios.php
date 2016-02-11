<?php
$id = $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $db->doQuery("INSERT INTO bullet_contactenos (id,servicio) VALUES (NULL,1)", INSERT_QUERY);
        $id = $db->getLastId();
        $db->doQuery("UPDATE bullet_contactenos SET             
                    bullet='" . GetData("titulo") . "'                
                    WHERE id=" . $id, 4);
        $val = 1;
    } else {
        $db->doQuery("UPDATE bullet_contactenos SET             
                    bullet='" . GetData("titulo") . "'                
                    WHERE id=" . $id, 4);

        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM bullet_contactenos WHERE id=" . $id, 1);
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
            CONT&Aacute;CTENOS >> DIRECCI&Oacute;N F&Iacute;SICA
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>
                <a class="uibutton confirm" href="index.php?seccion=lista">Agregar contenido</a><br><br>
                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["bullet"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 58 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                   
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
            echo '<script>setTimeout(\'alert("Servicio agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Servicio editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo').limit("58", ".titulo");
    $('#descripcion').limit("308", ".descripcion");
</script>