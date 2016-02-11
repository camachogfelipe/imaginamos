<?php

class Soundcloud_song extends DataMapper {

    public $model = 'soundcloud_song';
    public $table = 'soundcloud_songs';
    public $has_one = array();
    public $has_many = array(
        'notification' => array(
            'join_table' => 'notifications_soundcloud_songs',
            'auto_populate' => true
        )
    );
    public $validation = array(
        'url' => array(
            'label' => 'URL',
            'rules' => array('required')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function get_iframe($cache = true) {
        if (!$this->exists()) {
            return false;
        }
        
        $ci =& get_instance();
        $ci->load->library('oembed', array('type' => 'json', 'cache' => $cache));
        
        $oembed = new Oembed();
        
        $data = $oembed->call('soundcloud', $this->url . '&show_comments=false');
        
        if(empty($data)){
            return 'Error al cargar el contenido de la URL: '.$this->url;
        }
        
        
        return $data->html;
        
    }

    // ----------------------------------------------------------------------
}