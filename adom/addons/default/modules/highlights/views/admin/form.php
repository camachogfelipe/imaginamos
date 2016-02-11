<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('highlights:create_highlights'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>
        <div class="form_inputs">
            <ul>
                <li>
                    <label for="name"><?php echo lang('highlights:name'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_input('name', set_value('name', !empty($highlights) ? $highlights[0]->title : NULL), 'class="width-15"'); ?></div>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>