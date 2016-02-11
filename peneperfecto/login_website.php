<?php @session_start();?>
<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PENEPERFECTO.COM</title>
    <link rel="stylesheet" href="css/style_login2.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="js/login.js"></script>
	
	
	
	
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>

	
	
	
	
	
	
	
	
	
	
    <link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
    
    
<? if(isset($_SESSION['usuariosPP']) ){ 
    
    include_once './php/clases.php';
    
    $venta = new venta();
    $venta = unserialize($_SESSION['usuariosPP']);
    
    ?>
    
    
 <!-- Login Starts Here -->
 
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" action="./enviar.php">
                        <input name="Nombre" type="hidden" value="<?=$venta->getnombre().' '.$venta->getapellido() ?>"/>
                               <input name="Mail" type="hidden" value="<?=$venta->getmail() ?>"/>       
                        <input type="hidden" name="to" value="artu200@hotmail.com" />
                    <input type="hidden" name="retorno" value="index.php" />
                    <input type="hidden" name="nomasunto" value="Formulario HELP DESK" />

                        
                        <fieldset id="body">
                            <fieldset>
                                <label for="email" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px;">Envíe su comentario y nos pondremos en contacto con usted</label>
          
                            </fieldset>
                            <fieldset>
                                <label for="password" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">Asunto</label>
                                <input type="Asunto" name="Asunto" id="password" />
                            </fieldset>
							
							<label for="password" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold;">Mensaje</label>
                       <textarea name="Mensaje" class="campotext" cols="" rows=""></textarea>
                            </fieldset>
                        
                            <label for="checkbox"><a id="various3" href="chat.php"><img src="images/btenviarform.png" width="90" height="22" border="0"></a></label>
						
                        </fieldset>
                    
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
	<? } else { ?>		
	
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px;"><span class="enlaceseccion"><a href="./index.php">Inicie sección</a></span> 
                                    <?
                                        $helpdeskDAO = new helpdeskDAO();
                                        $helpdesk = new helpdesk();
                                        $helpdesk = $helpdeskDAO->getById(1);
                                        
                                        echo $helpdesk->gettexto();
                                    ?>
                                </label>
          
                            </fieldset>
           
                        
                            <label for="checkbox"><a id="various3" href="registro_pagaduria.php"><img src="images/btsuscribasecajon.png" width="90" height="22" border="0"></a></label>
						
                        </fieldset>
                    
                    </form>
                </div>
            </div>
			
			
			<? } ?>
			
			
   
</body>
</html>