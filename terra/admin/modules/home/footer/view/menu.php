<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {
        $tel1 = str_replace("'", "&#39;", GetData('tel1'));
        $tel1 = str_replace('"', "&#34;", $tel1);
        $tel2 = str_replace("'", "&#39;", GetData('tel2'));
        $tel2 = str_replace('"', "&#34;", $tel2);
        $direccion = str_replace("'", "&#39;", GetData('direccion'));
        $direccion = str_replace('"', "&#34;", $direccion);
        $ciudad = str_replace("'", "&#39;", GetData('ciudad'));
        $ciudad = str_replace('"', "&#34;", $ciudad);
        $correo = str_replace("'", "&#39;", GetData('correo'));
        $correo = str_replace('"', "&#34;", $correo);

        $db->doQuery("UPDATE footer SET 
                                tel1='" . $tel1 . "',
                                tel2='" . $tel2 . "',
                                direccion='" .$direccion . "',
                                ciudad='" . $ciudad . "',
                                correo='" . $correo . "'
                                WHERE id=" . $id, 4);
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM footer WHERE id=" . $id, 1);
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
            HOME >> FOOTER >> TODAS LAS PAGINAS 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3><?php echo ($id == 0) ? "" : "Editando tags footer" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>Primer tel&eacute;fono</label>
                        <div>
                            <input type="text" id="tel1" name="tel1" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agregar primer teléfono" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["tel1"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 17 / <span class="tel1"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Segundo tel&eacute;fono</label>
                        <div>
                            <input type="text" id="tel2" name="tel2" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agregar segundo telefono" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["tel2"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 17 / <span class="tel2"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Direcci&oacute;n</label>
                        <div>
                            <input type="text" id="direccion" name="direccion" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agregar dirección" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["direccion"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 28 / <span class="direccion"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Ciudad</label>
                        <div>
                            <input type="text" id="ciudad" name="ciudad" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agregar ciudad" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["ciudad"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 28 / <span class="ciudad"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Correo</label>
                        <div>
                            <input type="text" id="correo" name="correo" class="validate[required,custom[email]]" data-validation-placeholder="" PlaceHolder="Agregar correo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["correo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 28 / <span class="correo"></span></span>
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
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Footer editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#tel1').limit("17", ".tel1");
    $('#tel2').limit("17", ".tel2");
    $('#direccion').limit("28", ".direccion");
    $('#ciudad').limit("28", ".ciudad");
    $('#correo').limit("28", ".correo");
   
</script>