
<?php if ($datos->exists()) : ?>
    <div class="show-cont" id="all-shows">

        <?php foreach ($datos as $dato) : ?>
            <?php $date = fecha_spanish($dato->date); ?>

            <div class="show">
                <div class="show-fecha"><b><?php echo $date['dia_text_short'] ?></b></br><?php echo $date['dia'], ' ', $date['mes'] ?></div>
                <div class="show-info">
                    <div class="show-lugar"><?php echo character_limiter($dato->place, 20, '') ?></div>
                    <div class="show-txt"><?php echo $dato->city ?>  |  <?php echo $date['hora'] ?></div>
                </div>

                <?php if ($this->session->userdata('user_id') == $dato->user_id) : ?>
                    <a href="<?php echo site_url('perfil/ajax/delete_show/' . $dato->id) ?>" data-action="delete-show"><div class="borrar"></div></a>
                <?php endif; ?>

                <div class="clear"></div>

            </div>
        <?php endforeach; ?>
    </div>
    <div class="clear"></div>

    <script>
        $(function() { $('#all-shows').jScrollPane(); });
    </script>

<?php else: ?>
    <p><small>No hay shows para este usuario.</small></p>
<?php endif; ?>