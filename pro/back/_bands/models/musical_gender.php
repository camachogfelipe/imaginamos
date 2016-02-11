<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Musical_gender extends DataMapper {

    public $model = 'musical_gender';
    public $table = 'musical_genders';

    public $has_one = array();
    
    public $has_many = array(
        'band',
        'user' => array(
            'join_table' => 'users_musical_genders',
            'auto_populate' => true
        )
    );
    
    public $validation = array();
    
    private $genders = array(
        'Rock',
        'Afro jazz',
        'Afro',
        'Calipso',
        'Rap cristiano',
        'Cristiana contémporanea',
        'Country',
        'Cumbia',
        'Disco',
        'Freestyle',
        'Funk',
        'Góspel',
        'House',
        'Indie',
        'Jazz',
        'Latín',
        'Mariachi',
        'Metal',
        'Merengue',
        'Pop',
        'Reggae',
        'Rap',
        'Reggaetón',
        'Rumba',
        'Salsa',
        'Samba',
        'Ska',
        'Soul',
        'Tango',
        'Techno',
        'Vallenato',
    );
    
    public $default_order_by = array('name' => 'asc');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    // ----------------------------------------------------------------------
    
    public function post_model_init() {
        foreach($this->genders as $gender){
            $this->get_by_name($gender);
            if(!$this->exists()){
                $this->name = $gender;
                $this->var = underscore_special($gender);
                $this->save();
            }
            $this->clear();
        }
    }

    // ----------------------------------------------------------------------
    
    public function get_for_select($text = 'Género musical') {
        $return = array(0 => $text);
        
        $datos = clone $this;
        
        $datos->get();
        
        foreach($datos->all as $genero){
            $return[$genero->id] = $genero->name;
        }
        
        return $return;
    }

    // ----------------------------------------------------------------------
    
    public function get_all_from_user($user) {
        $return = array();
        
        if(empty($user) OR !$user->exists()){
            return false;
        }
        
        $this->get_by_related($user);
        
        if($this->exists()){
            foreach($this as $dato){
                array_push($return, $dato->id);
            }
        }
        
        $this->clear();
        
        return $return;
        
    }

    // ----------------------------------------------------------------------
}