<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 		Rigo B Castro
 * @website		http://imaginamos.com
 * @package             PyroCMS
 * @subpackage          In Events Module
 */
class Estudios_m extends MY_Model {

    public function __construct() {
        parent::__construct();

        $this->_table = 'estudios';
    }

    public function get_all() {
        $result = $this->db->get($this->_table)->result();
        return $result;
    }

    // ----------------------------------------------------------------------
}
