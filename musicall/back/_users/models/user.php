<?php

class User extends DataMapper {

    public $model = 'user';
    public $table = 'users';
    public $has_one = array();
    public $has_many = array(
        'group' => array(
            'join_table' => 'users_groups'
        ),
        'notification' => array(
            'join_table' => 'users_read_notifications',
            'auto_populate' => true
        ),
        'users_representation' => array(
            'auto_populate' => true
        ),
        'users_song' => array(
            'auto_populate' => true
        ),
        'users_project' => array(
            'auto_populate' => true
        ),
        'users_member' => array(
            'auto_populate' => true
        )
        
    );
    public $validation = array(
        'full_name' => array(
            'label' => '¿Cuál es tu nombre?',
            'rules' => array('required')
        ),
        'email' => array(
            'label' => 'Email',
            'rules' => array('required', 'unique', 'valid_email')
        ),
        'about_you' => array(
            'label' => '¿Qué haces?',
            'rules' => array('required_select')
        ),
        'mobile_phone' => array(
            'label' => 'Celular',
            'rules' => array('is_numeric', 'min_lenght' => 7)
        ),
        'company_name' => array(
            'label' => 'Nombre de empresa o proyecto',
            'rules' => array()
        ),
        'password' => array(
            'label' => 'Contraseña',
            'rules' => array('required')
        ),
        'city' => array(
            'label' => 'Ciudad',
            'rules' => array('required', 'xss_clean')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function _required_terms($field) {
        if (!empty($this->{$field})) {
            return TRUE;
        }
     
        return 'Acepte los <strong>Términos y condiciones</strong> para registarse.';
    }

    // ----------------------------------------------------------------------

    public function get_current() {
        $ci = & get_instance();
        $user_id = $ci->ion_auth->user_id();

        return $this->get_by_id($user_id);
    }

    // ----------------------------------------------------------------------
}