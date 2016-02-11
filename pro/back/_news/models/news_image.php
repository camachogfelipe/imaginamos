<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class News_image extends DataMapper {

    public $model = 'news_image';
    public $table = 'news_images';
    
    public $has_one = array(
        'news' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
}