<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Redes sociales</span>
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
                    <h2>Redes sociales</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>FACEBOOK</th>
                                    <th>TWITTER</th>
                                    <th>YOUTUBE</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($redes_sociales != false): ?>
                                    <?php foreach ($redes_sociales as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->facebook ?></td>
                                            <td><?php echo $dato->twitter ?></td>
                                            <td><?php echo $dato->youtube ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('redes_sociales/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
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
