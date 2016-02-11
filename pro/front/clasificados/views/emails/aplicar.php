
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Hola <?php echo $user_owner->first_name, ' ', $user_owner->last_name ?>,

        <strong><a href="<?php echo sprintf($urls->inshaka_url, $user_apply->inshaka_url) ?>"><?php echo $user_apply->first_name, ' ', $user_apply->last_name ?></a></strong> ha aplicado a tu clasificado <a href="<?php echo sprintf($urls->clasificado_detalle, $datos->id, $datos->var) ?>"><strong><?php echo $datos->titulo ?></strong></a>.

        <?php if (!empty($presentacion)) : ?>
            <br> --- <br>
            Esta es su carta de presentacion:
            <br>
            <p><?php echo $presentacion ?></p>
        <?php endif; ?>
        <br> --- <br>
        <?php echo SITENAME ?>
    </body>
</html>
