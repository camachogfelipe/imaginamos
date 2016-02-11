<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Text Field Type
 *
 * @package		PyroStreams
 * @author		Rigo B Castro
 * @copyright           Copyright (c) 2011 - 2013, PyroCMS
 */
class Field_number {

    public $field_type_slug = 'text';
    public $db_col_type = 'varchar';
    public $version = '1.0.0';
    public $author = array('name' => 'Rigo B Castro', 'url' => 'http://rigobcastro.com');
    public $custom_parameters = array('default_value', 'max', 'min', 'step');

    // --------------------------------------------------------------------------

    public function event()
    {
        $this->CI->type->add_css('number', 'style.css');
    }

    /**
     * Output form input
     *
     * @param	array
     * @param	array
     * @return	string
     */
    public function form_output($data)
    {
        $options['name'] = $data['form_slug'];
        $options['id'] = $data['form_slug'];
        $options['value'] = $data['value'];
        $options['type'] = 'number';

        if (isset($data['max']) and is_numeric($data['max']))
        {
            $options['max'] = $data['max'];
        }
        if (isset($data['min']) and is_numeric($data['min']))
        {
            $options['min'] = $data['min'];
        }
        if (isset($data['step']) and is_numeric($data['step']))
        {
            $options['step'] = $data['step'];
        }



        return form_input($options);
    }

    // --------------------------------------------------------------------------

    /**
     * Pre Output
     *
     * No PyroCMS tags in text input fields.
     *
     * @return string
     */
    public function pre_output($input)
    {
        $this->CI->load->helper('text');
        return escape_tags($input);
    }

}