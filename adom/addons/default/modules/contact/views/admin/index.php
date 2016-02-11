<section class="title">
    <h4><?php echo lang('contact:item_list'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open('admin/contact/delete'); ?>
        <?php if (!empty($contact)): ?>
            <table border="0" class="table-list" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th> 
                        <th>Pais</th>
                        <th>Ciudad</th> 
                        <th>Comentario</th>

                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($contact as $item): ?>
                        <tr id="item_<?php echo $item->id; ?>">
                            <td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
                            <td><?php echo $item->nombre; ?></td>
                            <td><?php echo $item->empresa; ?></td>
                            <td><?php echo $item->telefono; ?></td>
                            <td><?php echo $item->celular; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->pais; ?></td>
                            <td><?php echo $item->ciudad; ?></td>
                            <td><?php echo $item->comentario; ?></td>
                            <td class="actions">
                                <?php
                                echo
                                //anchor('contact', lang('contact:view'), 'class="button" target="_blank"').' '.
                                //anchor('admin/contact/edit/' . $item->id, lang('contact:edit'), 'class="button"') . ' ' .
                                anchor('admin/contact/delete/' . $item->id, lang('contact:delete'), array('class' => 'button')).' '.anchor('admin/contact/download/' . $item->id, lang('contact:download'), array('class' => 'button'));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="table_action_buttons">
                <?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
            </div>
        <?php else: ?>
            <div class="no_data"><?php echo lang('contact:no_items'); ?></div>
        <?php endif; ?>
        <?php echo form_close(); ?>
    </div>
</section>