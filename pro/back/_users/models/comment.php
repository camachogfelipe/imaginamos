<?php

class Comment extends DataMapper {

    public $model = 'comment';
    public $table = 'comments';
    public $has_one = array();
    public $has_many = array(
        'user' => array(
            'join_table' => 'users_comments'
        )
    );
    public $validation = array(
        'comentario' => array(
            'label' => 'Comentario',
            'rules' => array('required', 'trim', 'xss_clean')
        ),
        'sonido' => array(
            'label' => 'Sonido',
            'rules' => array('required', 'is_numeric', 'intval')
        ),
        'presentacion' => array(
            'label' => 'Presentación',
            'rules' => array('required', 'is_numeric', 'intval')
        ),
        'profesionalismo' => array(
            'label' => 'Profesionalismo',
            'rules' => array('required', 'is_numeric', 'intval')
        ),
        'actitud' => array(
            'label' => 'Actitud',
            'rules' => array('required', 'is_numeric', 'intval')
        )
    );
    
    public $default_order_by = array('created_on' => 'DESC');

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
}