<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class linea extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 150.
     */
    public $titulo;

    /**
     * @var varchar Max length is 645.
     */
    public $descripcion;

    /**
     * @var varchar Max length is 30.
     */
    public $color;

    public $table = 'linea';

    public $model = 'linea';
    public $primarykey = 'id';
    public $fields = array('id','titulo','descripcion','color');

    public $has_one = array();
    public $has_many =  array(
                'barner_der_down' => array(
                  'class' => 'barner_der_down',
                  'other_field' => 'linea',
                  'join_other_as' => 'barner_der_down',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_barner_der_down',
                ),

                'barner_der_up' => array(
                  'class' => 'barner_der_up',
                  'other_field' => 'linea',
                  'join_other_as' => 'barner_der_up',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_barner_der_up',
                ),

                'barner_izq' => array(
                  'class' => 'barner_izq',
                  'other_field' => 'linea',
                  'join_other_as' => 'barner_izq',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_barner_izq',
                ),

                'categoria' => array(
                  'class' => 'categoria',
                  'other_field' => 'linea',
                  'join_other_as' => 'categoria',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_categoria',
                ),

                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'linea',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_gestion_flota',
                ),

                'sublinea' => array(
                  'class' => 'sublinea',
                  'other_field' => 'linea',
                  'join_other_as' => 'sublinea',
                  'join_self_as' => 'linea',
                  'join_table' => 'cms_sublinea',
                )
            );



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'titulo' => array(
                  'rules' => array( 'max_length' => 150, 'required' ),
                  'label' => 'TITULO',
                ),

                'descripcion' => array(
                  'rules' => array( 'max_length' => 645, 'required' ),
                  'label' => 'DESCRIPCION',
                ),

                'color' => array(
                  'rules' => array( 'max_length' => 30, 'required' ),
                  'label' => 'COLOR',
                )
            );


}