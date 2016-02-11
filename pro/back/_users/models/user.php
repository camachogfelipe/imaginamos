<?php

class User extends DataMapper {

    public $model = 'user';
    public $table = 'users';
    public $has_one = array();
    public $has_many = array(
        'group' => array(
            'join_table' => 'users_groups',
            'auto_populate' => true
        ),
        'users_personal_info' => array(
            'auto_populate' => true
        ),
        'users_image' => array(
            'auto_populate' => true
        ),
        'users_song' => array(
            'auto_populate' => true
        ),
        'users_video' => array(
            'auto_populate' => true
        ),
        'users_photo' => array(
            'auto_populate' => true
        ),
        'users_show' => array(
            'auto_populate' => true
        ),
        // ------
        'directorio',
        'audicion',
        'clasificado',
        // Aplicaciones de recursos
        'audiciones_aplicacion' => array(
            'join_table' => 'users_audiciones_aplicaciones',
            'auto_populate' => true
        ),
        'clasificados_aplicacion' => array(
            'join_table' => 'users_clasificados_aplicaciones',
            'auto_populate' => true
        ),
        'comment' => array(
            'join_table' => 'users_comments',
            'auto_populate' => true
        ),
        'group' => array(
            'join_table' => 'users_groups'
        ),
        'band' => array(
            'auto_populate' => true
        ),
        'bands_instruments_user' => array(
            'auto_populate' => true
        ),
        'talent' => array(
            'join_table' => 'users_talents',
            'auto_populate' => true
        ),
        'musical_gender' => array(
            'join_table' => 'users_musical_genders',
            'auto_populate' => true
        )
    );
    public $validation = array(
        'username' => array(
            'label' => 'Nombre de usuario',
            'rules' => array('required', 'unique')
        ),
        'first_name' => array(
            'label' => 'Nombre',
            'rules' => array('required')
        ),
        'last_name' => array(
            'rules' => array('required'),
            'label' => 'Apellido'
        ),
        'email' => array(
            'rules' => array('required', 'valid_email', 'unique'),
            'label' => 'Email'
        ),
        'phone' => array(
            'rules' => array('required', 'is_numeric'),
            'label' => 'Teléfono'
        ),
        'inshaka_url' => array(
            'rules' => array('required', 'unique'),
            'label' => 'Dirección INSHAKA'
        ),
        'birthday' => array(
            'rules' => array('required'),
            'label' => 'Fecha de nacimiento'
        ),
        'gender' => array(
            'label' => 'Sexo'
        ),
        'city' => array(
            'rules' => array('required'),
            'label' => 'Ciudad'
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
    public function is_owner() {
        if(!$this->exists()){
            return false;
        }
        
        $ci =& get_instance();
        
        return (bool) (int) $this->id === (int) $ci->session->userdata('user_id');
    }

    // ----------------------------------------------------------------------

    
    public function get_current() {
        $ci = & get_instance();
        $user_id = $ci->ion_auth->user_id();

        return $this->get_by_id($user_id);
    }

    // ----------------------------------------------------------------------

    public function get_rating() {
        if (!$this->exists()) {
            return false;
        }

        $comments = new \Comment;

        $comments
                ->select('( (AVG(`sonido`) +  AVG(`actitud`) +  AVG(`presentacion`) + AVG(`profesionalismo`) ) / 4) as "ratings"', true)
                ->get_by_related($this);


        $ratings = number_format($comments->ratings, 1);

        return $ratings;
    }

    // ----------------------------------------------------------------------
    
    public function get_instruments_on_band($band_id) {
        $bands_instruments_user = new Bands_instruments_user;
        return $bands_instruments_user->where_related_bands_instrument('band_id', $band_id)->get_by_user_id($this->id);
        
    }

    // ----------------------------------------------------------------------

   
}