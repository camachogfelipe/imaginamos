<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    if (isset($_GET["valor"])) {
        $valor = $_GET["valor"];
    } else {
        $cCat1 = new Dblineas_cat();
        $cats = $cCat1->getList();
        $valor = $cats[0]["id"];
    }
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Norquimicos</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <meta http-equiv="content-language" content="es" />
            <meta http-equiv="pragma" content="No-Cache" />
            <meta name="Keywords" lang="es" content="" />
            <meta name="Description" lang="es" content="" />
            <meta name="copyright" content="imaginamos.com" />
            <meta name="date" content="2011" />
            <meta name="author" content="diseÃ±o web: imaginamos.com" />
            <meta name="robots" content="All" />
            <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />

            <?php include 'scripst.php'; ?>

            <script type="text/javascript" src="js/jquery.easing.js"></script>
            <script type="text/javascript" src="js/jquery.dimensions.js"></script>
            <script type="text/javascript" src="js/jquery.accordion.js"></script>


    </head>

    <body onload="menuSlider.init('menu','slide')">

        <div class="principal">
            <?php include 'header.php'; ?>

            <div class="titulo">
                <div class="contienetitulo"><h1>Líneas de <span id="rojo">negocio</span></h1></div>
            </div>

            <div class="contenido">
                <div class="contenedor">
                    <div id="secciontab">
                        <ul class="tabs">
                            <?php
                            $cCat = new Dblineas_cat();
                            $categorias = $cCat->getList();
                            for ($a = 0, $b = count($categorias); $a < $b; $a++) {
                                ?>
                                <li><a href="index.php?seccion=negocio&valor=<?php echo  $categorias[$a]["id"] ?>" class="lista"><?php echo  utf8_encode($categorias[$a]["titulo"]); ?></a></li>
                            <?php } ?>


                        </ul>
                    </div>

                    <div class="resuladotabs">

                        <?php
                        $z = 10;
                        $consulta = DbHandler::GetAll("SELECT * FROM lineas_img_principal WHERE id_lineas_cat=" . $valor);
                        for ($a = 0; $a < count($consulta); $a++) {
                            ?>
                            <div class="contenidotab">

                                <div class="contimgpq"><a href="#modal-gal-<?php echo  $a ?>" class="modal-img"><img class="imgcompany" src="imagenes/productos_cat/780_528_<?php echo  $consulta[$a]["img"] ?>" width="250" /></a></div>
                                <div style="display:none;">
                                    <div id="modal-gal-<?php echo  $a ?>"><img src="imagenes/productos_cat/780_528_<?php echo  $consulta[$a]["img"] ?>" width="600" height="400" /></div>
                                </div>
                                <style>
                                    #conchonimg<?php echo  $z ?>{text-align: left;float: none;position: absolute;top: 0px;right: auto;bottom: auto;left: 20px;margin: 0px;width: 1080px;height: 80px;z-index: auto;}
                                    #contenedorslider2 #prevline<?php echo  $z ?> {width: 34px;height: 34px;display: block;text-indent: -999em;position: absolute;top: 50%;margin-top: -22px;background-image: url(imagenes/sprite.png);background-repeat: no-repeat;}
                                    #contenedorslider2 #nextline<?php echo  $z ?> {width: 34px;height: 34px;display: block;text-indent: -999em;position: absolute;top: 50%;margin-top: -22px;background-image: url(imagenes/sprite.png);background-repeat: no-repeat;}
                                    #nextline<?php echo  $z ?> {background-position: -419px -270px;right: -22px;}
                                    #prevline<?php echo  $z ?> {background-position: -383px -270px;left: 0px;}                                        
                                    #colchonimg<?php echo  $z ?>{width: 280px;	height: 80px;float:left;margin-bottom:20px;margin-left:10px;}
                                    #colchonimg<?php echo  $z ?> .lineascolchon<?php echo  $z ?> {margin:0px 5px 0 0px;	cursor: pointer;width:80px;height:80px;	position:relative;float:left;overflow:hidden;}

                                </style>
                                <script>
                                    // slider     de las flechas de los subimagenes                                       
                                    $(function() {$('#colchonimg<?php echo  $z ?>').carouFredSel({width: 280,auto:true,items: {visible: 3},scroll: {items: 1,duration: 1000,timeoutDuration: 1500},prev: {button: '#prevline<?php echo  $z ?>',items: 1},next: {button: '#nextline<?php echo  $z ?>',items: 1}});});
                                </script>

                                <div class="divtabs"></div>
                                <div id="contenedorslider2">
                                    <div id="colchonimg<?php echo  $z ?>">
                                        <?php
                                        $consulta2 = DbHandler::GetAll("SELECT * FROM imagenes WHERE id_lineas_img=" . $consulta[$a]["id"]);
                                        for ($b = 0, $c = count($consulta2); $b < $c; $b++) {
                                            ?>

                                            <div class="lineascolchon<?php echo  $z ?>"><!--item slider-->
                                                <img src="imagenes/marcas/80_76_<?php echo  $consulta2[$b]["img"] ?>" />
                                            </div><!--item slider-->
                                        <?php } ?>                                     
                                    </div>

                                    <a id="prevline<?php echo  $z ?>"  class="prev" href="#">&lt;</a>
                                    <a id="nextline<?php echo  $z ?>" class="next"  href="#">&gt;</a>
                                </div>
                                <div class="borde-tex"></div>
                            </div>
                            <div class="sombratabs"></div>
                            <?php $z = $z + 1;
                        }
                        ?>
                    </div>

                </div>
            </div>

<?php include 'footer.php'; ?>

        </div>
    </body>

</html>
