<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Directorio extends DataMapper {

    public $model = 'directorio';
    public $table = 'directorio';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        ),
        'directorio_categoria' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'directorio_adicional' => array(
            'auto_populate' => true
        ),
        'directorio_image' => array(
            'auto_populate' => true
        )
    );
    public $validation = array(
        'directorio_categoria_id' => array(
            'label' => 'Categoría',
            'rules' => array('required_select')
        ),
        'empresa' => array(
            'label' => 'Nombre de la empresa',
            'rules' => array('required')
        ),
        'direccion' => array(
            'label' => 'Dirección',
            'rules' => array('required')
        ),
        'telefono' => array(
            'label' => 'Teléfono',
            'rules' => array('required', 'is_numeric')
        ),
        'sitio_web' => array(
            'label' => 'Sitio web',
            'rules' => array('valid_url')
        ),
        'email' => array(
            'label' => 'E-mail',
            'rules' => array('required', 'valid_email')
        ),
        'facebook' => array(
            'label' => 'Link de Facebook',
            'rules' => array('valid_url')
        ),
        'twitter' => array(
            'label' => 'Link de Twitter',
            'rules' => array('valid_url')
        ),
        'youtube' => array(
            'label' => 'Link de Youtube',
            'rules' => array('valid_url')
        ),
        'descripcion' => array(
            'label' => 'Descripción',
            'rules' => array('required', 'max_size' => 120)
        ),
        
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function create_code($length = 6) {
        $datos = clone $this;

        $code = random_string('md5', $length);

        $datos->get_by_code($code);

        if ($datos->exists()) {
            return create_code($length);
        }

        return $code;
    }

    // ----------------------------------------------------------------------
}