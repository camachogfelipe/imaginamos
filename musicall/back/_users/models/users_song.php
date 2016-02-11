<?php

class Users_song extends DataMapper {

    public $model = 'users_song';
    public $table = 'users_songs';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'users_songs_use' => array(
            'auto_populate' => true
        ),
        'notification' => array(
            'join_table' => 'notifications_users_songs',
            'auto_populate' => true
        ),
        'users_project' => array(
            'join_table' => 'users_projects_songs',
            'auto_populate' => true
        )
    );
    public $validation = array(
        'title' => array(
            'label' => 'Titulo',
            'rules' => array('required', 'trim', 'xss_clean')
        ),
        'gender' => array(
            'label' => 'Género',
            'rules' => array('required', 'trim', 'xss_clean')
        )
    );
    public $default_order_by = array('upload_on' => 'DESC');

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