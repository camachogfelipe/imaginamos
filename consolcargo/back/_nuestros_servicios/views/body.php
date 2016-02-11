<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Nuestros servicios</span>
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
                        <?php 
                            echo anchor("cms/nuestros_servicios/addService/", "Adicionar servicio", 'class="uibutton icon add" style="top: 100%"');
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Nuestros servicios</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>TEXTO</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($nuestros_servicios != false): ?>
                                    <?php foreach ($nuestros_servicios as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td style="text-align:justify;"><?php echo $dato->texto ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('nuestros_servicios/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
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
