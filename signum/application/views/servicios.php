<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Signum Consulting</title>
        <base href="<?php echo base_url() . 'assets/' ?>"></base>
        <link href="css/signum.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
            <?php include "meta.php" ?>
            <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
            <script type="text/javascript" src="js/organictabs.jquery.js"></script>
            <script type='text/javascript'>
                $(function() {
                    var q = <?php echo $areaQ; ?>;
                    for(i=1;i<=q;i++){
                        $("#tabs"+i).organicTabs({
                            "speed": 200
                        });
                    }
                });
            </script>
            <style type="text/css">
                #b4 {
                    color:#718f99;
                    border-bottom:solid 4px #718f99;
                }
                body {
                    overflow-x:hidden;
                }
            </style>
    </head>

    <body>
        <?php include "header.php" ?>

        <div class="b1000 areas">
            <h1>Servicios</h1>
            <hr style="margin-bottom:30px;" />
            <?php $cc = 0; ?> 
            <?php foreach ($area as $a): ?>
                <?php $cc++; ?>
                <div class="section" id="tabs<?php echo $cc; ?>">
                    <div class="col_left">
                        <h2 style="background-image:url(<?php echo base_url().'assets/area_img2/'.$a->area_icon; ?>)"><span id="<?php echo $a->area_id; ?>"><?php echo $a->area_title; ?></span></h2>
                        <ul class="nav">
                            <?php $c = 0; ?>
                            <?php foreach ($service as $s): ?>

                                <?php if ($s->service_area_id == $a->area_id): ?>
                                    <?php $c++; ?>
                                    <?php if ($c == 1) {
                                        $class = 'current';
                                    } else {
                                        $class = '';
                                    } ?>
                                    <li>
                                        <a href="#box<?php echo $c; ?>" class="<?php echo $class; ?>">
                                            <?php echo $s->service_title; ?>
                                        </a>
                                    </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                    <div class="col_right">
                        <?php $ccc = 0; ?> 
                        <?php foreach ($service as $s): ?>
                        <?php if ($s->service_area_id == $a->area_id): ?>
                        <?php $ccc++; ?>
                        <?php if($ccc == 1){ $class_ = 'boxes'; }else{ $class_='boxes hide'; } ?>
                                <ul class="<?php echo $class_; ?>" id="box<?php echo $ccc; ?>">
                                    <h2><?php echo $s->service_title; ?></h2>
                                    <img src="<?php echo base_url().'assets/area_img/'.$s->service_image; ?>" width="658" height="358" />
                                    <h3><?php echo $s->service_subtitle; ?></h3>
                                    <p><?php echo $s->service_text; ?></p>
                                </ul>
                        <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="clear"></div>
<?php endforeach; ?>

            <!--   <div class="section" id="tabs2">
                            <div class="col_left">
                            <h2 style="background-image:url(img/036.png)">Derechos humanos</h2>
                             ul class="nav">
                            <li><a href="#box1" class="current">Modelos de Intervención</a></li>
                            <li><a href="#box2">Politicas, Programas y Sistemas</a></li>
                            <li><a href="#box3">Construcción de Capacidades</a></li>
                            <li><a href="#box4">Estándares e Indicadores</a></li>
                        </ul
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Derechos humanos</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                                     
               
                            </div>
               </div> -->

            <!--    <div class="clear"></div>-->

            <!--    <div class="section" id="tabs3">
                            <div class="col_left">
                            <h2 style="background-image:url(img/035.png)">Seguridad</h2>
                             <ul class="nav">
                            <li><a href="#box1" class="current">Análisis de riesgos</a></li>
                            <li><a href="#box2">Estándares y mejores prácticas</a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Análisis de riesgos</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box2">
                                <h2>Estándares y mejores prácticas</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            </div>
                    <div class="clear"></div>
               </div>-->

            <!--   <div class="clear"></div>
               
               <div class="section" id="tabs4">
                            <div class="col_left">
                            <h2 style="background-image:url(img/035.png)">Gestión de entorno: riesgos socio – políticos</h2>
                             <ul class="nav">
                            <li><a href="#box1" class="current">Caracterización de entorno </a></li>
                            <li><a href="#box2">Análisis y gestión de riesgos e impactos</a></li>
                            <li><a href="#box3">Relacionamiento con stakeholders</a></li>
                            <li><a href="#box4">Diagnósticos rurales participativos</a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Caracterización de entorno</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box2">
                                <h2>Análisis y gestión de riesgos e impactos</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box3">
                                <h2>Relacionamiento con stakeholders</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box4">
                                  <h2>Diagnósticos rurales participativos</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            </div>
                    <div class="clear"></div>
               </div>
               
               <div class="clear"></div>-->

            <!--   <div class="section" id="tabs5">
                            <div class="col_left">
                            <h2 style="background-image:url(img/034.png)">Regulación y autogestión socio – ambiental</h2>
                             <ul class="nav">
                            <li><a href="#box1" class="current">Análisis del entorno regulatorio y sus implicaciones en el negocio</a></li>
                            <li><a href="#box2">Análisis de riesgos socio-ambientales, priorización y estrategias de prevención y manejo. </a></li>                 
                            <li><a href="#box3">Diseño e implementación de estrategias de relacionamiento con stakeholders.</a></li>
                            <li><a href="#box4">Acompañamiento jurídicos</a></li>
                            <li><a href="#box5">Acompañamiento en la gestión de trámites.</a></li>
                            <li><a href="#box6">Asesoría en la generación e implementación de proyectos de auto-gestión.  </a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Análisis del entorno regulatorio y sus implicaciones en el negocio</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box2">
                                <h2>Análisis de riesgos socio-ambientales</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box3">
                                <h2>Diseño e implementación de estrategias de relacionamiento con stakeholders.</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box4">
                                  <h2>Acompañamiento jurídicos</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                             <ul class="boxes hide" id="box5">
                                  <h2>Acompañamiento en la gestión de trámites.</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                             <ul class="boxes hide" id="box6">
                                  <h2>Asesoría en la generación e implementación de proyectos de auto-gestión.</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            </div>
                    <div class="clear"></div>
               </div>
            
               <div class="clear"></div>-->


            <!--   <div class="section" id="tabs6">
                            <div class="col_left">
                            <h2 style="background-image:url(img/033.png)">Regulación y autogestión socio – ambiental</h2>
                             <ul class="nav">
                            <li><a href="#box1" class="current">Análisis del entorno regulatorio y sus implicaciones en el negocio</a></li>
                            <li><a href="#box2">Análisis de riesgos socio-ambientales, priorización y estrategias de prevención y manejo. </a></li>                 
                            <li><a href="#box3">Diseño e implementación de estrategias de relacionamiento con stakeholders.</a></li>
                            <li><a href="#box4">Acompañamiento jurídicos</a></li>
                            <li><a href="#box5">Acompañamiento en la gestión de trámites.</a></li>
                            <li><a href="#box6">Asesoría en la generación e implementación de proyectos de auto-gestión.  </a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Análisis del entorno regulatorio y sus implicaciones en el negocio</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box2">
                                <h2>Análisis de riesgos socio-ambientales</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box3">
                                <h2>Diseño e implementación de estrategias de relacionamiento con stakeholders.</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box4">
                                  <h2>Acompañamiento jurídicos</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                             <ul class="boxes hide" id="box5">
                                  <h2>Acompañamiento en la gestión de trámites.</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                             <ul class="boxes hide" id="box6">
                                  <h2>Asesoría en la generación e implementación de proyectos de auto-gestión.</h2>
                                <img src="img/043.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            </div>
                    <div class="clear"></div>
               </div>
               
               
               <div class="clear"></div>-->

            <!--   <div class="section" id="tabs7">
                            <div class="col_left">
                            <h2 style="background-image:url(img/037.png)">Comunicaciones</h2>
                             <ul class="nav">
                            <li><a href="#box1" class="current">Comunicación estratégica</a></li>
                            <li><a href="#box2">Reportes de sostenibilidad</a></li>                 
                            <li><a href="#box3">Relacionamiento con stakeholders</a></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col_right">
                    
                                    <ul class="boxes" id="box1">
                                <h2>Comunicación estratégica</h2>
                                <img src="img/044.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box2">
                                <h2>Reportes de sostenibilidad</h2>
                                <img src="img/044.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            
                            <ul class="boxes hide" id="box3">
                                <h2>Relacionamiento con stakeholders</h2>
                                <img src="img/041.png" width="658" height="358" />
                                <h3>Consectetur adipiscing elit vivamus</h3>
                                <p>Sed diam quam, luctus eget adipiscing eget, blandit quis magna. Nulla feugiat turpis at dui imperdiet iaculis. Maecenas in ante orci, ac condimentum augue. Morbi dolor lacus, pulvinar laoreet molestie sit amet, iaculis ut est. Quisque scelerisque elit eu erat pellentesque luctus. Pellentesque nec lectus diam. Ut ac lacus mi, sit amet tincidunt risus. Nulla luctus elit sed ante interdum bibendum. Integer ultrices elit vel purus cursus aliquam. Vivamus turpis justo, tempus ac molestie eu, varius sed erat. Morbi imperdiet, massa sed tincidunt placerat, lacus ligula accumsan dui, sed laoreet diam turpis et enim. Donec felis tellus, fringilla eu iaculis sodales, porta ac urna. Nulla facilisi. Sed nec nunc et dui porta ultrices at vehicula ligula. Quisque gravida elementum odio non cursus. Aenean dignissim lacus et neque ultrices eleifend. </p>
                                    </ul>
                            </div>
                    <div class="clear"></div>
               </div>
               
               
               <div class="clear"></div>-->

        </div>

<?php include "footer.php" ?>

    </body>
</html>