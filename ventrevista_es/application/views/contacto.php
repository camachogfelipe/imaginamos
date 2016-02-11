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

       
    </head>

    <body>


        <div class="conFormularioContacto">
            <form id="formPrueba" class="formular" action="<?php echo base_url('site/mailContacto') ?>" method="post" onsubmit="return validar()">
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="nombre" id="nombre" value="* NOMBRE" data-validation-placeholder="* NOMBRE" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* NOMBRE';" onFocus="javascript:if(this.value=='* NOMBRE') this.value='';" required/>
                        <br/><strong style="color: red" id="val_nombre"></strong>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="empresa" id="empresa" value="* EMPRESA" data-validation-placeholder="* EMPRESA" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* EMPRESA';" onFocus="javascript:if(this.value=='* EMPRESA') this.value='';" required/>
                        <br/><strong style="color: red" id="val_empresa"></strong>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>                                                                         
                        <input name="cargo" id="cargo" value="* CARGO" data-validation-placeholder="* CARGO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* CARGO';" onFocus="javascript:if(this.value=='* CARGO') this.value='';" required/>
                        <br/><strong style="color: red" id="val_cargo"></strong>
                    </label>
                </div>
                <div class="conLabelContacto">
                    <label>
                        <input name="email" id="email" value="* E-MAIL" data-validation-placeholder="* E-MAIL" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* E-MAIL';" onFocus="javascript:if(this.value=='* E-MAIL') this.value='';" required/>
                        <br/><?php if($error == 'er'){echo "<strong style='color: red'>Ingresar un E-MAIL valido.</strong>";}?>
                        <strong style="color: red" id="val_email"></strong>
                    </label>
                </div> 
                <div class="conLabelContacto">
                    <label>
                        <input name="telefono" id="telefono" value="* TELEFONO" data-validation-placeholder="* TELEFONO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* TELEFONO';" onFocus="javascript:if(this.value=='* TELEFONO') this.value='';" required/>
                        <br/><strong style="color: red" id="val_telefono"></strong>
                    </label>
                </div>
                <div class="conLabelMensaje">
                    <label class="comments">
                        <textarea name="mensaje" cols="1" rows="1"  id="mensaje" value="MENSAJE" onBlur="javascript:if(this.value=='') this.value='MENSAJE';" onFocus="javascript:if(this.value=='MENSAJE') this.value='';" >MENSAJE</textarea>
                    </label>
                </div>                                

                <div class="selectPrueba">
                    <div class="checkbox">
                        <input type="checkbox" id="noticia" name="noticia" value="1"/>
                    </div>
                    <span>Suscribirme al boletín de noticias, novedades e información general.</span>
                </div>
                <div class="conBtContacto">

                    <a><input type="submit" class="btContacto" value="" /></a>

                </div>  
            </form>
        </div>



    </body>
    
    <script>
        function validar(){
            if($('#nombre').val() == '* NOMBRE' || $('#nombre').val() == ''){
                $('#val_nombre').text('El campo nombre es requerido.');
                
                $('#val_empresa').text('');
                $('#val_cargo').text('');
                $('#val_email').text('');
                $('#val_telefono').text('');
                return false;
            }
            if($('#empresa').val() == '* EMPRESA' || $('#empresa').val() == ''){
                $('#val_empresa').text('El campo empresa es requerido.');
                
                $('#val_nombre').text('');
                $('#val_cargo').text('');
                $('#val_email').text('');
                $('#val_telefono').text('');
                return false;
            }
            if($('#cargo').val() == '* CARGO' || $('#cargo').val() == ''){
                $('#val_cargo').text('El campo cargo es requerido.');
                
                $('#val_nombre').text('');
                $('#val_empresa').text('');
                $('#val_email').text('');
                $('#val_telefono').text('');
                return false;
            }
            if($('#email').val() == '* E-MAIL' || $('#email').val() == ''){
                $('#val_email').text('El campo email es requerido.');
                
                $('#val_nombre').text('');
                $('#val_empresa').text('');
                $('#val_cargo').text('');
                $('#val_telefono').text('');
                return false;
            }
            if($('#telefono').val() == '* TELEFONO' || $('#telefono').val() == ''){
                $('#val_telefono').text('El campo telefono es requerido.');
                
                $('#val_nombre').text('');
                $('#val_empresa').text('');
                $('#val_cargo').text('');
                $('#val_email').text('');
                return false;
            }
            
            return true;
        }
    </script>
</html>
