<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Concierto extends DataMapper {

    public $model = 'concierto';
    public $table = 'conciertos';

    public $has_one = array(
        'user'
    );
    
    public $has_many = array();
    
    public $validation = array(
        'fecha_hora' => array(
            'label' => 'Fecha',
            'rules' => array('required')
        ),
        'ciudad' => array(
            'label' => 'Ciudad',
            'rules' => array('required')
        ),
        'genero_musical' => array(
            'label' => 'Genero musical',
            'rules' => array('required')
        ),
        'tipo_concierto' => array(
            'label' => 'Tipo',
            'rules' => array('required')
        ),
        'aire_libre' => array(
            'label' => 'Aire libre',
            'rules' => array('required')
        ),
        'gratuito' => array(
            'label' => 'Gratuito',
            'rules' => array('required')
        ),
        'boleteria' => array(
            'label' => 'Boleteria',
            'rules' => array('required')
        ),
        'presupuesto_general' => array(
            'label' => 'Presupuesto general',
            'rules' => array('required','integer')
        ),
        'numero_bandas' => array(
            'label' => 'Numero de bandas',
            'rules' => array('required')
        ),
        'nombre_concierto' => array(
            'label' => 'Nombre del concierto',
            'rules' => array('required')
        ),
        'capacidad_estimada' => array(
            'label' => 'Capacidad estimada',
            'rules' => array('required')
        ),
        'caracteristicas' => array(
            'label' => 'Caracteristicas generales de produccción',
            'rules' => array('required')
        ),
        'otros' => array(
            'label' => 'Otros',
            'rules' => array('required')
        ),
        'presupuesto_concierto' => array(
            'label' => 'Presupuesto general de produccción',
            'rules' => array('required','integer')
        ),
        'caracteristicas_promocion' => array(
            'label' => 'Caracteristicas de la promoción',
            'rules' => array('required')
        ),
        'presupuesto_promocion' => array(
            'label' => 'Presupuesto caracteristicas de promoción',
            'rules' => array('required','integer')
        ),
        'promocion' => array(
            'label' => 'Quien quieres que se encargue de la promoción',
            'rules' => array('required')
        )
        
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    
}