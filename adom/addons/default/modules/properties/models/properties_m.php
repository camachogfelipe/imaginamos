<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 		Rigo B Castro
 * @website		http://imaginamos.com
 * @package             PyroCMS
 * @subpackage          In Events Module
 */
class Properties_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();

        $this->_table = 'intranet_events';
    }

    public function get_many_by($params = array())
    {
        if (!empty($params['start_date']))
        {
            $this->db->where('start_date >=', $params['start_date']);
        }
        if (!empty($params['end_date']))
        {
            $this->db->where('end_date <=', $params['end_date']);
        }
        if(!empty($params['category'])){
            $this->db->select("{$this->_table}.*, B.*")->join('intranet_events_categories as B', "B.id = {$this->_table}.intranet_events_category_id");
        }

        return $this->get_all();
    }

    // ----------------------------------------------------------------------
}
