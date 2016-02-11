<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $telefono1 = $_POST["tele1"];
    $telefono2 = $_POST["tele2"];
    $telefono3 = $_POST["tele3"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    if ($email == '' || $telefono1 == '' || $telefono2 == '' || $telefono3 == '' || $direccion == '' || $ciudad == '') {
        $Erno = 2;
    } else {
        $db->doQuery("UPDATE contacto SET email='".$email."',telefono_uno='".$telefono1."',telefono_dos='".$telefono2."',telefono_tres='".$telefono3."',direccion='".$direccion."',ciudad='".$ciudad."' WHERE idcontacto=" . $id, 4);
        $Erno = 1;
    }
}

$db->doQuery("SELECT * FROM contacto WHERE idcontacto=1", 1);
$info = $db->results[0];
?>

<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>
        Informacion Contacto
    </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>

            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                <input type="hidden" value="<?= $info["idcontacto"] ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Direcion</label>
                    <div>
                        <input type="text" name="direccion" id="direccion" class="medium" value="<?php echo $info["direccion"]?>">
                        <span class="f_help">Limite de caracteres 23/<span class="direccion"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Correo</label>
                    <div>
                        <input type="text" name="email" id="email" class="medium" value="<?php echo $info["email"]?>">
                        <span class="f_help">Limite de caracteres 23/<span class="email"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Ciudad</label>
                    <div>
                        <input type="text" name="ciudad" id="ciudad" class="medium" value="<?php echo $info["ciudad"]?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ciudad"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Telefono 1</label>
                    <div>
                        <input type="text" name="tele1" id="tele1" class="medium" value="<?php echo $info["telefono_uno"]?>">
                        <span class="f_help">Limite de caracteres 20/<span class="tele1"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Telefono 2</label>
                    <div>
                        <input type="text" name="tele2" id="tele2" class="medium" value="<?php echo $info["telefono_dos"]?>">
                        <span class="f_help">Limite de caracteres 20/<span class="tele2"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Telefono 3</label>
                    <div>
                        <input type="text" name="tele3" id="tele3" class="medium" value="<?php echo $info["telefono_tres"]?>">
                        <span class="f_help">Limite de caracteres 20/<span class="tele3"></span></span>
                    </div>
                </div>
            </form>
        </fieldset>

        <p>&nbsp;</p>

        <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>

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