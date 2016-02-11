
<div class="widgets">
    <div class="twoOne">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span> Información de la respuesta</span></div>
            <div class="content">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th style="text-align: left;">Nombre:</th>
                            <td><?php echo $datos->project_name ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Presupuesto:</th>
                            <td><?php echo price_format($datos->budget) ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Fecha creado:</th>
                            <td><?php echo fecha_spanish_full($datos->created_on, true) ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Descripción:</th>
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
                <div><a href="<?php echo cms_url('users/projects/detail/' . $datos->users_project->id) ?>" class="uibutton">Regresar al proyecto</a></div>
               
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>


<?php if ($datos->soundcloud_song->exists()): ?>

    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Canciones enviadas en la respuesta</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos->soundcloud_song as $song): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $song->get_iframe() ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

<?php endif; ?>


    <section class="clearfix">
        <div class="widget">
            <div class="header"><span><span class="ico gray window"></span>  Canciones aceptadas por el usuario</span></div>
            <div class="content">

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($aceptadas as $song): ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $song->get_iframe() ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

