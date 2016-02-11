<section class="title">
    <h4><?php echo lang('pqr:pqr'); ?></h4>
</section>
<section class="item">
    <div class="content">
        <?php echo form_open('admin/pqr/delete'); ?>
        <?php if (!empty($items)): ?>

            <table id="data_table">
                <thead>
                    <tr>
                        <th><?php echo lang('pqr:name'); ?></th>
                        <th><?php echo lang('pqr:last_name'); ?></th>
                        <th><?php echo lang('pqr:email'); ?></th>
                        <th><?php echo lang('pqr:type'); ?></th>
                        <th><?php echo lang('pqr:building'); ?></th>
                        <th><?php echo lang('pqr:statu'); ?></th>
                        <th><?php echo lang('pqr:coment'); ?></th>
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
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->last_name; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->type_name; ?></td>
                            <td><?php echo $item->building_name; ?></td>
                            <td><?php echo $item->status_name; ?></td>
                            <td><?php echo character_limiter($item->comment,75); if (strlen($item->comment) > 75) { echo anchor('admin/pqr/view_comment/' . $item->id, lang('pqr:preview'), array("class" => "modal cboxElement"));}?></td>
                            <td class="actions">
                                <?php
                                if ($item->user_id == 0) {
                                    echo 'Usuario Anonimo';
                                } else if ($item->pqr_status_id != 1) {
                                    echo 'Ya se respondio';
                                } else {
                                    echo anchor('admin/pqr/edit/' . $item->id, lang('pqr:answer'), 'class="button"');
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>



        <?php else: ?>
            <div class="no_data"><?php echo lang('pqr:no_items'); ?></div>
        <?php endif; ?>

        <?php echo form_close(); ?>
    </div>
</section>