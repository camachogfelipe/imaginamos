<div class="popup_misproyectos">
    <h2 style="left:auto; right:370px; " class="textoMimusica">Mis proyectos</h2>
    <a href="javascript:cerrarListaProyectos();" class="cerrarMisproyectos"></a>
    <div style="left:auto; right:200px; top:130px;" class="lista_musica">
	
		<?php if ($datos->users_project->exists()): ?>

            <?php echo form_open('usuarios/perfil/send_projects', 'class="ajax-form"') ?>
            <div>
                <div style="width:425px;" class="clearfix">
                    <h2>Nombre</h2>
                    <h3>Código&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha&nbsp;&nbsp;&nbsp;</h3>
                </div>
                <div class="scroll-pane content_lista">
                    <?php foreach ($datos->users_project as $dato): ?>
                        <div class="item1 clearfix">
                            <div class="check_musica">
                                <input name="" type="checkbox" class="styled" />
                            </div>
                            <h4><?php echo $dato->name ?></h4>
                            <h5><?php echo date("d-m-Y", strtotime($dato->created_on)) ?></h5>
                            <input disabled="disabled" type="text" class="input_codigo" value="<?php echo $dato->code ?>" />
                            <a href="<?php echo site_url('usuarios/perfil/delete_project/' . $dato->id) ?>" class="elim_item" style="
							opacity: 1; float: right; position: absolute; right: 0; top: 12px;"></a>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <script>
                $('.elim_item').click(function(e) {
                    var $this = $(this);

                    if (confirm('¿Seguro que deseas borrar el proyecto?')) {

                        $.get($this.attr('href'), {}, function(r) {
                            if (r) {
                                $this.parents('.item1:first').fadeOut(function() {
                                    return $(this).remove();
                                })
                            }
                        });

                    }

                    return e.preventDefault();
                });
            </script>
            <?php echo form_close() ?>

        <?php else: ?>
            <p style="color:#FFF; text-align: center;">No tienes ningún proyecto creado.</p> 
        <?php endif; ?>
    </div>
</div>