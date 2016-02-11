
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Hola <?php echo $nombre_invitado ?>,

        <strong><?php echo anchor($url_creador, $nombre_creador) ?></strong> ha creado la banda <strong><?php echo $nombre_banda ?></strong>
        y te ha invitado para ser uno de sus integrantes del instrumento <strong><?php echo $instrumento ?></strong>.
        <br> --- <br>
        <p><em>"<?php echo $message ?>"</em></p>
        <br> --- <br>
        Aceptar la invitación: <?php echo anchor($url_accept, ellipsize($url_accept, 40))?>.<br>
        Rechazar la invitación: <?php echo anchor($url_decline, ellipsize($url_decline, 40)) ?>.<br>
        <br> --- <br>
        <?php echo SITENAME ?>.
    </body>
</html>
