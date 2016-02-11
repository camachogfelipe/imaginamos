<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        //Primero creamos el campo en la bd
        $db->doQuery("INSERT INTO footer (id) VALUES (NULL)", INSERT_QUERY);
        $id = $db->getLastId();
        $db->doQuery("UPDATE footer SET 
                            titulo='" . GetData("titulo") . "',
                            direccion='" . GetData("direccion") . "',
                            direccion1='" . GetData("direccion1") . "',
                            telefono='" . GetData("telefono") . "',
                            fax='" . GetData("fax") . "',
                            correo='" . GetData("correo") . "'                              
                            WHERE id=" . $id, 4);

        $val = 1;
    } else {
        $db->doQuery("UPDATE footer SET 
                            titulo='" . GetData("titulo") . "',
                            direccion='" . GetData("direccion") . "',
                            direccion1='" . GetData("direccion1") . "',
                            telefono='" . GetData("telefono") . "',
                            fax='" . GetData("fax") . "',
                            correo='" . GetData("correo") . "'                              
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
        $("#forminterno").validationEngine();
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            HOME >> FOOTER >>  <?php echo ($id == 0) ? "AGREGANDO" : "EDITANDO" ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo ($id == 0) ? "AGREGANDO CONTACTO" : "EDITANDO CONTACTO" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>Ciudad</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="titulo"  id="titulo1" placeholder="Agregar ciudad" value="<?php echo $oficina["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 15 / <span class="titulo1"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Direcci&oacute;n superior</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="direccion"  id="direccion" placeholder="Agregar dirección superior" value="<?php echo $oficina["direccion"] ?>">
                            <span class="f_help">Limite de caracteres 49 / <span class="direccion"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Direcci&oacute;n inferior</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="direccion1"  id="direccion1" placeholder="Agregar dirección inferior" value="<?php echo $oficina["direccion1"] ?>">
                            <span class="f_help">Limite de caracteres 49 / <span class="direccion1"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Tel&eacute;fono</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="telefono"  id="telefono" placeholder="Agregar teléfono" value="<?php echo $oficina["telefono"] ?>">
                            <span class="f_help">Limite de caracteres 37 / <span class="telefono"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Fax</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="fax"  id="fax" placeholder="Agregar fax" value="<?php echo $oficina["fax"] ?>">
                            <span class="f_help">Limite de caracteres 40 / <span class="fax"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Correo electr&oacute;nico</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" type="text" name="correo"  id="correo" placeholder="Agregar correo" value="<?php echo $oficina["correo"] ?>">
                            <span class="f_help">Limite de caracteres 36 / <span class="correo"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>

                    <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>

        </div>
    </div>


    <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    $('#titulo1').limit('15', '.titulo1');
    $('#direccion').limit('49', '.direccion');
    $('#direccion1').limit('49', '.direccion1');
    $('#telefono').limit('37', '.telefono');
    $('#fax').limit('40', '.fax');
    $('#correo').limit('36', '.correo');
  

</script>
<?php
if (isset($val)) {
    if (intval($val)) {
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
}
?>