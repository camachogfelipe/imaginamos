<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams City Field Type
 *
 * @package		PyroCMS\Core\Modules\Streams Core\Field Types
 * @author		Rigo B Castro
 * @copyright           Copyright (c) 2013, Rigo B Castro
 */
class Field_city {

    public $field_type_slug = 'city';
    public $db_col_type = 'int';
    public $version = '1.0.0';
    public $author = array('name' => 'Rigo B Castro', 'url' => 'http://rigobcastro.com');
    public $custom_parameters = array(
        'country_name'
    );
    public $plugin_return = 'merge';

    // --------------------------------------------------------------------------

    /**
     * Output form input
     *
     * @param	array
     * @param	array
     * @return	string
     */
    public function form_output($params, $entry_id, $field)
    {
        $choices = array();
        
      

        $this->CI->type->add_js('city', 'city.js');


        return form_dropdown($params['form_slug'], $choices, null, 'id="' . $params['form_slug'] . '" data-fieldtype="city" data-country-name="' . $params['custom']['country_name'] . '" data-value="' . (!empty($params['value']) ? $params['value'] : null) . '"');
    }

    // --------------------------------------------------------------------------

    /**
     * Process before outputting
     *
     * @access	public
     * @param	array
     * @return	string
     */
    public function pre_output($input, $data)
    {
        return true;
    }

    // --------------------------------------------------------------------------

    /**
     * Pre-save
     */
    public function pre_save($input)
    {
        return $input;
    }

    // --------------------------------------------------------------------------

    /**
     * Breaks up the items into key/val for template use
     *
     * @access	public
     * @access	public
     * @param	string
     * @param	string
     * @param	array
     * @return	array
     */
    public function pre_output_plugin($input, $params)
    {
        return $this->CI->db->get_where('cities', array('id' => $input))->row();
    }

    // --------------------------------------------------------------------------

    /**
     * Data for choice. In x : X format or just X format
     *
     * @access	public
     * @param	[string - value]
     * @return	string
     */
    public function param_country_name($value = null)
    {

        return form_input(array(
            'name' => 'country_name',
            'value' => !empty($value) ? $value : 'country',
            'type' => 'text'
        ));
    }

    // --------------------------------------------------------------------------

    public function ajax_get_all_by_country()
    {
        $country_id = $this->CI->input->post('country_id');
        $return = array();

        $cities = $this->CI->db->get_where('cities', array(
                'country_id' => $country_id
            ))->result();

        if (!empty($cities))
        {
            foreach ($cities as $city)
            {
                $return[$city->id] = $city->name;
            }
        }

        exit(json_encode($return));
    }

}