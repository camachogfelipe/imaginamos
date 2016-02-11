
<div class="evaluations">
    <h3><?= $evaluations->name ?></h3>
    <div class="body">
        <p><?= $evaluations->description ?></p>
    </div>

    <?php if (!empty($evaluations->questions)) : ?>

        <?= form_open("evaluations/answer/{$evaluations->id }/{$evaluations->slug}/" . md5($evaluations->id), 'id="evaluations-reply-form"') ?>

        <fieldset>
            <ol>
                <?php foreach ($evaluations->questions as $question) : ?>
                    <li class="question clearfix">
                        <h5 class="question-title"><?= $question->question ?></h5>
                        <?php
                        $first = true;
                        foreach ($question->options as $option) :
                            ?>
                            <label for="option_<?= $option->id ?>">
                                <?php if ($question->type->slug === 'unique') : ?>
                                    <?= form_radio("questions[{$question->id}]", $option->id, $this->input->post("questions[{$question->id}]"), "id='option_{$option->id}'" . $first ? 'required' : null) ?>
                                <?php else: ?>
                                    <?= form_checkbox("questions[{$question->id}][]", $option->id, $this->input->post("questions[{$question->id}]"), "id='option_{$option->id}'" . $first ? 'required' : null) ?>
                                <?php endif; ?>
                                <span><?= $option->option ?></span> 
                            </label>
                            <?php
                            $first = false;
                        endforeach;
                        ?>
                    </li>
                <?php endforeach; ?>
            </ol>

            <button type="submit">Responder</button>
        </fieldset>

        <?= form_close() ?>
    <?php endif; ?>
</div>