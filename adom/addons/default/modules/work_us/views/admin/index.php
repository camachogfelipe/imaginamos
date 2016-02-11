<section class="title">
    <h4><?php echo lang('work_us:item_list'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open('admin/work_us/delete'); ?>
        <?php if (!empty($work_us)): ?>
            <table border="0" class="table-list" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('work_us:name'); ?></th>
                        <th><?php echo lang('work_us:lastName'); ?></th>
                        <th><?php echo lang('work_us:email'); ?></th>
                        <th><?php echo lang('work_us:file'); ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($work_us as $item): ?>
                        <tr id="item_<?php echo $item->id; ?>">
                            <td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->last_name; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->file; ?></td>
                            <td class="actions">
                                <?php
                                echo
                                //anchor('work_us', lang('work_us:view'), 'class="button" target="_blank"').' '.
                                anchor('admin/work_us/edit/' . $item->id, lang('work_us:view'), 'class="button"') . ' ' .
                                anchor('admin/work_us/delete/' . $item->id, lang('work_us:delete'), array('class' => 'button'));
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
            <div class="no_data"><?php echo lang('work_us:no_items'); ?></div>
        <?php endif; ?>
        <?php echo form_close(); ?>
    </div>
</section>