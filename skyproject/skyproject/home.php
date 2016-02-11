<?php 
include_once 'core/validation.php';

$ob = new Validation();
$ob->verificaUsuario($_SESSION["session_user"]);

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
            $(".contenedor-info").css({border: 'none'});
						$('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
          });
				</script>
    </head>
    <body>
        <?php include 'header.php';?>
         <div class="reportes">
            <div class="con-reportes">
                <div class="contenedor-info nav-header">
                
                		
                
                    <h1>Bienvenido a Skyproject</h1><hr>
                    <div class="con-welcome">
                    	<div class="welcome-tx">
                            <?php
                            if ($_SESSION["session_perfil"] == 1) {
                                    ?>
                                    <p><em>"Un pensamiento , una idea , una creación en acción..sky project"</em></p>
                                    <?php
                                }else if ($_SESSION["session_perfil"] == 2) {
                                    ?>
                                    <p>Skyproyect Is An International Calling Service That Provides A Simple, Reliable And Inexpensive Way To Connect With Friends And Family Abroad. Stop Overpaying Your Phone Company For International Calls And Start Saving Today!</p>
                                        <ul>
                                          <li>No Pin-Dialling</li>
                                          <li>Crystal-Clear Quality</li>
                                          <li>No Fees Or Surcharges</li>
                                          <li>No Contracts</li>
                                          <li>Works With Any Mobile / Phone Provider</li>
                                          <li>Share Up To Two Phones</li>
                                        </ul>
                                    <?php
                                }else if ($_SESSION["session_perfil"] == 3) {
                                    ?>
                                        <p>Skyproyect Is An International Calling Service That Provides A Simple, Reliable And Inexpensive Way To Connect With Friends And Family Abroad. Stop Overpaying Your Phone Company For International Calls And Start Saving Today!</p>
                                        <ul>
                                          <li>No Pin-Dialling</li>
                                          <li>Crystal-Clear Quality</li>
                                          <li>No Fees Or Surcharges</li>
                                          <li>No Contracts</li>
                                          <li>Works With Any Mobile / Phone Provider</li>
                                          <li>Share Up To Two Phones</li>
                                        </ul>
                                    <?php
                                }
                             ?>
                      	
                      </div>
                      <div class="welcome-img">
                          <?php
                          if ($_SESSION["session_perfil"] == 1) {
                          ?>
                            <img src="img/bienvenida_sa.jpg" width="246" height="178" alt="">
                          <?php
                          }else if ($_SESSION["session_perfil"] == 2) {
                          ?>
                            <img src="img/bienvenida_a.jpg" width="246" height="178" alt="">
                          <?php  
                          }else if ($_SESSION["session_perfil"] == 3) {
                          ?>
                            <img src="img/bienvenida_v.jpg" width="246" height="178" alt="">
                          <?php 
                          }
                          ?>
                      	
                      </div>
                    </div>
                    
                    
                    
                    
                </div>
                
            </div>
          </div>
          
          <div class="con-footer">
          	<div class="cloud"></div>
            <div class="copy-footer">
            	<p>&copy; 2013 <strong>SKYPROJECT</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total.</p>
            </div>
            <div class="copy-footer-2">
            	<div class="footer-ahorranito"></div>
            </div>
          </div>
          
    </body>
</html>
