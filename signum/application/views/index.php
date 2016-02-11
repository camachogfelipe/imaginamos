<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Signum Consulting</title>
        <base href="<?php echo base_url() . 'assets/' ?>"></base>
        <link href="css/signum.css" rel="stylesheet" type="text/css" />
        <link href="css/slides.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

            <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
            <script type="text/javascript" src="js/slides.min.jquery.js"></script>
            <script>
                $(function(){
                    $('#slides').slides({
                        pagination: false,
                        preload: true,
                        play:8000,
                        pause: 2500,
                        generateNextPrev: true
                    });
		
                    $('#slides_b').slides({
                        effect: 'fade',
                        pagination: false,
                        preload: true,
                        play:4000,
                        pause: 2000,
                        generateNextPrev: true
                    });
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function(){

                    $(window).resize(function(){
                        $('#slides').css({
                            position:'absolute',
                            width: $(window).width(),
			   
                        });


                        $('#slides .slides_container').css({
                            width: $(window).width(),
			   
                        });
                        $('#slides .slider_box').css({
                            width: $(window).width(),
			   
                        });
          
		  


                    });

                    // Ejecutamos la función
                    $(window).resize();

                });

            </script>
            <style type="text/css">
            #b1 {color:#718f99; border-bottom:solid 4px #718f99;}
            body {overflow-x:hidden;}
            .txt-banner {width:450px; height:120px; position:relative;}
            .caja-banner {width:450px; height:120px; float:left; overflow:hidden; font:13px Helvetica, sans-serif; color:#626262; line-height:15px;}
            .bt-banner {width:148px; height:39px; position:absolute; left:0; bottom:-5px;}
        </style>
            <?php

            function palabraComplete($texto) {
                $textoTemp = explode(" ", $texto);
                unset($textoTemp[(count($textoTemp) - 1)]);
                return implode(" ", $textoTemp);
            }
            ?>
    </head>

    <body>
        <?php include "header.php" ?>
        <div class="slider">

            <div id="slides">
                <div class="slides_container">
                    <?php foreach ($banner as $b): ?>
                        <div class="slider_box" style="background-image:url(<?php echo base_url() . "assets/banner_img/" . $b->image; ?>)">
                            <div class="txt">                
                                <h2><?php echo $b->title; ?></h2>
                                <div class="txt-banner">
                                	<div class="caja-banner"><?php echo $b->text; ?></div>
                                	<div class="bt-banner"><a href="<?php echo base_url() . 'site/servicios/#' . $b->idArea; ?>" class="done">Más información</a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>


        <div class="b1000">
            <h1>Nuestro portafolio</h1>
            <div style="border-bottom:solid 2px #F0F0F0; margin-bottom:40px"></div>
            <?php $c = 0; ?>
            <?php foreach ($portfolio as $p): ?>
                <?php $c++; ?>
                <div class="prominent <?php
            if ($c == 3) {
                echo ' last ';
            }
                ?> ">
                    <img src="<?php echo base_url() . "assets/portfolio_img/" . $p->image; ?>" width="291" height="146" />
                    
                    <h3 style="padding-left:0;"><img src="<?php echo base_url() . "assets/portfolio_img/" . $p->icon; ?>" width="30px" height="30px" style="float:left; border:none; margin: 0 10px 10px 0;" /> <?php echo $p->title; ?></h3>
                    <div class="txt">
                        <p><?php echo substr(strip_tags($p->text), 0, 191); ?></p>
                    </div>
                    <a href="<?php echo base_url() . 'site/servicios/#' . $p->idArea; ?>" class="mas">Más información <?php //echo $c;  ?></a>
                </div>
                <?php
                if ($c == 3) {
                    echo '<div></div>';
                    $c = 0;
                }
                ?>

            <?php endforeach; ?>


            <div class="clientes" style="float:right;">
                <h2>Nuestros clientes</h2>

                <div id="slides_b">
                    <div class="slides_container">
                        <?php foreach ($logos as $l): ?>
                            <div class="slider_box">
                                <div class="table_cell">
                                    <img src="<?php echo base_url() . "assets/logos_img/" . $l->image; ?>"  width="290" height="190"  />
                                </div>
                                <div class="name"><?php echo $l->title; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
        </div>

        <?php include "footer.php" ?>

    </body>
</html>