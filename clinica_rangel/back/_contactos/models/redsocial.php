<?php

class redsocial extends DataMapper {

    public $model = 'redsocial';
    public $table = 'redes_sociales';
    public $has_one = array();
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_datos() {
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

    public function edit_data($input) {
        $data = array(
            'link_red' => $input['value']
        );
        $this->db->where('id', $input['id']);
        if ($this->db->update('cms_redes_sociales', $data))
            return true;
        else
            return false;
    }

}

