<?php
$id = 1;
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    
        $db->doQuery("UPDATE phpmailer SET 
            SMTPAuth='" . GetData("SMTPAuth") . "',
            SMTPSecure='" . GetData("SMTPSecure") . "',
            Host='" . GetData("Host") . "',
            Port='" . GetData("Port") . "',
            Username='" . GetData("Username") . "',
            Password='" . GetData("Password") . "',
            Froms='" . GetData("Froms") . "',
            FromName='" . GetData("FromName") . "',
            Subject='" . GetData("Subject") . "'                              
            WHERE id=" . $id, 4);
       
        $val = 2;
    
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM phpmailer WHERE id=" . $id, 1);
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
            ENV&Iacute;O DE CORREOS ELECTR&Oacute;NICOS >> CONFIGURACI&Oacute;N
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
                        <label>SMTP Auth</label>
                        <div style="margin-left: 200px;">
                            <select name="SMTPAuth" >
                                <option <?php echo ($oficina["SMTPAuth"]== "true" ?"selected='selected'":"")?> value="true">Si</option>
                                <option <?php echo ($oficina["SMTPAuth"]== "false" ?"selected='selected'":"")?> value="false">No</option>
                            </select>    
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>SMTP Secure</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="SMTPSecure"  id="SMTPSecure" placeholder="Agregar SMTPSecure" value="<?php echo $oficina["SMTPSecure"] ?>">                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Host</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="Host"  id="Host" placeholder="Agregar Host" value="<?php echo $oficina["Host"] ?>">
                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Port</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="Port"  id="Port" placeholder="Agregar Port" value="<?php echo $oficina["Port"] ?>">
                         
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Username</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required,custom[email]]" data-validation-placeholder="" type="text" name="Username"  id="Username" placeholder="Agregar Username" value="<?php echo $oficina["Username"] ?>">
                            <span class="f_help" style="color: red;font-size: 12px">Este es el usuario del correo electr&oacute;nico</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Password </label>
                        <div style="margin-left: 200px;">
                            <input class="large" type="password" name="Password"  id="Password" placeholder="Agregar Password" value="<?php echo $oficina["Password"] ?>">
                            <span class="f_help" style="color: red;font-size: 12px">Esta es la contrase&ntilde;a del correo electr&oacute;nico</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>From</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="Froms"  id="Froms" placeholder="Agregar From" value="<?php echo $oficina["Froms"] ?>">
                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>From Name</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="FromName"  id="FromName" placeholder="Agregar FromName" value="<?php echo $oficina["FromName"] ?>">
                            
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Subject</label>
                        <div style="margin-left: 200px;">
                            <input class="large " type="text" name="Subject"  id="" placeholder="Agregar Subject" value="<?php echo $oficina["Subject"] ?>">
                            
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