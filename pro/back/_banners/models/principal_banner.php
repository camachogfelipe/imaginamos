<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Principal_banner extends DataMapper {

    public $model = 'principal_banner';
    public $table = 'principal_banners';

    public $has_one = array();
    public $has_many = array();
    
    public $validation = array(
        'image' => array(
            'label' => 'Título',
            'rules' => array('required')
        )
    );
    
    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // ----------------------------------------------------------------------
}