<section class="title">
    <h4><?php echo lang('contact_data:item_list'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open('admin/contact_data/delete'); ?>
        <?php if (!empty($contact_data)): ?>
            <table border="0" class="table-list" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th>Direcci&oacute;n</th>
                        <th>Barrio</th>
                        <th>Ciudad</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($contact_data as $item): ?>
                        <tr id="item_<?php echo $item->id; ?>">
                            <td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
                            <td><?php echo $item->direccion; ?></td>
                            <td><?php echo $item->barrio; ?></td>
                            <td><?php echo $item->ciudad; ?></td>
                            <td><?php echo $item->telefono; ?></td>
                            <td><?php echo $item->tel_cel; ?></td>
                            <td><?php echo $item->correo; ?></td>
                            <td class="actions">
                                <?php
                                echo
                                //anchor('contact_data', lang('contact_data:view'), 'class="button" target="_blank"').' '.
                                anchor('admin/contact_data/edit/' . $item->id, lang('contact_data:edit'), 'class="button"');
                                ?>
                            </td>
                        </tr>
    <?php endforeach; ?>
                </tbody>
            </table>
<!--            <div class="table_action_buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
            </div>-->
        <?php else: ?>
            <div class="no_data"><?php echo lang('contact_data:no_items'); ?></div>
<?php endif; ?>
<?php echo form_close(); ?>
    </div>
</section>