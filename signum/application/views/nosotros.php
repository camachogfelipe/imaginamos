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
            <style type="text/css">
                #b2 {
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

        <div class="b1000">

            <div class="col_left_2">
                <h1><?php echo $data1->title; ?></h1>
                <hr style="margin-bottom:30px;" />
                <div class="text_b">
                    <p><?php echo $data1->text; ?></p>
                </div>
            </div>

            <div class="col_right_2">
                <img src="<?php echo base_url() . 'assets/us_img/' . $data1->image; ?>" width="658" height="358" class="img_nosotros"/>
            </div>

            <div class="clear"></div>
            <h1>Staff</h1>
            <hr style="margin-bottom:30px;" />
            <?php $c=1; ?>
            <?php $cc=1; ?>
            
            <?php foreach ($staff as $s): ?>
            <?php $classR = ''; ?>
                <?php
                if ($staff_n == 1) {
                    $classR = 'box-1';
                } elseif ($staff_n == 2 && $c == 1) {
                    $classR = 'box-2';
                } elseif ($cc==3) {
                    $classR = 'last';
                }
            ?>
                <div class="box_staff <?php echo $classR; ?>">
                    <center><img src="<?php echo base_url() . 'assets/staff_img/' . $s->image; ?>" id="profile" width="200" height="227" /></center>
                    <div class="name"><?php echo $s->name; ?></div> 
                    <div class="charge"><?php echo $s->title; ?></div>
                    <div class="text_b"><p><?php echo strip_tags(substr($s->text, 0, 200)) . '...'; ?></p></div>

                    <div class="links">
                        <a href="<?php echo base_url() . 'site/staff_detail/' . $s->id; ?>" class="mas">Ver más <?php //echo $c.'/'.$classR; ?></a>
                    </div>
                    <div class="clear" style="padding-bottom:20px"></div>

                    <div class="links">
                        <a href="<?php echo $s->linkedin; ?>" title="Linkedin" target="_blank" ><img src="img/046.png" align="left"  /></a>
                        <a href="<?php echo $s->twitter; ?>" title="Twitter" target="_blank" ><img src="img/047.png" align="left" /></a>
                    </div>
                </div>
            <?php $c++; ?>
            <?php $cc++; ?>
            <?php if($cc == 3){$cc=1;} ?>
<?php endforeach; ?>

            <div class="clear"></div>

            <div class="box_staff">
                <h2><?php echo $data2->title; ?></h2>
                <div class="text_b">
                    <p><?php echo $data2->text; ?></p>
                </div>

            </div>

            <div class="box_staff">
                <h2><?php echo $data3->title; ?></h2>
                <div class="text_b"><p><?php echo $data3->text; ?></p>
                </div>
            </div>

            <div class="box_staff last">
                <h2><?php echo $data4->title; ?></h2>
                <div class="text_b">
                    <p><?php echo $data4->text; ?></p>
                </div>
            </div>

            <div class="clear"></div>

        </div>


        <div class="clear"></div>
<?php include "footer.php" ?>

    </body>
</html>