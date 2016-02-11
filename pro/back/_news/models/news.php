<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class News extends DataMapper {

    public $model = 'news';
    public $table = 'news';

    public $has_one = array();
    
    public $has_many = array(
        'news_image' => array(
            'auto_populate' => true
        )
    );
    
    public $validation = array(
        'title' => array(
            'label' => 'Título',
            'rules' => array('required', 'unique')
        ),
        'content' => array(
            'label' => 'Contenido',
            'rules' => array('required')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // ----------------------------------------------------------------------
}