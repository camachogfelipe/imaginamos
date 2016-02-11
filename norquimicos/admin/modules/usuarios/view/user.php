<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        // var_dump($_POST);exit;
        if (GetData("nombre") == "" || GetData("avatar") == "" || GetData("contrasena") == "") {
            $val = 3;
        } else {
            //Primero creamos el campo en la bd
            $db->doQuery("INSERT INTO user (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
            $db->doQuery("UPDATE user SET 
                                    nombre ='" . GetData("nombre") . "', 
                                    usuario ='" . GetData("avatar") . "', 
                                    contrasena ='" . GetData("contrasena") . "',                                                                                                                
                                    sector ='" . GetData("sector") . "',                                                                                                                
                                    bandera ='0',
                                    telefono='" . GetData("telfijo") . "',
                                    celular='" . GetData("celular") . "',
                                    correo='" . GetData("email") . "'
                                    WHERE id=" . $id, 4);
           $val=1;
           
        }
    } else {
       $db->doQuery("UPDATE user SET 
                                    nombre ='" . GetData("nombre") . "', 
                                    usuario ='" . GetData("avatar") . "', 
                                    contrasena ='" . GetData("contrasena") . "',                                                                                                                
                                    sector ='" . GetData("sector") . "', 
                                    telefono='" . GetData("telfijo") . "',
                                    celular='" . GetData("celular") . "',
                                    correo='" . GetData("email") . "'
                                    WHERE id=" . $id, 4);
       $val=2;
       
    }
    // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM user WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>

<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            USUARIOs >> <?php echo  ($id == 0) ? "AGREGANDO " : "EDITANDO " ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo  ($id == 0) ? "AGREGANDO USUARIO" : "EDITANDO USUARIO" ?></h3>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">

                    <div style="margin-top: 36px;">
                        <label>Nombres Completos</label>
                        <div>
                            <input type="text" id="titulo1" name="nombre" PlaceHolder="Agrega nombres completos" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["nombre"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 70 / <span class="titulo1"></span></span>
                        </div>

                    </div>
                    <div style="margin-top: 36px;">
                        <label>Perfil Usuario</label>
                        <div>
                            <input type="text" id="titulo2" name="avatar" PlaceHolder="Agregar Avatar" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["usuario"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 10 / <span class="titulo2"></span></span>
                        </div>

                    </div>
                    <div style="margin-top: 36px;">
                        <label>Contraseña</label>
                        <div>
                            <input type="text" id="titulo3" name="contrasena" PlaceHolder="Agregar Contraseña" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["contrasena"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de carácteres 8 / <span class="titulo3"></span></span>
                        </div>

                    </div>  
                     <div style="margin-top: 36px;">
                        <label>Correo eléctronico</label>
                        <div>
                            <input type="text" id="email" name="email" PlaceHolder="Agregar email" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["correo"]; ?>" />
                            
                        </div>

                    </div>  
                    <div style="margin-top: 36px;">
                        <label>Telefono fijo</label>
                        <div>
                            <input type="text" id="telfijo" name="telfijo" PlaceHolder="Agregar telefono" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["telefono"]; ?>" />
                            
                        </div>

                    </div>  
                    <div style="margin-top: 36px;">
                        <label>Celular</label>
                        <div>
                            <input type="text" id="celular" name="celular" PlaceHolder="Agregar email" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["celular"]; ?>" />
                            
                        </div>

                    </div>  
                    <div style="margin-top: 36px;">
                        <label>Sector</label>
                        <div style="margin-left: 200px;margin-top: -23px;">
                            <select  name="sector">
                                <?php
                                if ($oficina["sector"] == "Bogotá") {
                                    echo '<option selected="selected" value="Bogotá">Bogotá</option><option value="FBogotá">Fuera de Bogotá</option>';
                                } else {
                                    echo '  <option selected="selected" value="FBogotá">Fuera de Bogotá</option><option value="Bogotá">Bogotá</option>  ';
                                }
                                ?>
                            </select>


                        </div>

                    </div>
                    <p>&nbsp;</p><p>&nbsp;</p>


                </form>
            </fieldset>
            <p>&nbsp;</p>


            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
        </div>
    </div>


    <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    $('#titulo1').limit('70','.titulo1');
    $('#titulo2').limit('10','.titulo2');
    $('#titulo3').limit('8','.titulo3');  

</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Usuario agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Usuario editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
        }
    }
}
?>