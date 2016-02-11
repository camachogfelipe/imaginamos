<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Norquimicos</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <meta http-equiv="content-language" content="es" />
            <meta http-equiv="pragma" content="No-Cache" />
            <meta name="Keywords" lang="es" content="" />
            <meta name="Description" lang="es" content="" />
            <meta name="copyright" content="imaginamos.com" />
            <meta name="date" content="2011" />
            <meta name="author" content="diseño web: imaginamos.com" />
            <meta name="robots" content="All" />
            <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
             <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
            <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
            <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script> 
            <script src="js/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>

            <?php include 'scripst.php'; ?>
            <script type="text/javascript">
                $(function(){
                    $("#formenviar").validationEngine();
                });
            </script>
            
    </head>

    <body onload="menuSlider.init('menu','slide')">


        <?php include 'header.php'; ?>


        <div class="banner" >
            <div id="banner">
                <div id="carousel">
                    <?php
                    $cBanner = new Dbbanner();
                    
                   $banner = $cBanner->getList();
                    for($c=0,$d=count($banner);$c<$d;$c++){ ?>
                         <div id="contienebanner"><!--item banner-->
                        <div id="texbanner">
                            <div id="titulobanner">
                               <?php echo  utf8_encode($banner[$c]["titulo1"]) ?><br>
                               <?php echo  utf8_encode($banner[$c]["titulo2"]) ?><br>
                               <?php echo  utf8_encode($banner[$c]["titulo3"]) ?><br>
                                   <a class="btnbaner" target="_blank" href="<?php echo  $banner[$c]["link"] ?>">Más <span id="regular">información</span></a>
                            </div>
                        </div>
                             <div class="img-frontal-slider"><img src="imagenes/banners/350_350_<?php echo  utf8_encode($banner[$c]["img_transparente"]) ?>" height="350" width="350" /></div>
                        <img class="imgbanner" src="imagenes/banners/2000_600_<?php echo  utf8_encode($banner[$c]["img_fondo"]) ?>" width="2000" height="600"/>
                    </div><!--item banner-->                        
                    <?php } ?>                   
                </div>
                <div id="pager"></div>
            </div>
        </div>

        <div class="contenido">
            <div class="contenedor">
                <?php
                $cWelcome = new Dbbienvenidos();
                $bienvenidos = $cWelcome->getList();
                
                ?>
                <div id="destacado">
                    <p><?php echo  utf8_encode(nl2br($bienvenidos[0]["globo"])) ?></p>
                </div>
                <div id="imgdesyacado">
                    <div id="mascara" style="width: 297px;"></div>
                    <img src="imagenes/destacados/215_215_<?php echo  $bienvenidos[0]["img"] ?>" width="213" />
                </div>
                <div class="textobienvenida">
                    <h1><?php echo  utf8_encode($bienvenidos[0]["titulo"]) ?><span id="verde"><?php echo  utf8_encode($bienvenidos[0]["subtitulo"]) ?></span></h1>
                    <p><?php echo  utf8_encode(nl2br($bienvenidos[0]["texto"])) ?></p>
                </div>
            </div>
            <div class="griss">
                <div class="contienesuscribcion">
                    <img class="imgsuscri" src="imagenes/imgsuscribete.png" />
                    <div class="textosuscri">
                        <h2><span id="boldrojo">company</span><br />profile</h2>
                        <p>Click here to access our english page and discover the world of NORQUIMICOS.</p>
                        <a id="btnmore" href="index.php?seccion=company" class="<?php if ($_GET['seccion'] == 'company') {
            echo 'activo';
        } ?>"><span id="bold">more</span> information</a>
                    </div>
                    <div class="suscibase">
                        <h3>suscríbase</h3>
                        <p>Suscríbase y reciba las últimas actualizaciones, información de nuevos productos, consejos técnicos y ofertas exclusivas</p>
                        <div id="suscribir">
                            <form name="for1" method="post" action="index.php?seccion=consultaf" id="formenviar">
                                <input type="text" id="correo"  class="validate[required,custom[email]]" name="correo" onblur="if(this.value=='') this.value='Ingrese su correo electrónico...'" onclick="if(this.value=='Ingrese su correo electrónico...') this.value=''" value="Ingrese su correo electrónico..."data-validation-placeholder="Ingrese su correo electrónico..." />
                                       <input type="submit"  class="mas"  value="Suscribir"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor">
                <div id="contenedorslider">
                    <div id="colchonimg">
                        <?php
                        $cSlide = new Dbslides();
                        $slide = $cSlide->getList();
                        for($a=0,$b=count($slide);$a<$b;$a++){ ?>
                             <div class="lineascolchon"><!--item slider-->
                            <img src="imagenes/slides/128_122_<?php echo  $slide[$a]["img_fondo"] ?>" />
                        </div><!--item slider-->
                        <?php } ?>
                     
                    </div>
                    <a id="prevline" class="prev" href="#">&lt;</a>
                    <a id="nextline" class="next" href="#">&gt;</a>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>

    </body>

</html>
<?php

if (isset($_GET["con"])) {   
    echo '<script>setTimeout(\'alert("Confirmación de contraseña realizada correctamente, favor revisar su correo electrónico");\',400);</script>';
}
if (isset($_GET["conno"])) {   
    echo '<script>setTimeout(\'alert("El correo que ingreso no se encuentra en la lista de usuarios");\',400);</script>';
}
?>