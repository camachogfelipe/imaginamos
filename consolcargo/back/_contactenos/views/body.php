<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Cont&aacute;ctenos</span>
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
                    <h2>Cont&aacute;ctenos</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>TEL&Eacute;FONO</th>
                                    <th>CORREO ELECTR&Oacute;NICO</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($contactenos != false): ?>
                                    <?php foreach ($contactenos as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->telefono ?></td>
                                            <td><?php echo $dato->correo ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('contactenos/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
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
