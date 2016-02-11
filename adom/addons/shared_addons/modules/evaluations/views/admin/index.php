<div class="one-full">
    <section class="title">
        <h4><?php echo lang('evaluations:evaluations_list'); ?></h4>
    </section>

    <section class="item">
        <?php echo form_open('admin/evaluations/delete', 'class="content"'); ?>

        <?php if (!empty($items)): ?>

            <table>
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('evaluations:name'); ?></th>
                        <th><?php echo lang('evaluations:description'); ?></th>
                        <th><?php echo lang('evaluations:evaluations_status_label'); ?></th>
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
                            <td style="width: 50%"><em><?php echo character_limiter($item->description, 150); ?></em></td>
                            <td><?php echo lang("evaluations:evaluations_{$item->status}_label") ?></td>
                            <td class="actions">
                                <?php
                                echo
                                anchor('admin/evaluations/edit/' . $item->id, lang('evaluations:buttons:edit'), 'class="button"') . ' ' .
                                anchor('admin/evaluations/delete/' . $item->id, lang('evaluations:buttons:delete'), array('class' => 'button'));
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
            <div class="no_data"><?php echo lang('evaluations:no_evaluations'); ?></div>
        <?php endif; ?>

<?php echo form_close(); ?>
    </section>
</div>