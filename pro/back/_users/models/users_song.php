<?php

class Users_song extends DataMapper {

    public $model = 'users_song';
    public $table = 'users_songs';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array(
        'url' => array(
            'label' => 'URL de la canción',
            'rules' => array('required', 'valid_url')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function get_songs_urls() {
        if (!$this->exists()) {
            return false;
        }
        $return = array();

        foreach ($this as $dato) {
            array_push($return, $dato->url);
        }

        return $return;
    }

    // ----------------------------------------------------------------------
}