<?php
if(!isset($_GET["not"])){
    echo "<script>window.location.href='index.php?seccion=noticias'</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>.: TERRA :.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="palabras clave" lang="es" />
        <meta name="Description" content="texto empresarial" lang="es" />
        <meta name="date" content="2013" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />	
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="assets/css/terra.css">
    </head>
    <body class="body-modal">
        <?php
        $tex_not = DbHandler::GetAll("SELECT * FROM noticias WHERE id=".$_GET["not"]);
        ?>
        <div class="con-modal-news-t1">
            <div class="con-modal-img">
                <div class="modal-img"><img src="img/noticias/300_200_<?php echo $tex_not[0]["img"]?>" width="430" height="266" alt=""></div>
                <div class="modal-head modal-h1">
                    <div class="modal-title">NOTICIA</div>
                    <?php
                    $fecha = explode("-", $tex_not[0]["fecha"]);
                    ?>
                    <div class="modal-date"><?php echo $fecha[2]?>/<?php echo $fecha[1]?>/<?php echo $fecha[0]?></div>
                </div>
            </div>
            <div class="con-modal-tx">
                <h1><?php echo utf8_encode($tex_not[0]["titulo"]) ?></h1>
                <div class="modal-tx tx-t1">
                    <p><?php echo utf8_encode(nl2br($tex_not[0]["texto"])) ?></p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>	
        <script type="text/javascript">$(document).ready(function(){if($(".modal-tx").size()>0){$(".modal-tx").jScrollPane();};});</script>

    </body>
</html>