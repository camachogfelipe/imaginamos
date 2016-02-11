

<section class="clearfix" style="margin-top: 4em;">
    <div class="tableName toolbar">
        <table class="display data_table2" >
            <thead>
                <tr>
                    <th><div class="th_wrapp">Nombre</div></th>
                    <th><div class="th_wrapp">Código del proyecto</div></th>
                    <th><div class="th_wrapp">Presupuesto</div></th>
                    <th><div class="th_wrapp">Fecha</div></th>
               
                    <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($datos->exists()) : ?>
                    <?php foreach ($datos as $dato) : ?>
                        <tr class="odd gradeX parent-delete">
                            <td class="center"><?php echo $dato->project_name ?></td>
                            <td class="center"><?php echo anchor(cms_url('users/projects/detail/' . $dato->users_project->id) ,$dato->users_project->code) ?></td>
                            <td class="center"><?php echo price_format($dato->budget, 0) ?></td>
                            <td class="center"><?php echo $dato->created_on ?></td>
                            
                            <td class="center">
                                <span class="tip">
                                    <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="notifications" data-field="id" data-value="<?php echo $dato->id ?>">
                                        Eliminar
                                    </a>
<!--                                    <a href="<?php echo cms_url( $dato->id) ?>" class="uibutton special">Ver más</a>-->
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

