<?php

class Content extends DataMapper {

    public $model = 'content';
    public $table = 'contents';
    public $has_one = array();
    public $has_many = array();
    public $validation = array(
        'content' => array(
            'label' => 'Contenido',
            'rules' => array('trim')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    
}