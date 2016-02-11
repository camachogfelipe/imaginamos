<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Office Field Type
 *
 * @package		PyroCMS\Core\Modules\Streams Core\Field Types
 * @author		Eduard  Russy
 * @copyright           Copyright (c) 2013, Eduard  Russy
 */
class Field_office {

    public $field_type_slug = 'office';
    public $db_col_type = 'int';
    public $version = '1.0.0';
    public $author = array('name' => 'Eduard  Russy', 'url' => 'http://eduardrussy.com');
    public $custom_parameters = array(
        'building_name'
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
    public function form_output($params, $entry_id, $field) {
        if (empty($entry_id)) {
            if (!empty($this->CI->ion_auth->get_user()->id)) {
                $entry_id = $this->CI->ion_auth->get_user()->id;
            }
        }
        $this->CI->type->add_js('office', 'office.js');

        $out = form_dropdown($params['form_slug'] , array(), null, 'id="' . $params['form_slug'] . '" data-fieldtype="office" data-building-name="' . $params['custom']['building_name'] . '" data-value="' . (!empty($params['value']) ? $params['value'] : null) . '" data-user-id="' . $entry_id . '"');
        return $out;
    }

    // --------------------------------------------------------------------------

    /**
     * Process before outputting
     *
     * @access	public
     * @param	array
     * @return	string
     */
    public function pre_output($input, $data) {
        return true;
    }

    // --------------------------------------------------------------------------

    /**
     * Pre-save
     */
    public function pre_save($input, $stream, $params, $user_id) {

        if (!empty($user_id)) {
            $this->CI->db->where(array(
                'user_id' => $user_id
            ))->delete('offices_users');
        }

        if (!empty($input)) {
            foreach ($input as $value) {
                $to_insert = array(
                    'user_id' => $user_id,
                    'office_id' => $value
                );
                $this->CI->db->insert('offices_users', $to_insert);
            }
        }
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
    public function pre_output_plugin($input, $params) {
        $options = $this->_choices_to_array($params['choice_data'], $params['choice_type'], 'no', false);

        // Checkboxes
        if ($params['choice_type'] == 'checkboxes' || $params['choice_type'] == 'multiselect') {
            $this->plugin_return = 'array';

            $values = explode("\n", $input);

            $return = array();

            foreach ($values as $k => $v) {
                if (isset($options[$v])) {
                    $return[$k]['value'] = $options[$v];
                    $return[$k]['value.key'] = $v; // legacy
                    $return[$k]['key'] = $v;
                } else {
                    // We don't want undefined values
                    unset($values[$k]);
                }
            }

            return $return;
        }

        $this->plugin_return = 'merge';

        if (isset($options[$input]) and $input != '') {
            $choices['key'] = $input;
            $choices['val'] = $options[$input]; // legacy
            $choices['value'] = $options[$input];

            return $choices;
        } else {
            return null;
        }
    }

    // --------------------------------------------------------------------------

    /**
     * Data for choice. In x : X format or just X format
     *
     * @access	public
     * @param	[string - value]
     * @return	string
     */
    public function param_building_name($value = null) {

        return form_input(array(
                    'name' => 'building_name',
                    'value' => !empty($value) ? $value : 'building',
                    'type' => 'text'
                ));
    }

    // --------------------------------------------------------------------------

    public function ajax_get_all_by_building() {
        $building_id = $this->CI->input->post('building_id');
        $user_id = $this->CI->input->post('user_id');
        $return = array();
        $offices_users_ids = array();

        $offices = $this->CI->db->get_where('offices', array(
                    'building_id' => $building_id
                ))->result();

        if (!empty($user_id)) {
            $offices_users = $this->CI->db->select('office_id')->get_where('offices_users', array(
                        'user_id' => $user_id,
                    ))->result();

            if (!empty($offices_users)) {

                foreach ($offices_users as $ou) {
                    $offices_users_ids[] = $ou->office_id;
                }
            }
        }

        if (!empty($offices)) {
            foreach ($offices as $office) {
                $office->selected = in_array($office->id, $offices_users_ids);
                $return[] = $office;
            }
        }

        exit(json_encode($return));
    }

}