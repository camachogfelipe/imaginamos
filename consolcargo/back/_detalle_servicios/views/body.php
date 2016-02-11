<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Detalle servicios</span>
        <br /><?php echo anchor('cms/servicios', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                        if(count($detalle_servicios) < 1 || $detalle_servicios == false)
                            echo anchor("cms/detalle_servicios/add/" . $idServicio, "Nuevo [+]", 'class="uibutton icon add" style="top: 100%"');
                        
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Detalle servicios</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>SERVICIO</th>
                                    <th>T&Iacute;TULO</th>
                                    <th>TEXTO</th>
                                    <th>TEXTO CONT&Aacute;CTENOS</th>
                                    <th>IMAGEN</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($detalle_servicios != false): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $detalle_servicios->titulo ?></td>
                                            <td><?php echo strip_tags(substr($detalle_servicios->servicio, 0, 50)) . '...' ?></td>
                                            <td><?php echo strip_tags(substr($detalle_servicios->texto, 0, 50)) . '...' ?></td>
                                            <td><?php echo $detalle_servicios->texto_contactenos ?></td>
                                            <td><a href="<?php echo base_url('uploads/front/detalle_servicios/' . $detalle_servicios->imagen) ?>" target="_blank"><img src="<?php echo base_url('uploads/front/detalle_servicios/' . $detalle_servicios->imagen) ?>" width="120" alt="imaginamos.com"></a></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('detalle_servicios/edit') ?>/<?php echo $detalle_servicios->id . '/' . $idServicio ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('detalle_servicios/delete') ?>/<?php echo $detalle_servicios->id . '/' . $idServicio ?>" class="uibutton special">Eliminar</a>
                                            </td>

                                            

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
