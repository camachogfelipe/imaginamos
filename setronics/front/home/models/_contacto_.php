<?php

class nContacto extends DataMapper {

    public $model = 'Contacto';
    public $table = 'contacto';
    public $has_one = array();
    public $has_many = array();

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_datos_contact() {
        $model = clone $this;
        $model->get();
        $data_con = array();
        foreach ($model as $k) {
            $data_con [] = array(
                'nombre_dato' => $k->nombre_dato,
                'info_dato' => $k->info_dato,
            );
        }
        return $data_con;
    }

}

