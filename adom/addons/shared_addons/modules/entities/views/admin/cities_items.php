<section class="title">
    <h4><?php echo lang('entities:cities'); ?></h4>
</section>
<section class="item">
    <div class="content">

        <?php echo form_open('admin/entities/cities/delete'); ?>
        <?php if (!empty($items)): ?>

            <div class="input"> 
                <label for="category_id" style="margin: 0 2% 0 0;"><?php echo lang('entities:country') ?></label>
                <?php
                    echo form_dropdown('country_id', $countries, @$id_country, 'id="country_id"')
                ?>
            </div>
            <table id="data_table">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('entities:name'); ?></th>
                        <th><?php echo lang('entities:country'); ?></th>
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
                            <td><?php echo $item->country_name; ?></td>
                            <td class="actions">
                                <?php
                                echo
                                //anchor('entities', lang('entities:view'), 'class="button" target="_blank"') . ' ' .
                                anchor('admin/entities/cities/edit/' . $item->id, lang('entities:edit'), 'class="button"') . ' ' .
                                anchor('admin/entities/cities/delete/' . $item->id, lang('entities:delete'), array('class' => 'button'));
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
            <div class="no_data"><?php echo lang('entities:no_items'); ?></div>
        <?php endif; ?>

        <?php echo form_close(); ?>
    </div>
</section>