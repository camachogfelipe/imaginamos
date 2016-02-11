<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class caso_exito extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 43.
     */
    public $titulo;

    /**
     * @var text
     */
    public $texto;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $sublinea_id;

    public $table = 'caso_exito';

    public $model = 'caso_exito';
    public $primarykey = 'id';
    public $fields = array('id','titulo','texto','imagen_id','sublinea_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'caso_exito',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'caso_exito',
                  'join_table' => 'cms_imagen',
                ),

                'sublinea' => array(
                  'class' => 'sublinea',
                  'other_field' => 'caso_exito',
                  'join_other_as' => 'sublinea',
                  'join_self_as' => 'caso_exito',
                  'join_table' => 'cms_sublinea',
                )
            );



    public $has_many =  array(
                'noticia_relacionada' => array(
                  'class' => 'noticia_relacionada',
                  'other_field' => 'caso_exito',
                  'join_other_as' => 'noticia_relacionada',
                  'join_self_as' => 'caso_exito',
                  'join_table' => 'cms_caso_exito_noticia_relacionada',
                ),

                'cliente' => array(
                  'class' => 'cliente',
                  'other_field' => 'caso_exito',
                  'join_other_as' => 'cliente',
                  'join_self_as' => 'caso_exito',
                  'join_table' => 'cms_cliente_caso_exito',
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
                  'rules' => array( 'max_length' => 43, 'required' ),
                  'label' => 'TITULO',
                ),

                'texto' => array(
                  'rules' => array( 'required' ),
                  'label' => 'TEXTO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'sublinea_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'SUBLINEA',
                )
            );


}