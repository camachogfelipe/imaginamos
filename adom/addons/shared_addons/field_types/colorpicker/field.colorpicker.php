<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Field_Colorpicker {

    public $field_type_slug = 'colorpicker';
    public $db_col_type = 'varchar';
    public $version = '1.1.0';
    public $author = array('name' => 'Rigo B Castro');
    public $custom_parameters = array('default_color', 'options');
    private $ci;

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function event()
    {
        $this->ci->type->add_css('colorpicker', 'jquery.miniColors.css');
        $this->ci->type->add_js('colorpicker', 'jquery.miniColors.js');
        $this->ci->type->add_js('colorpicker', 'colorpicker.js');
    }

    public function field_setup_event($stream, $method, $field)
    {
        $this->ci->type->add_js('colorpicker', 'jquery.miniColors.js');
        $this->ci->type->add_css('colorpicker', 'jquery.miniColors.css');
    }

    public function form_output($params, $entry_id, $field)
    {
        $options['name'] = $params['form_slug'];
        $options['id'] = $params['form_slug'];
        $options['data-disabled'] = isset($field->field_data['options']['disabled']) ? $field->field_data['options']['disabled'] : false ;
        $options['data-readonly'] = isset($field->field_data['options']['readonly']) ? $field->field_data['options']['readonly'] : false ;
        $options['class'] = 'colorpicker';
        $options['value'] = $params['value'] ? $params['value'] : $field->field_data['default_color'];

        if (isset($field->field_data['options']['disable']))
        {
            if ($field->field_data['options']['disable'] == 'yes')
            {
                $options['disabled'] = 'disabled';
            }
        }

        if (isset($field->field_data['options']['readonly']))
        {
            if ($field->field_data['options']['readonly'] == 'yes')
            {
                $options['readonly'] = 'readonly';
            }
        }

        if (isset($field->field_data['options']['ishidden']))
        {
            if ($field->field_data['options']['ishidden'] == 'yes')
            {
                $out = '<input type="hidden" value="' . $params['value'] . '" name="' . $params['form_slug'] . '" id="' . $params['form_slug'] . '" class="colorpicker">';
            }
            else
            {
                $out = form_input($options);
            }
        }
        else
        {
            $out = form_input($options);
        }

        return $out;
    }

    public function pre_output($input, $data)
    {
        return $input . '<span style="margin-left:5px;padding:0 6px;background-color:' . $input . '">&nbsp;</span>';
    }

    public function pre_output_plugin($input, $params, $row_slug)
    {
        return array(
            'code' => $input
        );
    }

    // params

    public function param_default_color($value = null)
    {
        $out = form_input('default_color', $value, 'class="colorpicker"');
        $out .=
            '<script type="text/javascript">
                    $(".colorpicker").miniColors();
                </script>';
        return $out;
    }

    public function param_options($value = null)
    {
        $line_end = (defined('ADMIN_THEME')) ? '<br />' : null;
        $out = '';
        $out .= '<label class="checkbox">' . form_checkbox('options[disable]', 'yes', isset($value['disable'])) . '&nbsp;' . lang('streams.color_picker.disabled') . '</label>' . $line_end;
        $out .= '<label class="checkbox">' . form_checkbox('options[readonly]', 'yes', isset($value['readonly'])) . '&nbsp;' . lang('streams.color_picker.readonly') . '</label>' . $line_end;
        $out .= '<label class="checkbox">' . form_checkbox('options[ishidden]', 'yes', isset($value['ishidden'])) . '&nbsp;' . lang('streams.color_picker.ishidden') . '</label>';
        return $out;
    }

}