<?php
require_once './core/validation.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/skyproject.css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    </head>
    <body style="background-color: #f5f5f5;">
       
        <div class="login">
            <img src="img/avatar.jpg" width="160" height="160" class="image"/>
            <div class="formulario">
                <form action="" method="POST" id="login" >
                    <h2>Skyproject</h2>
                    <div class="seccion">
                      
                        <input type="text" class="input-block-level txt" placeholder="Usuario" name="user" width="130"/>
                        
                    </div>
                    <div class="seccion">
                       
                        <input type="password" class="input-block-level txt" placeholder="Password"  name="pass" width="130"/>
                        
                    </div>
                    <div class="sec">
                    <a href="" class="boton">Recordar Clave</a>
                    <input type="submit" class="btn btn-large btn-primary boton" value="Entrar"/>
                    <input type="hidden" name="grabar" value="si"/>
                    </div>
                    <?php 
                    if(isset($_POST['grabar']) and $_POST['grabar'] == "si"){
                        $obj = new Validation();
                        $obj->login($_POST['user'], $_POST['pass']);

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
    </body>
</html>
