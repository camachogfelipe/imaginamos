<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Country Field Type
 *
 * @package		PyroCMS\Core\Modules\Streams Core\Field Types
 * @author		Rigo B Castro
 * @copyright	Copyright (c) 2011 - 2013, Rigo B Castro
 */
class Field_building_entity {

    public $field_type_slug = 'building_entity';
    public $db_col_type = 'int';
    public $version = '1.0.0';
    public $author = array('name' => 'Rigo B Castro', 'url' => 'http://imaginamos.com');
    public $custom_parameters = array('city_field_name');

    // --------------------------------------------------------------------------

    /**
     * Output form input
     *
     * @param	array
     * @param	array
     * @return	string
     */
    public function form_output($data, $entry_id, $field)
    {
        $choices = array();
        $city_field_name = !empty($data['custom']['city_field_name']) ? $data['custom']['city_field_name'] : null;
        $obj = $this->CI->db->get('buildings');


        if (empty($city_field_name))
        {
            // If this is not required, then
            // let's allow a null option
            if ($field->is_required == 'no')
            {
                $choices[null] = $this->CI->config->item('dropdown_choose_null');
            }

            foreach ($obj->result() as $row)
            {
                // Need to replace with title column
                $choices[$row->id] = $row->name;
            }
        }
        else
        {
            $this->CI->type->add_js('building_entity', 'building_entity.js');
        }

        // Output the form input
        return form_dropdown($data['form_slug'], $choices, !empty($city_field_name) ? $data['value'] : null, 'id="' . rand_string(10) . '" data-fieldtype="building-entity" data-city-name="' . $city_field_name . '" data-value="' . $data['value'] . '"');
    }

    // --------------------------------------------------------------------------

    /**
     * Output form input
     *
     * @param	array
     * @param	array
     * @return	string
     */
    public function pre_output($input, $data)
    {
        if (!$input)
            return $this->CI->config->item('dropdown_choose_null');

        if (!$this->CI->db->table_exists('buildings'))
        {
            return null;
        }

        // -------------------------------------
        // Get the entry
        // -------------------------------------

        $row = $this->CI->db
            ->select()
            ->where('id', $input)
            ->get('buildings')
            ->row_array();

        if ($this->CI->uri->segment(1) == 'admin')
        {
            return '<a href="' . site_url('admin/entities/buildings/edit/' . $row['id']) . '">' . $row['name'] . '</a>';
        }
        else
        {
            return $row;
        }
    }

    // --------------------------------------------------------------------------

    /**
     * Output form input
     *
     * @param	array
     * @param	array
     * @return	string
     */
    public function pre_output_plugin($input, $params)
    {
        if (!$input)
            return $this->CI->config->item('dropdown_choose_null');

        $row = $this->CI->db
            ->select()
            ->where('id', $input)
            ->get('buildings')
            ->row_array();

        return $row;
    }

    // --------------------------------------------------------------------------

    public function param_city_field_name($value = null)
    {
        return array(
            'input' => form_input(array(
                'name' => 'city_field_name',
                'value' => !empty($value) ? $value : null,
                'type' => 'text'
            )),
            'instructions' => $this->CI->lang->line('streams:building_entity.city_field_name_intructions')
        );
    }

    // --------------------------------------------------------------------------

    public function ajax_get_all_by_city()
    {
        $city_id = $this->CI->input->post('city_id');
        $return = array();

        $data = $this->CI->db->get_where('buildings', array(
                'city_id' => $city_id
            ))->result();

        if (!empty($data))
        {
            foreach ($data as $item)
            {
                $return[$item->id] = $item->name;
            }
        }

        exit(json_encode($return));
    }

}