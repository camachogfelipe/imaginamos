<div class="container">
    <div class="row-fluid wt-box-<?php echo $color_module; ?>" >
        <h3>Permisos</h3>
    </div>
    <div class="row-fluid">
        <div class="w-box w-box-<?php echo $color_module; ?>">
            <div class="w-box-header">
                <div class="row-fluid">
                    <div class="span8"><h4>Modulos / Funciones</h4></div>
                    <div class="span4" style="margin-top: 2px;">
                        <?php echo form_dropdown('group', $groups, $group->id, 'class="s2-single pull-right s2-required" placeholder="Seleccione el rol..." data-url="' . site_url('cms/perms/group') . '"') ?>
                    </div>
                </div>
            </div>
            <div class="w-box-content">
                <table id="perms-contenido" class="table" data-save-url="<?php echo base_url('cms/perms/save') ?>">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Modulo</th>
                            <th>Acceso</th>
                            <th>Crear</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($perms['module'])): ?>
                            <?php foreach ($perms['module'] as $c => $p) : ?>
                                <?php $gp = \Permission::get_perm($group, $p); ?>
                                <tr>
                                    <td><?php echo++$c ?></td>
                                    <td><?php echo $p->name ?></td>
                                    <td><input class="uncheck-all" type="checkbox" <?php echo $gp->view ? 'checked' : null ?> data-type="view" value="<?php echo $gp->id ?>"></td>
                                    <td><input type="checkbox" <?php echo $gp->create ? 'checked' : null ?> data-type="create" value="<?php echo $gp->id ?>"></td>
                                    <td><input type="checkbox" <?php echo $gp->update ? 'checked' : null ?> data-type="update" value="<?php echo $gp->id ?>"></td>
                                    <td><input type="checkbox" <?php echo $gp->delete ? 'checked' : null ?> data-type="delete" value="<?php echo $gp->id ?>"></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <tr class="bgn-blanco">
                            <td colspan="6" style="background-color: #fff;">&nbsp;</td>
                        </tr>
                    </tbody>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Funciones</th>
                            <th>Acceso</th>
                            <th>-</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($perms['function'])): ?>
                            <?php foreach ($perms['function'] as $c => $p) : ?> 
                                <?php $gp = \Permission::get_perm($group, $p); ?>
                                <tr>
                                    <td><?php echo++$c ?></td>
                                    <td><?php echo $p->name ?></td>
                                    <td><input type="checkbox" <?php echo $gp->view ? 'checked' : null ?> data-type="view" value="<?php echo $gp->id ?>"></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <tr class="bgn-blanco">
                            <td colspan="6" style="background-color: #fff;">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>