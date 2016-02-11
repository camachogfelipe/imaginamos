<?php

class departamentos extends DataMapper {

    public $model = 'departamentos';
    public $table = 'departamento';
    public $has_one = array();
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_deptos() {
        $model = clone $this;
        $model->get();
        $data_dep = array();
        foreach ($model as $k) {
            $data_dep [] = array(
                'id' => $k->id,
                'nombre' => $k->nombre,
            );
        }
        return $data_dep;
    }

}

