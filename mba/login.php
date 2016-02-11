<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CIIES - LOGIN</title>
    <link rel="stylesheet" href="css/style_login.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="js/login.js"></script>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        
  
<script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>



	
	
	
	
	
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>
<body>
  
  
            <!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px;">Ingrese su nombre de usuario</label>
          
                            </fieldset>
                            <fieldset>
                             
                                <input type="text" name="password" id="nombreUsuario" />
                            </fieldset>
                            <script>
                                $(document).ready(function(){
                                    $('#nombreUsuario').change(function(){
                                        $('#btnGo').attr('href', 'chat.php?name='+$(this).val());
                                    });
                                });
                            </script>
                            <label for="checkbox"><a id="btnGo" href="chat.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )"><img src="images/btolvidoclave.png" width="90" height="22" border="0"></a></label>
						
                        </fieldset>
                    
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->

   
</body>
</html>