<?php
require_once('class/class_pintar.php');
$obj2 = new Pintar();
$result = $obj2->Pintardistribuidor();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>.: TECNOSALUD :.</title>
        <meta name="viewport" content="width=1008, maximum-scale=2" />
        <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="pragma" content="No-Cache" />
        <meta name="Keywords" lang="es" content="" />
        <meta name="Description" lang="es" content="" />
        <meta name="copyright" content="imaginamos.com" />
        <meta name="date" content="2012" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />

        <link type="text/css" href="css/tecnosalud.css" rel="stylesheet" />
      
    </head>
    <body>


        <!--<div id="loader"><div id="progress"></div></div>-->


        <div class="con-general">
            <div class="margen-general">


                <?php include("header.php"); ?>


                <div class="info-auto">
                    <a id="distribuidor"></a>
                    <h6>DISTRIBUIDORES</h6>
                    <div class="con-info-dina">
                        <?php
                        for ($a = 0; $a < count($result); $a++) {
                            ?>
                            <div class="distribuidor-<?php echo $result[$a]['distribuidor_id'] ?> distribuidor-big">

                                <h3><?php echo $result[$a]['distribuidor_nombre'] ?></h3>
                                <h4></h4>
                                <img src="cms/modules/distribuidor/files/big/<?php echo $result[$a]['distribuidor_image1'] ?>" width="200" height="200" alt="" class="foto-dis" />
                                <p><?php echo utf8_encode($result[$a]['distribuidor_direccion']) ?></p>
                                <p><?php echo utf8_encode($result[$a]['distribuidor_direccion2']) ?></p>
                                <p><?php echo utf8_encode($result[$a]['distribuidor_telefono']) ?></p>
                                <p><?php echo utf8_encode($result[$a]['distribuidor_celular']) ?></p>
                                <p><?php echo utf8_encode($result[$a]['distribuidor_ciudad']) ?></p>
                                <?php
                                $final = $obj2->PintarPaisdistribuidor($result[$a]['pais_id']);
                                //print_r();exit;
                                ?>
                                <div class="bandera-desc"><img src="cms/modules/pais_distribuidor/files/middle/<?php echo $final[0]['pais_image']; ?> " alt="" /></div>

                            </div>
                        <?php }
                        ?>


                        <?php ?>


                    </div>
                    <div class="con-item-dina">
                        <div id="page-distribuidor"> 
                            <div class="distribuidor-wrap">
                                <ul id="slider-distribuidores" class="multiple">
                                    <?php
                                    for ($i = 0; $i < count($result); $i++) {
                                        ?>
                                        <li>
                                            <a href="#distribuidor" data-id="distribuidor-<?php echo $result[$i]['distribuidor_id'] ?>" class="item-distribuidor" title="<?php echo $result[$i]['distribuidor_id'] ?>">
                                                <?php
                                                $final = $obj2->PintarPaisdistribuidor($result[$i]['pais_id']);
                                                //print_r();exit;
                                                ?>	
                                                <div class="item-distribuidor"><img src="cms/modules/pais_distribuidor/files/middle/<?php echo $final[0]['pais_image']; ?>" alt="" /></div>
                                            </a>
                                        </li>
                                    <?php } ?>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include("footer.php"); ?>


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.superfish.js"></script>
        <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript" src="js/jDistribuidores.js"></script>

  <?php 
        if(isset($_GET["id"])){ ?>
        <script type="text/javascript" language="javascript">
                $(".distribuidor-big").hide();
                $(".distribuidor-<?php echo $_GET["id"] ?>").fadeIn(750);
            </script>
      <?php      }
        ?>
    </body>
</html>