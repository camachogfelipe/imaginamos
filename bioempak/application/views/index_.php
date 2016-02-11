<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bioempak</title>
        <base href="<?php echo base_url() . 'assets/' ?>"></base>
        <link href="css/all.css" rel="stylesheet" type="text/css" />
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="img/favicon.ico" rel="shortcut icon" />
        <link href="css/style_slider.css" type="text/css" rel="stylesheet" />
        <link href="css/skin.css" type="text/css" rel="stylesheet" />
        <link href="css/jquery.selectbox.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.selectbox-0.1.3.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
        <script src="js/jquery.tinicarousel.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function(){	
                $("#slider").sudoSlider({
                    numeric:true,
                    controlsFade:false,
                    continuous:true,
                    auto:true,
                    pause:4500,
                    fade:true
                });
			
                $('#slider2').tinycarousel({ 
                    controls: true,
                    duration:500
			
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
        <script type="text/javascript">
            $(document).ready(function(e) {
                $('.btn_cerrar').click(function() {
                    $('.popup_errorU,.popup_errorE,.popup_errorV,.popup_errorN').fadeOut('medium', function() {
        		
                    });
                });
	
                $('.popup_errorU,.popup_errorE,.popup_errorV,.popup_errorN').hide();
            });

            function valEmail(email){
                re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
                if(!re.exec(email))    {
                    return false;
                }else{
                    return true;
                }
            }
            function abriValidacion(){
                if(jQuery('#name').val() == "" || jQuery('#name').val() == "Nombre completo"){
                    $('.popup_errorU').fadeIn('medium'); 
                    return false;
                }
                if(jQuery('#email').val() == "" || jQuery('#email').val() == "Correo electrónico"){
                    $('.popup_errorE').fadeIn('medium');
                    return false;
                }
                if(!valEmail(jQuery('#email').val())){
                    $('.popup_errorV').fadeIn('medium');
                    return false;
                }
                
                jQuery.ajax({
                   url  :   '<?php echo base_url().'site/save' ?>',
                   type :   'POST',
                   data :   {
                       'name'  : jQuery('#name').val(),
                       'email' : jQuery('#email').val()
                   },
                   success:function(){
                       $('.popup_errorN').fadeIn('medium');
                       jQuery('#name').val('Nombre completo');
                       jQuery('#email').val('Correo Electronico');
                   }
                });
            }

            var map;
            function initialize() {
                var mapOptions = {
                    zoom: 15,
		  
                    center: new google.maps.LatLng(4.7497108,-74.0422331),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
		
                map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);
                var marker = new google.maps.Marker({
                    map: map,
                    position: map.getCenter()
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <style type="text/css">
            .home_on{
                background:#00a3ec;
                border-radius:15px;
                -moz-border-radius:15px;
                -ms-border-radius:15px;
                -o-border-radius:15px;
                -webkit-border-radius:15px;
                color:#1d5b8f !important;
            }

        </style> 

    </head>

    <body>
        <div class="bg_body"></div>
        <div class="contenedor">
            <div class="header clearfix">
                <?php include( 'header.php' ); ?>
                <div id="slider" style="height:300px !important;">
                    <ul>				
                        <li>
                            <div style="float:left; margin-left:65px;">
                                <!--<h3>BIENESTAR</h3>-->
                                <!--<h4>Dolor sit amet</h4>
                                <p>
                                Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. consectetuer adipiscing elit. Aenean commodo ligula eget.
                                </p>-->
                            </div>
                            <img src="img/img_slide1.png" style="float:right; margin-right:75px;" height="300" />
                        </li>
                        <li>
                            <div style="float:left; margin-left:65px;">
                                <!--<h3>SEGURIDAD</h3>-->
                                <!-- <h4>Dolor sit amet</h4>
                                 <p>
                                 Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. consectetuer adipiscing elit. Aenean commodo ligula eget.
                                 </p>-->
                            </div>
                            <img src="img/img_slide2.png" style="float:right; margin-right:75px;" height="300" />
                        </li>
                        <li>
                            <div style="float:left; margin-left:65px;">
                                <!--<h3>SEGURIDAD</h3>-->
                                <!-- <h4>Dolor sit amet</h4>
                                 <p>
                                 Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. consectetuer adipiscing elit. Aenean commodo ligula eget.
                                 </p>-->
                            </div>
                            <img src="img/img_slide3.png" style="float:right; margin-right:75px;" height="300" />
                        </li>
                        <li>
                            <div style="float:left; margin-left:65px;">
                                <!--<h3>SEGURIDAD</h3>-->
                                <!-- <h4>Dolor sit amet</h4>
                                 <p>
                                 Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. consectetuer adipiscing elit. Aenean commodo ligula eget.
                                 </p>-->
                            </div>
                            <img src="img/img_slide4.png" style="float:right; margin-right:75px;" height="300" />
                        </li>
                        <li>
                            <div style="float:left; margin-left:65px;">
                                <!--<h3>SEGURIDAD</h3>-->
                                <!-- <h4>Dolor sit amet</h4>
                                 <p>
                                 Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. consectetuer adipiscing elit. Aenean commodo ligula eget.
                                 </p>-->
                            </div>
                            <img src="img/img_slide5.png" style="float:right; margin-right:75px;" height="300" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <h2 class="tittle_clientes">Nuestros <span class="light_blue">clientes</span></h2>
                <div class="clearfix content_slider2">
                    <div class="sombra_left1"></div>
                    <div class="sombra_right1"></div>
                    <div id="slider2" >
                        <a class="buttons prev" href="#"></a>
                        <div class="viewport">
                            <ul class="overview">
                                <?php foreach ($customers as $c): ?>
                                    <li>
                                        <a class="cliente1" href="#">
                                            <img src="<?php echo base_url() . 'assets/customers_img/' . $c->bigimage; ?>" width="210" height="170" />
                                        </a>
                                        <div class="detalle1">
                                            <img src="<?php echo base_url() . 'assets/customers_img/' . $c->smallimage; ?>" width="185" height="180" />
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a class="buttons next" href="#"></a>
                    </div>
                </div>
                <div class="clearfix" style="width:100%;">
                    <div class="content_map">
                        <h2>Nuestra <span class="light_blue">Ubicación</span></h2>
                        <div class="mapbox">
<!--                            <div id="map_canvas"></div>-->
                            <iframe width="465" 
                                    height="238" 
                                    frameborder="0" 
                                    scrolling="no" 
                                    marginheight="0" 
                                    marginwidth="0" src="<?php echo $map->map;  ?>"></iframe>
                            <br />
                        </div>
                        <div class="sombra1"></div>
                    </div>
                    <div class="content_suscrib">
                        <h2>Suscripción <span class="light_blue">Newsletter</span></h2>
                        <div class="boxsub">
                            <div class="box_sub2">
                                <h3>Suscríbete con nosotros</h3>
                                <h4>somos seguridad ante todo.</h4>
                                <input id="name" onclick="if(this.value=='Nombre completo')this.value=''" onblur="if(this.value=='')this.value='Nombre completo'" value="Nombre completo" />
                                <input id="email" onclick="if(this.value=='Correo electrónico')this.value=''" onblur="if(this.value=='')this.value='Correo electrónico'" class="correo" value="Correo electrónico" />
                                <a class="env_susc" href="javascript:abriValidacion();">Suscribir</a>
                            </div>
                        </div>
                        <div class="sombra1"></div>
                    </div>
                </div>
                <?php include( 'footer.php' ); ?>

            </div>
        </div>
        <div class="popup_errorU">
            <div class="bg_popup"></div>
            <div class="content_popup1">
                <a class="btn_cerrar"></a>
                <p>Por favor escriba su nombre</p>
            </div>
        </div>
        <div class="popup_errorE">
            <div class="bg_popup"></div>
            <div class="content_popup1">
                <a class="btn_cerrar"></a>
                <p>Por favor escriba un email</p>
            </div>
        </div>
        <div class="popup_errorV">
            <div class="bg_popup"></div>
            <div class="content_popup1">
                <a class="btn_cerrar"></a>
                <p>Por favor escriba un email valido</p>
            </div>
        </div>
        <div class="popup_errorN">
            <div class="bg_popup"></div>
            <div class="content_popup1">
                <a class="btn_cerrar"></a>
                <p>Proceso exitoso</p>
            </div>
        </div>
    </body>
</html>