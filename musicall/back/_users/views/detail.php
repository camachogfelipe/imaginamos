


<!-- Third / Half -->
<div class="widgets">
    <div class="twoOne">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span> Información del usuario</span></div>
            <div class="content">
                <table class="detail-table">
                    <tbody>
                         <?php if (!empty($datos->image)): ?>
                            <tr>
                                <th>Imagen:</th>
                                <td><?php echo img(uploads_url($datos->image)) ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <th>Nombre:</th>
                            <td><?php echo $datos->full_name ?></td>
                        </tr>
                        <tr>
                            <th>Usuario:</th>
                            <td><?php echo $datos->username ?></td>
                        </tr>
                        <tr>
                            <th>Correo electrónico:</th>
                            <td><?php echo mailto($datos->email) ?></td>
                        </tr>
                        <tr>
                            <th>Teléfono móvil:</th>
                            <td><?php echo $datos->mobile_phone ?></td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td><?php echo $datos->city ?></td>
                        </tr>
                        <tr>
                            <th>Que hace:</th>
                            <td><?php echo $datos->about_you ?></td>
                        </tr>
                        <?php if ($datos->users_representation->exists()): ?>
                            <tr>
                                <th>A quien representa:</th>
                                <td>
                                    <?php foreach ($datos->users_representation as $r): ?>
                                        <span>
                                            <?php echo $r->name ?>
                                            <?php if (next($datos->users_representation) == true): ?>
                                                , 
                                            <?php endif; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                            
                        <?php if (!empty($datos->company_name)): ?>
                            <tr>
                                <th>Empresa:</th>
                                <td><?php echo $datos->company_name ?></td>
                            </tr>
                        <?php endif; ?>
                            
                        <?php if (!empty($datos->website)): ?>
                            <tr>
                                <th>Sitio web:</th>
                                <td><?php echo $datos->website ?></td>
                            </tr>
                        <?php endif; ?>
                            
                        <?php if (!empty($datos->facebook)): ?>
                            <tr>
                                <th>Facebook:</th>
                                <td><?php echo $datos->facebook ?></td>
                            </tr>
                        <?php endif; ?>
                            
                        <?php if (!empty($datos->twitter)): ?>
                            <tr>
                                <th>Twitter:</th>
                                <td><?php echo $datos->twitter ?></td>
                            </tr>
                        <?php endif; ?>
                            
                        <?php if (!empty($datos->youtube)): ?>
                            <tr>
                                <th>Youtube:</th>
                                <td><?php echo $datos->youtube ?></td>
                            </tr>
                        <?php endif; ?>

                        <tr>
                            <th>Fecha registrado:</th>
                            <td><?php echo fecha_spanish_full($datos->created_on, true) ?></td>
                        </tr>
                        <tr>
                            <th>Ultimo ingreso:</th>
                            <td><?php echo fecha_spanish_full($datos->last_login, true) ?></td>
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
                <div><a href="<?php echo cms_url('users') ?>" class="uibutton">Regresar al listado</a></div>
              
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>


<?php if ($datos->users_song->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Canciones subidas</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Titulo</div></th>
                        <th><div class="th_wrapp">Fecha subida</div></th>
                        <th><div class="th_wrapp">Escuchar <small></small></div></th>
                        <th><div class="th_wrapp">Acciones</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->users_song as $song): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $song->title ?></td>
                                    <td class="center"><?php echo fecha_spanish_full_short($song->upload_on, true) ?></td>
                                    <td class="center">
                                        <?php if ($html5_audio): ?>
                                            <audio controls="controls" preload="none">
                                                <source src="<?php echo uploads_url($song->filepath) ?>" type="audio/mpeg">
                                                Tu navegador no soporta este elemento.
                                            </audio>
                                        <?php else: ?>
                                            <em> <strong>Tu navegador no soporta este elemento.</strong> <br> Recomendamos: Google Chrome >= 6, Safari >= 5, Internet Explorer >= 9. </em>
                                        <?php endif; ?>

                                    </td>
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

<?php if ($datos->users_project->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Proyectos creados</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Nombre</div></th>
                        <th><div class="th_wrapp">Fecha</div></th>
                        <th><div class="th_wrapp">Acciones</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->users_project as $project): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $project->name ?></td>
                                    <td class="center"><?php echo fecha_spanish_full_short($project->created_on, true) ?></td>
                                    <td class="center">
                                        <a href="<?php echo cms_url('users/projects/detail/' . $project->id) ?>" class="uibutton special">Ver más</a>
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
