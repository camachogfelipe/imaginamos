<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class parrafo extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 2000.
     */
    public $titulo;

    /**
     * @var text
     */
    public $texto;

    public $table = 'parrafo';

    public $model = 'parrafo';
    public $primarykey = 'id';
    public $fields = array('id','titulo','texto');

    public $has_one = array();
    public $has_many =  array(
                'nosotros' => array(
                  'class' => 'nosotros',
                  'other_field' => 'parrafo',
                  'join_other_as' => 'nosotros',
                  'join_self_as' => 'parrafo',
                  'join_table' => 'cms_nosotros',
                ),
        
                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'parrafo',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'parrafo',
                  'join_table' => 'cms_noticia_relacionada',
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
                  'rules' => array( 'max_length' => 2000, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TEXTO',
                )
            );


}