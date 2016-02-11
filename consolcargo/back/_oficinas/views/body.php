<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Oficinas</span>
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
                            echo anchor("cms/oficinas/add/", "Nuevo [+]", 'class="uibutton icon add" style="top: 100%"');
                        
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Oficinas</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>T&Iacute;TULO</th>
                                    <th>TEXTO</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($oficinas != false): ?>
                                    <?php foreach ($oficinas as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->titulo ?></td>
                                            <td><?php echo $dato->texto ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('oficinas/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('oficinas/delete') ?>/<?php echo $dato->id ?>" class="uibutton special">Eliminar</a>
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
