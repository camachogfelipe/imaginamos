<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 		Rigo B Castro
 * @website		http://imaginamos.com
 * @package             PyroCMS
 * @subpackage          In Events Module
 */
class vacantes_aplicar_m extends MY_Model {

    public function __construct() {
        parent::__construct();

        $this->_table = 'vacantes_aplicar';
    }

    public function get_all() {
        $result = $this->db->get($this->_table)->result();
       /*
        $i = 0;
        foreach ($result as $value) {
            $result[$i]->is_url = $result[$i]->is_live = FALSE;

            $this->db->where('id', $value->images);
            $image = $this->db->get('files')->row();
            
            $this->db->where('id', $value->etiqueta);
            $etiqueta = $this->db->get('files')->row();
            
            $result[$i]->image = $image->filename;
            $result[$i]->etiqueta = $etiqueta->filename;
            

            if ($value->url != '')
                $result[$i]->is_url = TRUE;
            if ($value->state == 1)
                $result[$i]->is_live = TRUE;

            $i++;
        }
        */
        return $result;
    }

    // ----------------------------------------------------------------------
}
