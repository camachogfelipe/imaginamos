<div class="one-full">
    <section class="title">
        <h4><?php echo sprintf(lang('evaluations:result_show'), $item->evaluations->name, $item->user->first_name, $item->user->last_name) ?></h4>
    </section>

    <section class="item">

        <div class="content">
            <div class="anwsers-content">
                <ol>
                    <?php foreach ($item->evaluations->questions as $q) : ?>
                        <li id="question_<?= $q->id ?>">
                            <h3><?php echo $q->question ?></h3>
                            <ul>
                                <?php foreach ($q->options as $o) : ?>
                                    <li id="option_<?= $o->id ?>" class='option <?= $o->is_correct ? 'is_correct' :  null ?>'><?php echo $o->option ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
            
            <hr>
            <em class="conventions">
                La(s) respuesta(s) correcta(s) del usuario están resaltadas de color <span class="is_correct selected inline">verde</span>, 
                la(s) respuesta(s) correcta definida(s) está resaltada de color <span class="is_correct inline">naranja</span> y la(s) respuesta(s) incorrecta(s) de color <span class="selected inline">gris</span>.
            </em>
        </div>

    </section>
</div>

<script>
    var questions = <?= json_encode($item->questions) ?>;
    $.each(questions, function(){
        $.each(this.answers, function(){
            $('#option_' + this.evaluations_option_id).addClass('selected');
        });
    });
</script>