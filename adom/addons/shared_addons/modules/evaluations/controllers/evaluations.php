<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Public Blog module controller
 *
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Blog\Controllers
 */
class Evaluations extends Public_Controller {

    /**
     * Every time this controller is called should:
     * - load the blog and blog_categories models.
     * - load the keywords library.
     * - load the blog language file.
     */
    public function __construct()
    {
        parent::__construct();

        $site_lang = CURRENT_LANGUAGE;

        $this->template
            ->append_js(array(
                'module::lib/jquery-validation/jquery.validate.min.js',
                'module::lib/jquery-validation/additional-methods.min.js',
                "module::lib/jquery-validation/localization/messages_{$site_lang}.js"
            ))
            ->append_css('module::evaluations.css');
    }

    /**
     * Index
     *
     * List out the blog posts.
     *
     * URIs such as `blog/page/x` also route here.
     */
    public function index()
    {
        $evaluations = $this->evaluations_m->get_all();

        if (!empty($evaluations))
        {
            foreach ($evaluations as &$s)
            {
                $evaluations_reply = $this->evaluations_replies_m->get_by(array('evaluations_id' => $s->id, 'user_id' => $this->current_user->id));
                $s->url = site_url("evaluations/view/{$s->id}/{$s->slug}");
                $s->was_completed = !empty($evaluations_reply);
                $s->evaluations_reply = $evaluations_reply;
            }
        }

        return $this->template
                ->set_breadcrumb(lang('evaluations:title'))
                ->title(lang('evaluations:title'))
                ->set('evaluations', $evaluations)
                ->build('evaluations');
    }

    // ----------------------------------------------------------------------

    public function view($id)
    {
        $evaluations = $this->evaluations_m->get($id);

        if (empty($evaluations) OR empty($id))
        {
            return show_404();
        }
        
        $evaluations_reply = $this->evaluations_replies_m->get_by(array('evaluations_id' => $evaluations->id, 'user_id' => $this->current_user->id));
        
        if(!empty($evaluations_reply)){
            $date = new \DateTime($evaluations_reply->replied_on);
            setlocale(LC_ALL, 'es_ES');
            $this->session->set_flashdata('error', sprintf(lang('evaluations:reply:cant_reply'), $evaluations->name, strftime(lang('evaluations:reply:date_format_completed'), $date->getTimestamp())));
            return redirect('evaluations');
        }

        return $this->template
                ->set_breadcrumb(lang('evaluations:title'))
                ->title($evaluations->name)
                ->set('evaluations', $evaluations)
                ->append_js('module::front/view.js')
                ->build('view');
    }

    // ----------------------------------------------------------------------

    public function answer($id, $slug = null)
    {
        $questions = $this->input->post('questions');
        $evaluations = $this->evaluations_m->get($id);
        $error_redirect_url = "evaluations/view/{$id}/{$slug}";

        if (empty($evaluations) OR empty($id))
        {
            return show_404();
        }

        if (empty($questions) OR (count($questions) < count($evaluations->questions)))
        {
            $this->session->set_flashdata('error', lang('evaluations:reply:error_no_selection'));
            return redirect($error_redirect_url);
        }

        if (!$this->current_user)
        {
            return redirect('users/login');
        }

        // Insert evaluations reply
        $reply_id = $this->evaluations_replies_m->insert(array(
            'evaluations_id' => $evaluations->id,
            'user_id' => $this->current_user->id,
            'replied_on' => date('Y-m-d H:i:s')
        ));

        if (!empty($reply_id))
        {
            // Now, save the questions and answers!

            foreach ($questions as $question_id => $answer)
            {

                $question_reply_id = $this->evaluations_replies_questions_m->insert(array(
                    'evaluations_reply_id' => $reply_id,
                    'evaluations_question_id' => $question_id
                ));
                

                if (!is_array($answer))
                {
                    $answer = array($answer);
                }

                foreach ($answer as $anwser_id)
                {
                    $this->evaluations_replies_answers_m->insert(array(
                        'evaluations_replies_question_id' => $question_reply_id,
                        'evaluations_option_id' => $anwser_id
                    ));
                }
            }
            
            $this->session->set_flashdata('success', sprintf(lang('evaluations:reply:request_success'), $evaluations->name));
            return redirect('evaluations');
        }
    }

    // ----------------------------------------------------------------------
}