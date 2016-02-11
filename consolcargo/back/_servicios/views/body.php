<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Servicios</span>
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
                        if(count($servicios) < 9) {                        
                            echo anchor("cms/servicios/add/", "Nuevo [+9]", 'class="uibutton icon add" style="top: 100%"');
                        }
                        
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Servicios</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>T&Iacute;TULO</th>
                                    <th>IMAGEN</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($servicios != false): ?>
                                    <?php foreach ($servicios as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->titulo ?></td>
                                            <td><a href="<?php echo base_url('uploads/front/servicios/' . $dato->imagen) ?>" target="_blank"><img src="<?php echo base_url('uploads/front/servicios/' . $dato->imagen) ?>" width="120" alt="imaginamos.com"></a></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('servicios/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('servicios/delete') ?>/<?php echo $dato->id ?>" class="uibutton special">Eliminar</a>
                                            </td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('servicios/detalle') ?>/<?php echo $dato->id ?>" class="uibutton special">Adicionar Detalle</a>
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
