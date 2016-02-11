/**
 * Admin evaluations scripts
 * 
 * @author      Rigo B Castro
 * @returns     {void}
 */
(function($, Handlebars) {
    var evaluations = {
        have_finished_date: 'input[name="have_finished_date"]',
        init: function() {

            // generate a slug when the user types a title in
            pyro.generate_slug('input[name="name"]', 'input[name="slug"]');

            // finished date
            this.$finished_date = $('#finished_date');
            if (this.$finished_date.length) {
                this.finished_date();
            }

            // Check first time of finished date
            check_finished_date.call($(this.have_finished_date));

            // Save form AJAX
            $(document).on('submit', '.save-form', function(e) {
                var $form = $(this),
                    form_data = $form.serialize(),
                    alert_tpl = Handlebars.compile($('#alert-template').html()),
                    $submit = $form.find('[type="submit"]'),
                    type = this.id;

                $.ajax({
                    url: $form.attr('action'),
                    type: 'post',
                    data: form_data,
                    beforeSend: function() {
                        pyro.clear_notifications();
                        $submit.attr('disabled', true);
                    },
                    success: function(obj) {
                        if (obj.message && obj.status === false) {
                            $form.prepend(alert_tpl(obj));
                        }
                        if (obj.status === true) {
                            pyro.add_notification('<div class="alert success"><p>' + obj.message + '</p></div>');
                            $.colorbox.close();

                            switch (type) {
                                case 'question-form':
                                    // Add the new question to DOM
                                    var question_table_tpl = Handlebars.compile($('#question-table-template').html()),
                                        tpl = question_table_tpl(obj.question);

                                    if (obj.create_mode === true) {
                                        $('#questions-table tbody').append(tpl);
                                    } else {
                                        var $question = $('#question_' + obj.question.id);
                                        $question.replaceWith(tpl);
                                    }

                                    break;
                                case 'option-form':
                                    // Reload options for question
                                    load_options($('[name="reload-options-url"]').val());
                                    break;
                            }

                        }
                    },
                    complete: function() {
                        $submit.attr('disabled', false);
                        $.colorbox.resize();
                    }
                });
                return e.preventDefault();
            });

            if ($('#options-template').length) {

                // Load questions options
                var $primary_content = $('#primary-content'),
                    $options_content = $('#options-content'),
                    options_tpl = Handlebars.compile($('#options-template').html());

                function load_options(url) {
                    return $.getJSON(url, function(obj) {
                        $primary_content.hide();
                        $options_content.html(options_tpl(obj)).show();
                    });
                }
                $(document).on('click', '.load-options', function(e) {
                    e.preventDefault();
                    return load_options(this.href);
                });
                $(document).on('click', '.cancel-options-button', function(e) {
                    $options_content.hide();
                    $primary_content.show();
                    return e.preventDefault();
                });


                // Delete many btn
                $(document).on('click', '.delete-many', function(e) {
                    var $this = $(this);
                    if (confirm(pyro.lang.dialog_message)) {

                        $.post($this.data('url'), $this.parents('form:first').serialize(), function(obj) {
                            if (obj.status === true && obj.items) {
                                for (var i in obj.items) {
                                    var item_id = '#' + obj.prefix + '_' + obj.items[i];

                                    $(item_id).fadeOut(function() {
                                        return $(this).remove();
                                    });
                                }
                            }
                        }, 'json');

                    }
                    return e.preventDefault();
                });


                // Correct options select
                var correct = '[name^="correct"]';

                $(document).on('change', correct, function(e) {
                    var type = $(this).data('type'),
                        option = $(this).val();

                    if (type === 'multiple') {
                        option = [];

                        $(correct + ':checked').each(function() {
                            option.push(this.value);
                        });
                    }

                    $.getJSON(SITE_URL + 'admin/evaluations/correct_options', {
                        type: type,
                        option: option
                    });
                });
            }
        },
        finished_date: function() {
            $('[name="finished_on"]').datepicker({
                minDate: 1,
                dateFormat : 'yy-mm-dd'
            });

            $(document).on('change', this.have_finished_date, check_finished_date);
        }
    }

    /* Private methods */

    function check_finished_date() {
        var $this = $(this),
            checked = $this.is(':checked');


        if (checked) {
            evaluations.$finished_date.show();
        } else {
            evaluations.$finished_date.hide();
        }
    }


    /* Run data! */

    $(function() {
        return evaluations.init();
    });
})(jQuery, Handlebars);
