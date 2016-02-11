<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Band extends DataMapper {

    public $model = 'band';
    public $table = 'bands';

    public $has_one = array(
        'musical_gender' => array('auto_populate' => true),
        'stage',
        'user'
    );
    
    public $has_many = array(
        'bands_instrument' => array(
            'auto_populate' => true
        )
    );
    
    public $validation = array(
        'name' => array(
            'label' => 'Nombre',
            'rules' => array('required', 'unique')
        ),
        'city' => array(
            'label' => 'Ciudad',
            'rules' => array('required')
        ),
        'musical_gender_id' => array(
            'label' => 'Género músical',
            'rules' => array('required_select')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // ----------------------------------------------------------------------
    
    public function get_all_current_user() {
        $user = new \User;
        $user->get_current();
        
        $this->clear();
        
        $this->get_by_related($user);
        
        return $this;
    }

    // ----------------------------------------------------------------------
}