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
class Evaluations_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();

        $this->_table = 'evaluations';
    }
    
    public function get($id = 0)
    {
        $data = parent::get($id);
        
        if(!empty($data)){
            // Get all questions for evaluations
            $data->questions = $this->evaluations_questions_m->get_many_by('evaluations_id', $data->id);
            
            // If have questions get extra relational info
            if(!empty($data->questions)){
                $data->questions = array_map(array($this->evaluations_questions_m, 'extra_data'), $data->questions);
            }
            
            return $data;
        }
        
        return false;
    }

    // ----------------------------------------------------------------------
    
    public function create($input)
    {
        $today = new DateTime;
        
        $to_insert = array(
            'name' => $input['name'],
            'description' => $input['description'],
            'slug' => $this->_check_slug($input['slug']),
            'created_on' => $today->format('Y-m-d h:i:s'),
            'finished_on' => !empty($input['finished_on']) ? $input['finished_on'] : null,
            'have_finished_date' => $input['have_finished_date'],
            'status' => $input['status'],
            'user_id' => $input['user_id']
        );

        return $this->insert($to_insert);
    }
    
    // ----------------------------------------------------------------------
    

    //make sure the slug is valid
    public function _check_slug($slug)
    {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

}
