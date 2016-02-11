<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('safezone:create_safezone'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>
        <div class="form_inputs">
            <ul>
                 <li>
                    <label for="type"><?php echo lang('safezone:type'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_dropdown('type',$types); ?></div>
                </li>
                <li>
                    <label for="name"><?php echo lang('safezone:name'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_input('name', set_value('name', !empty($safezone) ? $safezone[0]->title : NULL), 'class="width-15"'); ?></div>
                </li>
                <li>
                    <label for="userfile"><?php echo lang('safezone:file'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_upload('userfile', set_value('userfile', !empty($safezone) ? $safezone[0]->title : NULL), 'class="width-15"'); ?></div>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>