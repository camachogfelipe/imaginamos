<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 		Rigo B Castro
 * @website		http://imaginamos.com
 * @package             PyroCMS
 * @subpackage          In Events Module
 */
class Aislados_m extends MY_Model {

    public function __construct() {
        parent::__construct();

        $this->_table = 'aislados';
    }

    public function get_all() {
        $result = $this->db->get($this->_table)->result();
        $i = 0;
        foreach ($result as $value) {
           
            $this->db->where('id', $value->etiqueta_img);
            $eimage = $this->db->get('files')->row();
            $result[$i]->eimage = $eimage->filename;
            
            $this->db->where('id', $value->chat_img);
            $cimage = $this->db->get('files')->row();
            $result[$i]->cimage = $cimage->filename;

            $i++;
        }
        return $result;
    }
	
	  public function get_chat_img() {
          $result = $this->db->get($this->_table)->result();
         foreach ($result as $value) {
              $d = $this->db->where('id', $value->chat_img)->get('files')->row();
			  $cimage = $d->filename;
         }
        return $cimage;
    }


    // ----------------------------------------------------------------------
}
