{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js ie9">
<!--<![endif]-->
  <head>
    <title>Zona Franca de Occidente - Mosquera</title>
    <link rel="shortcut icon" type="image/x-icon" href="{$obj->mSiteUrl}/images/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1024, maximum-scale=2">
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Keywords" lang="es" content="" />
    <meta name="Description" lang="es" content="" />
    <meta name="copyright" content="imaginamos.com" />
    <meta name="date" content="2013" />
    <meta name="author" content="dise�o web: imaginamos.com" />
    <meta name="robots" content="All" />

    <!-- Estilos -->
    <link href="{$obj->mSiteUrl}/styles/zona-franca.css" rel="stylesheet" type="text/css" />
    <link href="{$obj->mSiteUrl}/styles/internas.css" rel="stylesheet" type="text/css" />
    <link href="{$obj->mSiteUrl}/styles/style.css" rel="stylesheet" type="text/css" />
    <link href="{$obj->mSiteUrl}/styles/jScrollPane.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

    <!-- FANCY BOX-->
    <link rel="stylesheet" type="text/css" href="{$obj->mSiteUrl}/scripts/source/jquery.fancybox.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->

    <!-- Jquery -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery-1.8.3.min.js"></script>
    <!-- selectivizr -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
    <!-- Mootools -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery-selectivizr-min.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="assets/js/lib/jquery-selectivizr-min.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Placeholder -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery.placeholder.js"></script>
    <!-- Custom forms -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery.formularios.js"></script>
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery.formularios-select.js"></script>
    <!-- Slider -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery.slider.js"></script>
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/jquery.easing.js"></script>
    <!-- Ahorranito -->
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
    <!-- FANCYBOX -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/lib/source/jquery.fancybox.js"></script>
    <!-- TABS -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/jquery.easytabs.js"></script>
    <!-- Scroll -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/jquery.jscrollpane.js"></script>
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/jquery.mousewheel.js"></script>
    <!-- Actions -->
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/actions.js"></script>
    <script type="text/javascript" src="{$obj->mSiteUrl}/scripts/funciones.js"></script>

    <script type="text/javascript">
			var ajaxRutaAbs = '{$obj->mSiteUrl}/index.php?ajax';
      var rutaAbs = '{$obj->mSiteUrl}/index.php?';
    </script>
  </head>
  <body>

    <div class="header">
      {include file="menu.tpl"}
    </div>

    <div id="contenido">
      {include file=$obj->mConten}
    </div>

    <div class="footer">
      <div>
        <div>
          <h1>Empleo en marcha - Contacto</h1>
          <ul>
            <li>Tel&eacute;fono:<span>{$obj->cContac.txt_telefono}</span></li>
            <li>Email:<span>{$obj->cContac.txt_email}</span></li>
          </ul>
        </div>
        <div>
          <h1>Mapa de Navegaci&oacute;n</h1>
          <ul>
            {section name=k loop=$obj->cMenu}
            <li><a href="{$obj->cMenu[k].url}">{$obj->cMenu[k].txt_nombre} </a></li>
            {/section}
          </ul>
        </div>
        <div>
          <a target="new" href="http://www.zonafrancaoccidente.com/"></a> <!--LOGO 1-->
          <a target="new" href="http://www.alcaldiademosquera.gov.co/"></a><!--LOGO 2-->
          <a target="new" href="http://www.alcaldiademosquera.gov.co/"></a> <!--LOGO 3-->
        </div>
        <div>� 2013 <span>Zona Franca de Occidente - Mosquera</span> - Todos los derechos reservados</div>
        <div class="footer-ahorranito"></div>
      </div>
    </div>

    {literal}
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('.scroll-zonasegura').jScrollPane();
        $('#tab-container').easytabs();
        $("#sliderheader").bxSlider({
          mode: 'fade',
          pause: 5000,
          auto: true,
          controls: false,
          pager: false,
          easing: 'ease'
        });

        $('#slider1').bxSlider({
          pager: true,
          pause: 5000,
          pagerType: 'short',
          moveSlides: 1,
          auto: true,
          autoHover: true
        });

        $('#slider2').bxSlider({
          pager: true,
          pause: 5500,
          pagerType: 'short',
          moveSlides: 1,
          auto: true,
          autoHover: true
        });

        $("#noticias_home").bxSlider({
          mode: 'fade',
          pause: 5000,
          auto: true,
          controls: false,
          pager: true,
          easing: 'linear',
          pagerShortSeparator: '/'
        });
      });

      $(".select_dd").msDropDown().data("dd");
      $('form').customForm();
      $('input[placeholder]').placeholder();

      $('.footer-ahorranito').ahorranito({
        type:1,
        fontColor1:'#fff',
        height: 30
      });

      //LLAMADOS INTERNAS

      $("ul.slider_ofertasdesc").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: false,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $("ul.slider_directorio").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: false,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $("ul.slider_noticias").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: false,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $("ul.slider_empresas").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: false,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $("ul.slider-perfil-dv").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: true,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $("ul.slider-buscador-dv").bxSlider({
        mode: 'horizontal',
        pause: 5000,
        auto: false,
        controls: true,
        pager: true,
        pagerType: 'short',
        easing: 'ease',
        pagerShortSeparator: '/'
      });

      $(".socios > div > div:nth-of-type(1) > ul").bxSlider({
        slideWidth: 745,
        auto: true,
        pause: 5000,
        controls: false,
        pager: false,
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 0
      });

      /* FANCYBOX */
      $('.fancybox').fancybox();

      $(".popup").fancybox({
        'hideOnContentClick': true
      });

      $(".carga_emergente").fancybox({
        'scrolling' : 'no',
        'width' : '700px',
        'height' : '700px',
        'autoScale' : false,
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'type' : 'iframe'
      });

      $(".form_finalizado").fancybox({
        'scrolling' : 'no',
        'width' : '700px',
        'height' : '220px',
        'autoScale' : false,
        'fitToView' : false,
        'autoSize' : false,
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'type' : 'iframe'
      });

      $(".terminos-condiciones").fancybox({
        'scrolling' : 'no',
        'width' : '700px',
        'height' : '600px',
        'autoScale' : false,
        'fitToView' : false,
        'autoSize' : false,
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'type' : 'iframe'
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.acc_container').show();
        $(".acc_trigger").click(function() {
          event.preventDefault();
          $(".opciones").slideDown();
        });
        $(".acc_trigger").click(function() {
          event.preventDefault();
          $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-4").slideUp();
        });
      });
    </script>

    <script type="text/javascript">
      $(".ampliar-opciones-1").click(function(event) {
        event.preventDefault();
        $(".mas-opciones-2, .mas-opciones-3, .mas-opciones-4, .mas-opciones-5").slideUp();
        $(".mas-opciones-1").slideDown();
      });

      $('.mas-opciones-2').hide();
      $(".ampliar-opciones-2").click(function(event) {
        event.preventDefault();
        $(".mas-opciones-1, .mas-opciones-3, .mas-opciones-4, .mas-opciones-5").slideUp();
        $(".mas-opciones-2").slideDown();
      });

      $('.mas-opciones-3').hide();
      $(".ampliar-opciones-3").click(function(event) {
        event.preventDefault();
        $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-4, .mas-opciones-5").slideUp();
        $(".mas-opciones-3").slideDown();
      });

      $('.mas-opciones-4').hide();
      $(".ampliar-opciones-4").click(function(event) {
        event.preventDefault();
        $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-5").slideUp();
        $(".mas-opciones-4").slideDown();
      });

      $('.mas-opciones-5').hide();
      $(".ampliar-opciones-5").click(function(event) {
        event.preventDefault();
        $(".mas-opciones-1, .mas-opciones-2, .mas-opciones-3, .mas-opciones-4").slideUp();
        $(".mas-opciones-5").slideDown();
      });
    </script>
    {/literal}
  </body>
</html>

<div id="zona_segura_usuario" class="row-fluid zona_segura fondo-zonaf">
  <div>

    <div class="span6 line_div_css">
      <div class="class_frm frmlogin ">
        <input type="hidden" class="field_frm" id="myFunct" value="Login" />
        <div>
          <label>Nombre</label>
											<div class="espacio_en_blancopeque"></div>
          <input type="text" class="field_frm" id="txt_nickname" title="Digite el usuario" >
        </div>
								<div class="espacio_en_blancopeque"></div>
        <div>
          <label>Contrase�a</label>
											<div class="espacio_en_blancopeque"></div>
          <input type="password" class="field_frm" id="txt_passwd" title="Digite la contrase&ntilde;a">
        </div>
        <div>
									<div class="espacio_en_blancopeque"></div>
          <div class="cont_olvidaste">
            <p>�Olvid&oacute; tu usuario?</p>
            <div class="cont_enviaracorreo cont_izqgris">
              <input type="text" class="field_frm" id="env_usuario" title="Enviar a Correo Electr�nico" placeholder="Enviar a Correo Electr�nico">
              <a href="#">Enviar</a>
            </div>
          </div>
										
          <div class="cont_olvidaste">
            <p>�Olvid&oacute; tu contrase&ntilde;a?</p>
            <div class="cont_enviaracorreo cont_izqgris">
              <input type="text" class="field_frm" id="env_contrasena" title="Enviar a Correo Electr�nico" placeholder="Enviar a Correo Electr�nico">
              <a href="#">Enviar</a>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="submit_frm boton-dv" frmid="frmlogin" {*href="zonasegura-personas.php"*}>Ingresar</a>
      </div>
    </div>
    <div class="span6">
      <div>
        <p>�A&uacute;n no est&aacute;s registrado?</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
      </div>
      <a href="{$obj->mRegUsu}">Reg�strate</a>
    </div>
  </div>
</div>

<div id="zona_segura_empresa" class="row-fluid zona_segura fondo-zonaf">
  <div>
    <div class="span6 line_div_css">
      <div class="class_frm frmlogin2 ">
        <input type="hidden" class="field_frm" id="myFunct" value="Login" />
        <div>
          <label>Nombre</label>
											<div class="espacio_en_blancopeque"></div>
          <input type="text" class="field_frm" id="txt_nickname" title="Digite el usuario">
        </div>
									<div class="espacio_en_blancopeque"></div>
        <div>
          <label>Contrase&ntilde;a</label>
											<div class="espacio_en_blancopeque"></div>
          <input type="password" class="field_frm" id="txt_passwd" title="Digite la contrase&ntilde;a">
        </div>
        <div>
									<div class="espacio_en_blancopeque"></div>
          <div class="cont_olvidaste">
            <p>�Olvid&oacute; tu usuario?</p>
            <div class="cont_enviaracorreo cont_izqgris">
              <input type="text" class="field_frm" id="env_usuario" title="Enviar a Correo Electr�nico" placeholder="Enviar a Correo Electr�nico">
              <a href="#">Enviar</a>
            </div>
          </div>
                    
          <div class="cont_olvidaste">
            <p>�Olvid&oacute; tu contrase&ntilde;a?</p>
            <div class="cont_enviaracorreo cont_izqgris">
              <input type="text" class="field_frm" id="env_contrasena" title="Enviar a Correo Electr�nico" placeholder="Enviar a Correo Electr�nico">
              <a href="#">Enviar</a>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="submit_frm boton-dv" frmid="frmlogin2">Ingresar</a>
      </div>
    </div>
    <div class="span6">
      <div>
        <p>�A&uacute;n no est&aacute;s registrado?</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
      </div>
      <a href="{$obj->mRegEmp}">Reg&iacute;strate</a>
    </div>
  </div>
</div>

<!-- POPUP OFERTAS -->
<div id="oferta-detalle2" style="display: none;">
  <div class="cont_emergente" id="detalle_oferta">
    <h1 class="centrar_contenido">Nombre de la Oferta</h1>
    <div class="clear"></div>
    <h2 class="centrar_contenido">Nombre de la Empresa</h2>
    <div class="sombra_division"></div>
    <div class="row-fluid">
      <div class="span4">
        <div class="logo_empresa1"><img alt="" src="{$obj->mSiteUrl}/images/logo_empresa1.jpg"></div>
      </div>
      <div class="span8">
        <h2>Descripci&oacute;n de la Oferta</h2>
        <div class="clear espacio_en_blanco"></div>
        <p><span class="text_naranja">Lugar:</span> Lorem ipsum dolor sit amet</p>
        <p><span class="text_naranja">Sector:</span> Lorem ipsum dolor sit amet</p>
        <p><span class="text_naranja">Vacantes:</span> 2</p>
        <p><span class="text_naranja">Fecha de publicaci&oacute;n:</span>10/10/2013</p>
        <p>Sed dapibus condimentum mauris non imperdiet. Pellentesque mollis orci in nunc consequat faucibus. Nullam suscipit semper gravida. Curabitur placerat placerat commodo. Nullam vel nunc vitae tortor gravida laoreet at id quam. Duis quis diam justo. Pellentesque et mi nisi, eu semper nulla. Donec sem libero.</p>
      </div>
      <div class="clear espacio_en_blancopeque"></div>
      <div class="clear sombra_division"></div>
      <h2>Requisitos</h2>
      <div class="clear espacio_en_blanco"></div>
      <p><span class="text_naranja">Educaci&oacute;n:</span> Lorem ipsum dolor sit amet</p>
      <p><span class="text_naranja">&aAcute;rea:</span> Lorem ipsum dolor sit amet</p>
      <p><span class="text_naranja">Lugar de residencia:</span> Lorem ipsum dolor sit amet</p>
      <p><span class="text_naranja">Edad:</span> Lorem ipsum dolor sit amet</p>
      <p><span class="text_naranja">Experiencia laboral:</span> Lorem ipsum dolor sit amet</p>
      <div class="sombra_division"></div>
      <h2>Cargos equivalentes</h2>
      <div class="clear espacio_en_blanco"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis ornare ipsum. Sed lacinia interdum laoreet. Pellentesque et ornare mauris. Donec commodo condimentum interdum. Nunc sit amet orci vel eros facilisis placerat. Sed vulputate aliquam libero, quis adipiscing nisi placerat eu. Aenean erat ipsum, cursus sed eleifend non, fringilla ac ante. Pellentesque vitae pellentesque nunc.</p>
      <div class="clear espacio_en_blanco"></div>
      <a class="centrado bt_negro popup" href="#aplicacion-exitosa">Aplicar</a>
      <div class="clear espacio_en_blanco"></div>
      <div class="centrar_inline iconos_izq"><a id="imprimir" class="inline" href="#"></a><a id="guardar" class="inline" href="#"></a><a id="mensaje" class="inline" href="#"></a><a id="compartir" class="inline" href="#"></a></div>
    </div>
  </div>

  <!-- POPUP APLICACION EXITOSA -->
  <div class="popup-aplicacion-exitosa" id="aplicacion-exitosa">
    <h1 class="centrar_contenido">�Felicitaciones!</h1>
    <div class="clear espacio_en_blanco"></div>
    <h2 class="centrar_contenido">La empresa ha recibido tu hoja de vida</h2>
    <div class="sombra_division"></div>
    <h6><span>Nombre de la empresa u organizaci&oacute;n:</span> Lorem ipsum dolor sit amet</h6>
    <div class="clear espacio_en_blancopeque"></div>
    <h6><span>Cargo:</span> Lorem ipsum dolor sit amet</h6>
    <div class="clear espacio_en_blanco"></div>
    <p class="centrar_contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation
    </p>
    <a class="perfil-dv" href="index.php" target="_parent">Aceptar</a>
  </div>
</div>
