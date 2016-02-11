<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Visitenos</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div>
                        <?php if ($mensaje != '') {
                            ?>
                            <div class="alertbox error"><?php echo $mensaje; ?></div>
                            <?php
                        }
                        ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Visitenos</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>DIRECCI&Oacute;N</th>
                                    <th>BARRIO</th>
                                    <th>CIUDAD</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($visitenos != false): ?>
                                    <?php foreach ($visitenos as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->direccion ?></td>
                                            <td><?php echo $dato->barrio ?></td>
                                            <td><?php echo $dato->ciudad ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('visitenos/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
                                            </td>

                                            

                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>	
</div>
