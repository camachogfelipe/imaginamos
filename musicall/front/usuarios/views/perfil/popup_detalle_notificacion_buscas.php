<a class="cerrarIngreso_buscas" href="javascript:cerrarIngreso();"></a>
<h1>RESPUESTA A TU SOLICITUD</h1>

<?php echo form_open('usuarios/perfil/accept_songs', 'class="ajax-form"') ?>

<div class="content_respuesta scroll-pane">
    <?php foreach ($datos->soundcloud_song as $song): ?>

        <div class="item_proyecto">
            <h2><?php echo $datos->project_name ?></h2>
            <div class="clearfix">
                <div class="content_sound">
                    <?php echo $song->get_iframe(false) ?>
                </div>
                <div style="float:right;">

                    <label for="song-<?= $song->id ?>"><div class="btn_check_quieres"></div></label>
                    <br>
                    <input style="opacity:0;" id="song-<?= $song->id ?>" type="checkbox" name="songs[]" value="<?= $song->id ?>" />

                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<input type="submit" class="btn_enviar_respuesta" value="">

<?php echo form_close() ?>