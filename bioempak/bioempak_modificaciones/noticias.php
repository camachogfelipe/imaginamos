<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<!-- Mirrored from www.bioempak.com/site/news by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:55:00 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bioempak</title>
        <base ></base>
       <link href="http://www.bioempak.com/assets/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../assets/css/all.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/css/tabs_style.css" type="text/css" media="screen">
             <link href="http://www.bioempak.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
             <link rel="stylesheet" href="../assets/css/uniform.aristo.css">
             <link href="../assets/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />

            <script type="text/javascript" src="../assets/js/jquery-1.6.1.min.js"></script>

            <script type="text/javascript" src="../assets/js/jquery.selectbox-0.1.3.js"></script>
            <script type="text/javascript">document.documentElement.className += " js";</script>

            <script type="text/javascript" src="../assets/js/jquery.mousewheel.min.js"></script>
            <script type="text/javascript" src="../assets/js/jquery.carousel-1.1.js"></script>
            <script src="../assets/js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript" src="../../w.sharethis.com/button/buttons.js"></script>
            <script type="text/javascript">stLight.options({publisher: "0f2cec6c-d1e2-4b5a-b235-2317351f4b57"});</script>
            <script type="text/javascript">

                $(document).ready(function(){
                    $.post('', {id_noticia:1});
                    $(".tabs").accessibleTabs({
                        tabhead:'h2',
                        fx:"fadeIn"
                    });
                    //enviar a controlador site id_noticia
                    $('.bx-pager-link active').(function(){
                      //$.post('application/controllers/site.php', id_noticia:$('.p-noticia').attr('id'));
                      
                      alert("El id es: "+$('.p-noticia').attr('id'));

                    });

                    $('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
    
                    /*$('.ver_mas_noticia').click(function() {
                        $('.detalle_noticia1').fadeIn('medium', function() {
                            // Animation complete
                        });
                    });*/
    
                    $('.bg_noticia1').click(function() {
                        $('.detalle_noticia1').fadeOut('medium', function() {
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
    
                    $('#enviando').click(function() {
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

                });

                $(function () {
                    $("#country_id").selectbox();
                    $("#country_id2").selectbox();
                    $("#country_id3").selectbox();
                    $("#country_id4").selectbox();
                    $("#country_id5").selectbox();
                });
            </script>
            <style type="text/css">
                .noticias_on{
                     background:url(../assets/img/bg_menu_item.png) bottom; color:#1d5b8f !important;
                }
            </style>  
            <script src="../assets/js/jquery.uniform.js"></script>
            <script type="text/javascript" src="../assets/js/jquery.scrollTo-1.4.2-min.js"></script>
            <script type="text/javascript">
               (function($) { 
                  $(function() {
                      $(":radio").uniform();
                    });
                })(jQuery);
            </script> 
            <script src="../assets/js/jquery.jscrollpane.js"></script>
            <script src="../assets/js/jquery.mousewheel.js"></script>
            <script src="../assets/js/jquery.paginador.js"></script>
            <script type="text/javascript">
            $(document).ready(function () {
              $('.text-noticia').jScrollPane({verticalDragMinHeight: 29,verticalDragMaxHeight: 29});
              //PAGINADOR
              $("ul.pagination1").quickPagination({pagerLocation:"button",pageSize:"10"});
            });
            </script>
             <script src="../assets/js/jquery.slider.js"></script>            
            <script>
              //Slider
              $(function(){
              $('.item-noticias').bxSlider({
              mode: 'horizontal',
              captions: true,
              auto: false,
              controls: true,
              speed: 500
              });
              });
            </script>
    </head> 
    <body>

      <a href="#form"><div class="registro"></div></a>

        <div class="bg_body"></div>

    <div class="contenedor">
        <div class="header clearfix">
                
   
    <div class="menu">
      <div class="clearfix">
        <ul class="lista_menu">
          <li><a class="home_on" href="index.html">Home</a></li>
          <li><a class="nosotros_on" href="us/index.html#nogo">Nosotros</a></li>
          <li><a class="productos_on" href="prods.html">Productos</a></li>
          <li><a class="noticias_on" href="news.html">Noticias</a></li>
          <li><a class="tecno_on" href="tech.html">Tecnología</a></li>
          <li style="margin-right:0;"><a class="contacto_on" href="contact.html">Contáctenos</a></li>
        </ul>
        <div class="redes clearfix">
          <a  target="_blank"class="facebook" href="http://www.facebook.com/bioempak.sa?fref=ts">facebook</a>
          <a target="_blank" class="twitter" href="https://twitter.com/bioempak">Twitter</a>
        </div>
      </div>
    </div>
    <a href="index.html"><img class="logo" src="../assets/img/logo.png" width="412" /></a>
            </div>
            <div class="content">
              <div class="content_noticia1 clearfix">

                   <h1 class="tittle_tecno">Noticias de <span class="light_blue">Interes</span></h1>   

                      <div class="sombra_bottom1"></div>
                      <div class="sombra_left2"></div>
                      <div class="sombra_right2"></div>

                     <div class="slider-noticias">

                      <ul class="item-noticias">
                        <?php foreach($noticias as $noticia): ?>
                        <li> 

                      <div class="content_noticia-blog">
                        
                         <img src="http://images.lainformacion.com/cms/cebit-2013-technology-trade-fair/2013_3_5_6qKnRcafJa05Mdia2XS7Q4.jpg?width=479&height=359&type=height&id=BPtGOFJKhJoiOIRjF16Mz&time=1362490345&project=lainformacion" width="468" height="300" />
                         <h2>Lorem <span class="light_blue">Ipsum</span></h2>
                         <h4><?php echo $noticia->fecha;?></h4>
                         <div class="text-noticia">
                         <p class="p-noticia" id="<?php echo $noticia->id;?>">
                          <?php echo $noticia->texto;?>
                         </p>                      
                         </div>
                         
                         <div class="clear"></div>

                         <div class="marco-calificador">
                           <div class="titulo-calificador">Calificar noticia:</div>
                           <table class="calificador">
                              <tr>
                                <td><input type="radio" name="5" id="5" checked="chevcked" class="styled" /></td>
                                <td><label for="5">Bueno</label></td>
                              </tr>
                              <tr>
                                <td><input type="radio" name="5" id="7" class="styled" /></td>
                                <td><label for="7">Neutro</label></td>
                              </tr>
                              <tr>
                                <td><input type="radio" name="5" id="6" class="styled" /></td>
                                <td><label for="6">Malo</label></td>
                              </tr>                              
                            </table>
                          </div> 
                        
                      </div>
                    <?php endforeach;?>
 
                      <h1 class="tittle_tecno">2 <span class="light_blue">comentarios</span></h1>
                                          
                      <div class="marco-comentarios"> 


                         <ul class="pagination1">
                         <?php foreach($comentarios as $comentario): ?> 
                           <li class="comentario">
                              <div class="datos-usuarios">
                                <img src="../assets/img/usuario.png">
                                <h2><?php echo $comentario->nombre;?></h2>
                                <div class="text-noticia">
                              </div>
                              <div class="clear"></div>
                             <p class="p-comentario" id="<?php echo $comentario->id;?>"><?php echo $comentario->comentario;?></p>  
                               <div class="clear"></div>
                               <a href="javascript:$.scrollTo('#form-comentario',800);" class="responder">Responder</a>                                
                           </li>
                         <?php endforeach; ?>
                         </ul>

                      <h1 class="tittle_tecno">Deja tu <span class="light_blue">comentario</span></h1>                     
                      <div class="form_contacto clearfix">
                        <div class="input_contacto" >
                            <input id="name" onclick="if(this.value=='Nombre completo')this.value=''" onblur="if(this.value=='')this.value='Nombre completo '" value="Nombre completo" />
                            <input id="email" onclick="if(this.value=='Correo electrónico')this.value=''" onblur="if(this.value=='')this.value='Correo electrónico'" value="Correo electrónico" />
                        </div>
                        <div class="input_contacto2">
                            <textarea style="height: 83px;" id="comment" onclick="if(this.value=='Comentario')this.value=''" onblur="if(this.value=='')this.value='Comentario'">Comentario</textarea>
                            <div id="err"></div>
                        </div>
                    </div>
                    <a href="#form" class="enviar_contacto" id="enviando" style="margin-bottom: 20px">COMENTAR</a>
                      <div class="clear"></div>

                     </li>
                    </ul>     
                     <div class="clear"></div>                   
                  </div><!--Slider Noticia-->    
                  <div class="clear" id="form-comentario"></div>
              </div>
                    
    
    <div class="footer">
      <div class="clearfix">
        <img class="logo2" src="../assets/img/logo2.png" />
        <ul class="navmap">
          <li><a href="index.html">Home</a></li>
          <li><a href="us/index.html#nogo">Nosotros</a></li>
          <li><a href="<?php echo base_url().site/prods;?>">Productos</a></li>
          <li><a href="news.html">Noticias</a></li>
          <li><a href="tech.html">Tecnología</a></li>
          <li><a href="contact.html">Contáctenos</a></li>
        </ul>
        <p class="info_footer">
        <span>Información</span><br />
        CRA 19B # 168-77<br />
        Bogotá, Colombia<br />
        Teléfono (57) (1)  6747423 <br />
        Fax. (57) (1)  6746915<br />
        administracion@bioempak.com
        </p>
        <div class="redes_footer">
          <h5>Síguenos</h5>
          <div class="clearfix">
            <a class="facebook_footer" href="http://www.facebook.com/bioempak.sa?fref=ts" target="_blank"></a>
            <a class="twitter_footer" href="https://twitter.com/bioempak" target="_blank"></a>
            <a class="youtube" href="#"></a>
          </div>
          <div class="tobrochure">
            <h3>Brochures:</h3>
            <a target="_blank" href="http://www.bioempak.com/assets/brochure_farma">Farmacéuticos</a>
            <a target="_blank" href="http://www.bioempak.com/assets/brochure_alimentos">Alimentos</a>
          </div>
        </div>
      </div>
      <div class="clearfix autor1">
        <h6>Copyright © 2012 - BIOEMPAK - Todos los derechos reservados</h6>
        <div class="imag">
          <a target="_blank" href="http://www.imaginamos.com/">Diseño Web: </a><a target="_blank" class="imagina1" href="http://www.imaginamos.com/">imagin<span>a</span>mos.com</a>
        </div>
      </div>
    </div>

<div class="bg_gris">
  <div class="gris_left"></div>
  <div class="gris_right"></div>
</div>            </div>
        </div>
        <!--<div class="detalle_noticia1">
            <div class="bg_noticia1">
            </div>
        </div>-->
    </body>

<!-- Mirrored from www.bioempak.com/site/news by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:55:22 GMT -->
</html>
<!--Formulario Login-->

<!-----Formulario Registro---->