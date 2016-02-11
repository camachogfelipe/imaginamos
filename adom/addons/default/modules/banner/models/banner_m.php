<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 		Rigo B Castro
 * @website		http://imaginamos.com
 * @package             PyroCMS
 * @subpackage          In Events Module
 */
class Banner_m extends MY_Model {

    public function __construct() {
        parent::__construct();

        $this->_table = 'banner';
    }

    public function get_all() {
        $result = $this->db->get($this->_table)->result();
        $i = 0;
        foreach ($result as $value) {
            $result[$i]->is_url = $result[$i]->is_live = FALSE;

            $this->db->where('id', $value->images);
            $image = $this->db->get('files')->row();
            
            $this->db->where('id', $value->etiqueta);
            $etiqueta = $this->db->get('files')->row();
            
            $result[$i]->image = $image->filename;
            $result[$i]->etiqueta = $etiqueta->filename;
			$tmp = html_entity_decode($result[$i]->description, ENT_QUOTES, "UTF-8");
            $result[$i]->description = $tmp;

            if ($value->url != '')
                $result[$i]->is_url = TRUE;
            if ($value->state == 1)
                $result[$i]->is_live = TRUE;

            $i++;
        }
        return $result;
    }

    // ----------------------------------------------------------------------
}
