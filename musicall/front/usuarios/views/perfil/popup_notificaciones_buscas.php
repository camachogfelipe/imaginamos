<?php if ($datos->exists()): ?>

<div class="content_notif1 scroll-pane">
    <?php foreach ($datos as $dato): ?>
        <div class="item_notif clearfix">
            <div class="left_itemnotif">
                <p>Esta es la respuesta a tu solicitud. </p>
                <p>Proyecto: <?php echo $dato->project_name ?></p>
                <p>presupuesto: <?php echo price_format($dato->budget, 0) ?> codigo: <a href="javascript:abrirNotifBuscas2();" data-notifications="load-buscas-detail" data-ajax-url="<?php echo(site_url('usuarios/perfil/load_notification_detail/'.$dato->id)) ?>"><span><?php echo $dato->users_project->code ?></span></a></p>
            </div>
            <div class="right_itemnotif">
                <?php  if(!$dato->active){?>
						<a href="<?php echo site_url('usuarios/perfil/toggle_read_notification/' . $dato->id); ?>" class="btn_check_quieres checked" data-notifications="read-toggle" data-counter-type="buscas"></a>
				<?php }else{ ?>
						<a href="<?php echo site_url('usuarios/perfil/toggle_read_notification/' . $dato->id); ?>" class="btn_check_quieres" data-notifications="read-toggle" data-counter-type="buscas"></a>
				<?php } ?>
				
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php else: ?>
    <p style="text-align: center; padding: 2em 0; color: #FFF;">No tienes notificaciones.</p>
<?php endif; ?>