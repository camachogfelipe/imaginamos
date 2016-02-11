<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is a evaluations module for PyroCMS
 *
 * @author 	Rigo B Castro - Imaginamos Dev Team
 * @website	http://imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	evaluations Module
 */
class Admin extends Admin_Controller {

    protected $section = 'evaluations';
    protected $evaluations_validation_rules, $question_validation_rules;
    private $_status_options = array();

    public function __construct()
    {
        parent::__construct();

        role_or_die('evaluations', 'admin_evaluations');

        // Load all the required classes
        $this->_model = $this->evaluations_m;
        $this->load->library('form_validation');

        // Set the validation rules
        $this->evaluations_validation_rules = array(
            array(
                'field' => 'name',
                'label' => lang('evaluations:name'),
                'rules' => 'trim|max_length[100]|required'
            ),
            array(
                'field' => 'description',
                'label' => lang('evaluations:description'),
                'rules' => 'trim|required'
            ),
            'finished_on' => array(
                'field' => 'finished_on',
                'label' => lang('evaluations:finished_date'),
                'rules' => 'trim'
            )
        );
        $have_finished_date = $this->input->post('have_finished_date');
        if($have_finished_date){
            $this->evaluations_validation_rules['finished_on']['rules'] .= '|required';
        }
        
        $this->question_validation_rules = array(
            array(
                'field' => 'question',
                'label' => lang('evaluations:questions:label:name'),
                'rules' => 'trim|required'
            )
        );
        $this->option_validation_rules = array(
            array(
                'field' => 'option',
                'label' => lang('evaluations:options:label:answer'),
                'rules' => 'trim|required'
            )
        );

        $this->_status_options = array('closed' => lang('evaluations:evaluations_closed_label'), 'open' => lang('evaluations:evaluations_open_label'));

        // We'll set the partials and metadata here since they're used everywhere
        $this->template
            ->append_js(array('module::lib/handlebars.js', 'module::back/admin.js'))
            ->append_css('module::admin.css')
            ->set('status_options', $this->_status_options);
    }

    /**
     * List all items
     */
    public function index()
    {
        // here we use MY_Model's get_all() method to fetch everything
        $items = $this->_model->get_all();

        // Build the view with sample/views/admin/items.php
        $this->template
            ->title($this->module_details['name'])
            ->set('items', $items)
            ->build('admin/index');
    }

    public function create()
    {
        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->evaluations_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run())
        {
            $data = $this->input->post();
            $data['user_id'] = $this->current_user->id;

            // See if the model can create the record
            if ($this->_model->create($data))
            {
                // All good...
                $this->session->set_flashdata('success', lang('evaluations:add_success'));
                redirect('admin/evaluations');
            }
            // Something went wrong. Show them an error
            else
            {
                $this->session->set_flashdata('error', lang('evaluations:add_error'));
                redirect('admin/evaluations/create');
            }
        }

        $evaluations = new stdClass;
        foreach ($this->evaluations_validation_rules as $rule)
        {
            $evaluations->{$rule['field']} = $this->input->post($rule['field']);
        }

        // Build the view using sample/views/admin/form.php
        $this->template
            ->title($this->module_details['name'], lang('evaluations:create'))
            ->set('evaluations', $evaluations)
            ->set('create_mode', true)
            ->build('admin/form');
    }

    public function edit($id = 0)
    {
        $evaluations = $this->_model->get($id);

        // Set the validation rules from the array above
        $this->form_validation->set_rules($this->evaluations_validation_rules);

        // check if the form validation passed
        if ($this->form_validation->run())
        {

            // Prevent columns error with finished_date
            if (!$this->input->post('have_finished_date'))
            {
                $_POST['finished_on'] = null;
            }

            // get rid of the btnAction item that tells us which button was clicked.
            // If we don't unset it MY_Model will try to insert it
            unset($_POST['btnAction']);

            // See if the model can create the record
            if ($this->_model->update($id, $this->input->post()))
            {
                // All good...
                $this->session->set_flashdata('success', lang('evaluations:update_success'));
                redirect('admin/evaluations');
            }
            // Something went wrong. Show them an error
            else
            {
                $this->template->set('messages', array(
                    'error' => lang('evaluations:update_error')
                ));
            }
        }

        // Build the view using sample/views/admin/form.php
        $this->template
            ->title($this->module_details['name'], lang('evaluations:edit'))
            ->set('evaluations', $evaluations)
            ->set('create_mode', false)
            ->build('admin/form');
    }
    
    // ----------------------------------------------------------------------

    public function delete($id = 0)
    {
        // make sure the button was clicked and that there is an array of ids
        if (isset($_POST['btnAction']) AND is_array($_POST['action_to']))
        {
            // pass the ids and let MY_Model delete the items
            $this->_model->delete_many($this->input->post('action_to'));
        }
        elseif (is_numeric($id))
        {
            // they just clicked the link so we'll delete that one
            $this->_model->delete($id);
        }
        redirect('admin/evaluations');
    }

    // ----------------------------------------------------------------------

    /**
     * Create question via AJAX
     * 
     * @param int $resource_id
     * @return json/string
     */
    public function question($mode, $resource_id = null)
    {
        $model = $this->evaluations_questions_m;
        $types_model = $this->evaluations_questions_types_m;
        $create_mode = ($mode === 'create');
        $status = false;

        $data = array(
            'mode' => $mode,
            'types' => $types_model->dropdown('id', 'name'),
            'create_mode' => $create_mode
        );

        // If mode is create, verify max limit of creation and validate $id (id is for evaluations_id resource)
        if ($create_mode)
        {
            $limit = (int) Settings::get('evaluations_max_questions');
            $can_create = !empty($limit) ? ($model->count_all() < $limit) : true;

            if (!$can_create OR empty($resource_id))
            {
                exit('Ha alcanzado el límite de creación o no tiene acceso a este módulo.');
            }

            $data['evaluations_id'] = $resource_id;
        }
        else
        {
            $data['question'] = $model->get_by('id', $resource_id);
        }

        $this->form_validation->set_rules($this->question_validation_rules);

        if ($this->form_validation->run())
        {
            if ($create_mode)
            {
                $id = $model->insert($this->input->post());
                $message = lang('cat:add_error');

                if (!empty($id))
                {
                    $message = lang('evaluations:questions:add_success');
                }
            }
            else
            {
                $status = $model->update($resource_id, $this->input->post());
                $message = lang($status ? 'evaluations:questions:update_success' : 'evaluations:questions:update_error');
            }

            return $this->template->build_json(array(
                    'message' => $message,
                    'message_type' => 'success',
                    'question' => $model->get_by('id', $create_mode ? $id : $resource_id),
                    'status' => true,
                    'create_mode' => $create_mode
            ));
        }
        else
        {
            // Render the view
            $form = $this->load->view('admin/questions/form', $data, true);

            if ($errors = validation_errors())
            {
                return $this->template->build_json(array(
                        'message' => $errors,
                        'message_type' => 'error',
                        'status' => false,
                        'form' => $form
                ));
            }

            echo $form;
        }
    }
    
    // ----------------------------------------------------------------------

    /**
     * Delete questions
     * 
     * @param int $id
     */
    public function delete_question()
    {
        $status = false;
        $items = $this->input->post('action_to');
        // make sure the button was clicked and that there is an array of ids
        if (!empty($items) && is_array($items))
        {
            // pass the ids and let MY_Model delete the items
            $status = $this->evaluations_questions_m->delete_many($items);
        }
        return $this->template->build_json(array(
                'status' => $status,
                'items' => $status ? $items : null,
                'prefix' => 'question'
        ));
    }
    
    // ----------------------------------------------------------------------

    public function load_options($question_id = null)
    {
        $question = $this->evaluations_questions_m->get_by('id', $question_id);
        $options = $this->evaluations_options_m->get_many_by('evaluations_question_id', $question->id);

        if (!empty($options))
        {
            foreach ($options as &$o)
            {
                $o->is_correct = (bool) $o->is_correct;
            }
        }

        return $this->template->build_json(array(
                'question' => $question,
                'options' => $options,
                'reload_url' => current_url()
        ));
    }

    // ----------------------------------------------------------------------

    /**
     * Create/Edit option via AJAX
     * 
     * @param string $mode <p>Can use "create" or "edit"</p>
     * @param int $resource_id <p>In create case is the question id, and in edit case is the option id.</p>
     * @return json
     */
    public function option($mode, $resource_id = null)
    {
        $model = $this->evaluations_options_m;
        $create_mode = ($mode === 'create');
        $status = false;

        $data = array(
            'mode' => $mode,
            'create_mode' => $create_mode
        );

        // If mode is create, verify max limit of creation and validate $id (id is for evaluations_id resource)
        if ($create_mode)
        {
            $limit = (int) Settings::get('evaluations_max_options');
            $can_create = !empty($limit) ? ($model->count_all() < $limit) : true;

            if (!$can_create OR empty($resource_id))
            {
                exit('Ha alcanzado el límite de creación o no tiene acceso a este módulo.');
            }

            $data['question_id'] = $resource_id;
        }
        else
        {
            $data['option'] = $model->get_by('id', $resource_id);
        }

        $this->form_validation->set_rules($this->option_validation_rules);

        if ($this->form_validation->run())
        {
            if ($create_mode)
            {
                $id = $model->insert($this->input->post());
                $message = lang('evaluations:options:add_error');

                if (!empty($id))
                {
                    $message = lang('evaluations:options:add_success');
                    $status = true;
                }
            }
            else
            {
                $status = $model->update($resource_id, $this->input->post());
                $message = lang($status ? 'evaluations:options:update_success' : 'evaluations:options:update_error');
            }

            return $this->template->build_json(array(
                    'message' => $message,
                    'message_type' => 'success',
                    'status' => $status,
                    'mode' => $mode
            ));
        }
        else
        {
            // Render the view
            $form = $this->load->view('admin/options/form', $data, true);

            if ($errors = validation_errors())
            {
                return $this->template->build_json(array(
                        'message' => $errors,
                        'message_type' => 'error',
                        'status' => false,
                        'form' => $form
                ));
            }

            echo $form;
        }
    }

    // ----------------------------------------------------------------------

    /**
     * Delete options
     * 
     * @param int $id
     */
    public function delete_option()
    {
        $status = false;
        $items = $this->input->post('action_to');
        // make sure the button was clicked and that there is an array of ids
        if (!empty($items) && is_array($items))
        {
            // pass the ids and let MY_Model delete the items
            $status = $this->evaluations_options_m->delete_many($items);
        }
        return $this->template->build_json(array(
                'status' => $status,
                'items' => $status ? $items : null,
                'prefix' => 'option'
        ));
    }

    // ----------------------------------------------------------------------

    public function correct_options()
    {
        $input = $this->input->get('option');
        $status = false;

        if (!is_array($input))
        {
            $input = array($input);
        }
        $option = $this->evaluations_options_m->get_by('id', $input[0]);

        if (!empty($option))
        {
            // Reset
            $status = $this->evaluations_options_m->update_by('evaluations_question_id', $option->evaluations_question_id, array(
                'is_correct' => false
            ));


            if ($status)
            {
                $status = $this->evaluations_options_m->update_many($input, array(
                    'is_correct' => true
                ));
            }
        }

        return $this->template->build_json(array(
                'status' => $status
        ));
    }

    // ----------------------------------------------------------------------
}