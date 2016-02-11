<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Itinerario</span>
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
                            echo anchor("cms/itinerario/add/", "Nuevo [+]", 'class="uibutton icon add" style="top: 100%"');
                            echo anchor("cms/itinerario/addCsv/", "Importar XLS [+]", 'class="uibutton icon add" style="top: 100%"');
                         ?>
                    </div>
                    <p>&nbsp;</p>
                    <h2>Itinerario</h2>
                    <div style="margin-top: 30px"></div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th>CARRIER</th>
                                    <th>VESSEL</th>
                                    <th>VOYAGE</th>
                                    <th>PORT_OF_LOADING</th>
                                    <th>PORT_OF_DISCHARGE</th>
                                    <th>CUT_OFF</th>
                                    <th>HORA</th>
                                    <th>ETD</th>
                                    <th>ETA</th>
                                    <th>TT</th>
                                    <th>REQUERIMENTS</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($itinerario != false): ?>
                                    <?php foreach ($itinerario as $dato): ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td><?php echo $dato->carrier ?></td>
                                            <td><?php echo $dato->vessel ?></td>
                                            <td><?php echo $dato->voyage ?></td>
                                            <td><?php echo $dato->port_of_loading ?></td>
                                            <td><?php echo $dato->port_of_discharge ?></td>
                                            <td><?php echo $dato->cut_off ?></td>
                                            <td><?php echo $dato->hora ?></td>
                                            <td><?php echo $dato->etd ?></td>
                                            <td><?php echo $dato->eta ?></td>
                                            <td><?php echo $dato->tt ?></td>
                                            <td><?php echo $dato->requeriments ?></td>
                                            
                                            <td>
                                                <a href="<?php echo cms_url('itinerario/edit') ?>/<?php echo $dato->id ?>" class="uibutton special">Editar</a>
                                            </td>
                                            <td>
                                                <a onclick="if (!confirm('\u00BFEsta seguro de eliminar el registro\u003F')) {
                                                                return false;
                                                            }
                                                            ;" href="<?php echo cms_url('itinerario/delete') ?>/<?php echo $dato->id ?>" class="uibutton special">Eliminar</a>
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
