<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Stage extends DataMapper {

    public $model = 'stage';
    public $table = 'stages';

    public $has_one = array();
    
    public $has_many = array(
        'band'
    );
    
    public $validation = array(
        'name' => array(
            'label' => 'Nombre',
            'rules' => array('required', 'unique')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // ----------------------------------------------------------------------
}