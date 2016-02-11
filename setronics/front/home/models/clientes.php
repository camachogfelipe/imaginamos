<?php

class Clientes extends DataMapper {

    public $model = 'Clientes';
    public $table = 'clientes';
    public $has_one = array();
    public $has_many = array();
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function insert($data){
        return (bool) $this->db->insert('cms_clientes',$data);
    }

}

