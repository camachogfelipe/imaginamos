<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<!-- Mirrored from www.bioempak.com/site/prods by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:48:37 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bioempak</title>
        <base ></base>
         <link href="http://www.bioempak.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../assets/css/all.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/css/tabs_style.css" type="text/css" media="screen">
            <link rel="Stylesheet" type="text/css" href="../assets/css/carousel.css" />
            <link href="../assets/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="pragma" content="No-Cache" />
        <meta name="Keywords" lang="es" content="Empaques Flexibles, foil, laminados, aluminios, impresión, tapas, sachet, vasos." />
        <meta name="Description" lang="es" content="Los usuarios en bioempak.com podrán encontrar noticias y últimas novedades de nuestra empresa, información oportuna y actualizada de toda nuestra línea de productos, podrán encontrar un medio abierto de información en donde podrá interactuar dejándonos sus comentarios y/o sugerencias, una página dinámica y moderna, que le permitirá tanto a los usuarios como a Bioempak estar en contacto con sus clientes. ¿Que esperan los usuarios? Los usuarios que hagan parte de Bioempak, esperan tener información a tiempo y respuesta oportuna a sus sugerencias y comentarios, esperan noticias actualizadas e información que sea útil en sus desarrollos, esperan estar informados de todos los cambios y proyectos que tenga Bioempak." />

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>
							(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
								(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
								m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
							})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
							ga('create', 'UA-43470868-1', 'bioempka.com');
							ga('send', 'pageview');
						</script>
            <script type="text/javascript">
                    //MOVIMIENTO
                  $(document).ready(function () {       
                    function moveIrrDown (el){    
                      $('.registro').animate({'Top':10},1300,function(){moveIrrUp($(this));});
                    }
                    function moveIrrUp (el){
                      $('.registro').animate({'Top':20},1300,function(){moveIrrDown($(this));});
                    }
                    moveIrrDown();
                  });
            </script>
            <script type="text/javascript" src="../assets/js/jquery.selectbox-0.1.3.js"></script>
            <script type="text/javascript">document.documentElement.className += " js";</script>

            <script type="text/javascript" src="../assets/js/jquery.mousewheel.min.js"></script>
            <script type="text/javascript" src="../assets/js/jquery.carousel-1.1.js"></script>
            <script type="text/javascript" src="../assets/js/jquery.slider.js"></script>
            <script src="../assets/js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">
						
								

                $(document).ready(function(){
                    /*$(".tabs").accessibleTabs({
                        tabhead:'h2',
												fx:"show",
                				fxspeed:null
                    });*/
										
										$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'none', autoplay:false,  slidesPerScroll:5 });
										
										<?php
											foreach($productos as $producto) :
												if($producto->clasificacion == "farmaceuticos") :
													$products['farmaceuticos'][] = $producto;
												endif;
											endforeach;
										?>
										<?php
											$i=1;
											foreach($products['farmaceuticos'] as $producto) :
												foreach($imagenes as $imagen) :
													if($imagen->id_producto == $producto->id and $i > 1) :
														echo "$('#contentProducto".$i."').hide();\n";
														$x = $i;
														break;
													endif;
												endforeach;
												$i++;
											endforeach;
											echo "var tp = ".$i.";";
										?>
	
										var slider = $("#contentProducto1").children(".clearfix").children(".img_productos_right").children(".slider-produc").bxSlider({
											mode: 'horizontal',
											captions: true,
											auto: false,
											controls: true,
											speed: 800,
											minSlides: 1,
    									maxSlides: 1,
    									moveSlides: 1,
											infiniteLoop: false,
  										hideControlOnEnd: true
										});

										
										$(".content_producto").hide();
										$(".content_producto").first().css({display: "block"});
										$('.slideItem').click(function(e){
											e.preventDefault();
												var id = $(this).attr('data-id');
												for(i=1; i<=tp; ++i) $('#contentProducto'+i).hide();
												$('#contentProducto'+id).show(0, function(){
													$(this).children(".clearfix").children(".img_productos_right").children(".slider-produc").bxSlider({
															mode: 'horizontal',
															captions: true,
															auto: false,
															controls: true,
															speed: 800,
															minSlides: 1,
															maxSlides: 1,
															moveSlides: 1,
															infiniteLoop: false,
															hideControlOnEnd: true
														});
												});
												slider.reloadSlider();
                    });
										

										/*$.ajaxSetup ({cache: false});
      							var loadUrl = "producto-info.php";
										
										$(".load_ax").click(function(){
											$(".tabbody").hide();
        							$(".tabbody").load(loadUrl, function(){
												
												$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'none', autoplay:false });
												
												$('.slideItem').click(function(e){
														var id = $(this).attr('data-id');
														for(i=1; i<=tp; ++i) $('.contentProducto'+i).hide();
														$('.contentProducto'+id).css({display: "block"}).show(0, function(){
															$(this).children(".clearfix").children(".img_productos_right").children(".slider-produc").bxSlider({
																	mode: 'horizontal',
																	captions: true,
																	auto: false,
																	controls: true,
																	speed: 800
																});
														});
												});
												
												$(this).siblings(".tabbody").children(".content_producto").children(".clearfix").children(".img_productos_right").children(".slider-produc").bxSlider({
													mode: 'horizontal',
													captions: true,
													auto: false,
													controls: true,
													speed: 800
												});
												
											});
      							});*/
										
										
		
                    

                     $('.registro').click(function() {
                        $('#registro').fadeIn('medium', function() {
                            // Animation complete
                        });
                    });
		
                    $('.btn_solicita').click(function() {
                        $('#form').fadeIn('medium', function() {
                            // Animation complete
                        });
                    });
		
                    $('.bg_cotiza').click(function() {
                        $('#form').fadeOut('medium', function() {
                            // Animation complete
                        });
                    });
		
                    $('.btn_cerrar').click(function() {
                        $('.form_cotiza').fadeOut('medium', function() {
                            // Animation complete
                        });
                    });
										
										
										$("#country_id4").change(function(){
											var valor = $("#country_id4 option:selected").val();
											if(valor == "empresa") { $("#empresa").show(); }
											else { $("#empresa").hide(); }
										});
										
										$("#country_id7").change(function(){
											var valor = $("#country_id7 option:selected").val();
											if(valor == "empresa") { $("#empresa_r").show(); }
											else { $("#empresa_r").hide(); }
										});

                    //Slider Productos
                    /*jQuery('.slider-produc').each(function() {
											$(this).bxSlider({
												mode: 'horizontal',
												captions: true,
												auto: true,
												controls: true,
												speed: 1400
											});
										});	 */
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
                .productos_on{
                     background:url(../assets/img/bg_menu_item.png) bottom; color:#1d5b8f !important;
                }
            </style>   
            <script type="text/javascript">
              (function($) { 
                $(function() {
                    $(":radio").uniform();
                  });
              })(jQuery);
            </script> 
    </head> 
    <body style="overflow-x: hidden;"> 
    	<?php require_once("header.php"); ?>
            </div>
            <div class="content">
                <!--div class="tabs"-->
                
                		<div class="con-tabs">
                    	<h2>Farmacéuticos y Cosméticos</h2>
                    	<a href="<?php echo base_url() ?>site/productos2"><h2>Alimentos</h2></a>
                    </div>
                    
                    
                    
                    <!--Tabbody-->
                    <div class="tabbody">
                        <!--sombras-->
                        <div class="sombra_bottom1"></div>
                        <div class="sombra_Tab_right1"></div>
                        <div class="sombra_Tab_left1"></div>
                        <!--//-->
                        <h1>Somos conscientes de la <span class="light_blue">responsabilidad social </span>que tenemos en el suministro de empaques para asegurar la <span class="light_blue">conservación de los productos de nuestros clientes.</span></h1>
                        <h3>Todos nuestros productos alimenticios, <span class="light_blue">cumplen con las normas FDA </span>y están respaldados con los estudios de los entes certificadores.</h3>
                        <div class="carousel"> <!-- BEGIN CAROUSEL -->
                            <div class="sombra_slide1"></div>
                            <div class="sombra_slide2"></div>
                            <div class="slides"> <!-- BEGIN SLIDES -->
                            	<?php
															$i = 1;
															foreach($products['farmaceuticos'] as $producto) :
																$imagenp = NULL;
																if(!empty($imagenes)) :
																	foreach($imagenes as $imagen) :
																		if($imagen->id_producto == $producto->id) : $imagenp = $imagen->url; break; endif;
																	endforeach;
																endif;
																if(!empty($imagenp)) :
																?>
																<div id="abrirProducto" data-id="<?= $i ?>">
																	<a>
																		<img src="../assets/prod_img/<?= $imagenp ?>" alt="karma" />
																		<div id="text_producto1" class="text_producto1"></div>
																	</a>
																</div>
															<?php
																	$i++;
																endif;
															endforeach;
															?>
                            </div> <!-- END SLIDES -->

                        </div>
                        <div class="sombra_slide3"></div>
                        <?php
												$i = 1;
												foreach($products['farmaceuticos'] as $producto) :
													$imagenp = NULL;
													if(!empty($imagenes)) :
														foreach($imagenes as $imagen) :
															if($imagen->id_producto == $producto->id) : $imagenp[] = $imagen->url; endif;
														endforeach;
													endif;
													if(!empty($imagenp)) :
												?>
												<div class="content_producto" id="contentProducto<?= $i ?>">
														<a class="btn_solicita" >SOLICITAR COTIZACIÓN</a>
														<?php
															$tmp = explode(" ", $producto->titulo);
															$titulo = $tmp[0];
															if(count($tmp) > 1) :
																unset($tmp[0]);
																$titulo2 = implode(" ", $tmp);
															endif;
														?>
														<h4 class="tittle_producto"><?= $titulo ?> <span class="light_blue"><?= $titulo2 ?></span></h4>
                            <?php if(!empty($producto->subtitulo)) : ?>
                            <h4 class="tittle_producto"><span class="light_blue"><?= $producto->subtitulo ?></span></h4>
                            <?php endif; ?>
														<div class="clearfix">
																<div class="texto_producto">
																	<?php if(!empty($producto->material)) : ?>
																		<div class="item_producto clearfix">
																				<div class="left_producto">Material:</div>
																				<div class="right_producto"><?= $producto->material ?></div>
																		</div>
																	<?php endif; ?>
																	<?php if(!empty($producto->espesor)) : ?>
																		<div class="item_producto clearfix">
																				<div class="left_producto">Espesor:</div>
																				<div class="right_producto"><?= $producto->espesor ?></div>
																		</div>
																	<?php endif; ?>
																	<?php if(!empty($producto->impresion)) : ?>
																		<div class="item_producto clearfix">
																				<div class="left_producto">Impresión:</div>
																				<div class="right_producto"><?= $producto->impresion ?></div>
																		</div>
																	<?php endif; ?>
																	<?php if(!empty($producto->uso)) : ?>
																		<div class="item_producto clearfix">
																				<div class="left_producto">Uso:</div>
																				<div class="right_producto"><?= $producto->uso ?></div>
																		</div>
																	<?php endif; ?>
																</div>
																<div class="img_productos_right">
																		<ul class="slider-produc" id="<?= $i ?>">
																			<?php foreach($imagenp as $img) : ?>
																				<li>
																					<img src="../assets/prod_img/<?= $img ?>" width="360" height="310" /> 
																				</li>
																			<?php endforeach; ?>
																		</ul>
																</div>
														</div>
												</div>
												<?php
														$i++;
													endif;
												endforeach;
												?>
                        </div>
                    <!--Fin tabbody-->


                    <!--/div-->
                </div>
                
                
                
                <?php require_once("footer.php"); ?>
</div>
</div>

        <div class="form_cotiza" id="form">
            <div class="bg_cotiza">
            </div>
            <div style="height:570px; margin-top:-285px;" class="content_cotiza">
                    <?php echo form_open('site/datosCotizacion'); ?>
                    <a class="btn_cerrar"></a>
                    <h1>Solicitud de <span class="light_blue">Cotización</span></h1>
                    <div class="clearfix content_form_cotiza">
                    	<input style="width:540px; float:none;" onclick="if(this.value=='Nombre')this.value=''" onblur="if(this.value=='')this.value='Nombre'" id="nombre" name="nombre" value="Nombre" />
                        <div class="clearfix">
                        <input onclick="if(this.value=='Correo electrónico')this.value=''" onblur="if(this.value=='')this.value='Correo electrónico'" id="correo" value="Correo electrónico" /> 
                        <input onclick="if(this.value=='Teléfono')this.value=''" onblur="if(this.value=='')this.value='Teléfono'" id="telefono" value="Teléfono" />
                        <select id="country_id5">
                            <option value="0">¿A qué sector perteneces?</option>
                            <?php
															foreach($sectores as $sector) :
																echo '<option value="'.$sector->id.'">'.$sector->nombre.'</option>'."\n";
															endforeach;
														?>
                        </select> 
                        <select id="country_id4">
                            <option value="0">Empresa o Independiente</option>
                            <option value="empresa">Empresa</option>        
                            <option value="independiente">Independiente</option>              
                        </select>
                        <input id="empresa" type="text" name="empresa" style="display: none; width:540px; float:none;" placeholder="Nombre de la empresa" />
                        <select id="country_id" name="id_producto">
                            <option value="0">Producto</option>
                            <?php
															foreach($productos as $producto) :
																echo '<option value="'.$producto->id.'">'.$producto->titulo.'</option>'."\n";
															endforeach;
														?>						
                        </select>
                        <select id="country_id2" name="id_impresion">
                            <option value="0">Impresión</option>
                            <?php
															foreach($impresiones as $impresion) :
																echo '<option value="'.$impresion->id.'">'.$impresion->nombre.'</option>'."\n";
															endforeach;
														?>			
                        </select>
                        <select id="country_id3" name="unidades">
                            <option value="0">Unidades</option>
                            <option value="Kilos">Kilos</option>		
                            <option value="Unidades">Unidades</option>				
                        </select>
                        <input onclick="if(this.value=='Cantidad')this.value=''" onblur="if(this.value=='')this.value='Cantidad'" id="cantidadAND" value="Cantidad" />
                        </div>
                        <textarea onclick="if(this.value=='Comentario')this.value=''" onblur="if(this.value=='')this.value='Comentario'" id="comentarioAND">Comentario</textarea>
                        <a class="env_cotiza" onclick="return sendEmail()">Enviar</a>
                        <?php echo form_close(); ?>
                    </div>
                    
                </div>
        </div>
        <script>
            function sendEmail(){
								/*
								1. Poner las variables que faltan
								2. Poner option:selected despues del id en los campos select
								3. Validar si es empresa que se llene el campo
								4. Cantidades debe ser numerico
								5. Traer los productos de la base de datos
								*/
                if(jQuery('#nombre').val() == "Nombre"){
                    alert('Escriba su nombre');
                    return false;
                }   
                if(jQuery('#correo').val() == "Correo electrónico"){
                    alert('Escriba su correo');
                    return false;
                } 
                if(jQuery('#telefono').val() == "Teléfono"){
                    alert('Escriba su telefono');
                    return false;
                }
                if(jQuery('#country_id5 option:selected').val() == "0"){
                    alert('Seleccione un sector');
                    return false;
                }
                if(jQuery('#country_id4 option:selected').val() == "0"){
                    alert('Seleccione el tipo de comercio');
                    return false;
                }
                if(jQuery('#country_id option:selected').val() == "0"){
                    alert('Seleccione el producto');
                    return false;
                }
                if(jQuery('#country_id2 option:selected').val() == "0"){
                    alert('Seleccione un tipo de impresion');
                    return false;
                }
                if(jQuery('#country_id3 option:selected').val() == "0"){
                    alert('Seleccione una unidad');
                    return false;
                }
                if(jQuery('#cantidadAND').val() == "Cantidad"){
                    alert('Escriba una cantidad');
                    return false;
                }
                if(jQuery('#comentarioAND').val() == "Comentario"){
                    alert('Escriba su comentario');
                    return false;
                }
                jQuery.ajax({
                   url  :   '<?php echo base_url(); ?>site/datosCotizacion',
                   type :   'POST',
                   data :   {
                       'nombre'  : jQuery('#nombre').val(),
                       'email'  : jQuery('#correo').val(),
                       'telefono'  : jQuery('#telefono').val(),
											 'sector'  : jQuery('#country_id5').val(),
											 'empresa'  : jQuery('#country_id4').val(),
											 'nempresa'  : jQuery('#empresa').val(),
                       'producto'  : jQuery('#country_id').val(),
                       'impresion' : jQuery('#country_id2').val(),
                       'unidad' : jQuery('#country_id3').val(),
                       'cantidad' : jQuery('#cantidadAND').val(),
                       'comentario' : jQuery('#comentarioAND').val()
                   },
                   success:function(){
                       alert('Cotización enviada');
                   }
                });
            }
        </script>
    </body>

<!-- Mirrored from www.bioempak.com/site/prods by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:55:00 GMT -->
</html>