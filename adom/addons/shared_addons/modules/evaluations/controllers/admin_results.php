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
class Admin_results extends Admin_Controller {

    protected $section = 'results';

    public function __construct()
    {
        parent::__construct();

        role_or_die('evaluations', 'admin_evaluations');
        
        $this->template->append_css('module::admin_results.css');
    }

    /**
     * List all items
     */
    public function index()
    {
        $total_rows = $this->evaluations_replies_m->count_all();
        $pagination = create_pagination(uri_string(), $total_rows);
        $items = $this->evaluations_replies_m->limit($pagination['limit'], $pagination['offset'])->get_all();

        if (!empty($items))
        {
            $items = array_map(array($this, '_process_result'), $items);
        }

        return $this->template
                ->title(lang('evaluations:results_list'))
                ->set('items', $items)
                ->set('pagination', $pagination)
                ->build('admin/results/index');
    }

    // ----------------------------------------------------------------------

    public function show($id = null)
    {
        $item = $this->evaluations_replies_m->get_by('id', $id);

        empty($item) AND show_404();

        $this->_process_result($item);

        return $this->load->view('admin/results/show', array(
                'item' => $item
        ));
    }

    // ----------------------------------------------------------------------

    private function _process_result(&$result)
    {
        $result->user = $this->ion_auth->get_user($result->user_id);
        $result->evaluations = $this->evaluations_m->get($result->evaluations_id);
        $result->questions = $this->evaluations_replies_questions_m->get_many_by('evaluations_reply_id', $result->id);
        
        foreach($result->questions as &$q){
            $q->answers = $this->evaluations_replies_answers_m->get_many_by('evaluations_replies_question_id', $q->id);
        }

        return $result;
    }

    // ----------------------------------------------------------------------
}