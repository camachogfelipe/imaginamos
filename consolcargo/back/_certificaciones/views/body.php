<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Certificaciones</span>
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
                        
                        if(count($certificaciones) < 8) {                        
                            echo anchor("cms/certificaciones/add/", "Nuevo [+8]", 'class="uibutton icon add" style="top: 100%"');
                        }
                        
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Certificaciones</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>IMAGEN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($certificaciones != false): ?>
                                    <?php foreach ($certificaciones as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><a href="<?php echo base_url('uploads/front/certificaciones/' . $dato->imagen) ?>" target="_blank"><img src="<?php echo base_url('uploads/front/certificaciones/' . $dato->imagen) ?>" alt="imaginamos.com"></a></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('certificaciones/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('certificaciones/delete') ?>/<?php echo $dato->id ?>" class="uibutton special">Eliminar</a>
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
