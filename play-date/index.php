<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Play Date</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <meta http-equiv="content-language" content="es" />
            <meta http-equiv="pragma" content="No-Cache" />
            <meta name="Keywords" lang="es" content="" />
            <meta name="Description" lang="es" content="" />
            <meta name="copyright" content="imaginamos.com" />
            <meta name="date" content="2013" />
            <meta name="author" content="diseño web: imaginamos.com" />
            <meta name="robots" content="All" />
            <link href="css/playdate.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

            <script type="text/javascript" src="js/jquery.slider.js"></script>
            <script type="text/javascript" src="js/banner.js"></script>
            <script type="text/javascript" src="js/jquery.carrousel.js"></script>
            <script type="text/javascript" src="js/carrousel.js"></script>
            <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
            <script type="text/javascript" src="js/ahorranito.js"></script>
            <script type="text/javascript" src="js/playdate.js"></script>
            <script type="text/javascript" src="js/jquery.valid.js"></script>
    </head>

    <body>
        <div class="logo"></div>
        <a class="logotipo" href="index.php"></a>
        <?php include("header.php"); ?>
        <?php include("banner.php"); ?>
        <div class="main-home">
            <div class="home-left">
                <?php
                
                $result2 = $obj->PintarBienvenida();
                ?>
                <div class="titulo"><?php echo $result2[0]['seccion_textos']; ?></div>

                <div class="texto"><?php echo $result2[0]['texto_textos']; ?></div>
            </div>
            <div class="home-right">
                <div class="margen">
                    <ul id="carousel-home" class="jcarousel-skin">
                        <?php 
                        
                        $result3 = $obj->PintarDestacados();
                        for ($l = 0; $l < count($result3); $l++) {
                        ?>
                        <li>
                            <div class="imagen"><img src="imagenes/<?php echo $result3[$l]['imagen_destacados']; ?>"  /></div>
                            <div class="titulo"><?php echo $result3[$l]['titulo_destacados']; ?></div>
                            <div class="texto"><?php echo $result3[$l]['texto_destacados']; ?></div>
                        </li>
                        <?php }?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>

</html>
