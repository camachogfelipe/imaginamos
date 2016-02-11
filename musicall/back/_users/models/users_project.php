<?php

class Users_project extends DataMapper {

    public $model = 'users_project';
    public $table = 'users_projects';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'users_projects_use' => array(
            'auto_populate' => true
        ),
        'users_projects_gender' => array(
            'auto_populate' => true
        ),
        'notification' => array(
            'join_table' => 'users_projects_notifications',
            'auto_populate' => true
        ),
        'users_song' => array(
            'join_table' => 'users_projects_songs',
            'auto_populate' => true
        )
    );
    public $validation = array(
        'name' => array(
            'label' => 'Nombre de proyecto',
            'rules' => array('required', 'trim', 'xss_clean')
        ),
        'price' => array(
            'label' => 'Presupuesto',
            'rules' => array('required', 'xss_clean')
        ),
        'reference' => array(
            'label' => 'Referencia',
            'rules' => array( 'trim', 'xss_clean')
        ),
        'description' => array(
            'label' => '¿Algo más qué debamos saber sobre tu proyecto?',
            'rules' => array('trim', 'xss_clean')
        )
    );
    public $default_order_by = array('created_on' => 'DESC');

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function post_model_init() {
        $this->where_in('code', array(null, ''))->get();

        if ($this->exists()) {
            foreach ($this as $dato) {
                $dato->code = random_string('md5', 6);
                $dato->save();
            }
        }

        $this->clear();
    }

    // ----------------------------------------------------------------------
}