<?php 
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$obj2 = new Procesos();

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <link href="css/demo_table.css" rel="stylesheet" type="text/css">
        <link href="css/demo_page.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info">
                    <form action="" method="POST" id="part1">
                     <h2>Cambiar Clave</h2>
                     <hr>
                     <div style="width: 100%;float: left;margin-top: 20px;"><label style="float: left;margin-left: 240px;margin-right: 7px;">Clave Actual</label> <input type="password" style="float: left" class="input-block-level txt" name="passactual" width="130"/></div>
                     <div style="width: 100%;float: left;"><label style="float: left;margin-left: 240px;margin-right: 7px;">Clave Nueva</label> <input type="password" style="float: left" class="input-block-level txt" name="pass" width="130"/></div>
                     <div style="width: 100%;float: left;"><label style="float: left;margin-left: 240px;margin-right: 7px;">Repetir Clave</label> <input type="password" style="float: left" class="input-block-level txt"  name="pass2" width="130"/></div>
                     <input type="submit" class="btn-primary" style="width: 100px;margin: 20px 0 0 575px;" value="Guardar" onclick="Validar();"/>   
                     <input type="hidden" name="grabar" value="si"/>
                     <?php 
                     if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
                         
                         $obj2->CambiarClave($_SESSION["session_user"],$_POST['passactual'],$_POST['pass'],$_POST['pass2']);
                     }
                     if(isset($_GET['m']) and $_GET['m'] == 'good'){
                         
                         echo '<script>setTimeout(\'alert("Su contraseña ha sido cambiada con exito");\',200);</script>';
                     }
                     if(isset($_GET['m']) and $_GET['m'] == 'failed'){
                         
                         echo '<script>setTimeout(\'alert("Contraseña invalida");\',200);</script>';
                     }
                     if(isset($_GET['m']) and $_GET['m'] == 'notequal'){
                         
                         echo '<script>setTimeout(\'alert("Las contraseñas no coinciden");\',200);</script>';
                     }
                     ?>
                     
                  </form>
                    </div>
                </div>
            </div>
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
