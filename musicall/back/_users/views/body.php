


<hr>

<section class="clearfix" style="margin-top: 4em;">
    <div class="tableName toolbar">
        <table class="display data_table2" >
            <thead>
                <tr>
                    <th><div class="th_wrapp">Nombre</div></th>
                    <th><div class="th_wrapp">Usuario</div></th>
                    <th><div class="th_wrapp">Correo electrónico</div></th>
                    <th><div class="th_wrapp">Teléfono móvil</div></th>
                    <th><div class="th_wrapp">Ciudad</div></th>
                   
                    
                    
                    <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($datos->exists()) : ?>
                    <?php foreach ($datos as $dato) : ?>
                        <tr class="odd gradeX parent-delete">
                            <td class="center"><?php echo $dato->full_name ?></td>
                            <td class="center"><?php echo $dato->username ?></td>
                            <td class="center"><?php echo mailto($dato->email) ?></td>
                            <td class="center"><?php echo $dato->mobile_phone ?></td>
                            <td class="center"><?php echo $dato->city ?></td>
                           
                            
                            <td class="center">
                                <span class="tip">
                                    <a href="<?php echo cms_url('users/detail/' . $dato->username) ?>" class="uibutton special">Ver más</a>
                                    <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton" data-action="special-delete" data-table="users" data-field="id"  data-value="<?php echo $dato->id ?>" data-confirm-text="Al borrar el usuario también eliminará todo lo relacionado con el mismo.">
                                        Eliminar
                                    </a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

