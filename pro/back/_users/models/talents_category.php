<?php

class Talents_category extends DataMapper {

    public $model = 'talents_category';
    public $table = 'talents_categories';
    
    public $has_one = array();
    public $has_many = array(
        'talent' => array(
            'auto_populate' => true
        )
    );
    
    public $validation = array();
    

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
}