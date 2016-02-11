<?php

/**
 * This is a sample module for PyroCMS
 *
 * @author 	Eduard Russy
 * @website     http://www.imaginamos.com
 * @package 	PyroCMS
 * @subpackage 	Entities Module
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Buildings_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();
        $this->_table = 'buildings';
    }
    
    // ----------------------------------------------------------------------

    //create a new item
    public function create($input)
    {
        $to_insert = array(
            'name' => $input['name'],
            'city_id' => $input['city_id'],
            'slug' => $this->_check_slug(underscore($input['name']))
        );

        $this->db->insert($this->_table, $to_insert);
        $building_id = $this->db->insert_id();

        if (!empty($input['admin']))
        {
            foreach ($input['admin'] as $value)
            {
                $to_insert = array(
                    'user_id' => $value,
                    'building_id' => $building_id
                );
                $this->db->insert('admin_building', $to_insert);
            }
        }


        return true;
    }
    
    // ----------------------------------------------------------------------

    //make sure the slug is valid
    public function _check_slug($slug)
    {
        $slug = strtolower($slug);
        $slug = preg_replace('/\s+/', '-', $slug);

        return $slug;
    }
    
    // ----------------------------------------------------------------------

    public function get_all($id = NULL)
    {
        $this->db
            ->select('buildings.*, cities.name AS city_name')
            ->join('cities', 'buildings.city_id = cities.id', 'left')
            ->order_by('buildings.name', 'DESC');
        if (isset($id) && $id > 0)
            $this->db->where('buildings.city_id', $id);
        return $this->db->get('buildings')->result();
    }
    
    // ----------------------------------------------------------------------

    public function get_admin()
    {
        $this->db->where('name', 'building-admin');
        $groups = $this->db->get('groups')->result();

        $this->db->where('group_id', $groups[0]->id);
        return $this->db->get('users')->result();
    }
    
    // ----------------------------------------------------------------------

    public function get_admin_building($id)
    {
        $this->db->where('building_id', $id);
        return $this->db->get('admin_building')->result();
    }
    
    // ----------------------------------------------------------------------

    public function update($primary_value, $input)
    {
        $to_update = array(
            'name' => $input['name'],
            'city_id' => $input['city_id'],
            'slug' => $this->_check_slug(underscore($input['name']))
        );

        $this->db->where('id', $primary_value);
        $this->db->update($this->_table, $to_update);

        $building_id = $primary_value;
        $this->db->where('building_id', $primary_value);
        $this->db->delete('admin_building');
        foreach ($input['admin'] as $value)
        {
            $to_insert = array(
                'user_id' => $value,
                'building_id' => $building_id
            );
            $this->db->insert('admin_building', $to_insert);
        }
        return true;
    }

}