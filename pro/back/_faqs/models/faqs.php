<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Faqs extends DataMapper {

    public $model = 'faqs';
    public $table = 'faqs';
    
    public $has_one = array();
    public $has_many = array(
        'faqs' => array(
            'auto_populate' => true
        )
    );
    
    public $validation = array(
        'titulo_faq' => array(
            'label' => 'Pregunta',
            'rules' => array('required','unique')
        ),
        'respuesta_faq' => array(
            'label' => 'Respuesta',
            'rules' => array('required')
        ),
        'activo' => array(
            'label' => 'Activo',
            'rules' => array('required')
        )   
        
        
    );
    
    public $default_order_by = array('id' => 'ASC');

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------
    
    public function count_anuncios() {
       if(!$this->exists()){
           return false;
       }
       
       $datos = $this->faqs;
       
       
       //$datos->where('active', true);
       
       return $datos->count();
    }

    // ----------------------------------------------------------------------
    
    public function get_active_anuncios($page = null, $page_size = 10) {
         if(!$this->exists()){
           return false;
       }
       
       $datos = $this->directorio;
       
      // $datos->where('active', true);
       
       $datos->where_related($this);
       
       if(!empty($page)){
           return $datos->get_paged($page, $page_size);
       }
       
       return $datos->get();
    }

    // ----------------------------------------------------------------------
  

    public function get_for_select($text = 'Seleccione la categoria') {
        $return = array(0 => $text);

        $datos = clone $this;

        $datos->get();

        foreach ($datos->all as $dato) {
            $return[$dato->id] = $dato->titulo_faq;
        }

        return $return;
    }

    // ----------------------------------------------------------------------
}