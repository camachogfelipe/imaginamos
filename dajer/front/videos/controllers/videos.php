<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class videos extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index($per = "1") {
        $val = 6; 
        $this->load->library('pagination');
       
        //datos view
        $video_pag = new video(); 
        $video_pag->join_related('imagen')->limit(($val*$per),$val*($per-1))->get(); 
        $this->_data['videos'] = $video_pag; 
        
        //config paginator
        $this->_data['base_url'] = base_url()."videos/index/";
        $video = new video(); 
        $video->join_related('imagen')->get(); 
        $this->_data['num_pages'] = ceil($video->result_count() / 6);
        $this->_data['primero'] = $this->_data['base_url'];
        $this->_data['ultimo'] = $this->_data['base_url'].$this->_data['num_pages'];
        if($per<$this->_data['num_pages']){
          $this->_data['sig'] = $this->_data['base_url'].($per+1);
        }else{
          $this->_data['sig'] = false;
        }
         if($per>1){
           $this->_data['ant'] = $this->_data['base_url'].($per-1);
         }else{
            $this->_data['ant'] = false;  
         }
        $this->_data['cur'] = $per;

        return $this->build('videos');
    }
    
    public function info($id = "") {
        $video_pag = new video(); 
        $this->_data['video'] = $video_pag->join_related('imagen')->get_by_id($id); 
     
        
        return $this->build('video-info');
    }
    

    // ----------------------------------------------------------------------
   
}
