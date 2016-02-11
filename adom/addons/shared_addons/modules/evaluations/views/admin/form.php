<div id="primary-content" class="one_full">
    <section class="title">
        <!-- We'll use $this->method to switch between sample.create & sample.edit -->
        <h4><?php echo lang('evaluations:' . $this->method); ?></h4>
    </section>

    <section class="item">
        <div class="content">
            <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud content"', array('slug' => null)); ?>

            <div class="tabs">
                <ul class="tab-menu">
                    <li><a href="#evaluations-evaluations-tab"><span><?php echo lang('evaluations:tabs:info') ?></span></a></li>

                    <?php if (!$create_mode) : ?>
                    <li><a href="#evaluations-questions-tab"><span><?php echo lang('evaluations:tabs:questions') ?></span></a></li>
                    <?php endif; ?>
                </ul>

                <div class="form_inputs" id="evaluations-evaluations-tab">
                    <fieldset>
                        <ul>
                            <li class="<?php echo alternator('', 'even'); ?>">
                                <label for="name"><?php echo lang('evaluations:name'); ?> <span>*</span></label>
                                <div class="input"><?php echo form_input('name', set_value('name', $evaluations->name), 'class="width-15"'); ?></div>
                            </li>
                            <li class="<?php echo alternator('', 'even'); ?>">
                                <label for="description"><?php echo lang('evaluations:description'); ?> <span>*</span></label>
                                <div class="input"><?php echo form_textarea('description', set_value('name', $evaluations->description)); ?></div>
                            </li>
                            <?php if ($create_mode) : ?>
                                <?php echo form_hidden('status', key($status_options)) ?>
                            <?php else: ?>
                                <li class="<?php echo alternator('', 'even'); ?>">
                                    <label for="status"><?php echo lang('evaluations:evaluations_status_label'); ?></label>
                                    <div class="input"><?php echo form_dropdown('status', $status_options, $create_mode ? $this->input->post('status') : $evaluations->status) ?></div>
                                </li>
                            <?php endif; ?>
                            <li class="<?php echo alternator('', 'even'); ?>">
                                <div class="input type-checkbox">
                                    <label><?php echo form_checkbox('have_finished_date', true, $create_mode ? $this->input->post('have_finished_date') : $evaluations->have_finished_date) ?><?php echo lang('evaluations:have_finished_date'); ?></label>
                                </div>
                                <div id="finished_date" <?php echo $create_mode OR !empty($evaluations->have_finished_date) ? 'style="display: none;"' : null ?>>
                                    <label for="finished_on"><?php echo lang('evaluations:finished_date'); ?> <span>*</span></label>
                                    <div class="input"><?php echo form_input('finished_on', set_value('finished_on', $create_mode ? $this->input->post('finished_on') : $evaluations->finished_on), 'class="width-15 datepicker" readonly'); ?></div>
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                </div>

                <?php if (!$create_mode) : ?>
                    <div class="form_inputs" id="evaluations-questions-tab">
                        <fieldset>
                            <table id="questions-table">
                                <thead>
                                    <tr>
                                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                                        <th><?php echo lang('evaluations:questions:label:name'); ?></th>
                                        <th><?php echo lang('evaluations:questions:label:type'); ?></th>
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
                                    <?php if (!empty($evaluations->questions)) : ?>
                                        <?php foreach ($evaluations->questions as $question): ?>
                                            <tr id="question_<?= $question->id ?>">
                                                <td><?php echo form_checkbox('action_to[]', $question->id); ?></td>
                                                <td><?php echo $question->question; ?></td>
                                                <td><?php echo $question->type->name; ?></td>
                                                <td class="actions">
                                                    <?php
                                                    echo
                                                    anchor('admin/evaluations/question/edit/' . $question->id, lang('evaluations:buttons:edit'), 'class="button modal"') . ' ' .
                                                    anchor('admin/evaluations/load_options/' . $question->id, lang('evaluations:buttons:questions_options'), 'class="button load-options"')
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <div class="clearfix" style="margin-top: 2em;">
                                <div class="alignleft" style="margin-right: .5em;">
                                    <a href="<?= site_url('admin/evaluations/question/create/' . $evaluations->id) ?>" class="btn blue modal" target="_blank"><?php echo lang('evaluations:questions:label:add') ?></a>
                                </div>

                                <div class="table_action_buttons alignleft">
                                    <button type="button" data-url="<?= site_url('admin/evaluations/delete_question/' . $evaluations->id) ?>" class="btn red delete-many" disabled><?php echo lang('buttons:delete') ?></button>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                <?php endif; ?>

            </div>

            <div class="buttons">
                <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </section>
</div>

<div id="options-content" class="one_full"></div>

<script id="options-template" type="text/x-handlebars-template">
    <?php echo form_open() ?>
    <input type="hidden" name="reload-options-url" value="{{ reload_url }}" />
    <section class="title">
        <h4>Opciones para la pregunta: <em>{{question.question}}</em></h4>
    </section>
    <section class="item">
        <div class="content">
            <table id="questions-table">
                <thead>
                    <tr>
                        <th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')); ?></th>
                        <th><?php echo lang('evaluations:options:label:answer'); ?></th>
                        <th><?php echo lang('evaluations:options:label:correct_opts'); ?></th>
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
                    {{#each options}}
                    <tr id="option_{{ id }}">
                        <td><?php echo form_checkbox('action_to[]', '{{ id }}'); ?></td>
                        <td>{{ option }}</td>
                        <td>
                            {{#if ../question.is_unique}}
                                <input type="radio" name="correct" value="{{ id }}" data-type="unique" {{#if is_correct}} checked="checked" {{/if}} />
                            {{/if}}
                            {{#if ../question.is_multiple}}
                                <input type="checkbox" name="correct[]" value="{{ id }}" data-type="multiple" {{#if is_correct}} checked="checked" {{/if}} />
                            {{/if}}
                        </td>
                        <td><?php echo anchor('admin/evaluations/option/edit/{{ id }}', lang('buttons:edit'), 'class="button modal"') ?></td>
                    </tr>
                    {{/each}}
                </tbody>
            </table>
            <div class="clearfix" style="margin-top: 2em;">
                <div class="alignleft" style="margin-right: .5em;">
                    <a href="<?= site_url('admin/evaluations/option/create/{{ question.id }}') ?>" class="btn blue modal" target="_blank"><?php echo lang('evaluations:options:label:add') ?></a>
                </div>

                <div class="table_action_buttons alignleft">
                    <button type="button" data-url="<?= site_url('admin/evaluations/delete_option') ?>" class="btn red delete-many" disabled><?php echo lang('buttons:delete') ?></button>
                    <a href="javascript:;" class="btn gray cancel-options-button"><?php echo lang('evaluations:buttons:cancel_options') ?></a>
                </div>
            </div>
        </div>
    </section>   
    <?php echo form_close() ?>
</script>



<script id="question-table-template" type="text/x-handlebars-template">
    <tr id="question_{{id}}">
        <td><?php echo form_checkbox('action_to[]', '{{ id }}'); ?></td>
        <td>{{ question }}</td>
        <td>{{ type.name }}</td>
        <td class="actions">
            <?php
            echo
            anchor('admin/evaluations/question/edit/{{ id }}', lang('evaluations:buttons:edit'), 'class="button modal"') . ' ' .
            anchor('admin/evaluations/load_options/{{ id }}', lang('evaluations:buttons:questions_options'), 'class="button load-options"')
            ?>
        </td>
    </tr>
</script>

<script id="alert-template" type="text/x-handlebars-template">
    <div class="alert {{ message_type }}">{{{ message }}}</div>
</script>