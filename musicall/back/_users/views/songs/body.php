
<?php if (!$html5_audio): ?>
    <div class="alertbox error">
        <em> <strong>Tu navegador no soporta la reproducción de canciones MP3.</strong> <br> Recomendamos: Google Chrome >= 6, Safari >= 5, Internet Explorer >= 9. </em>
    </div>
<?php endif; ?>

<section class="clearfix" style="margin-top: 4em;">
    <div class="tableName toolbar">
        <table class="display data_table2" >
            <thead>
                <tr>
                    <th><div class="th_wrapp">Título</div></th>
					<th><div class="th_wrapp">Género</div></th>
					<th><div class="th_wrapp">Usos</div></th>
            <th><div class="th_wrapp">Usuario</div></th>
            <th><div class="th_wrapp">Fecha subida</div></th>
            <?php if ($html5_audio): ?>
                <th><div class="th_wrapp">Escuchar</div></th>
            <?php endif; ?>
            <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
            </tr>
            </thead>
            <tbody>
                <?php if ($datos->exists()) : ?>
                    <?php foreach ($datos as $dato) : ?>
                        <tr class="odd gradeX parent-delete">
                            <td class="center"><?php echo $dato->title ?></td>
							<td class="center"><?php echo $dato->gender ?></td>
							<td class="center">
								<?php foreach ($dato->users_songs_use as $use): ?>
                                    <span>
                                        <?php echo $use->name ?>
                                            <?php if (next($dato->users_songs_use)==true): ?>
                                                , 
                                            <?php endif; ?>
                                    </span>
                                <?php endforeach; ?>
							</td>

                            <td class="center"><?php echo anchor('cms/users/detail/' . $dato->user->username, $dato->user->full_name) ?></td>
                            <td class="center"><?php echo fecha_spanish_full_short($dato->upload_on, true) ?></td>
                            <?php if ($html5_audio): ?>
                                <td class="center" style="width: 100px;">
                                    <audio controls preload="none">
                                        <source src="<?php echo uploads_url($dato->filepath) ?>" type="audio/mpeg">
                                        Tu navegador no soporta este elemento.
                                    </audio>
                                </td>
                            <?php endif; ?>

                            <td class="center">
                                <span class="tip">
                                    <a class="uibutton special" href="<?php echo cms_url('users/songs/download/' . $dato->code) ?>" target="_blank">Descargar</a>
                                    <a href="<?php echo site_url('usuarios/perfil/delete_song/' . $dato->id) ?>" class="uibutton" data-action="special-delete" data-table="news" data-field="id" data-value="<?php echo $dato->id ?>">
                                        Eliminar
                                    </a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

