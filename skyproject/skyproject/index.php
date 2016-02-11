<?php
require_once './core/validation.php';
$attr = '';
if(isset($_COOKIE['usrsky']) && isset($_COOKIE['skyusrpass'])){
    $nombre = "value='" . $_COOKIE['usrsky'] . "'";
    $pass = "value='" . $_COOKIE['skyusrpass'] . "'";
    $attr = 'checked';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
         <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>

    </head>
    <body style="background-color: #f5f5f5;">
       
        <div class="login">
            <img src="img/avatar.png" width="160" height="160" class="image"/>
            <div class="formulario">
                <form action="" method="POST" id="login" >
                    <h2>Skyproject</h2>
                    <div class="seccion">
                      
                        <input type="text" class="input-block-level txt" id="user" placeholder="Usuario" name="user" <?php print ($nombre != NULL) ? $nombre : "placeholder='Username'" ?> width="130"/>
                        
                    </div>
                    <div class="seccion">
                       
                        <input type="password" class="input-block-level txt" id="pass" <?php print ($pass != NULL) ? $pass : "placeholder='Password'" ?>  name="pass" width="130"/>
                        
                    </div>
                    <div class="sec">
                    <!--<a href="" class="boton">Recordar Clave</a>-->
                    <input type="checkbox" class="check" name="recordar" value="si" <?php print $attr; ?>/>
                    <label for="recordar" style="line-height:30px; width:150px; cursor:default;">Recordar contrase&ntilde;a?</label>
                    <input type="submit" class="btn btn-large btn-primary boton" value="Entrar"/>
                    <input type="hidden" name="grabar" value="si"/>
                    </div>
                    <?php 
                    if(isset($_POST['grabar']) and $_POST['grabar'] == "si"){
                       // echo $_POST['pass'];
                        $obj = new Validation();
                        $obj->login(trim($_POST['user']), trim($_POST['pass']), trim($_POST['recordar']));

                    }
                    ?>
                </form>
                
            </div>
            
        </div>
         <?php 
                if(isset($_GET['m']) and $_GET['m'] == '1'){
                    ?>
        <div class="alert alert-error" style="position: absolute;margin-left: 50%;width: 300px;left: -150px;">
            
                    <b>Error!</b> Caracteres incorrectos 
                </div>
                    <?php 
                }
                ?>
         <?php 
                if(isset($_GET['m']) and $_GET['m'] == '2'){
                    ?>
        <div class="alert alert-error" style="position: absolute;margin-left: 50%;width: 300px;left: -150px;">
            
                    <b>Error!</b> Usuario y/o contraseña incorrectos 
                </div>
                    <?php 
                }
                ?>

        <div class="con-footer">
                <div class="cloud"></div>
                <div class="copy-footer">
                <p>&copy; 2013 <strong>SKYPROJECT</strong> - Todos los derechos reservados - Prohibida su
                reproducción parcial o total.</p>
                </div>
                <div class="copy-footer-2"><div class="footer-ahorranito"></div></div>
                </div>
    </body>
</html>
