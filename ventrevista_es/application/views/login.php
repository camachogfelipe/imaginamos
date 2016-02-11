<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <base href="<?php echo base_url('assets/project_assets') . '/' ?>"></base>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34907944-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
       
<script>
	function validar(){
		var usuario = document.getElementById('usuario').value;
	  	 if(usuario == '* USUARIO' || usuario == ''){
             document.getElementById('usuario').value = "* USUARIO";
			 document.getElementById('usuario').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('usuario').style.color="#ccc";
		}
		
		var clave = document.getElementById('clave').value;
	  	 if(clave == '* CONTRASEÑA' || clave == ''){
               document.getElementById('clave').value = "* CONTRASEÑA";
			   document.getElementById('clave').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('clave').style.color="#ccc";
		}
		
	}
</script>
    </head>

    <body>


        <div class="conFormularioLogin">
	<form id="formPrueba" class="formular" method="post" onsubmit="return validar()" action="<?php echo base_url('site/conectar') ?>">
            <span class="tInfoContacto">Log In a sistema Ventrevista</span>

            
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="login" id="usuario" value="* USUARIO" data-validation-placeholder="* USUARIO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* USUARIO';" onFocus="javascript:if(this.value=='* USUARIO') this.value='';"/>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="clave" id="clave" value="* CONTRASEÑA" data-validation-placeholder="* CONTRASEÑA" class="text-input" type="password" onBlur="javascript:if(this.value=='') this.value='* CONTRASEÑA';" onFocus="javascript:if(this.value=='* CONTRASEÑA') this.value='';"/>
                    </label>
                </div>       
                <div class="conLabelContacto">
                <label>
                <div class="sel-login-cont">
                    <select id="leng" style="color:#828282; width:425px; font-size:14px; outline:0px;background-color:transparent;" name="leng">
                    <option value="0">Select platform language</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="hu">Magyar</option>
                    <option value="de">Deutsch</option>
                    <option value="pt">Português</option>
                    </select>
                </div>
                </label>
            </div>                                
         
            <div class="conBtIngreso">
                    <a><input type="submit" class="btIngreso" value="" /></a>
            </div> 
            
                </form>
        </div>


    </body>
   
</html>
