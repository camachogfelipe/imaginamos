<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Tiempo de ventana de ayuda</span>
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
                    <h2>Tiempo de ventana de ayuda</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>TIEMPO REGISTRADO</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($tiempo_chat != false): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $tiempo_chat[0]->time_chat; ?> Minutos</td>
                                            <td>
                                                <a href="<?php echo cms_url('tiempo_chat/edit') ?>/<?php echo $tiempo_chat[0]->id ?>" class="uibutton special">Editar</a>                                  </td>
                                       </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>	
</div>
