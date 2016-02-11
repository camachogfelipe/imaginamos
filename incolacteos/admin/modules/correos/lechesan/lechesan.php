<?php
$id = 1;
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    
        $db->doQuery("UPDATE correo2 SET 
            peticion='" . GetData("peticion") . "',
            queja='" . GetData("queja") . "',
            recurso='" . GetData("recurso") . "',
            otro='" . GetData("otro") . "',
            contactenos='" . GetData("contactenos") . "'                                        
            WHERE id=" . $id, 4);
       
        $val = 2;
    
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM correo2 WHERE id=" . $id, 1);
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
            ENV&Iacute;O DE CORREOS ELECTR&Oacute;NICOS>>LECHESAN >> CONFIGURACI&Oacute;N
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

    

            <fieldset>
                <h3><?php echo ($id == 0) ? "AGREGANDO CONTACTO" : "CONFIGURACI&Oacute;N" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">                 
                    <div style="margin-top: 36px;">
                        <label>Peticion</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="peticion"  id="peticion" placeholder="Agregar correo peticion" value="<?php echo $oficina["peticion"] ?>">                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Queja</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="queja"  id="queja" placeholder="Agregar correo queja" value="<?php echo $oficina["queja"] ?>">
                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Recurso</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="recurso"  id="recurso" placeholder="Agregar correo recurso" value="<?php echo $oficina["recurso"] ?>">
                         
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Otro</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="otro"  id="otro" placeholder="Agregar correo otro" value="<?php echo $oficina["otro"] ?>">
                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Correo cont&aacute;ctenos</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="contactenos"  id="contactenos" placeholder="Agregar correo contáctenos" value="<?php echo $oficina["contactenos"] ?>">
                            
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