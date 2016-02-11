<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Signum Consulting</title>
        <base href="<?php echo base_url() . 'assets/' ?>"></base>
        <link href="css/signum.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
            <link href="css/slides.css" rel="stylesheet" type="text/css" />
            <?php include "meta.php" ?>
            <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
            <script type="text/javascript" src="js/slides.min.jquery.js"></script>
            <script>
                $(function(){
                    $('#slides').slides({
                        pagination: false,
                        preload: true,
                        generateNextPrev: true
                    });
		
                    $('#slides_b').slides({
                        effect: 'fade',
                        pagination: false,
                        preload: true,
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
          

                    });

                    // Ejecutamos la función
                    $(window).resize();

                });

            </script>
            <script type="text/javascript" src="js/jquery.flotar.js"></script>

            <style type="text/css">
                #b3 {
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
        <?php
//                echo '<pre>';
//                print_r($areas);
//                echo '</pre>';
        ?>
        <div class="grey_box">
            <div class="b1000" style="position:relative">

                <div class="text">
                    <h1><?php echo $areaG->title; ?></h1>
                    <?php echo $areaG->text; ?>	
                </div>

                <div class="flota"  style="position:absolute;" div data-action="flotar" data-flotar-top="10" data-flotar-delay="1200">
                    <div class="circle">
                        <?php $c = 1; ?>
                        <?php foreach ($areas as $a): ?>
                           
                            <a href="<?php echo base_url() . 'site/servicios/#' . $a->area_id; ?>" class="globe" id="g<?php echo $c; ?>"><div><?php echo $a->area_title; ?></div></a>
                            <?php $c++; ?>
<?php endforeach; ?>
                    </div>

                </div>
                <img src="img/050.png" class="sh" />
            </div>

            <div class="clear"></div>
        </div>
        <div class="b1000 areas">
            <h1>Áreas</h1>
            <hr style="margin-bottom:30px;" />
            <?php $c = 0; ?>
            <?php foreach ($areass as $as): ?>
    <?php $c++; ?>
                <div class="prominent <?php if ($c == 3) {
        echo ' last ';
    } ?>">
                    <h3 style="background-image:url(<?php echo base_url() . 'assets/area_img2/' . $as->area_icon; ?>)"><?php echo $as->area_title; ?></h3>
                    <div class="txt">
                        <p><?php echo $as->area_text; ?></p>
                    </div>
                    <a href="<?php echo base_url() . 'site/servicios/#' . $as->area_id; ?>" class="mas">Ir a servicios</a>
                </div>
    <?php if ($c == 3) {
        echo '<div></div>';
        $c = 0;
    } ?>
<?php endforeach; ?>

            <div class="clear"></div>
        </div>

<?php include "footer.php" ?>

    </body>
</html>