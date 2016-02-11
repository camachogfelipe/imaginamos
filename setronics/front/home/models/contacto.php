<?php

class contacto extends DataMapper {

    public $model = 'contacto';
    public $table = 'contacto';
    public $has_one = array();
    public $has_many = array();
    public $validation = array();


    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_datos() {
        $model = clone $this;
        $model->get_by_id(1);
        $data_net = array();
        foreach ($this->fields as $key) {
            if($key != 'id')
            $data_net [$key] =  $model->{$key}; 
        }
        return $data_net;
    }

 

}

