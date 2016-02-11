


<!-- Third / Half -->
<div class="widgets">
    <div class="twoOne">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span> Información del proyecto</span></div>
            <div class="content">
                <table>
                    <tbody>
                        <tr>
                            <th>Nombre:</th>
                            <td><?php echo $datos->name ?></td>
                        </tr>
                        <tr>
                            <th>Código:</th>
                            <td><?php echo $datos->code ?></td>
                        </tr>
                        <tr>
                            <th>Presupuesto:</th>
                            <td><?php echo $datos->price ?></td>
                        </tr>
                        <tr>
                            <th>Géneros:</th>
                            <td>
                                <?php foreach ($datos->users_projects_gender as $gender): ?>
                                    <span>
                                        <?php echo $gender->name ?>
                                            <?php if (next($datos->users_projects_gender)==true): ?>
                                                , 
                                            <?php endif; ?>
                                    </span>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Usos:</th>
                            <td>
                                <?php foreach ($datos->users_projects_use as $use): ?>
                                    <span>
                                        <?php echo $use->name ?>
                                            <?php if (next($datos->users_projects_use)==true): ?>
                                                , 
                                            <?php endif; ?>
                                    </span>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Referencia:</th>
                            <td><?php echo $datos->reference ?></td>
                        </tr>
                        <tr>
                            <th>Usuario:</th>
                            <td><?php echo anchor('cms/users/detail/' . $datos->user->username, $datos->user->full_name) ?></td>
                        </tr>
                        <tr>
                            <th>Fecha creado:</th>
                            <td><?php echo fecha_spanish_full($datos->created_on, true) ?></td>
                        </tr>
                        <tr>
                            <th>Información:</th>
                            <td><?php echo $datos->description ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="oneThree">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Acciones</span></div>
            <div class="content">
                <div><a href="<?php echo cms_url('users/projects') ?>" class="uibutton">Regresar al listado</a></div>
                <div><a href="<?php echo cms_url('notifications/guardar/tienes/' . $datos->code) ?>" class="uibutton confirm">Notificar a los usuarios</a></div>
                <div><a href="<?php echo cms_url('notifications/guardar/buscas/' . $datos->code) ?>" class="uibutton special">Responder a la solicitud</a></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>


<?php if ($datos->users_song->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Canciones postuladas</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Titulo</div></th>	
                                <th><div class="th_wrapp">Usuario</div></th>	
                                <th><div class="th_wrapp">Fecha subida</div></th>
                                <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->users_song as $song): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $song->title ?></td>
                                    <td class="center"><?php echo anchor('cms/users/detail/' . $song->user->username, $song->user->full_name) ?></td>
                                    <td class="center"><?php echo fecha_spanish_full_short($song->upload_on, true) ?></td>
                                    <td class="center">
                                        <a href="<?php echo cms_url('users/songs/download/' . $song->code) ?>" class="uibutton special">Descargar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

<?php endif; ?>

<?php if ($notificaciones->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Notificaciones a los usuarios</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Nombre</div></th>	
                                <th><div class="th_wrapp">Presupuesto</div></th>	
                                <th><div class="th_wrapp">Fecha</div></th>
                                <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($notificaciones as $notificacion): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $notificacion->project_name ?></td>
                                    <td class="center"><?php echo $notificacion->budget ?></td>
                                    <td class="center"><?php echo fecha_spanish_full_short($notificacion->created_on, true) ?></td>
                                    <td class="center">
                                        <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton" data-action="special-delete" data-table="notifications" data-field="id" data-value="<?php echo $notificacion->id ?>">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

<?php endif; ?>


<?php if ($respuestas->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Respuestas al proyecto</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Nombre</div></th>	
                                <th><div class="th_wrapp">Presupuesto</div></th>	
                                <th><div class="th_wrapp">Fecha</div></th>
                                <th><div class="th_wrapp">Confirmada</div></th>
                                <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($respuestas as $respuesta): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $respuesta->project_name ?></td>
                                    <td class="center"><?php echo $respuesta->budget ?></td>
                                    <td class="center"><?php echo fecha_spanish_full_short($respuesta->created_on, true) ?></td>
                                    <td class="center"><?php echo $respuesta->soundcloud_song->exists() ? 'SI' : 'NO' ?></td>
                                    <td class="center">
                                        <a href="<?php echo cms_url('notifications/detail/'.$respuesta->id) ?>" class="uibutton special">Ver detalle</a>
                                        <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton" data-action="special-delete" data-table="notifications" data-field="id" data-value="<?php echo $respuesta->id ?>">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

<?php endif; ?>