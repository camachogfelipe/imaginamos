<div style="min-height: 440px;">
    <section class="title">
        <h4>Crear pregunta</h4>
    </section>

    <section class="item">
        <div class="content">

            <?php echo form_open($this->uri->uri_string(), 'id="question-form" class="save-form crud' . ((isset($mode)) ? ' ' . $mode : ''), array('evaluations_id' => $create_mode ? $evaluations_id : $question->evaluations_id)) ?>

            <div class="form_inputs">
                <ul>
                    <li class="even">
                        <label for="question"><?php echo lang('evaluations:questions:label:name'); ?> <span>*</span></label>
                        <div class="input"><?php echo form_textarea('question', !$create_mode ? $question->question : null, 'style="width:95%"') ?></div>
                        <label for="evaluations_questions_type_id"><?php echo lang('evaluations:questions:label:type') ?></label>
                        <div class="input"><?php echo form_dropdown('evaluations_questions_type_id', $types, !$create_mode ? $question->evaluations_questions_type_id : null) ?></div>
                    </li>
                </ul>
            </div>

            <div><?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))) ?></div>

            <?php echo form_close() ?>
        </div>
    </section>
</div>