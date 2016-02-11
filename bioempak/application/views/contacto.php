<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bioempak</title>
        <base href="<?php echo base_url() . 'assets/' ?>"></base>
        <link href="css/all.css" rel="stylesheet" type="text/css" />
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/tabs_style.css" type="text/css" media="screen">
            <link rel="Stylesheet" type="text/css" href="css/carousel.css" />
         <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
        <link href="../assets/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="Empaques Flexibles, foil, laminados, aluminios, impresión, tapas, sachet, vasos." />
<meta name="Description" lang="es" content="Los usuarios en bioempak.com podrán encontrar noticias y últimas novedades de nuestra empresa, información oportuna y actualizada de toda nuestra línea de productos, podrán encontrar un medio abierto de información en donde podrá interactuar dejándonos sus comentarios y/o sugerencias, una página dinámica y moderna, que le permitirá tanto a los usuarios como a Bioempak estar en contacto con sus clientes. ¿Que esperan los usuarios? Los usuarios que hagan parte de Bioempak, esperan tener información a tiempo y respuesta oportuna a sus sugerencias y comentarios, esperan noticias actualizadas e información que sea útil en sus desarrollos, esperan estar informados de todos los cambios y proyectos que tenga Bioempak." />
            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
            <script>
							(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
								(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
								m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
							})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
							ga('create', 'UA-43470868-1', 'bioempka.com');
							ga('send', 'pageview');
						</script>
  <script type="text/javascript" src="../assets/js/jquery.selectbox-0.1.3.js"></script>

            <script type="text/javascript">document.documentElement.className += " js";</script>

            <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
            <script type="text/javascript" src="js/jquery.carousel-1.1.js"></script>
            <script src="js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
            <script src="js/jqueri-corner.js"></script>
            <script type="text/javascript">
			

                $(document).ready(function(){
                    $(".tabs").accessibleTabs({
                        tabhead:'h2',
                        fx:"fadeIn"
                    });
		
                    $('.carousel1_tecno').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
                    $('.carousel2_tecno').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
		
                    $('.btn_solicita').click(function() {
                        $('.form_cotiza').fadeIn('medium', function() {
                            // Animation complete
                        });
                    });
		
                    $('.bg_cotiza').click(function() {
                        $('.form_cotiza').fadeOut('medium', function() {
                            // Animation complete
                        });
                    });

										$('.registro').click(function() {
											$('#registro').fadeIn('medium', function() {
												// Animation complete
											});
										});
										$('.btn_cerrar').click(function() {
											$('.form_cotiza').fadeOut('medium', function() {
												// Animation complete
											});
										});
										$("#country_id7").change(function(){
									var valor = $("#country_id7 option:selected").val();
									if(valor == "empresa") { $("#empresa_r").show(); }
									else { $("#empresa_r").hide(); }
								});
                });
								$(function () {
			$("#country_id").selectbox();
			$("#country_id2").selectbox();
			$("#country_id3").selectbox();
			$("#country_id4").selectbox();
			$("#country_id5").selectbox();
			$("#country_id6").selectbox();
			$("#country_id7").selectbox();
		});
            </script>
            <style type="text/css">
                .contacto_on{
                    background:url(img/bg_menu_item.png) bottom; color:#1d5b8f !important;
                }

            </style>   
    </head> 
    <body>
                <?php include( 'header.php' ); ?>

            </div>
            <div class="content">
                <div class="content_contacto clearfix">
                    <!--sombras-->
                    <div class="sombra_bottom1"></div>

                    <!--//-->
                    <h1 class="tittle_tecno">Contáctenos</h1>

                    <div class="clearfix info_contacto">
                        <div class="info1">
                            <h4 class="light_blue">Teléfono</h4>
                            <h5>(57) (1)  6747423</h5>
                        </div>
                        <div class="linea_vertical">
                        </div>
                        <div class="info1">
                            <h4 class="light_blue">Fax</h4>
                            <h5>(57) (1)  6746915</h5>
                        </div>
                        <div class="linea_vertical">
                        </div>
                        <div class="info1">
                            <h4 class="light_blue">Dirección</h4>
                            <h5>Cr 19B # 168-77 Bogotá</h5>
                        </div>
                    </div>
                    <div class="linea1"></div>
                    <div class="form_contacto clearfix">
                        <div class="input_contacto">
                            <input id="name" onclick="if(this.value=='Nombre')this.value=''" onblur="if(this.value=='')this.value='Nombre'" value="Nombre" />
                            <input id="lastname" onclick="if(this.value=='Apellido')this.value=''" onblur="if(this.value=='')this.value='Apellido'" value="Apellido" />
                            <input id="company" onclick="if(this.value=='Nombre de la empresa')this.value=''" onblur="if(this.value=='')this.value='Nombre de la empresa'" value="Nombre de la empresa" />
                            <input id="email" onclick="if(this.value=='Correo electrónico')this.value=''" onblur="if(this.value=='')this.value='Correo electrónico'" value="Correo electrónico" />
                            <input id="phone" onkeypress="return soloNumeros(event);" onclick="if(this.value=='Teléfono')this.value=''" onblur="if(this.value=='')this.value='Teléfono'" value="Teléfono" />
                        </div>
                        <div class="input_contacto2">
                            <input id="subject" onclick="if(this.value=='Asunto')this.value=''" onblur="if(this.value=='')this.value='Asunto'" value="Asunto" />
                            <textarea id="comment" onclick="if(this.value=='Comentario')this.value=''" onblur="if(this.value=='')this.value='Comentario'">Comentario</textarea>
                            <div id="err"></div>
                        </div>
                    </div>
                    <a onclick="return validate();" class="enviar_contacto">ENVIAR</a>
                </div>

                <script>
                    function valEmail(email){
                        re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
                        if(!re.exec(email))    {
                            return false;
                        }else{
                            return true;
                        }
                    }
                    
                    function soloNumeros(evt)  
                    {  
                        //Validar la existencia del objeto event  
                        evt = (evt) ? evt : event;  
      
                        //Extraer el codigo del caracter de uno de los diferentes grupos de codigos  
                        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));  
      
                        //Predefinir como valido  
                        var respuesta = true;  
      
                        //Validar si el codigo corresponde a los NO aceptables  
                        if (charCode > 31 && (charCode < 48 || charCode > 57))   
                        {  
                            //Asignar FALSE a la respuesta si es de los NO aceptables  
                            respuesta = false;  
                        }  
      
                        //Regresar la respuesta  
                        return respuesta;  
                    }  
                    //onkeypress="return soloNumeros(event);"
                    
                    function validate(){
                        if(jQuery('#name').val() == "" || jQuery('#name').val() == "Nombre"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(jQuery('#lastname').val() == "" || jQuery('#lastname').val() == "Apellido"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(jQuery('#company').val() == "" || jQuery('#company').val() == "Nombre de la empresa"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(jQuery('#email').val() == "" || jQuery('#email').val() == "Correo electrónico"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(!valEmail(jQuery('#email').val())){
                            $('#err').html('Digite un email valido'); 
                            return false;
                        }
                        if(jQuery('#phone').val() == "" || jQuery('#phone').val() == "Teléfono"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(jQuery('#subject').val() == "" || jQuery('#name').val() == "Asunto"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        if(jQuery('#comment').val() == "" || jQuery('#name').val() == "Comentario"){
                            $('#err').html('Todos los campos son obligatorios'); 
                            return false;
                        }
                        
                        jQuery.ajax({
                            url  : '<?php echo base_url() . 'site/send' ?>',
                            type : 'POST',
                            data : {
                                'name' : jQuery('#name').val(),
                                'lastname' : jQuery('#lastname').val(),
                                'company' : jQuery('#company').val(),
                                'email' : jQuery('#email').val(),
                                'phone' : jQuery('#phone').val(),
                                'subject' : jQuery('#subject').val(),
                                'comment' : jQuery('#comment').val()
                            },success:function(){
                                $('#err').html('Email enviado');
                                jQuery('#name').val('Nombre');
                                jQuery('#lastname').val('Apellido');
                                jQuery('#company').val('Nombre de la empresa');
                                jQuery('#email').val('Correo electrónico');
                                jQuery('#phone').val('Teléfono');
                                jQuery('#subject').val('Asunto');
                                jQuery('#comment').val('Comentario');
                            }
                        });
                        
                    }
                </script>

                <?php include( 'footer.php' ); ?>
            </div>
        </div>

    </body>
</html>
