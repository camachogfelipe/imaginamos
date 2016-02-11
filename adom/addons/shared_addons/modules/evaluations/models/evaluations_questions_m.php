<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This is a evaluations module for PyroCMS
 *
 * @author 		Rigo B Castro
 * @website		http://rigobcastro.com
 * @package             PyroCMS
 * @subpackage          Evaluations Module
 */
class Evaluations_questions_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // ----------------------------------------------------------------------
    
    public function get_by($key = null, $value = null)
    {
        $data = parent::get_by($key, $value);
        return $this->extra_data($data);
    }

    // ----------------------------------------------------------------------

    public function extra_data($question)
    {
        // Get type for question
        $question->type = $this->evaluations_questions_types_m->get_by('id', $question->evaluations_questions_type_id);
        // Is unique and multiple?
        $question->is_unique = $question->type->slug === 'unique';
        $question->is_multiple = $question->type->slug === 'multiple';
        // Count of options for question
        $question->options_count = 0;
        // Options
        $question->options = $this->evaluations_options_m->get_many_by('evaluations_question_id', $question->id);

        return $question;
    }

    // ----------------------------------------------------------------------


    public function create($input)
    {
        $today = new DateTime;

        $to_insert = array(
            'name' => $input['name'],
            'slug' => $this->_check_slug($input['slug']),
            'created_on' => $today->format('Y-m-d h:i:s'),
            'finished_on' => !empty($input['finished_on']) ? $input['finished_on'] : null,
            'status' => $input['status']
        );

        return $this->insert($to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug)
    {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

}