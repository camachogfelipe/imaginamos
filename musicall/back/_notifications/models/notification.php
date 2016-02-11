<?php

class Notification extends DataMapper {

    public $model = 'notification';
    public $table = 'notifications';
    public $has_one = array('notifications_type' => array('auto_populate' => true));
    public $has_many = array(
        'users_song' => array(
            'join_table' => 'notifications_users_songs',
            'auto_populate' => true
        ),
        'soundcloud_song' => array(
            'join_table' => 'notifications_soundcloud_songs',
            'auto_populate' => true
        ),
        'users_project' => array(
            'join_table' => 'users_projects_notifications',
            'auto_populate' => true
        ),
        'user' => array(
            'join_table' => 'users_read_notifications',
            'auto_populate' => true
        )
    );
    public $validation = array(
        'project_name' => array(
            'label' => 'Nombre',
            'rules' => array('required', 'max_length' => 100)
        ),
        'budget' => array(
            'label' => 'Presupuesto',
            'rules' => array('required')
        ),
        'description' => array(
            'label' => 'Descripcion',
            'rules' => array('required')
        )
    );
    public $default_order_by = array('created_on' => 'DESC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function is_read() {
        $ci = & get_instance();
        $user_id = (int) $ci->session->userdata('user_id');

        if (!$this->exists() OR empty($user_id)) {
            return false;
        }
        $this->get_by_related_user('id', $user_id);

        return (bool) $this->exists();
    }

    // ----------------------------------------------------------------------
}
