<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Servicios en línea</span>
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
                            //echo anchor("cms/servicios_linea/addService/", "Adicionar servicio", 'class="uibutton icon add" style="top: 100%"');
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Servicios en línea</h2>
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
                                <?php if ($servicios_linea != false): ?>
                                    <?php foreach ($servicios_linea as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td style="text-align:justify;"><?php echo $dato->texto ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('servicios_linea/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
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
