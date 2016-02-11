<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('pqr:answer'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo $pqr->name.' '.$pqr->last_name; ?> 
        <p><?php echo  $pqr->comment; ?></p>
        <?php echo form_open_multipart($this->uri->uri_string() . '/answer_pqr', 'class="crud"'); ?>
        <div class="form_inputs">
            <ul>
                <li>
                    <label for="name"><?php echo lang('pqr:answer'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_textarea('answer'); ?></div>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>