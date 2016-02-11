<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ventrevista - España</title>

        <base href="<?php echo base_url('assets/project_assets') . '/' ?>"></base>

        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta name="Keywords" lang="es" content="palabras clave" />
        <meta name="Description" lang="es" content="Ventrevista es el primer sistema de video entrevistas online que permite agilizar los procesos de selección. Pruébalo Gratis" />
        <meta name="date" content="2012" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />

        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/slider.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />

        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.spritely-0.3b.js"></script>
        <script type="text/javascript" src="js/jquery.riva.slider.js"></script>
        <script type="text/javascript" src="js/modernizr.Ventrevista.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript" src="js/check.js"></script>
        <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/jSite.js"></script>
        <script>
        function validar(){
			
			var nombre = document.getElementById('nombre').value;
			 if(nombre == '* NOMBRE' || nombre == ''){
				 document.getElementById('nombre').value = "* NOMBRE";
				 document.getElementById('nombre').style.color="#FF0000";
				return false;
			}else{
				 document.getElementById('nombre').style.color="#ccc";
			}
			
			
			var empresa = document.getElementById('empresa').value;
			 if(empresa == '* EMPRESA' || empresa == ''){
				 document.getElementById('empresa').value = "* EMPRESA";
				 document.getElementById('empresa').style.color="#FF0000";
				return false;
			}else{
				 document.getElementById('empresa').style.color="#ccc";
			}
 
 			var cargo = document.getElementById('cargo').value;
			 if(cargo == '* CARGO' || cargo == ''){
				 document.getElementById('cargo').value = "* CARGO";
				 document.getElementById('cargo').style.color="#FF0000";
				return false;
			}else{
				 document.getElementById('cargo').style.color="#ccc";
			}
			
           var email = document.getElementById('email').value;
			 if(email == '* E-MAIL' || cargo == ''){
				 document.getElementById('email').value = "* E-MAIL";
				 document.getElementById('email').style.color="#FF0000";
				return false;
			}else{
				 document.getElementById('email').style.color="#ccc";
			}
			
           var telefono = document.getElementById('telefono').value;
			 if(telefono == '* TELÉFONO' || cargo == ''){
				 document.getElementById('telefono').value = "* TELÉFONO";
				 document.getElementById('telefono').style.color="#FF0000";
				return false;
			}else{
				 document.getElementById('telefono').style.color="#ccc";
			}

            
            return true;
        }
    </script>
    <script type="text/javascript">
		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-35868772-1']);
 		_gaq.push(['_trackPageview']);
  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 		})();
	</script>  
    </head>

    <body>

        <div class="conBgMenu">
            <div class="conTopSite">
                <div class="conLogo">
                    <a href="#primer_contenido"><img src="images/logo.png" width="260" height="82" alt="video entrevistas"></a>
                </div>
                <div class="conMenu">
                    <div class="header">
                        <div class="menuSup">
                            <!--<div class="btMasInfo"><a href="#septimo_contenido">+ Info</a></div>-->
                            <div class="btContacto"><a class="formContacto fancybox.iframe" href="<?php echo base_url('index.php/site/contacto') ?>">Contacto</a></div>
                            <div class="btLogin"><a class="formLogin fancybox.iframe" href="<?php echo base_url('index.php/site/login') ?>"><div class="login-ing"></div></a></div>
                        </div>
                        <div class="menuSitio">
                            <ul class="sf-menu">
                                <li><a href="#segundo_contenido"><div id="bt1"><p class="btMenu">¿QUÉ ES VENTREVISTA?</p></div></a>
                                    <ul>
                                        <li class="priMenu"><a href="#segundo_contenido">¿QUÉ ES?</a></li>
                                        <li><a href="#tercer_contenido" class="secMenu">¿CÓMO FUNCIONA?</a></li>
                                        <li><a href="#cuarto_contenido">¿POR QUÉ USARLO?</a></li>
                                    </ul>
                                </li>
                                <li><a href="#quinto_contenido"><div class="bt2"><p class="btMenu">WELCOME PACK</p></div></a></li>
                                <li><a href="#sexto_contenido"><div class="bt3"><p class="btMenu">PRECIOS</p></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
        </div>


        <ul class="contenidos">


            <li id="primer_contenido">
                <div class="conContenido1">
                    <!--<div class="bgSlider"></div>-->
                    <div class="conSlider">
                        <div id="riva-slider-1-shell">
                            <div class="slider-id-1 riva-slider-holder" id="riva-slider-1">
                                <div class="riva-slider-preload"></div>
                                <ul class="riva-slider">
                                    <li class="rs-center slideAni">
                                        <div class="imgSlide">
                                            <img src="images/slide1.png" title="" class="rs-image" alt="video entrevistas">
                                            <a href="#segundo_contenido"><div class="v1Slide1"></div></a>
                                            <a href="#segundo_contenido"><div class="v2Slide1"></div></a>
                                            <a href="#segundo_contenido"><div class="v3Slide1"></div></a>
                                            <a href="#segundo_contenido"><div class="v4Slide1"></div></a>
                                            <a href="#quinto_contenido"><div class="vBtSlide1"></div></a>
                                        </div>
                                        <div class="bgSlide1"></div> 
                                    </li>
                                    <li class="rs-video rs-center">
                                        <div class="imgSlide">
                                            <a href="http://player.vimeo.com/video/37246289?title=0&amp;byline=0&amp;portrait=1&amp;autoplay=1&amp;loop=1" target="_self">
                                                <img src="images/slide2.png" title="" class="rs-image" alt="video entrevistas">
                                            </a>
                                        </div>
                                        <div class="bgSlide2"></div>
                                    </li>
                                    <li class="rs-center">
                                        <div class="imgSlide">
                                            <img src="images/slide3.png" title="" class="rs-image" alt="video entrevistas">
                                            <a class="terminos fancybox.iframe" href="casoSeat.html"><div class="btSlideMasUno"></div></a>
                                           	<a class="terminos fancybox.iframe" href="casoDeloitte.html"><div class="btSlideMasDos"></div></a>
                                            <!--<a class="btSlide3" href="#"><button class="punch">Conoce el caso</button></a>-->
                                        </div>
                                        <div class="bgSlide3">
                                            <div id="stage" class="stage">
                                                <div id="clouds-2" class="stage"></div>
                                                <div id="clouds" class="stage"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="rs-control-nav">
                                    <li class="rs-icons"></li>
                                    <li class="rs-icons"></li>
                                    <li class="rs-icons"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="conClientes">
                        <div class="infoClientes">
                            <div class="conFraseCliente">
                                <div class="fraseCliente">
                                    <span class="frase">"Ventrevista ha aportado novedad y eficacia a nuestros procesos de selección. Es una herramienta sencilla de utilizar y que te permite optimizar el tiempo, conllevando también un ahorro en los recursos invertidos".</span>
                                </div>
                                <div class="autorFrase">
                                    <span class="nAutor">Deloitte HR.</span><br>
                                    <!--<span class="iAutor">Gerente Comercial de Nestle</span>-->
                                </div>
                            </div>
                            <div class="conBannerClientes">
                                <div class="bgHeadBanner"></div>
                                <div class="bannerClientes">
                                    <div class="conNivo">
                                        <div class="slider-wrapper theme-ventrevista">
                                            <div id="slider" class="nivoSlider">
                                                <img src="images/banner1.png" width="660" height="130" title="#caption1" alt="video entrevistas">
                                                <img src="images/banner2.png" width="660" height="130" title="#caption2" alt="video entrevistas">
                                                <img src="images/banner3.png" width="660" height="130" title="#caption3" alt="video entrevistas">
                                                <img src="images/banner4.png" width="660" height="130" title="#caption3" alt="video entrevistas">
                                                <img src="images/banner5.png" width="660" height="130" title="#caption3" alt="video entrevistas">
                                            </div>
                                            <!--<div id="caption1" class="nivo-html-caption">
                                                    <div class="cliente1"></div>
                            <div class="cliente2"></div>
                            <div class="cliente3"></div>
                            <div class="cliente4"></div>
                                    <div class="cliente5"></div>
                                            </div>
                            <div id="caption2" class="nivo-html-caption">
                                                    <div class="cliente1"></div>
                            <div class="cliente2"></div>
                            <div class="cliente3"></div>
                            <div class="cliente4"></div>
                                    <div class="cliente5"></div>
                                            </div>
                            <div id="caption3" class="nivo-html-caption">
                                                    <div class="cliente1"></div>
                            <div class="cliente2"></div> 
                            <div class="cliente3"></div>
                            <div class="cliente4"></div>
                                    <div class="cliente5"></div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="pieContenido"></div>
                </div>
            </li>


            <li id="segundo_contenido">
                <div class="conContenido2">
                    <div class="infoQue">
                        <div class="conTituloQue">
                            <span class="tQue">¿Qué es <strong>Ventrevista?</strong></span>
                        </div>
                        <div class="destacadosQue">
                            <ul class="listadoQue">
                                <li>Ventrevista optimiza el proceso de selección entre la criba de cv y la entrevista personal.</li>
                                <li>Las video entrevistas asíncronas (no en tiempo real) te permiten disponer de <span>videos de candidatos</span> que puedes <span>visionar</span>, <span>puntuar</span> y <span>compartir</span> en cualquier momento!</li>
                                <li>Ventrevista es el sistema mas fácil y eficiente de encontrar el talento que necesitas.</li>
                            </ul>
                        </div>
                        <div class="conGraQue">
                            <div class="graficoQue">
                                <img src="images/graficoQue.png" width="514" height="270" alt="video entrevistas">
                            </div>
                            <div class="videoQue">
                                <iframe src="http://player.vimeo.com/video/37246289?title=0&amp;byline=0&amp;portrait=0" width="480" height="270" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                        <div class="divisor1"></div>
                    </div>
                </div>
            </li>


            <li id="tercer_contenido">
                <div class="conContenido3">
                    <div class="infoComo">
                        <div class="conTComo">
                            <div class="titComo">
                                <span class="tComo">¿Cómo <strong>Funciona?</strong></span>
                            </div>
                            <div class="subComo">
                                <span class="sComo">Ventrevista te permite encontrar el candidato ideal en 3 sencillos pasos:</span>
                            </div>
                        </div>
                        <div class="conDestacadosComo">
                            <ul class="listadoComo">
                                <li class="como1">El reclutador redacta las preguntas y en un solo clic las envía a todos los candidatos.</li>
                                <li class="como2">Los candidatos contestan a las preguntas a través de la webcam.</li>
                                <li class="como3">El reclutador dispone de todos los videos en su panel de control para ver, puntuar y compartir en cualquier momento.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>


            <li id="cuarto_contenido">
                <div class="conContenido4">
                    <div class="infoPorque">
                        <div class="divisor2"></div>
                        <div class="titPorque">
                            <span class="tPorque">¿Por qué usar <strong>Ventrevista?</strong></span>
                        </div>
                        <div class="conColsPorque">
                            <div class="colIzqPorque">
                                <div class="titColsPorque">
                                    <span class="tColsPorque">Ventajas de la <strong>Empresa</strong></span>
                                </div>
                                <div class="infoCol">
                                    <ul class="listadoCols">
                                        <li><span>Ahorrar tiempo y dinero: </span>reduce hasta un 70% del tiempo y un 50% del coste de cada proceso. Ya no tendrás que coordinar tu agenda con los candidatos, reduciendo las entrevistas telefónicas y presenciales.</li>
                                        <li><span>Compartir y comparar: </span>comparte los videos  con otros colegas, pon una nota al candidato o solo a las preguntas que quieras. Podrás evaluar a los candidatos de una forma mas objetiva.</li>
                                        <li><span>Garantiza la espontaneidad: </span>el candidato puede ver solo una pregunta a la vez y responder a cada una sin verla anteriormente.</li>
                                        <li><span>Es fácil: </span>es un sistema intuitivo.</li>
                                        <li><span>Employer branding: </span>enriquece la imagen de empresa como innovadora y que apuesta por las nuevas tecnologías.</li>
                                        <li><span>Es seguro: </span>Ventrevista cumple con la LOPD y cuenta con el nivel más alto de seguridad informática.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="colDerPorque">
                                <div class="titColsPorque">
                                    <span class="tColsPorque">Ventajas del <strong>Candidato</strong></span>
                                </div>
                                <div class="infoCol">
                                    <ul class="listadoCols">
                                        <li><span>Flexibilidad: </span>puede participar desde cualquier lugar en el momento que quiera sin problemas de agenda.</li>
                                        <li><span>Objetividad: </span>el candidato sabe que está contestando las mismas preguntas en el mismo tiempo que el resto de candidatos y que los videos pueden ser revisados por mas de una persona.</li>
                                        <li><span>Posibilidad de diferenciarse: </span>el video permite expresar mejor personalidad y actitud.</li>
                                        <li><span>Es fácil: </span>es un sistema intuitivo.</li>
                                        <li><span>Es seguro: </span>Ventrevista cumple con la LOPD y cuenta con el nivel más alto de seguridad informática.</li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <div class="conBtPorque">
                            <!--<ul class="btCss3">
    <li><a class="button green"><p class="txBotonCss3">Casos de Éxito</p></a></li>
</ul>-->
                        </div>
                    </div>
                </div>
            </li>


            <li id="quinto_contenido">
                <div class="conContenido5">
                    <div class="bgTopContenido"></div>
                    <div class="infoPrueba">
                        <div class="conTPrueba">
                            <span class="tPrueba">Welcome <strong>Pack</strong></span>
                        </div>
                        <div class="conSPrueba">
                            <span class="txPrueba">Si quieres recibir mas información envía un mail a  <a href="mailto:info@ventrevista.es" target="_blank">info@ventrevista.es</a> o</span><br>
                                <span class="txPrueba">llámanos al <strong>+34 930107356</strong></span>
                        </div>
                        <div class="conFormulario">
                          <form id="formPrueba" class="formular" action="<?php echo base_url('site/mailPruebaGratis') ?>" method="post" onsubmit="return validar()">
                                <div class="conLabelContacto">
                                    <label>                                                                         
                                        <input name="nombre" id="nombre" value="* NOMBRE" data-validation-placeholder="* NOMBRE" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* NOMBRE';" onFocus="javascript:if(this.value=='* NOMBRE') this.value='';"/>
                                    </label>
                                </div>
                                <div class="conLabelContacto">
                                    <label>                                                                         
                                        <input name="empresa" id="empresa" value="* EMPRESA" data-validation-placeholder="* EMPRESA" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* EMPRESA';" onFocus="javascript:if(this.value=='* EMPRESA') this.value='';"/>
                                    </label>
                                </div>
                                <div class="conLabelContacto">
                                    <label>                                                                         
                                        <input name="cargo" id="cargo"  value="* CARGO" data-validation-placeholder="* CARGO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* CARGO';" onFocus="javascript:if(this.value=='* CARGO') this.value='';"/>
                                    </label>
                                </div>
                                <div class="conLabelContacto">
                                    <label>
                                        <input name="email" id="email" value="* E-MAIL" data-validation-placeholder="* E-MAIL" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* E-MAIL';" onFocus="javascript:if(this.value=='* E-MAIL') this.value='';"/>
                                    </label>
                                </div> 
                                <div class="conLabelContacto">
                                    <label>
                                        <input name="telefono" id="telefono" value="* TELÉFONO" data-validation-placeholder="* TELÉFONO" class="text-input" type="text" onBlur="javascript:if(this.value=='') this.value='* TELÉFONO';" onFocus="javascript:if(this.value=='* TELÉFONO') this.value='';"/>
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
                        <div class="conImgPrueba">
                            <img src="images/imgPrueba.png" width="425" height="432" alt="video entrevistas">
                        </div>
                    </div>
                    <div class="pieContenido"></div>
                </div>
            </li>


            <li id="sexto_contenido">
                <div class="conContenido6">
                    <div class="infoPacks">
                        <div class="conTPacks">
                            <div class="titPacks">
                                <span class="tPacks">Packs y <strong>Tarifas</strong></span>
                            </div>
                            <div class="txPacks">
                                <span class="pPacks">Si quieres recibir mas información envía un mail a <a href="mailto:info@ventrevista.es" target="_blank">info@ventrevista.es</a> o llámanos al <strong>+34 930107356</strong></span>
                            </div>
                        </div>
                        <div class="conPlanes">
                            <div class="titPlanes"></div>
                            <div class="ib-container" id="ib-container">
                                <article>
                                    <a><img src="images/plan1.png" width="175" height="200" alt="video entrevistas"></a>
                                </article>
                                <article>
                                    <a><img src="images/plan2.png" width="175" height="200" alt="video entrevistas"></a>
                                </article>
                                <article class="active">
                                    <a><img src="images/plan3.png" width="175" height="200" alt="video entrevistas"></a>
                                </article>
                                <article>
                                    <a><img src="images/plan4.png" width="175" height="200" alt="video entrevistas"></a>
                                </article>    
                            </div>
                            <div class="planPay">
                                <img src="images/planPay.png" width="220" height="245" alt="video entrevistas">
                            </div>
                        </div>
                        <div class="conTxIva">
                            <span class="pIva">Precios unitarios <strong>sin IVA</strong></span>
                        </div>
                    </div> 
                </div>
            </li>


            <li id="septimo_contenido">
                <div class="conContenido7">
                    <div class="bgTopContenido"></div>
                    <div class="infoContacto">
                        <div class="conColIzq">
                            <div class="titColContacto">
                                <span class="tInfoContacto">Información General</span>
                            </div>
                            <div class="infoColContacto">
                                <ul class="listadoContacto">
                                    <li class="contacto1"><span>+34 930107356</span></li>
                                    <li class="contacto2">
                                        <span>Ventrevista</span><br>
                                            <!--<span>C/ Diputación, 279, 1º, 08007,</span><br>-->
                                                <span>Barcelona, España</span>
                                                </li>
                                                <li class="contacto3"><a href="mailto:info@ventrevista.es" target="_blank">info@ventrevista.es</a></li>
                                                </ul>
                                                </div>
                                                </div>
                                                <div class="conColCen">
                                                    <div class="titColContacto">
                                                        <span class="tInfoContacto">Links de Interés</span>
                                                    </div>
                                                    <div class="conListadoLinks">
                                                        <ul class="listadoLinks">
                                                            <li class="linkFirst" style="list-style-image:url(images/german-flag.png);"><a href="http://www.ventrevista.de/" target="_blank">www.ventrevista.de</a></li>
                  																					<li class="linkMed" style="list-style-image:url(images/uk-flag.png);"><a href="http://www.ventrevista.co.uk/" target="_blank">www.ventrevista.co.uk</a></li>
                  																					<li class="linkLast" style="border-bottom:none; list-style-type:none;"></li>
                                                        </ul>
                                                        <div class="logoLinks"><a href="#primer_contenido"><img src="images/logoFooter.png" width="258" height="82" alt="video entrevistas"></a></div>
                                                    </div>
                                                </div>
                                                <div class="conColDer">
                                                    <div class="titColContacto">
                                                        <span class="tInfoContacto">Síguenos</span>
                                                    </div>
                                                    <div class="infoColContacto">
                                                        <a href="javascript:new_window('https://twitter.com/intent/follow?screen_name=VentrevistaEsp',800,500);void0;"><div class="btSocial1"></div></a>
                                                        <a href="javascript:new_window('http://www.linkedin.com/company/1276948?trk=tyah',1020,600);void0;"><div class="btSocial2"></div></a>
                                                        <a href="javascript:new_window('http://www.youtube.com/channel/UCI1q8JFnP198IWCTwPdNZyg',1040,600);void0;"><div class="btSocial3"></div></a>   
                                                    </div>
                                                </div>
                                                </div>
                                                <!--<div class="logoContacto">
                                                                                <a href="#primer_contenido"><img src="images/logoFooter.png" width="258" height="82" alt="" /></a>
                                                </div>-->
                                                <div class="conFooter">
                                                    <div class="infoFooter">
                                                        <div class="footerIzq">
                                                            <div class="conDerechos">
                                                                <span>&copy; 2013 - <strong>Ventrevista España.</strong></span>
                                                            </div>
                                                            <div class="copyHome">
                                                                <div class="footer-autor">
                                                                    <span id="ahorranito2"></span>
                                                                    <a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a>
                                                                    <a href="http://www.imaginamos.com" target="_blank">imagin<span>a</span>mos.com</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="footerDer">
<!--
                                                            <div class="mFooter"><a href="#sexto_contenido">Packs y Tarifas</a></div>
                                                            <div class="mFooter"><a href="#quinto_contenido">Pruébalo Gratis</a></div>
-->
                                                            <div class="mFooter"><a class="terminos fancybox.iframe" href="condiciones.html">Términos y Condiciones</a></div>
                                                            <div class="mPFooter"><a class="terminos fancybox.iframe" href="terminos.html">Política de Privacidad</a></div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                </div> 
                                                </li>


                                                </ul>

                                                <a href="#quinto_contenido"><div id="toBottom"></div></a>

                                                <div id="box">
                                                    <!--<a href="http://www.linkedin.com/groups/Ventrevista-España-3496815?gid=3496815&trk=hb_side_g/" target="_blank"><div class="red4"></div></a>-->
                                                    <a href="javascript:new_window('http://www.linkedin.com/shareArticle?mini=true&url=http://www.ventrevista.es/&title=Descubre%20el%20primer%20sistema%20de%20video%20entrevistas%20y%20elige%20mejor%20a%20tus%20empleados.%20http://www.ventrevista.es&source=Ventrevista%20'+encodeURIComponent(location),600,340);void0;"><div class="red4"></div></a>
                                                    <a href="javascript:new_window('http://twitter.com/share?url=&text=Descubre%20el%20primer%20sistema%20de%20video%20entrevistas%20y%20elige%20mejor%20a%20tus%20empleados.%20'+encodeURIComponent(location),500,400);void0;"><div class="red2"></div></a>
                                                    <a class="formMail fancybox.iframe" href="<?php echo base_url('index.php/site/mail') ?>"><div class="red5"></div></a>
                                                </div>

                                                </div>


                                                </body>

    
                                                </html>