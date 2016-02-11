<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 5-050050
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $banners = new banner();
        $this->_data['banners'] = $banners->join_related('imagen')->get();

        $destacados = new destacado();
        $this->_data['destacados'] = $destacados->join_related('imagen')->get();
        
        $video = new video();
        $this->_data['video'] = $video->get(); 
        
        $this->_data['current_page'] = strtolower(__CLASS__);  
        
         
    }

    public function index() {
        return $this->build();
    }

  

}

?>