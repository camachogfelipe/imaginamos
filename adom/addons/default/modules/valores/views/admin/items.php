<section class="title">
    <h4><?php echo lang('valores:valores'); ?></h4>
</section>
<section class="item">
    <div class="content">
        <?php echo form_open('admin/valores/delete'); ?>
        <?php if (!empty($items)): ?>

            <table id="data_table">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('valores:name'); ?></th>
                        <!--th><?php echo lang('valores:slug'); ?></th-->
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
                    <?php $i=0; foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo ($i != 0)?form_checkbox('action_to[]', $item->id):"";  ?></td>
                            <td><?php echo $item->title; ?></td>
                            <!--td><a href="<?php echo rtrim(site_url(), '/') . '/valores'; ?>">
                            <?php echo rtrim(site_url(), '/') . '/valores'; ?></a></td-->
                            <td class="actions">
                                <?php
                                echo
                                //anchor('valores', lang('valores:view'), 'class="button" target="_blank"') . ' ' .
                                anchor('admin/pages/edit/' . $item->id, lang('valores:edit'), 'class="button"') . ' ' .(
                                ($i != 0)?anchor('admin/valores/delete/' . $item->id, lang('valores:delete'), array('class' => 'button')):"");
                                ?>
                                
                            </td>
                        </tr>
    <?php $i++; endforeach; ?>
                </tbody>
            </table>

            <div class="table_action_buttons">
    <?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
            </div>

        <?php else: ?>
            <div class="no_data"><?php echo lang('valores:no_items'); ?></div>
        <?php endif; ?>

<?php echo form_close(); ?>
    </div>
</section>