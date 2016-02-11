<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	PQR Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pqr_m extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->_table = 'pqr';
    }

    //create a new item
    public function create($input) {
        if ($this->ion_auth->logged_in()) {
            $user_id = $this->ion_auth->profile()->id;
        } else {
            $user_id = 0;
        }
        $to_insert = array(
            'user_id' => $user_id,
            'pqr_type_id' => $input['type_id'],
            'pqr_status_id' => 1,
            'building_id' => $input['building_id'],
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'comment' => $input['coment'],
            'created_on' => date('Y-m-d H:i:s')
        );
        return $this->db->insert($this->_table, $to_insert);
    }

    //make sure the slug is valid
    public function _check_slug($slug) {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }

    public function get_all() {
        if ($this->ion_auth->profile()) {
            $user_id = $this->ion_auth->profile()->id;
            $this->db->where('id', $this->ion_auth->profile()->group_id);
            $groups = $this->db->get('groups')->result();
            if ($groups[0]->name == 'building-admin') {
                $this->db
                        ->select('pqr.*, pqr_type.name AS type_name, pqr_status.name AS status_name, buildings.name AS building_name')
                        ->join('pqr_type', 'pqr.pqr_type_id = pqr_type.id', 'left')
                        ->join('pqr_status', 'pqr.pqr_status_id = pqr_status.id', 'left')
                        ->join('buildings', 'pqr.building_id = buildings.id', 'left')
                        ->join('admin_building', 'admin_building.building_id=buildings.id', 'left')
                        ->where('admin_building.user_id', $user_id)
                        ->order_by('pqr.created_on', 'DESC');
            } else {
                $this->db
                        ->select('pqr.*, pqr_type.name AS type_name, pqr_status.name AS status_name, buildings.name AS building_name')
                        ->join('pqr_type', 'pqr.pqr_type_id = pqr_type.id', 'left')
                        ->join('pqr_status', 'pqr.pqr_status_id = pqr_status.id', 'left')
                        ->join('buildings', 'pqr.building_id = buildings.id', 'left')
                        ->order_by('pqr.created_on', 'DESC');
            }
            return $this->db->get($this->_table)->result();
        }
    }

    public function answer_pqr($id, $input) {
        $this->db->where('id', $id);
        $this->db->update($this->_table, array('pqr_status_id' => 2));

        $user_id = $this->ion_auth->profile()->id;
        $to_insert = array(
            'user_id' => $user_id,
            'pqr_id' => $id,
            'answer' => $input['answer'],
            'created_on' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('pqr_answer', $to_insert);
    }

    public function get_admin_building($id) {
        $this->db
                ->select('users.*')
                ->join('admin_building', 'admin_building.user_id = users.id', 'left')
                ->where('building_id', $id);
        return $this->db->get('users')->result();
    }

}
