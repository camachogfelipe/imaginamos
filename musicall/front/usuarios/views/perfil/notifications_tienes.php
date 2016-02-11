

<div class="popup_notif" id="popup_notif" style="z-index: 9990; display:block;">
    <a style="right:-30px; top:-30px;" class="cerrarIngreso" href="javascript:cerrarNotif();"></a>
    <div class="content_notif">
        <div class="content_notif1 scroll-pane">
            <?php foreach ($datos as $notification) : ?>
                <div class="item_notif clearfix">
                    <div class="left_itemnotif">
                        <p><?php echo $notification->project_name ?></p>
                        <p>Presupuesto: <?php echo price_format($notification->budget, 0) ?> codigo: <a href="javascript:abrirNotif2(<?= json_encode($notification->id) ?>);"><span><?php echo $notification->code ?></span></a></p>
                    </div>
                    <div class="right_itemnotif">
                        <input name="is_read" type="checkbox" value="<?php echo $notification->id ?>" />
                    </div>
                </div>


            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php $count = $datos->where('is_read', false)->where_related_notifications_type('var', 'tienes')->count(); ?>

<a href="javascript:abrirNotif();" class="btn_notif" data-notificaciones="count-tienes" style="z-index: 9999; display:block;"><?php echo $count ?></a>