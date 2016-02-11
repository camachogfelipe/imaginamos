<?php

class Redes extends DataMapper {

    public $model = 'redes';
    public $table = 'redes_sociales';
    public $has_one = array();
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_redes() {
        $model = clone $this;
        $model->get();
        $data_net = array();
        foreach ($model as $k) {
            $data_net [] = array(
                'id' => $k->id,
                'nombre' => $k->red_social,
                'link' => $k->link_red,
            );
        }
        return $data_net;
    }	
}

