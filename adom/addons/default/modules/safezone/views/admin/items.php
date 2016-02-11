<section class="title">
    <h4><?php echo lang('safezone:safezone'); ?></h4>
</section>
<section class="item">
    <div class="content">
        <?php echo form_open('admin/safezone/delete'); ?>
        <?php if (!empty($items)): ?>

            <table id="data_table">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('safezone:name'); ?></th>
                        <th><?php echo lang('safezone:type'); ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->mimetype; ?></td>
                            <td class="actions">
                                <?php
                                echo
                                //anchor('safezone', lang('safezone:view'), 'class="button" target="_blank"') . ' ' .
                                //anchor('admin/pages/edit/' . $item->id, lang('safezone:edit'), 'class="button"') . ' ' .
                                anchor('admin/safezone/delete/' . $item->id, lang('safezone:delete'), array('class' => 'button'));
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
            <div class="no_data"><?php echo lang('safezone:no_items'); ?></div>
        <?php endif; ?>

        <?php echo form_close(); ?>
    </div>
</section>