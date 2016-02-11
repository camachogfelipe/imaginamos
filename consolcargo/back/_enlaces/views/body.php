<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Enlaces importantes</span>
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
                        if(count($enlaces) < 16) {                        
                            echo anchor("cms/enlaces/add/".$tipo, "Nuevo [+16]", 'class="uibutton icon add" style="top: 100%"');
                        }
                        
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <?php 
                    $subtitulo = 'Comercio exterior';
                    
                    if($tipo == 'itinerario') {
                        $subtitulo = 'Itinerario navieras';
                    } else if($tipo == 'enlaces') {
                        $subtitulo = 'Enlaces colombia';
                    }
                    ?>
                    
                    <h2><?php echo $subtitulo;?></h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>T&Iacute;TULO</th>
                                    <th>LINK</th>
                                    <th>IMAGEN</th>
                                    <?php if($tipo == 'enlaces'): ?>
                                         <th>Archivo</th>
                                     <?php endif; ?>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($enlaces != false): ?>
                                    <?php foreach ($enlaces as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->titulo ?></td>
                                            <td><?php echo $dato->link ?></td>
                                            <td><a href="<?php echo base_url('uploads/front/enlaces/' . $dato->imagen) ?>" target="_blank"><img src="<?php echo base_url('uploads/front/enlaces/' . $dato->imagen) ?>" alt="imaginamos.com"></a></td>
                                            <?php if($tipo == 'enlaces'): ?>
                                                <?php if($dato->path_pdf != NULL){ ?>
                                                   <td><a href="<?php echo base_url('uploads/front/enlaces/' . $dato->path_pdf);  ?>" target="_blank" >Link Archivo</a></td>
                                                <?php }else{ ?>
                                                   <td>No Archivo</td>
                                                <?php } ?>
                                            <?php endif; ?>
                                            <td>
                                                <a href="<?php echo cms_url('enlaces/edit') ?>/<?php echo $dato->id . '/' . $tipo ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('enlaces/delete') ?>/<?php echo $dato->id . '/' . $tipo ?>" class="uibutton special">Eliminar</a>
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
