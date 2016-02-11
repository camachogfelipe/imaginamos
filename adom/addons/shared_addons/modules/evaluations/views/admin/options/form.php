<div>
    <section class="title">
        <h4>Crear opción</h4>
    </section>

    <section class="item">
        <div class="content">

            <?php echo form_open($this->uri->uri_string(), 'id="option-form" class="save-form crud' . ((isset($mode)) ? ' ' . $mode : ''), array('evaluations_question_id' => ($create_mode ? $question_id : $option->evaluations_question_id))) ?>

            <div class="form_inputs">
                <ul>
                    <li class="even">
                        <label for="option"><?php echo lang('evaluations:options:label:answer'); ?> <span>*</span></label>
                        <div class="input"><?php echo form_textarea('option', ($create_mode ? null : $option->option), 'style="width:95%"') ?></div>
                    </li>
                </ul>
            </div>

            <div><?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))) ?></div>

            <?php echo form_close() ?>
        </div>
    </section>
</div>