<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <base href="<?php echo base_url('assets/project_assets') . '/' ?>"></base>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/check.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).ready(function(){
                    $(".checkbox").dgStyle();
                });
            })
        </script>
        
     <script>
	function validar(){
		var correo = document.getElementById('correo').value;
	  	 if(correo == '* TU CORREO ELECTRÓNICO' || correo == ''){
             document.getElementById('correo').value = "* TU CORREO ELECTRÓNICO";
			 document.getElementById('correo').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('correo').style.color="#ccc";
		}
		
		var correos = document.getElementById('correos').value;
	  	 if(correos == '* CORREOS ELECTRÓNICOS DESTINATARIOS' || correos == ''){
               document.getElementById('correos').value = "* CORREOS ELECTRÓNICOS DESTINATARIOS";
			   document.getElementById('correos').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('correos').style.color="#ccc";
		}
		
		var asunto = document.getElementById('asunto').value;
	  	 if(asunto == '* ASUNTO' || asunto == ''){
               document.getElementById('asunto').value = "* ASUNTO";
			   document.getElementById('asunto').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('asunto').style.color="#ccc";
		}
		
		var mensaje = document.getElementById('mensaje').value;
	  	 if(mensaje == 'MENSAJE:' || mensaje == ''){
               document.getElementById('mensaje').value = "Descubre el primer sistema de video entrevistas y elige mejor a tus empleados. http://www.ventrevista.es.";
			   document.getElementById('mensaje').style.color="#FF0000";
			return false;
		}else{
			 document.getElementById('mensaje').style.color="#ccc";
		}
		
	}
</script>
        
    </head>

    <body>


        <div class="conFormularioMail">
            <form id="formPrueba" class="formular" action="<?php echo base_url('site/mailContacto2') ?>" method="post" onsubmit="return validar()">
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="correo" id="correo" value="* TU CORREO ELECTRÓNICO" data-validation-placeholder="* TU CORREO ELECTRÓNICO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* TU CORREO ELECTRÓNICO';" onFocus="javascript:if(this.value=='* TU CORREO ELECTRÓNICO') this.value='';"/>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="correos" id="correos" value="* CORREOS ELECTRÓNICOS DESTINATARIOS" data-validation-placeholder="* CORREOS ELECTRÓNICOS DESTINATARIOS" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* CORREOS ELECTRÓNICOS DESTINATARIOS';" onFocus="javascript:if(this.value=='* CORREOS ELECTRÓNICOS DESTINATARIOS') this.value='';"/>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="asunto" id="asunto" value="* ASUNTO" data-validation-placeholder="* ASUNTO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* ASUNTO';" onFocus="javascript:if(this.value=='* ASUNTO') this.value='';"/>
                    </label>
                </div>
                <div class="conLabelMensaje">
                    <label class="comments">
                        <textarea name="mensaje" id="mensaje" cols="1" rows="1"  id="" value="MENSAJE:" placeholder="Descubre el primer sistema de video entrevistas y elige mejor a tus empleados. http://www.ventrevista.es." >Descubre el primer sistema de video entrevistas y elige mejor a tus empleados. http://www.ventrevista.es.</textarea>
                    </label>
                </div>                                
           
            <div class="conBtMail">
                    <a><input type="submit" class="btMail" value="" /></a>
            </div>
            </form>   
        </div>



    </body>
</html>
