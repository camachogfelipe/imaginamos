<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Destacado</span>
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
                    <h2>Destacado</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>TEXTO</th>
                                    <th>WEB TRACKING</th>
                                    <th>WEB TRACKING INTERNO</th>
                                    <th>PAGO POR FACTURA</th>
                                    <th>PAGO POR FACTURA INTERNO</th>
                                    <th>NUESTROS ITINERARIOS</th>
                                    <th>NUESTROS ITINERARIOS INTERNO</th>
                                    <th>IMAGEN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($destacadohome != false): ?>
                                    <?php foreach ($destacadohome as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->texto ?></td>
                                            <td><?php echo $dato->web_tracking ?></td>
                                            <td><?php echo $dato->web_tracking_interno ?></td>
                                            <td><?php echo $dato->pago_factura ?></td>
                                            <td><?php echo $dato->pago_factura_interno ?></td>
                                            <td><?php echo $dato->itinerarios ?></td>
                                            <td><?php echo $dato->itinerarios_interno ?></td>
                                            <td><a href="<?php echo base_url('uploads/front/destacadohome/' . $dato->imagen) ?>" target="_blank"><img src="<?php echo base_url('uploads/front/destacadohome/' . $dato->imagen) ?>" width="120" alt="imaginamos.com"></a></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('destacadohome/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
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
