<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Audicion extends DataMapper {

    public $model = 'audicion';
    public $table = 'audiciones';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'audiciones_aplicacion' => array(
            'auto_populate' => true
        )
    );
    public $validation = array(
        'titulo' => array(
            'label' => 'Título',
            'rules' => array('required')
        ),
        'ciudad' => array(
            'label' => 'Ciudad',
            'rules' => array('required')
        ),
        'contacto' => array(
            'label' => 'Contácto',
            'rules' => array('required')
        ),
        'fecha_inicio' => array(
            'label' => 'Fecha de inicio',
            'rules' => array('required')
        ),
        array(
            'field' => 'dias_publicacion',
            'label' => 'Días de publicación',
            'rules' => array('required_select')
        ),
        'introduccion' => array(
            'label' => 'Introducción',
            'rules' => array('required', 'max_length' => 120)
        ),
        'descripcion' => array(
            'label' => 'Descripción',
            'rules' => array('required', 'max_length' => 220)
        ),
        'numero_aplicaciones' => array(
            'label' => 'Número de aplicaciones',
            'rules' => array('required', 'is_natural_no_zero')
        )
    );
    
    public $default_order_by = array('created_on' => 'DESC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function only_actives() {
        $this->where('fecha_cierre >', date('Y-m-d'));
        return $this;
    }

    // ----------------------------------------------------------------------
    
    public function get_only_actives() {
        $this->only_actives();
        $this->get();
        return $this;
    }

    // ----------------------------------------------------------------------
}