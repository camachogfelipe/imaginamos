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

            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>

            <script type="text/javascript">document.documentElement.className += " js";</script>

            <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
            <script type="text/javascript" src="js/jquery.carousel-1.1.js"></script>
            <script src="js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">

                $(document).ready(function(){
                    $(".tabs").accessibleTabs({
                        tabhead:'h2',
                        fx:"fadeIn"
                    });
		
                    $('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
		
                   /* $('.ver_mas_noticia').click(function() {
                        $('.detalle_noticia1').fadeIn('medium', function() {
                            // Animation complete
                        });
                    });
		*/
                    $('.bg_noticia1').click(function() {
                        $('.detalle_noticia1').fadeOut('medium', function() {
                            // Animation complete
                        });
                    });
	
                    $('.btn_cerrar').click(function() {
                        $('.detalle_noticia1').fadeOut('medium', function() {
                            // Animation complete
                        });
                    });
                });

            </script>
            <style type="text/css">
                .noticias_on{
                    background:#00a3ec;
                    border-radius:15px;
                    -moz-border-radius:15px;
                    -ms-border-radius:15px;
                    -o-border-radius:15px;
                    -webkit-border-radius:15px;
                    color:#1d5b8f !important;
                }
				.content_noticia2{
					float:none;
					width:auto;
					margin:20px;
					padding-top:20px;
					padding-bottom:20px;}
            </style>   
    </head> 
    <body>
        <div class="bg_body"></div>
        <div class="contenedor">
            <div class="header clearfix">
                <?php include( 'header.php' ); ?>

            </div>
            <div class="content">
                
                <div class="content_noticia1 clearfix">
                    <div class="img_noticia">
                        <img src="<?php echo base_url().'assets/news_img/'.$new->image; ?> " width="468" height="224" />
                    </div>
                    <div class="content_noticia2">
                        <p>
                            <?php echo $new->text2; ?>
                        </p>
                    </div>
                    <a href="<?php echo base_url().'site/news'?>" class="ver_mas_noticia">Volver</a>
                    <div class="share">
                        <a class="share_fb" href="#"></a>
                        <a class="share_tw" href="#"></a>
                    </div>
                </div>
                <!--      <div class="content_noticia1 clearfix">
                      sombras
                      <div class="sombra_bottom1"></div>
                      <div class="sombra_left2"></div>
                      <div class="sombra_right2"></div>
                      //
                      <div class="img_noticia">
                        <img src="img/img_noticia1.png" width="468" height="224" />
                      </div>
                      <div class="content_noticia2">
                         <h2>Lorem <span class="light_blue">Ipsum</span></h2>
                         <h4>Julio/5/2012</h4>
                         <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.
                         </p>
                      </div>
                      <a class="ver_mas_noticia">Ver más</a>
                      <div class="share">
                        <a class="share_fb" href="#"></a>
                        <a class="share_tw" href="#"></a>
                      </div>
                    </div>-->

                
                <?php include( 'footer.php' ); ?>
            </div>
        </div>
        <div class="detalle_noticia1">
            <div class="bg_noticia1">
            </div>
            <div class="content_detalle_noticia">
                <a class="btn_cerrar"></a>
                <h2>Lorem <span class="light_blue">Ipsum</span></h2>
                <div class="clearfix detalle_noticia2">
                    <img width="468" src="img/img_noticia1.png" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.<br />
                        <br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.<br />
                        <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.<br />
                        <br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi leo, ultricies in suscipit eget, lobortis vel nisl. Phasellus ac risus non odio mattis eleifend. Mauris rutrum sapien faucibus erat dictum et viverra dolor fermentum. Pellentesque elementum sagittis pulvinar. Aenean sollicitudin nulla ut lectus interdum placerat.</p>
                </div>
            </div>
        </div>
    </body>
</html>
