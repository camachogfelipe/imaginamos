<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class noticia_relacionada extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $parrafo_id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    public $table = 'noticia_relacionada';

    public $model = 'noticia_relacionada';
    public $primarykey = 'id';
    public $fields = array('id','parrafo_id','imagen_id');

    public $has_one =  array(
                'parrafo' => array(
                  'class' => 'parrafo',
                  'other_field' => 'noticia_relacionada',
                  'join_other_as' => 'parrafo',
                  'join_self_as' => 'noticia_relacionada',
                  'join_table' => 'cms_parrafo',
                ),

                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'noticia_relacionada',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'noticia_relacionada',
                  'join_table' => 'cms_imagen',
                )
            );



    public $has_many =  array(
                'caso_exito' => array(
                  'class' => 'caso_exito',
                  'other_field' => 'noticia_relacionada',
                  'join_other_as' => 'caso_exito',
                  'join_self_as' => 'noticia_relacionada',
                  'join_table' => 'cms_caso_exito_noticia_relacionada',
                ),

                'gestion_flota' => array(
                  'class' => 'gestion_flota',
                  'other_field' => 'noticia_relacionada',
                  'join_other_as' => 'gestion_flota',
                  'join_self_as' => 'noticia_relacionada',
                  'join_table' => 'cms_gestion_flota_noticia_relacionada',
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

                'parrafo_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PARRAFO',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                )
            );


}