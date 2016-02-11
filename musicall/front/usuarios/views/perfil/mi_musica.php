
<div class="popup_mimusica">
    <h2 class="textoMimusica">Mi música</h2>
    <a href="javascript:cerrarListaMusica();" class="cerrarMimusica"></a>


    <div class="lista_musica">
        <div>
            <?php if ($datos->users_song->exists()): ?>


                <?php echo form_open('usuarios/perfil/postulates_songs', 'class="ajax-form"') ?>

                <div class="scroll-pane content_lista">
                    <table class="table-mi-musica" style="width: 100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Código</th>
                                <th>Fecha</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->users_song as $song): ?>
                            <tr>
                                <td style="width: 50px; text-align: center;"><label for="song_<?= $song->id ?>" class="btn_check_tienes" style="float: none"></label><input id="song_<?= $song->id ?>" type="checkbox" name="songs[<?= $song->id ?>][postulate]" style="display:none;"  value="1" /></td>
                                <td><?php echo $song->title ?></td>
                                <td><input name="songs[<?= $song->id ?>][project_code]" type="text" class="input_codigo" value="<?= $song->users_project->code ?>"  /></td>
                                <td><?php echo fecha_spanish_full_short($song->upload_on) ?></td>
                                <td><a href="<?php echo site_url('usuarios/perfil/delete_song/' . $song->id) ?>" class="elim_item" style="opacity:1;"></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                  

                </div>
                <input class="btn_submit" type="submit" value="Enviar" style="border:none;" />


                <?php echo form_close() ?>

                <script>
                    $('.elim_item').click(function(e) {
                        var $this = $(this);

                        if (confirm('¿Seguro que deseas borrar la canción?')) {

                            $.get($this.attr('href'), {}, function(r) {
                                if (r) {
                                    $this.parents('tr').fadeOut(function() {
                                        return $(this).remove();
                                    });
                                }
                            });

                        }

                        return e.preventDefault();
                    });
                </script>

            <?php else: ?>
                <p style="color:#FFF; text-align:center;">No tienes ninguna canción cargada</p>
            <?php endif; ?>

        </div>


    </div>
</div>
