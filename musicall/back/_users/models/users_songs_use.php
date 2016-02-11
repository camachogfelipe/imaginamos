<?php

class Users_songs_use extends DataMapper {

    public $model = 'users_songs_use';
    public $table = 'users_songs_uses';
    public $has_one = array(
        'users_song' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();
    

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}